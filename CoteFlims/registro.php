<?php



// Recibimos por POST los datos procedentes del formulario   


$email = $_POST['EMAIL'];
$cedula = $_POST['CEDULA'];
$password =md5($_POST['PASSWORD']);


echo $email;
echo $cedula;
echo $password;







// Abrimos la conexion a la base de datos   
include ("conexion.php"); 

$sql = "INSERT INTO usuarios (correo, cedula, contraseña) VALUES ('$email', '$cedula', '$password')";
echo $sql;

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>