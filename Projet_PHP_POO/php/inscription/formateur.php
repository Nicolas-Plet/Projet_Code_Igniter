<div class="container_formulaire">
    <div class="formulaire">
        <h5 class="form_title">Formateur inscription</h5>
        <div class="form_item">
            <label>nom</label>
            <input type="text" name="nom" id="nom">
        </div>
        <div class="form_item">
            <label>prénom</label>
            <input type="text" name="prenom" id="prenom">
        </div>
        <div class="form_item">
            <label>cv</label>
            <input type="file" name="cv" id="cv">
        </div>
        <div class="form_item">
            <label>photo</label>
            <input type="file" name="photo" id="photo">
        </div>
        <div class="form_item">
            <label>Email</label>
            <input type="email" name="email" id="email">
        </div>
        <div class="form_item">
            <label>Mot de passe</label>
            <input type="password" name="mdp" id="mdp">
        </div>
        <button class='btn btn-success button_form' onclick='Inscription_Formateur()'>Valider l'inscription</button>
        <div id='status'></div>
    </div>
</div>