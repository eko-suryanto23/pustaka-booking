<?php
class Coba extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
	 echo "Selamat datang di Webprograming II";
	}

    public function biodata($nama=null,$nim=null) 
    {
    //echo "Nama : $nama <br>";
    //echo " NIM : $nim";
    $data[ 'nama']=$nama;
    $data[ 'nim']=$nim;
    $this->load->view('V_Coba',$data);
    }
}

 
