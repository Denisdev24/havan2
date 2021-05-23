<?php
$caso = $_POST['caso'];
$nome=$_POST['nome'];
$valor=$_POST['valor']; 
$taxa= $valor/"10%";
$resultfim=($taxa - $valor);

echo "Nome  do Cliente:" . $nome;
echo "</br>";
if ($valor == 0 ){
    header('location:Sistema.php');
}
else{
    switch ($caso){
        case 1:
            $conta= $resultfim / 5.29;
            $result = number_format($conta,2);
        echo  $result . " Dolares";
        echo "</br>";
        echo "Taxa cobrada:" . $taxa ."Reais";
            break;
        case 2:
            $conta = $resultfim*5.29;
            $result= number_format($conta,2);
            echo $result . " Reais";
            break;
        case 3:
            $conta = $resultfim *1.22;
            $result=number_format($conta,2);
            echo $result .  " Dolares";
            break;
        case 4 :
            $conta= $resultfim / 1.22;
            $result=number_format($conta,2);
            echo $result . " Euros";
            break;
        case 5 :
            $conta =$resultfim/ 0.154;
            $result= number_format($conta,2);
            echo $result . " Reais";
            break;
        case 6 :
            $conta = $resultfim * 0.154;
            $result= number_format($conta,2); 
            echo $result . " Euros";
        }
        }
      
        echo "</br>";
        echo "*  Data da cotação utilizada : 21/05/2021 ";
?>