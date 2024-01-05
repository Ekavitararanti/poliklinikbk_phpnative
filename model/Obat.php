<?php
    class Obat{
        //member 1 variable
        private $koneksi;
        //member 2 konstruktor untuk koneksi database
        public function __construct()
        {
            global $dbh; //panggil instance objek di koneksi.php
            $this->koneksi = $dbh;
        }
        //member 3 method2 CRUD
        public function dataObat(){
            $sql = "SELECT * FROM obat";
            //$data_pegawai = $dbh->query($sql);
            //menggunakan mekanisme prepare statement PDO
            $ps = $this->koneksi->prepare($sql);
            $ps->execute();
            $rs = $ps->fetchAll();
            return $rs;
        }

        public function simpan($data){
            $sql = "INSERT INTO obat (nama_obat, kemasan, harga) VALUES (?,?,?)";
            //menggunakan mekanisme prepare statement PDO
            $ps = $this->koneksi->prepare($sql);
            $ps->execute($data);
        }

        public function getObat($id){
            $sql = "SELECT * FROM obat WHERE id = ?";
            //menggunakan mekanisme prepare statement PDO
            $ps = $this->koneksi->prepare($sql);
            $ps->execute([$id]);
            $rs = $ps->fetch();
            return $rs;
        }   
        
        public function ubah($data){
            $sql = "UPDATE obat SET nama_obat=?, kemasan=?, harga=? WHERE id=?";
            //menggunakan mekanisme prepare statement PDO
            $ps = $this->koneksi->prepare($sql);
            $ps->execute($data);
        }

        public function hapus($id){
            $sql = "DELETE FROM obat WHERE id=?";
            //menggunakan mekanisme prepare statement PDO
            $ps = $this->koneksi->prepare($sql);
            $ps->execute([$id]);
        }
        
    }
?>