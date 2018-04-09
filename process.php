<?php include 'database.php';?>
<?php session_start();?>
<?php
//Checj to see if score is set

if(!isset($_SESSION['score'])){
    $_SESSION['score']=0;
}

if(($_POST)){
    $number=$_POST['number'];
    $selected_choice=$_POST['choice'];
    $next=$number+1;

//get total question
$query="SELECT * FROM `questions`";
$result=$mysqli->query($query) or die($mysqli->error.__LINE__);
$total=$result->num_rows;

    //Get correct Choice
    $query="SELECt * FROM `choices` WHERE question_number=$number AND is_correct=1";
    //get result
    $result=$mysqli->query($query) or die($mysqli->error.__LINE__);

    //Get row
    $row=$result->fetch_assoc();
    $correct_choice=$row['id'];

    //compare
    if($correct_choice==$selected_choice){

        $_SESSION['score']++;
    }
    if($number==$total){
        header("Location:final.php");
        exit();

    }else{
        header("Location:question.php?n=".$next);

    }
}