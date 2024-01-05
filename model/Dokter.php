<?php
    class Dokter{
        //member 1 variable
        private $koneksi;
        //member 2 konstruktor untuk koneksi database
        public function __construct()
        {
            global $dbh; //panggil instance objek di koneksi.php
            $this->koneksi = $dbh;
        }
        //member 3 method2 CRUD
        public function dataDokter(){
            $sql = " SELECT d.*,  
            p.nama_poli
            FROM dokter d 
            INNER JOIN poli p ON p.id = d.id_poli;
                ORDER BY d.id DESC";
            //$data_pegawai = $dbh->query($sql);
            //menggunakan mekanisme prepare statement PDO
            $ps = $this->koneksi->prepare($sql);
            $ps->execute();
            $rs = $ps->fetchAll();
            return $rs;
        }

        public function simpan($data){
            $sql = "INSERT INTO dokter (nama, alamat, no_hp, id_poli) VALUES (?,?,?,?)";
            //menggunakan mekanisme prepare statement PDO
            $ps = $this->koneksi->prepare($sql);
            $ps->execute($data);
        }

        public function getDokter($id){
            $sql = " SELECT d.*,  
                p.nama_poli
                FROM dokter d 
                INNER JOIN poli p ON p.id = d.id_poli
                WHERE d.id = ?";
            //menggunakan mekanisme prepare statement PDO
            $ps = $this->koneksi->prepare($sql);
            $ps->execute([$id]);
            $rs = $ps->fetch();
            return $rs;
        }   
        
        public function ubah($data){
            $sql = "UPDATE dokter SET nama=?, alamat=?, no_hp=?, id_poli=? WHERE id=?";
            //menggunakan mekanisme prepare statement PDO
            $ps = $this->koneksi->prepare($sql);
            $ps->execute($data);
        }

        public function hapus($id){
            $sql = "DELETE FROM dokter WHERE id=?";
            //menggunakan mekanisme prepare statement PDO
            $ps = $this->koneksi->prepare($sql);
            $ps->execute([$id]);
        }
        
    }
?>