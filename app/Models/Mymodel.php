<?php

namespace App\Models;

use CodeIgniter\Model;

class Mymodel extends Model  // mymodel = usermodel
{
	public function GetMahasiswa()
    {
        // $data = $this->db->query("SELECT * FROM mahasiswa");
		// return $data->result_array();

        $db = \Config\Database::connect();
        $data = $db->query('SELECT * FROM mahasiswa');
		return $data->getResultArray();
	}
}
?>