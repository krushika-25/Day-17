<?php
 
   echo "The Orignal Array Is:<br>";
   $a = array("XYZ"=>"12","ABC"=>"22","JKL"=>"18");
   echo "<pre>";
   print_r($a);
   echo "Array After Sorting on Key...";
   ksort($a);
   echo"<pre>";
   print_r($a);

?>