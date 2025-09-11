<?php
echo "
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel='stylesheet' href='CSS/style.css'>
</head>
<body>
    <header>
        <img src='images/home.jpg' alt='Home Banner'>
    </header>
    <nav>
        <a href='index.php'>Home</a>
        <a href='about.php'>About</a>
        <a href='contact.php'>Contact</a>
        <a href='signup.php'>Signup</a>
    </nav>

    <div class='section'>
        <h1>Welcome My Website</h1>

        <div class='features'>
            <div class='feature'>
                <img src='images/test.jpg' alt='Testing my knowledge'>
                <h3>Test</h3>
                <p>This is my website to showcase my work and what I have learnt so far </p>
            </div>
            <div class='feature'>
                <img src='images/echo.png' alt='Echo Statement'>
                <h3>Echo</h3>
                <p>We are learning to use echo to create a faster and easier way </p>
            </div>
            <div class='feature'>
                <img src='images/css.png' alt='CSS Knowledge'>
                <h3>CSS</h3>
                <p>We try to use CSS to the best of our knowledge:)</p>
            </div>
        </div>

        <div class='cta'>
            <p>Create your account now</p>
            <form action='signup.php'>
                <button type='submit'>Sign Up Now</button>
            </form>
        </div>
    </div>
</body>
</html>
";
?>

