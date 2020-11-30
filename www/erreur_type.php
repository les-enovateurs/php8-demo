<h1>L'apparition de l'erreur : TypeError</h1>
<pre>
    trim([]);
</pre>
<?php
try{
    trim([]);
}
catch (\TypeError $e){
    echo $e;

}
?>
<h5>PHP 7 aurait répondu : // Warning: trim() expects parameter 1 to be string, array given</h5>
<h1>L'apparition de l'erreur : ValueError</h1>
<pre>
    array_chunk([], -1);
</pre>
<?php
try{
    array_chunk([], -1);
}
catch (\ValueError $e){
    echo $e;
}
?>
<h5>PHP 7 aurait répondu : // Warning: array_chunk(): Size parameter expected to be greater than 0</h5>

