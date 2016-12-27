<!-- mysqli basic db conneciton -->
<?php 
	
if( $connection = mysqli_connect('localhost','root','','sit21') ){
	echo "database connection successfully"."</br>";
}else{
	echo "database connection failed"."</br>";
}

$query = mysqli_query($connection,"SELECT * FROM tbl_student WHERE id >= 4;");

while ( $data = mysqli_fetch_assoc($query) ) {
	echo "------------------------------------------"."</br>";
	echo "ID :".$data['id']."</br>";
	echo "NAME :".$data['name']."</br>";
	echo "ROLL :".$data['roll']."</br>";
	echo "Result :".$data['result']."</br>";
}

?>
<!-- using mysqli object use db conneciton -->

<?php 
$connection = new mysqli('localhost','root','','sit21');
$query = $connection->query("SELECT id,name,roll FROM tbl_student;");
while ($data = $query->fetch_assoc()) {
	echo "----------------------"."</br>";
	echo "ID :".$data['id']."</br>";
	echo "NAME :".$data['name']."</br>";
	echo "ROLL :".$data['roll']."</br>";
}




?>