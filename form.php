  <?php
echo $_POST['user_email'];
?>
  
  <form  action="thanks.php"  method="post">
    <div>
      <label  for="nom">Nom :</label>
      <input  type="text"  id="nom"  name="user_name">
    </div>
    <br>
    <div>
        <label for="prénom">Prénom :</label>
        <input type="text" id="prénom" name="user_firstname">
    </div>
    <br>
    <div>
      <label  for="courriel">Courriel :</label>
        <input  type="email"  id="courriel"  name="user_email">
    </div>
    <br>
    <div>
        <label for"telephone">Téléphone :</label>
        <input type="tel" id="tel" name="user_tel">
    </div>
    <br>
    <div>
        <label  for="sujet">A quel sujet ?</label>
        <select name="user_sujet" id="sujet">
            <option value="Non réception de commande">"Je n'ai pas reçu ma commande"</option>
            <option value="Commande abimée">"Ma commande est abimée"</option>
        </select>
    </div>
    <br>
    <div>
      <label  for="message">Message :</label>
      <textarea  id="message"  name="user_message"></textarea>
    </div>
    <br>
    <div  class="button">
      <button  type="submit">Envoyer votre message :</button>
    </div>
  </form>
