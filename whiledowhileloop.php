<?php 
   $title = "While & Do-While Loop";
   include 'include/header.php' 

?>
<h1>While Loop</h1>
<?php
$grade = 0;
//Infinite Loop
//while($grade < 10){
    //echo '<p>I am less than 10!</p>';
//} 
while($grade < 10){
  echo '<p>I am less than 10!</p>';
  $grade++;
} 
echo 'Exit Loop';

?>
<h1>Do-While Loop</h1>
<?php
//Post Condition loop
$grade = 0; 
   do{
    echo '<p>I am Do-While loop</p>';
    $grade++;
   }while($grade < 10);
   echo 'Exit Loop';
?>
    

    <?php require 'include/footer.php' ?>