<?php
//Receber os valores
$caso = $_POST['caso'];
$nome=$_POST['nome'];
$valor=$_POST['valor']; 
$taxa= $valor/"10%";
$resultfim=($taxa - $valor);

echo "Nome  do Cliente:" . $nome;
echo "</br>";
// validação..
if ($valor ==0 || $nome ==0){
    header('location:sistema.php');
}
else{
    switch ($caso){
        case 1:
            $conta= ($resultfim / 5.29) * -1;
            $result =number_format($conta,2);
        echo "Valor convertido:" . $result . " Dólares";
        echo "</br>";
        echo "Taxa cobrada:" . $taxa ." Reais";
            break;
        case 2:
            $conta = ($resultfim *5.29) *-1;
            $result= number_format($conta,2);
            echo "Valor convertido:" . $result . " Reais";
            echo "</br>";
            echo "Taxa cobrada:" . $taxa ." Euro";
            break;
        case 3:
            $conta = ($resultfim *1.22) * -1;
            $result=number_format($conta,2);
            echo "Valor covertido:" .$result .  " Euros";
            echo "</br>";
            echo "Taxa cobrada:" . $taxa ." Dólares";
            break;
        case 4 :
            $conta= ($resultfim / 1.22) * -1;
            $result=number_format($conta,2);
            echo "Valor convertido:" .$result . " Dólares";
            echo "</br>";
            echo "Taxa cobrada:" . $taxa ." Euro";
            break;
        case 5 :
            $conta =($resultfim/ 0.154) * -1;
            $result= number_format($conta,2);
            echo "Valor convertido:".$result . " Reais";
            echo "</br>";
            echo "Taxa cobrada:" . $taxa ." Euros";
            echo "</br>";
            break;
        case 6 :
            $conta = ($resultfim * 0.154) * -1 ;
            $result= number_format($conta,2); 
            echo "Valor convertido:".$result . " Euros";
            echo "</br>";
            echo "Taxa cobrada:" . $taxa ." Reais";
        }
        }
      
        echo "</br>";
        echo "</br>";
        echo "*  Data da cotação utilizada : 21/05/2021 ";
?>