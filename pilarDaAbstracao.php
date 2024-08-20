<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pilar Abstração</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    

<?php 
class funcionario{
    public $nome='Ribino';
    public $telefone='15 99731-7353';
    public $num_filhos=0;

    function resumirCardFunc () {
        return "$this->nome e ele possui $this->num_filhos filhos";
    }

    function modificarNumFilhos ($num_filhos){
       return $this->num_filhos = $num_filhos;
    }

}

$variavel = new funcionario();

    $variavel->modificarNumFilhos(4) . '<br>';
    echo $variavel->resumirCardFunc();


?>






<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>




<a href="index.php"> <button id='REceba'> Voltar </button></a>





</body>
</html>