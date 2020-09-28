<html>
<head>
	<meta charset="UTF=8"/>
    <title>Listagem</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>
<body>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col" colspan="6"><center>Listagem</center></th>
            </tr>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Senha</th>
            </tr>
        </thead>
        <?php
	    $desc = $_POST["ord"];
        $op = $_POST["op"];
        
        $host = "localhost";
        $user = "root";
        $password = "";
        $db = "cadastrologin";
        $Comando = "SELECT * FROM cadastrar ORDER BY $op $desc";
        
        //Conectar ao MYSQL
        $conn = mysqli_connect($host, $user, $password, $db) or die ("impossivel se conectar ao MYSQL");
        
        //execultar consulta
        $consulta= mysqli_query($conn, $Comando);
        $aux=0;
        while(mysqli_num_rows($consulta)>$aux){
        
        //pegar linha da consulta
        $rs = mysqli_fetch_array($consulta);
        echo("<tr>
                <td>$rs[id]
                <td>$rs[usuario]
                <td>$rs[email]
                <td>$rs[senha]
            </tr>");
        $aux++;
        }
        ?>
    </table>
 </body>
 </html>