<?php
defined('BASEPATH') or die('No direct script access allowed!');

class Laporan_model extends CI_Model
{
    public function insert_data($data)
    {
        $result = $this->db->insert('laporan', $data);
        return $result;
    }
}


/* End of File: d:\Ampps\www\project\absen-pegawai\application\models\Karyawan_model.php */