<?php 
include_once 'c_koneksi.php';

class c_pelanggan{

    function insert($id, $nama, $alamat, $jk, $tlp){
        $conn = new c_koneksi();

        $sql = "INSERT INTO tb_member VALUES ('$id','$nama','$alamat', '$jk', '$tlp')";

        $query = mysqli_query($conn->koneksi(),$sql);


        if ($query) {
            echo "<script>alert('Data Berhasil Ditambahkan');window.location='../views/transaksi/v_registrasi_pelanggan.php'</script>";
         }

         else{

            echo "data gagal ditambahkan";
         }

    }

    function tampil(){
        $conn = new c_koneksi();

        $sql = "SELECT * FROM tb_member";

        $query = mysqli_query($conn->koneksi(), $sql);

        while($q = mysqli_fetch_object($query) ){

            $hasil[] = $q;
    }

        return $hasil;
    }
}

?>