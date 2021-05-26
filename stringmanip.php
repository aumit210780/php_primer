<?php 
   $title = "String Manipulation";
   include 'include/header.php' 

?>
<h1>PHP String Manipulation</h1>
  <?php 
  
  //Concatenation of string
    $phrase1 = "student who came late";
    $phrase2 = "in class, stand with Rock";
    $name = "aumit hasan";
    echo $phrase1.", named Tiffany, ".$phrase2;
    echo '<br/>';
    echo '<hr/>';
    //String Transformation
   echo 'Uppercase first letter: ' .ucfirst($name).'<br/>';
   echo 'Uppercase first letter of each word: ' .ucwords($name).'<br/>';
   echo 'Upper Case: ' .strtoupper($name).'<br/>';
   echo 'Lower Case: ' .strtolower("THIS WAS ALL IN UPPERCASE").'<br/>';
   echo '<hr/>';
   echo 'Repeat string: '.str_repeat('a',10). '<br/>';
   echo 'Repeat string-nested function: '.strtoupper(str_repeat('a',10)). '<br/>';
   echo 'Get a Substring: '.substr($name,5,10).'<br/>';
   echo 'Get of position of string: '.strpos($name,'a').'<br/>';
   //Returns Null
   echo 'Find Character "u": '.strchr($name,'u').'<br/>';
   echo 'Find Character "u": '.strchr($name,'m').'<br/>';
   echo 'Find Character "u": '.strchr($name,'i').'<br/>';
   echo 'Find Character "u": '.strchr($name,'t').'<br/>';
   echo 'Find Length of String: '.strlen($name).'<br/>';
   echo 'Without Trim: '. "A" . " B C D ". "E" . '<br/>';
   echo 'Trim spaces on both sides: '. "A" . trim(" B C D ")."E". '<br/>';
   echo 'Trim spaces to the left: '. "A" . ltrim(" B C D ")."E". '<br/>';
   echo 'Trim spaces to the right: '. "A" . rtrim(" B C D ")."E". '<br/>';
   echo ' Replace string with another: '. str_replace("stand", "sit" , $phrase2) . '<br/>';


  ?>  

<?php require 'include/footer.php' ?>