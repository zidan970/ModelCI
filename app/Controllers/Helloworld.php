<?php

namespace App\Controllers;

use \CodeIgniter\Controller;
use \App\Models\Mymodel;

class Helloworld extends BaseController
{
    // public function index()
    // {
    //     #$this->load->view('hello_ci');
    //     $data = array
    //     (
    //         'nama' => "John Smith",
    //         'alamat' => "Cambridge, USA",
    //         'kampus' => "Harvard"
    //     );
    //     echo view('hello_ci', $data);
    // }
    public function index()
    {
        // $db = \Config\Database::connect();
        // $data = $db->query('SELECT * FROM mahasiswa');
        // $results = $data->getResultArray();

        // foreach ($results as $mahasiswa) 
        // {
        //     echo "Nama : ".$mahasiswa['nama']."<br/>";
        //     echo "Alamat : ".$mahasiswa['alamat']."<hr/>";
        // }

        // $this->load->model('mymodel');
        $this->mymodel = new Mymodel();
        $data = $this->mymodel->GetMahasiswa();

		foreach ($data as $mahasiswa) 
        {
			echo "Nama : ".$mahasiswa['nama']."<br/>";
			echo "Alamat : ".$mahasiswa['alamat']."<hr/>";
		}
    }
    public function fungsi()
    {
        echo "Function fungsi dari Controller Helloworld";
    }
    public function parameters($nama)
    {
        echo "Selamat datang ".$nama;
    }
}