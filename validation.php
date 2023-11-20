<?php
    
    // $symbol = array("@", "&", "#", "!", "?", "+", "-", "/", "*", "=", ":", "ù", "(", ")");
        
    // foreach ($mdp as $most) {
    //     echo $most;
    // }

    // $mots = $mdp[0];

    // echo "<br>" . $mots;

    if (!empty($_POST['length']) && !empty($_POST['number'])) {

        $lenght = $_POST['length'];
        $number = $_POST['number'];
        $complexity = (int)$_POST['complexity'] ; // on force la string à devenir un entier
        $specials = ['%21', '%2A', '%27', '%3B', '%3A', '%40', '%26', '%3D', '%2B', '%24', '%2C', '%2F', '%3F', '%25', '%23'];

        // PSEUDO CODE = une methodes pour savoir quoi faire 
        // La longueur des mots doit être entre 6 et 10 caractères
        // Le nombre de mot est compris entre 4 et 10 

        if ($lenght >= 6 && $lenght <=10 && $number >= 4 && $number <= 10) {

        // On va appeller l'api et récupérer les valeur de celle-ci.
            // Nous utiliserons Curl pour la reception des données.
            // Les inputs seont cocaténés dans l'url de l'api
            $apiUrl = "https://random-word-api.herokuapp.com/word?length=" . $lenght . "&number=" . $number; 
            $ch = curl_init(); 
            curl_setopt($ch, CURLOPT_URL,$apiUrl);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
            $words = json_decode (curl_exec($ch), 1) ;
            curl_close($ch);
            
            $passWord = "" ;
        // A partir d'une boucle nous allons parcourir les mots pour créer le mots de passe
            foreach($words as $word){
                $passWord .= "$word";
                for ($i=0; $i <= $complexity ; $i++) { 
                    $passWord .= $specials[rand(0, count($specials) - 1)];
                }
            }
        // Nous ajoutér de la complexité avec un deuxieme boucle qui ajoutera des caractères spéciaux
            // Pour récupérer les caractères spéciaux nous utiliserons un tableau de caractères codés en dur
        // Apres chaque mot
        // Quand tout est finie j'envoie le mots de passe par method GET dans un header location
        header("Location:index.php?password=$passWord");
        }
        else {
            header("Location:index.php?error=veuillez remplir correctement le formulaire");
        }
    }else {
        echo"ERREUR";
        // Envoyer un message d'erreur
    }
?>
</body>
</html>