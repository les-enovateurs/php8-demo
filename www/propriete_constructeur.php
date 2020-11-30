<?php
?>
    <h1>PHP 7 - Propriétés de constructeur</h1>
    <pre>
        class Point {
          public float $x;
          public float $y;
          public float $z;

          public function __construct(
            float $x = 0.0,
            float $y = 0.0,
            float $z = 0.0,
          ) {
            $this->x = $x;
            $this->y = $y;
            $this->z = $z;
          }
        }
    </pre>
<?php

class Point
{
    public float $x;
    public float $y;
    public float $z;

    public function __construct(
        float $x = 0.0,
        float $y = 0.0,
        float $z = 0.0,
  ) {
    $this->x = $x;
    $this->y = $y;
    $this->z = $z;
  }
}

var_dump(new Point());


?>
    <h1>PHP 8 - Propriétés de constructeur</h1>
    <pre>
        class Point8 {
            public function __construct(
                public float $x = 0.0,
                public float $y = 0.0,
                public float $z = 0.0,
                ) {}
        }
    </pre>
<?php
    class Point8 {
        public function __construct(
            public float $x = 0.0,
            public float $y = 0.0,
            public float $z = 0.0,
            ) {}
    }

    var_dump(new Point8());
?>