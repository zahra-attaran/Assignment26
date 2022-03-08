<?php

include "database.php";
$question_text=$_POST["questionText"];
$db->query("INSERT INTO questions(text) VALUES('$question_text')");
$question_id= $db-> insert_id;//اخرین ای دی که دادیم و میده
$true_answer_index=$_POST["true_answer"];
foreach ($_POST["answer"] as $i=>$answer){

    if ($i+1==$true_answer_index){
        $is_true=1;
    }
    else{
        $is_true=0;
    }


    $db->query("INSERT INTO answers(question_id, is_true , text) VALUES($question_id,$is_true,'$answer')");


}
?>