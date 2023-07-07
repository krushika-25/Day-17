<?php

    $str = "Apple's Lab";
    $result = addslashes($str);
    echo $str .'<br/>';
    echo $result;
    echo '<br/>'.'<br/>'.'<br/>';

    $str1 = "Rakesh,Ramesh,Rohan,Rahul";
    $result1 = explode(',',$str1);
    echo '<pre>';
    print_r ($result1);
    echo '<br/>'.'<br/>'.'<br/>';

    $str = "Hello world. It's beautiful day.";
    print_r (explode(" ",$str));
    echo '<pre>';
    echo '<br/>'.'<br/>'.'<br/>';

    $implode = implode('',$result1);
    echo $implode;
    echo '<br/>'.'<br/>'.'<br/>';

    echo strpos("Hellooo... HI Good Morning!","HI");
    echo '<br/>'.'<br/>'.'<br/>';

    echo strlen("hellooo...");
    echo '<br/>'.'<br/>'.'<br/>';

    echo stripos("Hellooo... HI Good Morning!","HI");
    echo '<br/>'.'<br/>'.'<br/>';

    echo strrpos("Hellooo... HI Good Morning!","HI");
    echo '<br/>'.'<br/>'.'<br/>';

    $htmlentity = "&lt;H&gt;";
    htmlentities($htmlentity);
    echo $htmlentity;
    echo '<br/>'.'<br/>'.'<br/>';

    html_entity_decode($htmlentity);
    echo $htmlentity;
    echo '<br/>'.'<br/>'.'<br/>';

    $text = "THIS IS NICE TEXT";
    echo lcfirst($text);
    echo '<br/>'.'<br/>'.'<br/>';

    $text = "this is nice text";
    echo ucfirst($text);
    echo '<br/>'.'<br/>'.'<br/>';

    $psswrd = "Abc#1234";
    echo md5($psswrd);
    echo '<br/>'.'<br/>'.'<br/>';

    $text1 = "      Abc#1234@";
    echo ltrim($text1);
    echo '<br/>'.'<br/>'.'<br/>';

    $text1 = "Abc@123&nbsp; &nbsp;";
    echo rtrim($text1);
    echo '<br/>'.'<br/>'.'<br/>';

    $text1 = "      Abc@123$      ";
    echo trim($text1);
    echo '<br/>'.'<br/>'.'<br/>';

    $rtext = "Hellooo...";
    $text2 = "Good Morning";
    echo str_replace("Good",$rtext,$text2);
    echo '<br/>'.'<br/>'.'<br/>';

    $amount = 2000;
    $nformat = number_format($amount,2);
    echo $nformat;

?>