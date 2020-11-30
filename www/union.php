<?php
?>
    <h1>PHP 7 - Union</h1>
    <pre>
        class Nombre {
          /** @var int|float */
          private $nombre;

          /**
           * @param float|int $nombre
           */
          public function __construct($nombre) {
            $this->nombre = $nombre;
          }
        }

        new Nombre('test');
    </pre>
<?php

class Nombre {
    /** @var int|float */
    private $nombre;

    /**
     * @param float|int $nombre
     */
    public function __construct($nombre) {
        $this->nombre = $nombre;
    }
}

var_dump(new Nombre('test'));


?>
    <h1>PHP 8 - Union</h1>
    <pre>
        class Nombre {
          public function __construct(
            private int|float $nombre
          ) {}
        }
        var_dump(new Nombre8(0));
    </pre>
<?php
class Nombre8 {
    public function __construct(
            private int|float $nombre
          ) {}
    }

var_dump(new Nombre8(0));
?>
<br />
<br />
<br />
    <pre>
var_dump(new Nombre8(0.1));
    </pre>
<?php
var_dump(new Nombre8(0.1));
?>
<br />
<br />
<br />
    <pre>
var_dump(new Nombre8('test'));
    </pre>
    <small>PHP a bien compris que $nombre doit être de type int ou float</small>

<?php
var_dump(new Nombre8('test'));
?>
<small>PHP a bien compris que $nombre doit être de type int ou float</small>
