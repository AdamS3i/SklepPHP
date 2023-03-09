<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        #ojp{
        }
        h1{
            text-align:center;
        }
        h2{
            top: 20px;
            position: absolute;

        }
        .obraz{
            height:100px;
            width:100px;
            border: solid black;
        }
    </style>

</head>
<body>
<?php
include 'tabela.php';
session_start();
if(isset($_GET["Powrót"])){
    header('Location:http://localhost/sklepik/shop.php');
}else{}
echo"<form>";
echo '<div id="ojp">';
echo'<h1>Witaj jestes w koszyku swoich marzeń</h1>';

echo '<table border-"1px">';
echo'<th><input type="submit" value="Powrót do Przeszłości" name="Powrót" id="Powrót"></th>';


foreach($_SESSION["Kosz"] as $PodzespołyIndex){
    
        echo "<tr>";

        echo "<th></th>";
        echo '<th><img id="Obraz1" class="Obraz" src="'.$Podzespoły[$PodzespołyIndex]['img'] . '">';
        echo '</th>';


        echo "<th>".$Podzespoły[$PodzespołyIndex]['Nazwa']."</th>";
        echo "<th></th>";
        echo"<th>Cena</th>";
        echo "<th></th>";
        echo "<th>".$Podzespoły[$PodzespołyIndex]['Cena']."</th>";
        echo"<th>zł</th>";

        echo "</tr>";     
    }
    echo '</table>';
    echo"</form>";
    echo '</div>';
?>
</body>
</html>