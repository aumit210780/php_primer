<?php 
   $title = "Arrays and Printouts";
   include 'include/header.php' 

?>
    <h1><?php echo $title ?></h1>
    <?php 
    // a variable
    $num = 3;
    // an array
    //Only one datatype
    $numbers = array(1,2,3,4,5,6,7,8,9,101,46,98,24,94,77,59,36,85,66,53,21);
    echo $numbers[5];
    echo "<p>$numbers[9]</p>";
    $size = count($numbers);
    echo "<p>Array Numbers is size: $size</p>";
    for($count = 0; $count < $size; $count++){
        echo "<p>$numbers[$count]<p>";
    }
    
    ?>

<?php require 'include/footer.php' ?>