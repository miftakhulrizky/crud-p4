<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insert</title>
    <link rel="icon" href="logo.png">
    <link rel="stylesheet" href="insert.css">
</head>
<body>
    <?php

    include_once("conf.php");
    
    if(isset($_POST['submit'])){
        // print_r($_POST);
        $name = mysqli_real_escape_string($mysqli, $_POST['name']);
        $age = mysqli_real_escape_string($mysqli, $_POST['age']);
        $email = mysqli_real_escape_string($mysqli, $_POST['email']);

        if(empty($name) || empty($age) || empty($email)){
            if(empty($name)){
                echo"<font color='red'>Nama Kosong</font><br/>";
            }
            if(empty($age)){
                echo"<font color='red'>Umur Kosong</font><br/>";
            }
            if(empty($email)){
                echo"<font color='red'>Email Kosong</font><br/>";
            }
            
            echo"<br/><a href='javascript:self.history.back();'>Go Back</a>";

        }else{
            $result=mysqli_query($mysqli, "INSERT INTO user (name,age,email) VALUES ('$name','$age','$email')");

            echo "<font class='sucess'>Data added successfully</font>";
            echo "<br/><a href='index.php'><button class='view'>View Result</button></a>";
        }
    }
    ?>
</body>
</html>