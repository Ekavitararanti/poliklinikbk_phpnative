<?php
    class Poli{
        //member 1 variable
        private $koneksi;
        //member 2 konstruktor untuk koneksi database
        public function __construct()
        {
            global $dbh; //panggil instance objek di koneksi.php
            $this->koneksi = $dbh;
        }
        //member 3 method2 CRUD
        public function dataPoli(){
            $sql = "SELECT * FROM poli";
            //$data_pegawai = $dbh->query($sql);
            //menggunakan mekanisme prepare statement PDO
            $ps = $this->koneksi->prepare($sql);
            $ps->execute();
            $rs = $ps->fetchAll();
            return $rs;
        }

        public function simpan($data){
            $sql = "INSERT INTO poli (nama_poli, keterangan) VALUES (?,?)";
            //menggunakan mekanisme prepare statement PDO
            $ps = $this->koneksi->prepare($sql);
            $ps->execute($data);
        }

        public function getPoli($id){
            $sql = "SELECT * FROM poli WHERE id = ?";
            //menggunakan mekanisme prepare statement PDO
            $ps = $this->koneksi->prepare($sql);
            $ps->execute([$id]);
            $rs = $ps->fetch();
            return $rs;
        }   
        
        public function ubah($data){
            $sql = "UPDATE poli SET nama_poli=?, keterangan=? WHERE id=?";
            //menggunakan mekanisme prepare statement PDO
            $ps = $this->koneksi->prepare($sql);
            $ps->execute($data);
        }

        public function hapus($id){
            $sql = "DELETE FROM poli WHERE id=?";
            //menggunakan mekanisme prepare statement PDO
            $ps = $this->koneksi->prepare($sql);
            $ps->execute([$id]);
        }
        
    }
?>