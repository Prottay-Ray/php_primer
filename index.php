<?php
    $title = "Home(Index)";
    include "includes/header.php";
    echo "How are You? Everything Alright";
    function isPrime($n){
        for($m = 2;$m <= $n / 2;$m++){
            if($n % $m == 0){
                return 0;
            }           
        }
        return 1;
    }
    $k = 7;
?>
    <br>
    <br>
<?php
    echo "<br>",$title,"<br>";
    if(isPrime($k) == 1){
        echo "<br>",$k," is a Prime Number";
    }
    else
    echo $k." is not a Prime Number";
    require "includes/footer.php";
?>