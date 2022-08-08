<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller 
{
    public function index()
    {
        //mengambil data dari session usrdata pada Auth berdasarkan email yang ada pada session 
        $data['tittle'] = 'My Profile';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        
        $this->load->view('user/index', $data);
    }
}