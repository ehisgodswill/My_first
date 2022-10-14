<?php
    $content = '
    
Name:'.$_POST['name']."\nemail:".$_POST['email']
    ."\nDate of Birth:".$_POST['DOB']
    .'
Gender:'.$_POST["gender"]
    .'
Country: '.$_POST['country' ];
    print_r($content);
    $myfile = fopen('userdata.csv', 'a+') or die('Cannot open file');
    fwrite($myfile,$content );
    fclose($myfile);
    // $myfile = fopen('userdata.csv', 'a+') or die('Cannot open file');
    // // fwrite($myfile, 'mm');
    // echo fread($myfile, filesize('userdata.csv'));
    // fclose($myfile);
?>