<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String PHP</title>
</head>
<body>
    <?php 
        // Deklarasi Array
        echo "<h3> Soal 1 </h3>";
        $Kids = array("Mike", "Dustin", "Will", "Lucas", "Max", "Eleven");
        print_r($Kids);
        echo "<br>";
        $Adults = array("Hopper", "Nancy", "Joyce", "Jonathan", "Murray");
        print_r($Adults);
       
        echo "<h3> Soal 2</h3>";
        // menampilkan panjang array $Kids
        $Kids = ["Mike", "Dustin", "Will", "Lucas", "Max", "Eleven"];
        echo count($Kids);
        echo "<br>";
        // menampilkan panjang array $Adults
        $Adults = ["Hopper", "Nancy", "Joyce", "Jonathan", "Murray"];
        echo count($Adults);

        echo "<h3> Soal 3</h3>";
        $siswa1 = [  "Name" => "Will Byers",
                    "Age" => 12,
                    "Aliases" => "Will the Wise",
                    "Status" => "Alive"];
        print_r($siswa1);
        echo "<br>";
        $siswa2 = [  "Name" => "Mike Wheeler",
                    "Age" => 12,
                    "Aliases" => "Will the Wise",
                    "Status" => "Alive"];
        print_r($siswa2);
        echo "<br>";
        $siswa3 = [  "Name" => "Jim Hopper",
                    "Age" => 12,
                    "Aliases" => "Will the Wise",
                    "Status" => "Alive"];
        print_r($siswa3);
        echo "<br>";
        $siswa4 = [  "Name" => "Eleven",
                    "Age" => 12,
                    "Aliases" => "Will the Wise",
                    "Status" => "Alive"];
        print_r($siswa4);


    ?>
</body>
</html>