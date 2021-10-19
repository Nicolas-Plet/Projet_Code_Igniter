<?php 

class Stagiaire extends CI_Controller {
    
    public function index()
    {
        if ($this->session->connected == false) {
            redirect(site_url('Acceuil/connection'));
        }

        $data['pageName'] = 'index';

        $this->load->view('body/header_connected', $data);
        $this->load->view('body/body_connected');
        $this->load->view('body/footer');
    }

    public function inscription()
    {
        $data['pageName'] = 'inscription';
        $this->load->view('body/header_default', $data);

        if ($this->input->post()) {
            $post = $this->input->post();

            $this->form_validation->set_rules('prenom', 'firstname', 'required|alpha');
            $this->form_validation->set_rules('nom', 'lastname', 'required|alpha');
            $this->form_validation->set_rules('telephone', 'telephone', 'required|numeric');
            $this->form_validation->set_rules('email', 'email', 'required|valid_email');
            $this->form_validation->set_rules('mdp', 'password', 'required|alpha_numeric');
            $this->form_validation->set_rules('adresse', 'adresse', 'required|alpha_numeric');

            if ($this->form_validation->run()) {
                $this->load->model('stagiaire_model');
                $post['mdp'] = $this->auth->crypt_password($post['mdp']);
                $this->stagiaire_model->add($post);

                redirect(site_url("Stagiaire/connection"));
            }
        }

        $this->load->view('inscription/stagiaire', $data);
        $this->load->view('body/footer');
    }

    public function connection()
    {
        $data['pageName'] = 'connection';
        $this->load->view('body/header_default', $data);

        if ($this->input->post()) {
            $post = $this->input->post();

            $this->form_validation->set_rules('email', 'email', 'required|valid_email');
            $this->form_validation->set_rules('password', 'password', 'required|alpha_numeric');

            if ($this->form_validation->run()) {
                $email = $this->input->post("email");
                $password = $this->input->post("password");

                if ($this->auth->login($email, $password, "stagiaire")) {
                    $this->session->connected = true;
                    $this->session->user_type = 'stagiaire';
                    redirect(site_url("Stagiaire/index"));
                }
                else {
                    echo 'Connection refusée , l\'adresse ou le mot de passe est incorrect';
                }
            }
        }
        $this->load->view('connection/stagiaire', $data);
        $this->load->view('body/footer');
    }

    public function deconnection()
    {
        $this->auth->logout(true);
        redirect(site_url("Acceuil/index"));
    }

    public function compte()
    {
        if ($this->session->connected == false) {
            redirect(site_url('Acceuil/connection'));
        }

        $data['pageName'] = 'compte';

        $this->load->view('body/header_connected', $data);
        $this->load->view('compte/stagiaire');
        $this->load->view('body/footer');
    }
}
