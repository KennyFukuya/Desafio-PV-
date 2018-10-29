<?php 

	// Parametros para a conexão com o BD
	$server = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "userinfo";
	 
	$login = $_POST['login'];
	$password = MD5($_POST['password']);
	$firstname = $_POST['firstname'];
	$surname = $_POST['surname'];
	$bday = $_POST['bday'];

	// Cria a conexao com o BD
	$connect = mysqli_connect($server,$dbuser,$dbpass,$dbname);

	if (!$connect) 
	{
		die("Conexão com o Database falhou: " . mysqli_connect_error());
	}

	// Seleciona o BD a ser usado
	$db_select = mysqli_select_db($connect, $dbname);
	if (!$db_select) 
	{
		die("Seleção do Database falhou: " . mysqli_error($connection));
	}


	$query_select = "SELECT login FROM users WHERE login = '$login'";
	$select = mysqli_query($connect,$query_select) or die(mysqli_error($connect));
	$array = mysqli_fetch_array($select);
	$logarray = $array['login'];

	if($logarray == $login)
	  {
		echo"<script language='javascript' type='text/javascript'>alert('Esse login já existe');window.location.href='signup.html';</script>";
		die();
	  }
	else
	{
		  
		$query = "INSERT INTO users (login,password,firstname,surname,bday) VALUES ('$login','$password','$firstname','$surname','$bday')";
		$insert = mysqli_query($connect,$query);
		 
		if($insert)
		{
		  echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso');window.location.href='index.php'</script>";
		  
		}
		else
		{
		  echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='signup.html'</script>";
		}
	}

 
  
?>