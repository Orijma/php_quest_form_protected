<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<form  action="thanks.php"  method="post">
    <div>
        <label  for="nom">Nom :</label>
        <input  type="text"  id="nom"  name="name" required>
    </div>

    </br>

    <div>
        <label  for="prenom">Prenom :</label>
        <input  type="text"  id="prenom"  name="prenom" required>
    </div>

    </br>

    <div>
        <label  for="courriel">Courriel :</label>
        <input  type="email"  id="courriel"  name="email" required>
    </div>
    
    </br>

    <div>
        <label for="phone"> Numero de téléphone : </label>
        <input type="tel" id="phone" name ="phone" required>
    
    </div>

    </br>
    
    <div> 
         <label for="sujet"> Sujet </label>
        <select name="selectSujet" id="sujet" required>
            <option value = "jeux-vidéos"> Jeux Vidéos </option>
            <option value = "mangas"> Mangas </option>
            <option value = "Disney"> Disney </option>
        </select>
    </div>

    </br>

    <div>
         <label  for="message">Message :</label>
         <textarea  id="message"  name="message" required></textarea>
    </div>

    </br>

    <div  class="button">
         <button  type="submit">Envoyer votre message</button>
    </div>
  </form>

  <?php



  ?>
    
</body>
</html>
