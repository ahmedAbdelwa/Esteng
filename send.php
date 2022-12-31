<?php

include("config.php");

  $name = $_POST['fast_name'];
  $ennam = $_POST['enname'];
  $email = $_POST['email'];
  $s_phone = $_POST['s_phone'];
  $pr_name = $_POST['pr_name'];
  $pr_number = $_POST['pr_number'];
  $pr_jobs = $_POST['pr_jobs'];
  $countrey = $_POST['countrey'];
  $city = $_POST['city'];
  $place = $_POST['birth'];
  $ty_admission = $_POST['type_admission'];
  $admissions = $_POST['admissions'];
  $DOB = $_POST['suac_date'];
  $sex = $_POST['gender'];



  
  $img = $_FILES['image_ca']['name'];

  $tmp = $_FILES['image_ca']['tmp_name'];

  $fil = "IMO/".$img;

  $mov = move_uploaded_file($tmp,$fil);



  $img2 = $_FILES['image_ca2']['name'];

  $tmp2 = $_FILES['image_ca2']['tmp_name'];

  $fil2 = "IMO/".$img2;

  $mov = move_uploaded_file($tmp2,$fil2);



  $img3 = $_FILES['image_ca3']['name'];

  $tmp3 = $_FILES['image_ca3']['tmp_name'];

  $fil3 = "IMO/".$img3;

  $mov = move_uploaded_file($tmp3,$fil3);

  $sql = mysqli_query($conn,"INSERT INTO `univer`(`fast_name`, `en_name`, `email`, `s_phone`, `pr_name`, `pr_number`, `pr_jobs`, `countrey`, `city`, `birth`, `type_admission`, `admissions`, `suac_date`, `gender`,`img1`,`img2`,`img3`) VALUES ('$name','$ennam','$email','$s_phone','$pr_name','$pr_number','$pr_jobs','$countrey','$city','$place','$ty_admission','$admissions','$DOB','$sex','$fil','$fil2','$fil3')");



  if($sql){
   header("Location: fetch.php");
  }

  else 
  {
   echo'erorr';
  }

?>

<pre>

<?php print_r($_FILES) ?>

</pre>