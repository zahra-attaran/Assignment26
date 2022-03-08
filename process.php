<?php
include "database.php";
session_start();

$user_choice_id= $_POST["answer"];
$q_id=$_POST["question_id"];

$currect_choice=$db->query("SELECT * FROM answers WHERE  question_id=$q_id and  is_true=1")->fetch_assoc();
$currect_choice_id=$currect_choice["id"];
if ($user_choice_id==$currect_choice_id){
    //امتیاز کاربر افزایش یابد
    $_SESSION[user_score]++;
    echo "afrin";
}
else{
    //امتیازش کم بشه اگه نمره منفی داره
    echo "eshtebah zadi";
}
//بره سوال بعدی
$q_id++;

if ($q_id==3){
    header( "location: Final.php");
}
else{
    header( "location: Question.php?x=$q_id");

}
?>