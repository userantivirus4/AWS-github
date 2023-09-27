<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> LISTE DE PRESENCE SIMPLON CÔTE D'IVOIRE </title>
    <link rel="stylesheet" href="document.css" />
</head>
<body>

        <div class="contenu">
            <a href="formulaire.php" class="boutonajouter"> <img src="images/plus.png" /> AJOUTER </a>

         


            <table>
                    <tr id="libéllé">
                          <th> NOM </th>
                          <th> PRENOM </th>
                          <th> NUMERO </th>
                          <th> EMAIL </th>
                          
                          
                    </tr>
                    <?php
                        //inclure la page de connection
                          include_once "connexion.php";
                        //requete pour afficher la liste des Aprenants
                        $req = mysqli_query($con , "SELECT * FROM apprenant");
                        if(mysqli_num_rows($req) == 0){
                             //s'il n'y a pas d'apprenant dans la base de donnée alors on affiche ce message
                             echo "Il n'y a pas encore d'Apprenant inscrit";
                        }

                    ?>          
        
                

                            
                        

                    

                    <tr>
                        <td> CURRY </td>
                        <td> Stephen </td>
                        <td> 0771158486 </td>
                        <td> kilobravokilolima@gmail.com</td>
                        
                    </tr>
                    
                    <tr>
                        <td> CURRY </td>
                        <td> Stephen </td>
                        <td> 0771158486 </td>
                        <td> kilobravokilolima@gmail.com</td>
                        
                    </tr>

            </table>



        </div>
    
</body>
</html>