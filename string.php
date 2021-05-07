<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>String PHP</title>
</head>
<body>
    <h1>soal 1</h1>
    <?php 
    $hello="hello php!" ;
    $ready="I'm ready for the challenges";
    echo strlen($hello);
    echo"<br>";
    echo str_word_count ($hello);
    echo"<br>";
    echo strlen($ready);
    echo"<br>";
    echo str_word_count ($ready);
    echo"<br>";
    echo"<h1>soal 2</h1>";
    $string2 = "I love PHP";
        
        echo "<label>String: </label> \"$string2\" <br>";
        echo "Kata pertama: " . substr($string2, 0, 1) . "<br>" ; 
        // Lanjutkan di bawah ini
        echo "Kata kedua: " .substr($string2,2,4)."<br>";
        echo " Kata Ketiga: " .substr($string2,7,10)."<br>";
      
        echo"<h1>soal 3</h1>";
        $kalimat="PHP is old but sexy";
        echo "<br/>";
        echo str_replace("sexy","awesome",$kalimat);


?>
</body>
</html>