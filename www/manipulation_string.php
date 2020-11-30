<h1>Nouvelles fonctions de manipulation de chaînes de caractères</h1>
<h5>Vérifie si une chaîne de caractères contient une autre chaîne.</h5>
<pre>
    str_contains('PHP8 est installé sur ce serveur', 'PHP8')
</pre>
<?php
    var_dump(
            str_contains('PHP8 est installé sur ce serveur', 'PHP8')
    );
?>
<h5>Vérifie si le début d'une chaîne de caractères contient une autre chaîne.</h5>
<pre>
    str_starts_with('PHP8 est installé sur ce serveur', 'PHP8')
</pre>
<?php
var_dump(
    str_starts_with('PHP8 est installé sur ce serveur', 'PHP8')
);
?>
<h5>Vérifie si la fin d'une chaîne de caractères contient une autre chaîne.</h5>
<pre>
    str_ends_with('PHP8 est installé sur ce serveur', 'serveur')
</pre>
<?php
var_dump(
    str_ends_with('PHP8 est installé sur ce serveur', 'serveur')
);
?>