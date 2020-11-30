<?php
?>
    <h1>PHP 7 - Switch</h1>
    <pre>
        switch (8.0) {
            case '8.0':
                $result = "Perdu - Correspondance entre chaine et nombre";
                break;
            case 8.0:
                $result = "Le bon résultat attendu";
                break;
        }
    </pre>
<?php
    switch (8.0) {
        case '8.0':
            $result = "Perdu - Correspondance entre chaine et nombre";
            break;
        case 8.0:
            $result = "Le bon résultat attendu";
            break;
    }
    echo $result;
?>
    <h1>PHP 8 - Match</h1>
    <pre>
        $result = match (8.0) {
          '8.0' => "Perdu - Correspondance entre chaine et nombre",
          8.0 => "Le bon résultat attendu",
        };
    </pre>
<?php
    $result = match (8.0) {
      '8.0' => "Perdu - Correspondance entre chaine et nombre",
      8.0   => "Le bon résultat attendu",
    };

    echo $result;
    ?>
