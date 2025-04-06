<?php
include "db-conection.php";
$dn=null;
$cdn=null;
$pdn=null;
#insert rezerv
if(isset($_POST['rsubmit']))
{    
     $name = $_POST['name'];
     $lastname = $_POST['lastname'];
     $mabda = $_POST['mabda'];
     $maghsad = $_POST['maghsad'];
     $tel = $_POST['tel'];
     $passport = $_POST['passport'];

         $sql = "INSERT INTO rezerv (name,lastname,mabda,maghsad,tel,passport)
         VALUES ('$name','$lastname','$mabda','$maghsad','$tel','$passport')";
        if ($conn->query($sql) === TRUE) {
          $dn=true;
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
}

#end insert rezerv

#ticket
if(isset($_POST['csubmit']))
{    
     $email = $_POST['email'];
     $name = $_POST['name'];
     $departman = $_POST['departman'];
     $text = $_POST['text'];
     

         $sql = "INSERT INTO contact (email,name,departman,text)
         VALUES ('$email','$name','$departman','$text')";
        if ($conn->query($sql) === TRUE) {
          $cdn=true;
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
}

#end ticket


#add product
if(isset($_POST['psubmit']))
{    
    $output_dir = "upload/";
    $RandomNum   = time();
	$ImageName      = str_replace(' ','-',strtolower($_FILES['image']['name'][0]));
	$ImageType      = $_FILES['image']['type'][0];
 
	$ImageExt = substr($ImageName, strrpos($ImageName, '.'));
	$ImageExt       = str_replace('.','',$ImageExt);
	$ImageName      = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
	$NewImageName = $ImageName.'-'.$RandomNum.'.'.$ImageExt;
    $ret[$NewImageName]= $output_dir.$NewImageName;

     $title = $_POST['title'];
     $price = $_POST['price'];
     $text = $_POST['text'];
     $date = $_POST['date'];
     $status = $_POST['status'];
     $productcode = $_POST['productcode'];

     if (!file_exists($output_dir))
     {
         @mkdir($output_dir, 0777);
     }               
        move_uploaded_file($_FILES["image"]["tmp_name"][0],$output_dir."/".$NewImageName );
         $sql = "INSERT INTO product (title,price,image,text,date,status,productcode)
         VALUES ('$title','$price','$NewImageName','$text','$date','$status','$productcode')";
        if ($conn->query($sql) === TRUE) {
          $pdn=true;
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
}
#end add product


?>

