	 <?php
	try{
	$db= new PDO('mysql:host=localhost;dbname=bookstore;charset=utf8','root','');
	
	}
	catch(Exception $e){
		
		echo "Error has Occured";
	}
	
 	 
 
 $n1=$_POST['id'];
 $n2=$_POST['title'];
 $n3=$_POST['price'];
 $n4=$_POST['synopsis'];
 $n5=$_POST['covertype'];
 $n6=$_POST['author'];
 $n7=$_POST['tags'];

	 
 $stmt=$db->prepare("UPDATE product SET title='$n2' , price=$n3, synopsis='$n4' , covertype='$n5', author='$n6', tags='$n7' where id=$n1 ");
 
 $stmt->execute();
header("location:../books.php");
exit();

?>