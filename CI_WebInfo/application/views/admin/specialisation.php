<div class="container_formulaire">
    <div class="formulaire">
        <h5 class="form_title">Ajouter Specialisation</h5>
        <div class="form_item">
            <label>Competence</label>
            <select id="competence">
            </select>
        </div>
        <div class="form_item">
            <label>nom</label>
            <input type="text" name="nom" id="nom">
        </div>
        <button class='btn btn-success button_form' onclick="Add_Specialisation()">Ajouter</button>
        <div id='status'></div>
    </div>
</div>

<div class="container justify-content-center">
    <div class="container_edit mt-5" id='edit_parent'>
        
    </div>
</div>

<script>
    AddOptionCompetences();
    DisplayTab_Specialisation();
</script>