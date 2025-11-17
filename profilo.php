<?php

// $_SERVER['request_method']

if (isset($_POST['nome']) && isset ($_POST['regione']) ){

    $nome    = htmlspecialchars( $_POST['nome']    );
    $regione = htmlspecialchars( $_POST['regione'] );

    echo "<h1> Profilo di $nome </h1>";
    echo "<h3> Regione: $regione </h3>";

    if(isset( $_POST['interessi']) ){
        
        $interessi_selezionati = $_POST['interessi'];

        echo '<p> Interessi selezionati: </p>';
        echo '<ul>';

        foreach($interessi_selezionati as $interesse){
            echo "<li> $interesse </li>";
        }

        echo '</ul>';
    }
}


?>

