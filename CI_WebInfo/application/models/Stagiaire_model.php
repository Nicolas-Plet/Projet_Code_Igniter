<?php

class Stagiaire_model extends CI_Model
{

    private $id;
    private $nom;
    private $prenom;
    private $telephone;
    private $email;
    private $mdp;
    private $adresse;

    public function set_id($newid)
    {
        $this->id = $newid;
    }

    public function get_id()
    {
        return $this->id;
    }

    public function set_nom($newNom)
    {
        $this->nom = $newNom;
    }

    public function get_nom()
    {
        return $this->nom;
    }

    public function set_prenom($newPrenom)
    {
        $this->prenom = $newPrenom;
    }

    public function  get_prenom()
    {
        return $this->prenom;
    }

    public function set_telephone($newTelephone)
    {
        $this->telephone = $newTelephone;
    }

    public function  get_telephone()
    {
        return $this->telephone;
    }

    public function set_email($newEmail)
    {
        $this->email = $newEmail;
    }

    public function get_email()
    {
        return $this->email;
    }

    public function set_mdp($newMdp)
    {
        $this->mdp = $newMdp;
    }

    public function get_mdp()
    {
        return $this->mdp;
    }

    public function set_adresse($newAdresse)
    {
        $this->adresse = $newAdresse;
    }

    public function  get_adresse()
    {
        return $this->adresse;
    }

    //Fonction de simplification de l'utilisation de l'API PHP

    public function  Initialize($array)
    {
        $this->id = $array['id'];
        $this->nom = $array['nom'];
        $this->prenom = $array['prenom'];
        $this->telephone = $array['telephone'];
        $this->email = $array['email'];
        $this->mdp = $array['mdp'];
        $this->adresse = $array['adresse'];
    }

    public function select_all()
    {
        $this->load->database();
        $this->db->select('*');
        $this->db->from('p3_g1_stagiaire');
        $query = $this->db->get();
        return $query->result();
    }

    public function select_by_id($id) 
    {
        $this->load->database();
        $this->db->where('id', $id);
        $this->db->select('*');
        $this->db->from('p3_g1_stagiaire');
        $query = $this->db->get();
        return $query->result();
    }

    public function add($data)
    {
        $this->load->database();
        $this->db->insert('p3_g1_stagiaire', $data);
    }

    public function update($data)
    {
        $this->load->database();

        $this->db->where('id', $data['id']);
        $this->db->update('p3_g1_stagiaire', $data);
    }

    public function delete($id)
    {
        $this->load->database();
        $this->db->where('id', $id);
        $this->db->delete('p3_g1_stagiaire');
    }
}
