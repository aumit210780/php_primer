<?php 
   $title = "Index";
   include 'include/header.php' 

?>
    <!-- Basic HTML -->
    <h1>Hello HTML - PHP Primer</h1>
    <br/>
    <?php
    //Printing to html using echo  
       echo 'Hello PHP';
       echo '<br/>';
       echo 'Second line';
       echo '<br/>';
   
 
    //declare variable
    $name = 'Aumit Hasan'; 
    $age = 21;
    //echo variable
    echo $name;
    echo '<br/>';
    echo '<h1>My name is: '.$name.'</h1>';
    echo '<h1>My age is: '.$age.'</h1>';
    echo "<h1>My name is : $name<h1>"
    
    
    ?>
    <button type="button" class="btn btn-dark">CLICK ME!</button>
    
    <?php
     require 'include/footer.php' 
    ?>