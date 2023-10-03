<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>

    <!-- ESTILIZA A PÁGINA COM BOOTSTRAP 4 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <!--    FIM DO BOOTSTRAP -->

</head>
<body style="background-color : gray;">
<div class="container">
    <button class="btn btn-primary">
        <a href="index.html"><p style="color : white;">HOME</p></a>
    </button>
    <br>
    <?php
        $Nome_php
        = filter_input(INPUT_POST,'Nome_name');             //DECLARA VARIÁVEIS AOS DADOS RECOLHIDOS

        $ValorPorHoras_php 
        = filter_input(INPUT_POST,'ValorPorHora_name');     //DECLARA VARIÁVEIS AOS DADOS RECOLHIDOS

        $HorasTrabalhadas_php 
        = filter_input(INPUT_POST,'HorasTrabalhadas_name'); //DECLARA VARIÁVEIS AOS DADOS RECOLHIDOS

        //DECLARA VARIÁVEIS E OS ENTREGA OS DEVIDO VALORES
        $SalarioBruto_php 
        = ($ValorPorHoras_php * $HorasTrabalhadas_php);

        $Inss_php 
        = $SalarioBruto_php * 0.08;

        $ValeTransporte_php 
        = $SalarioBruto_php * 0.06;

        $ImpostoDeRenda_php 
        = $SalarioBruto_php * 0.11;
        //FIM DA DECLARAÇÃO DE VALORES NAS VARIÁVEIS

        //CALCULA O SALARIO BRUTO COM DESCONTO
        $TotalDesconto_php 
        = $ImpostoDeRenda_php + $ValeTransporte_php + $Inss_php;

        $SalarioLiquido_php 
        = ($SalarioBruto_php - $TotalDesconto_php);
        //FIM DO CALCULO
    
        //MOSTRA NA TELA O RESULTADO
        echo "<br><p style=color:white>OLÁ</p> " . $Nome_php . ", <p style=color:white>SEU SALÁRIO LIQUÍDO É DE : </p>".$SalarioLiquido_php; 
        echo "<br><p style=color:white;>SENDO SALÁRIO BRUTO DE : </p>" . $SalarioBruto_php; 
        echo "<br><p style=color:white;> E DESCONTO NO TOTAL DE : </p>" . $TotalDesconto_php;

?>

</div>
</body>
</html>
