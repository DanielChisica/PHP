<?php
    include('constants.php');
    require('header.php');
    ?>

    <h1>
        <?php
        $saludo='Hi from php';
        print($saludo);
        $number1=4;
        $number2=5;
        $operation='The operation'.$number1.'+'.$number2.'='.($number1+$number2);
        ?>
    </h1>

    <?php
require('footer.php');
?>
