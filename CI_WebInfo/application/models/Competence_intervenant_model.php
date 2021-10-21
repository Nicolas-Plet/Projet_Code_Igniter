<?php

class Competence_intervenant_model extends CI_Model {

    private $ref_id_intervenant;
    private $ref_id_competence;

    public function set_ref_id_intervenant($newRef_id_intervenant) {
        $this->ref_id_intervenant = $newRef_id_intervenant;
    }

    public function get_ref_id_intervenant() {
        return $this->ref_id_intervenant;
    }

    public function set_ref_id_competence($newRef_id_competence) {
        $this->ref_id_competence = $newRef_id_competence;
    }

    public function get_ref_id_competence() {
        return $this->ref_id_competence;
    }

    public function Initialize($array) {
        $this->ref_id_intervenant = $array['ref_id_intervenant'];
        $this->ref_id_competence = $array['ref_id_competence'];
    }

    public function add($data)
    {
        $this->load->database();
        $this->db->insert('p3_g1_competence_intervenant', $data);
    }

}

?>