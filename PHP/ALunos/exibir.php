<?php
include_once("Conectar.php");
include_once("head.html.php");

$sql = "SELECT * FROM  alunos WHERE id = 303";
$resultado = mysqli_query($conn,$sql);
$linha= mysqli_fetch_array( $resultado );
if ($linha) {
    echo "
        <div class='row'>
            <div class='card col-xl-3 m-3 p-3'>
            <img src='$linha[imagem]' class='card-img-top'>
            <div class='card-body'>
                <h5 class='card-title'>$linha[nome]</h5>
                <p class='card-text'>
                    <i class='far fa-adress-card'></i>
                    <i>Nome: $linha[nome]<i><br>
                    <i class='far fa-adress-card'></i>
                    <i>ID: $linha[Id]<i><br>
                </p>
            </div>
        </div>";
} else{
    echo "Imagem não encontrada";
}

?>