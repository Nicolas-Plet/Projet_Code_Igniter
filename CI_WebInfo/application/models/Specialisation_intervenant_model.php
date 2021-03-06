<?php 

class Specialisation_intervenant_model extends CI_Model {

   private $ref_id_intervenant;
   private $ref_id_specialisation;

    public function set_ref_id_intervenant($newRef_id_intervenant) {
        $this->ref_id_intervenant = $newRef_id_intervenant;
    }

    public function get_ref_id_intervenant() {
        return $this->ref_id_intervenant;
    }

    public function set_ref_id_specialisation($newRef_id_specialisation) {
        $this->ref_id_specialisation = $newRef_id_specialisation;
    }

    public function  get_ref_id_specialisation() {
        return $this->ref_id_specialisation;
    }

    //Fonction de simplification de l'utilisation de l'API PHP

    public function   Initialize($array) {
        $this->ref_id_intervenant = $array['ref_id_intervenant'];
        $this->ref_id_specialisation = $array['ref_id_specialisation'];
    }

    public function add($data)
    {
        $this->load->database();
        $this->db->insert('p3_g1_specialisation_intervenant', $data);
    }

}

?>