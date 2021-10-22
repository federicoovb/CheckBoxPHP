<?php
    $prodotti = array(
        "1q" => "macchina",
        "2e" => "libro",
        "3c" => "quaderno",
        "4g" => "scarpe"
    );

    echo "<form action='Checkbox.php' method='post'>";
    foreach($prodotti as $k=>$v){
        echo '<input type="checkbox" name="'.$k.'" value="'.$v.'">'.$v.'<br>';
    }
    echo '<input type="submit" value="CARRELLO">';

    echo "<h3>SELEZIONATI</h3>";
    foreach($_POST as $k=>$v){
        echo "$k - $v</br>";
    }
?>