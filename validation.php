<?php
    include_once "index.php";
    
    // URL de l'API que vous souhaitez appeler
    $api_url = 'https://random-word-api.herokuapp.com/word?length=5#ber=5';

    // Faire la demande à l'API
    $response = file_get_contents($api_url);

    // Manipuler la réponse (par exemple, l'afficher)
    echo $response;

    $relou = array
?>
</body>
</html>