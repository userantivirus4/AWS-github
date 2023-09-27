<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formulaire.css" />
    <title> FICHE DE RENSEIGNEMENT SIMPLON CÔTE D'IVOIRE </title>
</head>
<body>
       <?php 
         //verifier que le bouton envoyer a bien ete clique
         if(isset($_POST['envoyer'])){
            // extraction des informations envoyé dans des variables par la methode POST
            extract($_POST);
            // verification du remplissage de tous les champs
            if(isset($nom) && isset($prenom) && isset($numero) && isset($email)){
                //connexion  la base de donnée
                include_once "connexion.php";
                // requete d'ajout du bouton envoyer
                $req = mysqli_query($con , "INSERT INTO apprenant VALUES(NULL, '$nom', '$prenom', '$numero', '$email')");
                if($req){//si la requete est executé avec succès, faire cette redirection
                 header("location: fiche.php");
                }else{//si non
                    $message = "Apprenant non enregistré";

                }

            }else {
                //si non
                $message = "Veuillez remplir tous les champs !";
            }
         }
       
       ?>
          <div class="grandtitre">
                <h1 style="font-size: 80px; color: #da3131;text-align: center;margin-left: 0px;margin-right: 0px;padding-left: 0px;padding-right: 0px;"> SIMPLON CÔTE D'IVOIRE </h1><br />
                <img src="images/logo simplon.png" alt="logo Simplon" style="width: 60px;height: 60px;position: absolute;left: 47%;top: 15%;" /><br />
                <P style="font-size: 30px;text-align: center;"> Bienvenu à simplon côte d'ivoire. <br /> Veuillez renseigner le formulaire ci-dessous </P>

          </div>

          <form style="background-color: rgba(22, 30, 41, 0.863);opacity: 100%;width: 650px;height: 600px;position: absolute;left: 23%;border-radius: 50px;text-align: center;" action="traitement.php" method="post" >

                 <h2 style="color: #da3131;"> FORMULAIRE </h2>  
                 <p style="color: white;width: 650px;text-align: center;position: absolute;top: 30px;left: 0%;"> (Veuillez remplir ce formulaire) </p>
                <div style="color:black;text-align: center;">
                    
                    <label for="le nom" style="font-size: 16px;position: absolute;top: 16%;left: 47%;font-family: sans-serif;color: white;"> NOM </label>
                    <p style="width: 250px;height: 22px;position: relative;left: 242.5px;top: 40px"><input type="text" placeholder=" ex : RIGOBERT " name="nom" id="nom" size="30px" maxlength="30" style="position: absolute; left: -17%;top: 10px;" /> </p>
                    <br /><br />
                    <label for="le prenom" style="font-size: 16px;position: absolute;top: 35%;left: 44%;font-family: sans-serif;color: white;"> PRENOMS </label>
                    <p style="width: 250px;height: 22px;position: relative;left: 242.5px;top: 65px"><input type="text" placeholder=" ex : FRANCK CYRILLE " name="prenom" id="prenom" size="30px" maxlength="60" style="position: absolute;left: -17%;top: 10px;" /> </p>
                
                    <label for="le 07" style="font-size: 16px;position: absolute;top: 55%;left: 45%;font-family: sans-serif;color: white;"> NUMERO </label>
                    <p style="width: 250px;height: 22px;position: relative;left: 242.5px;top: 85px"><input type="tel" placeholder=" ex : 0707070809 " name="numero" id="numero" size="30px" maxlength="10" style="position: absolute;left: -17%;top: 70px;" /> </p>           
                
                    <label for="le mail" style="font-size: 16px;position: absolute;left: 47%;top: 72%;font-family: sans-serif;color: white;"> EMAIL </label>
                    <p style="width: 250px;height: 22px;position: relative;left: 242.5px;top: 100px"><input type="email" placeholder=" ex : abcdefg@gmail.com " name="email" id="email" size="30px" maxlength="50" style="position: absolute;left: -17%;top: 120px;" /> </p>

                     
                     <p style="position:relative;top: 250px;"> <input type="submit" value="ENVOYER" id="envoyer" name="envoyer" style="background-color: #da3131;color: white;height: 35px;width:120px;border: solid 0.2px #da3131 ;border-radius: 10px;font-size: 20px;position: absolute;left: 260px;"/> <imput type="submit" id="retour" style="background-color: #187c0ec7;height: 35px;width: 200px;border: 0.2 solid #187c0ec7 ;font-size: 20px;border-radius: 10px;position: relative;left: 250px;" /><a href="fiche.html" style="color: white;text-decoration: none;"> LISTE </a></p>
                
                </div>
                 <p></p>


          </form>
          <br /><div style="text-align: center;position: absolute;top: 125%;left: 42.5%;"><p style="color: black;"> Merci pour votre attention</p></div>


</body>
</html>