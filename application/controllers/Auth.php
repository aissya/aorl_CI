<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');

    }

    public function index()
    {
        if ($this->session->userdata('email')) {
            redirect('user');
        }     

        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        
        if($this->form_validation->run() == false) {
            $data['title'] = 'Login';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('navbar/navbar');
            $this->load->view('auth/login');
            $this->load->view('templates/auth_footer');

        }else {
            $this->_login();
        }
    }


    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email] )->row_array();
    
        //jika usernya ada
        if($user) {
            //jika usernya aktif
            if($user['is_active'] == 1) {
                //cek password
                if(password_verify($password, $user['password'])) {

                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id']
                    ];
                    $this->session->set_userdata($data);
                    if ($user['role_id'] == 1){
                        redirect('admin');
                    } else {
                        redirect('user');
                    }


                }else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    Incorrect Password.</div>');
                    redirect('auth');
                }

            } else{
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Email has not been activated.</div>');
                redirect('auth');
            }


        }else{
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Email is not registered.</div>');
            redirect('auth');
        }
        
    
    }

    public function registration()
    {
        if ($this->session->userdata('email')) {
            redirect('user');
        }     
        
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This Email has already registered!'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]', [
            'min_length' => 'Password too short!'
        ]);
        $this->form_validation->set_rules('address', 'Address', 'required|trim');
        $this->form_validation->set_rules('npk', 'NPK', 'required|trim|is_unique[user.NPK]|min_length[4]|max_length[4]', [
            'is_unique' => 'This NPK has already registered!',
            'min_length' => 'Incorrect NPK',
            'max_length' => 'Incorrect NPK'
        ]);
        


        if($this->form_validation->run() == false){
            $data['title'] = 'Registration';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('navbar/navbar');
            $this->load->view('auth/registration');
            $this->load->view('templates/auth_footer');

        }else {
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'npk' => htmlspecialchars($this->input->post('npk', true)),
                'image' => 'default.png',
                'address' => htmlspecialchars($this->input->post('address', true)),
                'password' => password_hash($this->input->post('password'),
                PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 1,
                'date_created' => time()
            ];

            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Congratulation! Your account has been created.</div>');
            redirect('auth');


        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        You have been logout.</div>');
        redirect('auth');
    }

    public function blocked()
    {
       $this->load->view('auth/blocked');
    }
    public function forgotPassword() {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Forgot Password';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('navbar/navbar');
            $this->load->view('auth/forgot-password');
            $this->load->view('templates/auth_footer');
        } else {
            $email = $this->input->post('email');
            $user = $this->db->get_where('user', ['email'=> $email])->row_array;

            if($user) { } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email is not registered!</div>');
                redirect('auth/forgotpassword');
            }
        }
    }
}
