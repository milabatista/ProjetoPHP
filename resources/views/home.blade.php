

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    

    <h1></h1>


</body>
</html>



<?php

        $user = "root";
        $pass = "Yasuo123";
            
        $dbh = new PDO('mysql:host=localhost;dbname=mydb', $user, $pass);
              
        return $alunos = $dbh->query('SELECT * FROM aluno')-> fetchAll();

echo '<pre>';
echo "O Id do aluno é " , ($alunos[0]['id_Aluno']);
echo "<br>";
echo "O Nome do aluno é " ,($alunos[0]['Nome']);
echo "<br>";
echo "A idade do aluno é " ,($alunos[0]['Idade']);
echo '</pre>';


echo '<pre>';
echo " O Id do aluno é " , ($alunos[1]['id_Aluno']);
echo "<br>";
echo "O Nome do aluno é " ,($alunos[1]['Nome']);
echo "<br>";
echo "A idade do aluno é " ,($alunos[1]['Idade']);
echo '</pre>';


echo "Oi";

?>





