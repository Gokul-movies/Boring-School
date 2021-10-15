<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>

<body>
<div class='sub' style='box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);width:65%;height:250px;margin-left:10%;text-align:center;font-size:13px;padding:30px;'><h2>Subscribe To get instant Mail about new Topic</h2>

 <form method="post">
    <br>
    <input placeholder="Enter your Email ID.." class="en" type="text" name="email"><br>
    <input class="bu" type="submit" name="submit">
  <style type="text/css" media="all">
  .en{
    width: 200px;
    padding: 20px;
    border-radius: 20px;
   outline: none;
  }
  .bu{
    margin-top: 30px;
    background-color: rgba(49, 243, 245, 0.8);
    outline: none;
    background-color:red;
    color:white;
    border: none;
    width: 120px;
    height: 45px;
    border-radius: 30px;
  }
  .sub{
    margin-bottom: 50px;
  }
  </style>  
  </form>
  
</body>

</html>
<?php
if(isset($_POST['email']))
{

$myfile = fopen("email.txt", "r") or die("Unable to open file!");
$v = fread($myfile,filesize("email.txt"));

$fp = fopen('email.txt', 'a');
$data=$_POST['email'];
fwrite($fp, "$data\n");
fclose($fp);
}

?>