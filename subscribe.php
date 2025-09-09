<?php
// subscribe.php - Form page to collect mailing list sign-ups
$page_title = 'Join Us';
include 'includes/header.php';

$csvPath = __DIR__ . '/data/subscribers.csv';

// Ensure data directory exists
if (!file_exists(dirname($csvPath))) {
    mkdir(dirname($csvPath), 0755, true);
}

// Sanitize for safe output
function safe($v) { return htmlspecialchars($v ?? '', ENT_QUOTES, 'UTF-8'); }

$submitted = false;
$errors = [];
$name = $email = $pref = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $pref = $_POST['pref'] ?? 'weekly';

    // Basic validation
    if ($name === '') $errors[] = 'Name is required.';
    if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'Please provide a valid email address.';

    if (empty($errors)) {
        $row = [ $name, $email, $pref, date('c'), $_SERVER['REMOTE_ADDR'] ?? 'unknown' ];
        $fp = fopen($csvPath, 'a');
        if ($fp) {
            fputcsv($fp, $row);
            fclose($fp);
            $submitted = true;
        } else {
            $errors[] = 'Could not save your subscription (server permissions).';
        }
    }
}
?>
<article class="content">
  <h2>Join our mailing list</h2>
  <p>Sign up to receive simple recipes and tips. When you submit, we will display back the information you entered.</p>

  <?php if (!empty($errors)): ?>
    <div class="errors">
      <strong>Please fix the following:</strong>
      <ul><?php foreach ($errors as $e) echo '<li>'.safe($e).'</li>'; ?></ul>
    </div>
  <?php endif; ?>

  <?php if ($submitted): ?>
    <div class="success">
      <h3>Thanks for joining, <?php echo safe($name); ?>!</h3>
      <p>You've signed up with: <strong><?php echo safe($email); ?></strong></p>
      <p>Newsletter preference: <em><?php echo safe($pref); ?></em></p>
    </div>
    <p><a href="index.php" class="btn">Return home</a></p>
  <?php else: ?>
    <form method="post" novalidate>
      <label for="name">Name</label>
      <input id="name" name="name" type="text" value="<?php echo safe($name); ?>" required>

      <label for="email">Email</label>
      <input id="email" name="email" type="email" value="<?php echo safe($email); ?>" required>

      <label for="pref">Newsletter frequency</label>
      <select id="pref" name="pref">
        <option value="weekly"<?php echo ($pref==='weekly' ? ' selected' : ''); ?>>Weekly</option>
        <option value="biweekly"<?php echo ($pref==='biweekly' ? ' selected' : ''); ?>>Bi-weekly</option>
        <option value="monthly"<?php echo ($pref==='monthly' ? ' selected' : ''); ?>>Monthly</option>
      </select>

      <div class="form-row">
        <label><input type="checkbox" name="agree" required> I agree to receive emails (required)</label>
      </div>

      <button type="submit" class="btn">Submit</button>
    </form>
  <?php endif; ?>

</article>
<?php include 'includes/footer.php'; ?>