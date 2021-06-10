<?php
    $title = "Home(Index)";
    include "includes/header.php";
    echo "How are You? Everything Alright";
    function rev($num)
    {
        $rev_num = 0;
        while($num > 1)
        {
            $rev_num = $rev_num * 10 +
                            $num % 10;
            $num = (int)$num / 10;
        }
        return $rev_num;
    }
    function isPrime($n){
        for($m = 2;$m <= $n / 2;$m++){
            if($n % $m == 0){
                return 0;
            }           
        }
        return 1;
    }
    $k = 117;
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
    echo " <br>Checking Reverse Function : ", $k, " and ",rev($k);
    require "includes/footer.php";
?>