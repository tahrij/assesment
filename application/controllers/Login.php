<?php
class Login extends CI_Controller
{

  public function index()
  {
    $data['tittle'] = 'Login';
    if (isset($_SESSION['username']) == "") {
      $this->load->view('vlogin', $data);
    } else {
      redirect('Login/dashboard');
    }
  }

  function dashboard()
  {
    $data['tittle'] = 'Dashboard';
    $this->load->view('dashboard', $data);
  }


  /*
  Untuk melakukan validasi username dan password ke tabel user
  */
  public function validasi()
  {
    // load model user
    $this->load->model('MUser');

    $user = $this->input->post('username');
    $pass = $this->input->post('password');

    $hasil = $this->MUser->get_validasi($user, $pass);
    if ($hasil == true) {
      // login sukses (username/password cocok dg tabel)
      //echo "Sukses";
      $this->session->set_userdata('username', $user);
      // $_SESSION['username'] = $user;
      $this->load->view('dashboard');
      //$this->load->view('dashboard');
    } else {
      // login gagal
      $this->session->set_flashdata('salah', true);
      redirect('Login');
    }
  }

  function logout()
  {
    session_destroy();
    redirect('Login');
  }
}
