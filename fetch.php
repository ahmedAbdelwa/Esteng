<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="main.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title></title>
</head>
<body>
  <style>
  td{
   border: solid 1px #838383;
    text-align: center;
    padding: 10px;
    margin: 10px;
    border-radius: 5px;
  }
  th{
    background: #BCBCBC;
    border: solid 1px;
    
    text-align: center;
    padding: 5px;
    margin: 10px;
  }
  
</style>
<center><table>
  <tr>
    <th>الاسم رباعي</th>
   
    <th>الاسم بالغة الانجليزية</th>
   
    <th>البريد الاكتروني</th>
    
    <th>رقم هاتف الطالب</th>
    
    <th>اسم ولي الامر</th>
    
    <th>رقم هاتف ولي الامر</th>
    
    <th>مهنة ولي الامر</th>
    
    <th>الجنسية</th>
    
    <th>الولاية</th>
    
    <th>مكان الميلاد</th>
    
    <th>نوع التقديم</th>
   
    <th>نوع القبول</th>

    <th>تاريخ الميلاد</th>
    
    <th>الجنس</th>
    
    <th>img1</th>
    <th>img2</th>
    <th>img3</th>
  </tr>
<?php
include("config.php");

$ft = mysqli_query($conn,"SELECT * FROM `univer`");

while($row = mysqli_fetch_row($ft)){?>
<tr>
<td><?php echo $row['1'] ?></td>

<td><?php echo $row['2'] ?></td>

<td><?php echo $row['3'] ?></td>

<td><?php echo $row['4'] ?></td>

<td><?php echo $row['5'] ?></td>

<td><?php echo $row['6'] ?></td>

<td><?php echo $row['7'] ?></td>

<td><?php echo $row['8'] ?></td>

<td><?php echo $row['9'] ?></td>

<td><?php echo $row['10'] ?></td>

<td><?php echo $row['11'] ?></td>

<td><?php echo $row['12'] ?></td>

<td><?php echo $row['13'] ?></td>

<td><?php echo $row['14'] ?></td>

<td><img src='<?php echo $row['15'] ?>' width='100px'></td>
<td><img src='<?php echo $row['16'] ?>' width='100px'></td>
<td><img src='<?php echo $row['17'] ?>' width='100px'></td>
</tr>


<?php } ?>

</table></center>

<?php print_r($row) ?>


</body>
</html>