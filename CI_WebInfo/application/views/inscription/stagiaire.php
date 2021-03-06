<div class="container_formulaire">
    <form class="formulaire" action="<?= site_url("Stagiaire/inscription"); ?>" method="post">
        <h5 class="form_title">Stagiaire inscription</h5>
        <div class="form_item">
            <label>nom</label>
            <input type="text" name="nom" id="nom" value="<?= set_value('nom') ?>">
            <?php echo form_error('nom', "<div style='color:red'>", "</div>"); ?>
        </div>
        <div class="form_item">
            <label>prénom</label>
            <input type="text" name="prenom" id="prenom" value="<?= set_value('prenom') ?>">
            <?php echo form_error('prenom', "<div style='color:red'>", "</div>"); ?>
        </div>
        <div class="form_item">
            <label>téléphone</label>
            <input type="text" name="telephone" id="telephone" value="<?= set_value('telephone') ?>">
            <?php echo form_error('telephone', "<div style='color:red'>", "</div>"); ?>
        </div>
        <div class="form_item">
            <label>email</label>
            <input type="email" name="email" id="email" value="<?= set_value('email') ?>">
            <?php echo form_error('email', "<div style='color:red'>", "</div>"); ?>
        </div>
        <div class="form_item">
            <label>Mot de passe</label>
            <input type="password" name="mdp" id="mdp" value="<?= set_value('mdp') ?>">
            <?php echo form_error('mdp', "<div style='color:red'>", "</div>"); ?>
        </div>
        <div class="form_item">
            <label>Adresse</label>
            <input type="text" name="adresse" id="adresse" value="<?= set_value('adresse') ?>">
            <?php echo form_error('adresse', "<div style='color:red'>", "</div>"); ?>
        </div>
        <button type="submit" class="btn btn-success">Valider inscription</button>
    </form>
</div>