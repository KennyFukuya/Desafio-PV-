<html lang="pt-br">

<head>
	<link rel = "stylesheet" href = "css/table.css">
	<link rel = "stylesheet" href = "css/button.css">
	<title> Banco de Dados </title>
	<meta charset='utf-8'/>
</head>

<body>
	<div id="container">
	
		<div id="header">
			<h1>Todos os Clientes</h1>
		</div>
		
		<div id="content">
			<table class="Table">
				<thead>
					<tr>
						<th>#ID</th>
						<th>Nome</th>
						<th>Sobrenome</th>
						<th>Login</th>
						<th>Aniversário</th>
					</tr>
				</thead>
				
					<?php
						// Dados do BD
						$server = "localhost";
						$dbuser = "root";
						$dbpass = "";
						$dbname = "userinfo";
						
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
						
						$query_select = "SELECT id,firstname,surname,login,bday FROM users";
						$result = mysqli_query($connect,$query_select);
						
						// Joga o resultado do query na tabela
						if($result->num_rows > 0){
							while($row = mysqli_fetch_array($result))
							{
								echo "<tr>";
								echo "<td>".$row["id"]."</td>";
								echo "<td>".$row["firstname"]."</td>";
								echo "<td>".$row["surname"]."</td>";
								echo "<td>".$row["login"]."</td>";
								echo "<td>".$row["bday"]."</td>";
								echo "</tr>";
							}
							echo "</table>";
						}
						else{
							echo "</table>";
							echo "0 resultados";
						}
						
						
						$connect->close();
						
						?>

		</div>
		
	</div>
	
	<div id = "footer">
	
		<div id="signupBtn">
			<a href="signup.html"><button class="signupBtn">Cadastrar novo cliente</button></a>
		</div>

	</div>
	
</body>

</html>