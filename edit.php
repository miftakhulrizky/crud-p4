<?php
include_once("conf.php"); 
 
if(isset($_POST['update'])){  
 
$id = mysqli_real_escape_string($mysqli, $_POST['id']);

$name = mysqli_real_escape_string($mysqli, $_POST['name']);  
$age = mysqli_real_escape_string($mysqli, $_POST['age']);  
$email = mysqli_real_escape_string($mysqli, $_POST['email']);

if(empty($name) || empty($age) || empty($email)) {        
    if(empty($name)) {    
        echo "<font color='red'>Nama Kosong.</font><br/>";
    }      
    if(empty($age)) {
        echo "<font color='red'>Usia Kosong.</font><br/>";
    }
    if(empty($email)) {
        echo "<font color='red'>Email Kosong.</font><br/>";
    }
}else{
    $result = mysqli_query($mysqli, "UPDATE user SET name='$name',age='$age',email='$email' WHERE id=$id");
    header("Location: index.php");
}
}
?>

<?php
$id = $_GET['id']; 

$result = mysqli_query($mysqli, "SELECT * FROM user WHERE id=$id"); 
 
while($res = mysqli_fetch_array($result)){
    $name = $res['name'];
    $age = $res['age'];
    $email = $res['email'];
}
?>

<html>
<head>
    <title>Edit Data</title>
    <link rel="icon" href="logo.png">
</head> 
 
<body>
    <a href="index.php">Home</a><br/><br/>
    <form name="form1" method="post" action="edit.php">

    <table border="0">
        <tr>
            <td>Name</td>
            <td><input type="text" name="name" value="<?php echo $name;?>"></td>
        </tr>
        <tr>
            <td>Age</td>
            <td><input type="text" name="age" value="<?php echo $age;?>"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="email" value="<?php echo $email;?>"></td>
        </tr> 
        <tr>
            <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
            <td><input type="submit" name="update" value="Update"></td>
        </tr>
    </table>
</form>
</body>
</html>