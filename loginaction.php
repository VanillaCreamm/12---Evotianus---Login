 <?php 
	include 'koneksi.php';

	$username = $_POST['username'];
	$password = ($_POST['password']);

	$query = mysqli_query($conn, "SELECT * FROM tblogin WHERE username = '$username' AND password = '$password'") or die("errortblogin");
	$numrows = mysqli_num_rows($query);

	if ($numrows == 0 || $numrows == null) {
		echo "<script>
				alert('Logil Gagal!');
				location.href = 'index.php';
				</script>";
	} else {
		header("location: page_change.php");
	}
?>