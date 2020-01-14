<?php
include_once("conf.php");

$result = mysqli_query($mysqli, "SELECT * FROM user ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepagess</title>
    <link rel="stylesheet" href="index.css">
    <link rel="icon" href="logo.png">
    <meta http-equiv="refresh" content="5">
</head>
<body>
<a href="add.html" ><button class="add">+</button></a><br/><br/>
<section>
    <h1>Data Mahasiswa</h1>
    <div class="tbl-header">
      <table cellpadding="0" cellspacing="0" border="0">
        <thead>
          <tr>
            <th style='text-align: center; width: 20px;'>No</th>
            <th style='text-align: center;'>Nama</th>
            <th style='text-align: center;'>Umur</th>
            <th style='text-align: center;'>Email</th>
            <th style='text-align: center;'>Perbarui hai</th>
          </tr>
        </thead>
      </table>
    </div>
    <div class="tbl-content">
      <table cellpadding="0" cellspacing="0" border="0">
        <tbody>      
            <?php $kontol = 1;
                while($res = mysqli_fetch_array($result)) { 
                    echo "<tr>";
                    echo "<td style='text-align: center; width: 20px;'>".$kontol++."</td>";
                    echo "<td style='text-align: center;'>".$res['name']."</td>";
                    echo "<td style='text-align: center;'>".$res['age']."</td>";
                    echo "<td style='text-align: center;'>".$res['email']."</td>";
                    echo "<td style='text-align: center;'><a href=\"edit.php?id=$res[id]\"><button class='edit'>Edit</button></a><a href=\"delete.php?id=$res[id]\" onClick=\"Konfirmasi('Yakin data akan di hapus?')\"><button class='delete'>Delete</button></a></td>"; 
                }
            ?>
        </tbody>
      </table>
    </div>
  </section>
</body>
</html>
