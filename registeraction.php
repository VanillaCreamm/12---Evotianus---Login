<?php 
	include 'koneksi.php';

	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$password2 = md5($_POST['password2']);

	if($password == $password2){
		if($submit = "Register"){
			$query = mysqli_query($conn, "INSERT INTO tbuser (username, password)
				VALUES('$username', '$password');");

			if($query) {
				echo "<script>
				alert('Register Berhasil!');
				location.href = 'index.php';
				</script>";

			}
			else{
				echo "<script>
				alert('Register Gagal!');
				location.href = 'register.php';
				</script>";
			}
		}
	}
	else{
		echo "<script>
				alert('Password Tidak Sesuai!');
				location.href = 'register.php';
				</script>";
	}
?>