<?php
    include_once "index.php";
    
    $symbol = array("@", "&", "#", "!", "?", "+", "-", "/", "*", "=", ":", "ù", "(", ")");

    $lenght = $_POST['l-mots'];
    $nbrmots = $_POST['nbr-mots'];


        $apiUrl = "https://random-word-api.herokuapp.com/word?length=" . $lenght . "&number=" . $nbrmots; 
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$apiUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
        $reponse = curl_exec($ch);
        curl_close($ch);
        $mdp = json_decode($reponse, true);
        
    foreach ($mdp as $most) {
        echo $most;
    }

    $mots = $mdp[0];

    echo "<br>" . $mots
?>
</body>
</html>