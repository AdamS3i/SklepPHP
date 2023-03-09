<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>


    #ojp{}
            h1{
                text-align:center;
            }
            h2{
                top: 50px;
            }
            h3{
                top: 50px;
            }
            h4{
                top: 50px;
            }
            h5{
                top: 50px;
            }
            .Obraz{
            }

            th{
                font-size: 4em;

            }
            .Koszyk{
            left=80%;
            }
            #Kosz{
            width=200px;
            background-color=blue;          
        }

    </style>

</head>
<body>
<?php
include 'tabela.php';
session_start();
$Cena=[];
$cart=[];


if(isset($_GET["Koszyk"])){
    header('Location:http://localhost/sklepik/koszyk.php/');
}
if(isset($_SESSION["Kosz"])){ 
    if(isset($_GET['Dodaj'])){

    array_push($_SESSION["Kosz"],$_GET['Dodaj']);
    }else{
           
    } 
   }else{
    $_SESSION["Kosz"]=[];
   };

 print_r ($_SESSION["Kosz"]);


echo"<form>";
echo '<div id="ojp">';
echo'<h1>Strona główna</h1>';
echo '<br></br>';
echo'<h2>Karta graficzna</h2>';
echo'<h3>Pamięci RAM</h3>';
echo'<h4>Płyta główna</h4>';
echo'<h5>Karty muzyczne</h5>';

echo '<table border-"1px">';

echo'<input type="submit" value="Stworz swoj wymarzony komputer" name ="Koszyk" id="Koszyk">';


for($i=0;$i<=14;$i++){
        echo "<tr>";

        echo "<th></th>";
        echo '<th><img id="Obraz1" class="Obraz" src="'.$Podzespoły[$i]['img'] . '">';
        echo '</th>';


        echo "<th>".$Podzespoły[$i]['Nazwa']."</th>";
        echo "<th></th>";
        echo"<th>Cena</th>";
        echo "<th>".$Podzespoły[$i]['Cena']."</th>";
        echo"<th>zł</th>";
        echo '<th></th>';
        echo'<th><button input type="submit" value="'.$i.'" name ="Dodaj" id="Dodaj">Przenies do Koszyka</button></th>';
        echo "</tr>";     
    }

    

    echo '</table>';
    echo'<input type="submit" value="Przejdź do koszyka" name ="Koszyk" id="Kosyk">';
    echo"</form>";
    echo '</div>';

   







?>
</body>
</html>