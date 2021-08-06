<?php

class controller{

    //fungsi login
    function login($con, $tabel, $username, $password, $redirect){
        $sql = "SELECT * FROM $tabel login WHERE username = '$username' and password = '$password'";
        $jalan = mysqli_query($con, $sql);
        $cek = mysqli_num_rows($jalan);
        if($cek > 0){
            echo "<script>alert('Selamat datang $username');document.location.href='$redirect'</script>";
        }else{
            echo "<script>alert('Gagal login. Cek username & password !');document.location.href='index.php'</script>";
        }
    }
    //penutup fungsi login

    //fungsi simpan
    function simpan($con, $tabel, array $field, $redirect){
        $sql = "INSERT into $tabel SET "; //diakhir SET harus pake spasi -> insert into login set
    
        foreach($field as $key => $value){
            $sql.=" $key = '$value',"; //sebelum key dikasih spasi
        }
        //-> username = '$_POST[username]', password = '$_POST[password]',

        $sql = rtrim($sql, ',');
        //-> insert into login set username = '$_POST[username]', password = '$_POST[password]'

        $jalan = mysqli_query($con, $sql);
        if($jalan){
            echo "<script>alert('Berhasil disimpan');document.location.href='$redirect'</script>";
        }else{
            echo "<script>alert('Gagal disimpan');document.location.href='$redirect'</script>";
        }
    }
    //penutup fungsi simpan

    //fungsi tampil
    function tampil($con, $tabel){
        $sql = "SELECT * FROM $tabel";
        $jalan = mysqli_query($con, $sql);
        while($data = mysqli_fetch_assoc($jalan))
            $sisi[] = $data;
            return @$sisi; 
    }
    //penutup fungsi tampil

    //fungsi hapus
    function hapus($con, $tabel, $where, $redirect){
        $sql = "DELETE FROM $tabel WHERE $where";
        $jalan = mysqli_query($con, $sql);
        if($jalan){
            echo "<script>alert('Berhasil dihapus');document.location.href='$redirect'</script>";
        }else{
            echo "<script>alert('Gagal dihapus');document.location.href='$redirect'</script>";
        }
    }
    //penutup fungsi hapus

    //fungsi edit
    function edit($con, $tabel, $where){
        $sql = "SELECT * FROM $tabel WHERE $where";
        $jalan = mysqli_query($con, $sql);
        $tampung = mysqli_fetch_assoc($jalan);
        return $tampung;
    }
    //penutup fungsi edit

    //fungsi ubah
    function ubah($con, $tabel, array $field, $where, $redirect){
        $sql = "UPDATE $tabel SET ";//inget dibelakang SET ada spasi
        foreach($field as $key => $value){
            $sql.=" $key = '$value',";
        }
        $sql = rtrim($sql,',');
        $sql.= " WHERE $where";
        // $sql -> UPDATE login SET username='budi', password='123' WHERE id=1;

        $jalan = mysqli_query($con, $sql);

        if($jalan){
            echo "<script>alert('Berhasil diubah');document.location.href='$redirect'</script>";
        }else{
            echo "<script>alert('Gagal diubah');document.location.href='$redirect'</script>";
        }
    }
    //penutup fungsi ubah

    //fungsi upload file
    function upload($foto, $tempat){
        $alamat = $foto['tmp_name'];//temporary [tmp] untuk menampunng sementara
        $namafile = $foto['name'];
        move_uploaded_file($alamat, "$tempat/$namafile"); //ini untuk memindahkan 'move' dari tmp diatas
        return $namafile;
    }
    //penutup fungsi upload file
}

?>