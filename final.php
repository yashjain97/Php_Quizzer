<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP QUIZZER</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
    <header>
        <div class="container">
            <h1>Php Quizzer</h1>
    
        </div>
    </header>
    <main>
        <div class="container">
       <h2>Youre Done!</h2>
        <p> Congrats you have copleted the text</p>
        <p> Final Score: <?php echo $_SESSION['score'];
        $_SESSION['score']=0;?></p>
        
        <a href="question.php?n=1?" class="start">Take Quiz Again</a>
        </div>
    </main>
    <footer>
        <div class="container">
        Copyright &copy;2014,PHP quizzer
        <div>
    </footer>
</body>
</html>