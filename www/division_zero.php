<h1>Division sécurisée</h1>
<pre>
    fdiv(2,0)
</pre>
<?php
    var_dump(fdiv(2,0));
?>
<br />
<br />
<small>Avec une division classique, vous auriez l'erreur suivante :</small><br />
<small>Fatal error: Uncaught DivisionByZeroError: Division by zero in /var/www/html/division_zero.php:7 Stack trace: #0 {main} thrown in /var/www/html/division_zero.php on line 7</small>
