<?php
    echo "<h3>Soal No 1 Looping I Love PHP</h3>";
    echo "LOOPING PERTAMA";
    for ($i=1;$i<22;$i++) {
        if($i%2==0) 
        {
        echo "<br/> $i - I Love PHP "; 
        }
    }
    echo "<br><br>";
    echo "LOOPING KEDUA";
    for ($i=20; $i >=0; $i-=2) {
        echo "<br/> $i - I Love PHP";
        }
echo "<br><br>";

echo "<h3>Soal No 2 Looping Array Modulo </h3>";
    $numbers =18;
    $bagi=5;
    $sisaBagi=$numbers%$bagi;
    $hasilBagi=($numbers-$sisaBagi)/$bagi;
    echo $numbers." dibagi dengan ".$bagi." adalah ".$hasilBagi." sisa ".$sisaBagi;
    echo "<br>";
    echo "Array sisa baginya adalah:  ". $sisaBagi;
    echo "<br>";
    $numbers =45;
    $bagi=5;
    $sisaBagi=$numbers%$bagi;
    $hasilBagi=($numbers-$sisaBagi)/$bagi;
    echo $numbers." dibagi dengan ".$bagi." adalah ".$hasilBagi." sisa ".$sisaBagi;
    echo "<br>";
    echo "Array sisa baginya adalah:  ". $sisaBagi;
    echo "<br>";
    $numbers =29;
    $bagi=5;
    $sisaBagi=$numbers%$bagi;
    $hasilBagi=($numbers-$sisaBagi)/$bagi;
    echo $numbers." dibagi dengan ".$bagi." adalah ".$hasilBagi." sisa ".$sisaBagi;
    echo "<br>";
    echo "Array sisa baginya adalah:  ". $sisaBagi;
    echo "<br>";
    $numbers =61;
    $bagi=5;
    $sisaBagi=$numbers%$bagi;
    $hasilBagi=($numbers-$sisaBagi)/$bagi;
    echo $numbers." dibagi dengan ".$bagi." adalah ".$hasilBagi." sisa ".$sisaBagi;
    echo "<br>";
    echo "Array sisa baginya adalah:  ". $sisaBagi;
    echo "<br>";
    $numbers =47;
    $bagi=5;
    $sisaBagi=$numbers%$bagi;
    $hasilBagi=($numbers-$sisaBagi)/$bagi;
    echo $numbers." dibagi dengan ".$bagi." adalah ".$hasilBagi." sisa ".$sisaBagi;
    echo "<br>";
    echo "Array sisa baginya adalah:  ". $sisaBagi;
    echo "<br>";
    $numbers =34;
    $bagi=5;
    $sisaBagi=$numbers%$bagi;
    $hasilBagi=($numbers-$sisaBagi)/$bagi;
    echo $numbers." dibagi dengan ".$bagi." adalah ".$hasilBagi." sisa ".$sisaBagi;
    echo "<br>";
    echo "Array sisa baginya adalah:  ". $sisaBagi;
    
    echo "<br>";
    $nomor=[18,45,29,61,47,34];
    echo"array nomor:";
    print_r($nomor);
    $rest=[];
    foreach($nomor as $nom){
        $rest[]="<br>";
        $rest[]="modulo 5 dari $nom adalah:". $nom % 5;
    };
    echo"<br>";
    echo"array sisa baginya adalah:";
    foreach($rest as $rt){
        echo $rt;
    };
    echo"<br>";

    echo "<h3> Soal No 3 Looping Asociative Array </h3>";
    $items = [
        ['001', 'Keyboard Logitek', 60000, 'Keyboard yang mantap untuk kantoran', 'logitek.jpeg'], 
        ['002', 'Keyboard MSI', 300000, 'Keyboard gaming MSI mekanik', 'msi.jpeg'],
        ['003', 'Mouse Genius', 50000, 'Mouse Genius biar lebih pinter', 'genius.jpeg'],
        ['004', 'Mouse Jerry', 30000, 'Mouse yang disukai kucing', 'jerry.jpeg']
    ];
    $arr_socc=[];
    foreach ($items as $itm) {
        $arr_socc[]=array(
            'id'=>$itm[0],
            'name'=>$itm[1],
            'price'=>$itm[2],
            'description'=>$itm[3],
            'source'=>$itm[4]
        );
    };
foreach($arr_socc as $arr){
    print_r($arr);
    echo"<br>";

}
echo "asterix:<br>";
    echo "<h3> Soal No 4 Looping Asociative Array </h3>";
    for ($row =0; $row < 5; $row++) {   
         for ($b=0; $b<5; $b++){
            if($b<=$row){
                echo '*';
}
            else
            echo'';
}
         echo"<br>";
}
        echo "<br/>";

        echo"<h3> Soal function 1</h3>";
        function hello ($nama){
            echo"hallo $nama, selamat datang dipenus <br>";
        }
        hello("Bagas");
        hello("Wahyu");
        hello("Abdul");
        echo"<br>";

        echo"<h3> Soal function 2</h3>";
        function reverseString($str){
           $i= strlen($str)-1;
           for ($j = 0; $j < $i; $j++){
               $temp=$str[$i];
               $str[$i]=$str[$j];
               $str[$j]=$temp;
           $i--;
           };
           echo"$str<br>";
            }
            reverseString("abduh");
            reverseString("penus");
            reverseString("we are different");
            echo"<br>";

            echo"<h3> Soal function 3</h3>";
            function palindrome ($str){
                $old_str= ($str);
                $i=strlen ($str)-1;
                for ($j =0; $j < $i; $j++){
                    $temp=$str[$i];
                    $str[$i]= $str[$j];
                    $str[$j]= $temp;
                    $i--;
                };
                if ($str == $old_str){
                    echo "kata $old_str merupakan kalimat palindrome <br>";
                } else {
                    echo "kata $old_str bukan kalimat palindrome <br>";
                };
                };
                palindrome("civic") ; 
            palindrome("nababan") ; 
             palindrome("jambaban");
             palindrome("racecar"); 
        echo"<br>";
 ?>