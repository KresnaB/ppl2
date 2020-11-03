<?php
class m_mahasiswa extends CI_Model{

    public function __construct()
    {
        $this->load->database();
    }

    public function getMahasiswa()
    {
        $query = $this->db->query("select * from mahasiswa order by NIM");
        return $query->result();
    }
    public function insert($param){
        $query = "INSERT INTO mahasiswa VALUES ('".$param['nim']."', '".$param['nama']."', '".$param['umur']."','')";
        return $this->db->query($query);
    }
    public function search($param){
        $cari = $param['cari'];
        $query = $this->db->query("SELECT * FROM mahasiswa WHERE nama LIKE '%".$cari."%'");
        return $query->result();
    }
    public function detail($param){
        $query = $this->db->query("SELECT * FROM mahasiswa WHERE nim = $param");
        return $query->row();
    }
}
?>