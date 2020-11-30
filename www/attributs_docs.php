<?php
?>
    <h1>PHP 7 - Style</h1>
    <pre>
        /**
        * @Route("/api/articles/{id}", methods={"GET", "HEAD"})
        */
        class User
        {}
    </pre>
<?php
/**
* @Route("/api/articles/{id}", methods={"GET", "HEAD"})
*/
class User
{}

?>
    <h1>PHP 8 - Style</h1>
    <pre>
        #[Route("/api/articles/{id}", methods: ["GET", "HEAD"])]
        class User
        {}
    </pre>
<?php
#[Route("/api/articles/{id}", methods: ["GET", "HEAD"])]
class User8
{}

?>