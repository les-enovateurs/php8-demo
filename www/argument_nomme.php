<?php

$termes = '<p class="php_8_syle">"HTML special"</p>';

/** PHP 7 - htmlspecialchars - arguments positionnés */
echo "<h1>PHP 7</h1>";
?>
    <pre>
        echo htmlspecialchars($termes, ENT_COMPAT | ENT_HTML401, 'UTF-8', false);
    </pre>
<?php
echo htmlspecialchars($termes, ENT_COMPAT | ENT_HTML401, 'UTF-8', false);

/** PHP 8 - htmlspecialchars - arguments nommés */
echo "<h1>PHP 8</h1>";
?>

    <pre>
        echo htmlspecialchars($termes, double_encode: false);
    </pre>
<?php
echo htmlspecialchars($termes, double_encode: false);

/** PHP 8 - Fonction maison */
echo "<h1>PHP 8 - fonction maison</h1>";

?>
    <pre>
        function bonjour($prenom='N/A', $nom='N/A', $age='NA', $ville='NA'){
            echo 'Bonjour ' . $prenom . ' ' . $nom . ' agé(e) de ' . $age . 'ans, né(e) à ' . $ville;
        }

        bonjour(ville:'Miramas', age:'30');
    </pre>
<?php

function bonjour($prenom='N/A', $nom='N/A', $age='NA', $ville='NA'){
    echo 'Bonjour ' . $prenom . ' ' . $nom . ' agé(e) de ' . $age . 'ans, né(e) à ' . $ville;
}

bonjour(ville:'Miramas', age:'30');