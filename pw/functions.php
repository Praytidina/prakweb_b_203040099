<?php
    function koneksi() {
        $conn = mysqli_connect("localhost", "root", "") or die ("koneksi ke DB gagal");
        mysqli_select_db($conn, "prakweb_2022_b_2030400099")or die ("Database salah!");

        return $conn;
    }

    function query($sql) {
        $conn = koneksi();
        $result = mysqli_query($conn, "$sql");
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
    
    return $rows;
    }

    function tambah($data) {
        $conn = koneksi();

        $id = htmlspecialchars($data['id']);
        $judul_buku = htmlspecialchars($data['judul_buku']);
        $pengarang = htmlspecialchars($data['pengarang']);
        $penerbit = htmlspecialchars($data['penerbit']);
        $taun_terbit = htmlspecialchars($data['tahun_terbit']);
        $harga = htmmlspecialchars($data['harga']);
        $gambar = htmlspecialchars($gambar['gambar']);

        $query = "INSERT INTO buku
                        VALUES
                        ('', '$id', '$judul_buku', '$pengarang', '$penerbit', '$tahun_terbit', '$harga', '$gambar')";
        mysqli_query($conn, $query);
        
        return mysqli_affected_rows($conn);
    }

    function hapus($id) {
        $conn = koneksi();
        mysqli_query($conn, "DELETE FROM buku WHERE id = $id");
        return mysqli_affected_rows($conn);
    }

    function ubah($data) {
        $conn = koneksi();
        $id = htmlspecialchars($data['id']);
        $judul_buku = htmlspecialchars($data['judul_buku']);
        $pengarang = htmlspecialchars($data['pengarang']);
        $penerbit = htmlspecialchars($data['penerbit']);
        $tahun_terbit = htmlspecialchars($data['tahun_terbit']);
        $harga = htmmlspecialchars($data['harga']);
        $gambar = htmlspecialchars($gambar['gambar']);

        $query = "UPDATE gadget
                SET
                gambar = '$gambar',
                judul_buku = '$judul_buku',
                pengarang = '$pengarang',
                penerbit = '$penerbit',
                tahun_terbit = '$tahun_terbit'
                harga = '$harga'
                gambar = ''$gambar'
                WHERE id = '$id'
                ";
        mysqli_query($conn, $query);
        
        return mysqli_affected_rows($conn);
    }

    function registrasi($data) {
        $conn = koneksi();
        $username = htmlspecialchars($data['username']);
        $password = htmlspecialchars($data['password']);

        $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
        if(mysqli_fetch_assoc($result)) {
            echo "<script>
                alert('Username sudah digunakan');
            </script>";
            return false;
        }

        $password = password_hash($password, PASSWORD_DEFAULT);
        $query = "INSERT INTO user VALUES
                ('', '$username', '$password')";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function cari($keyword) {
        $query = "SELECT * FROM gadget WHERE
                img LIKE '%$keyword%' OR
                nama LIKE '%$keyword%' OR
                deskripsi LIKE '%$keyword%' OR
                harga LIKE '%$keyword%' OR
                kategori LIKE '%$keyword%' ";
        return query($query);
    }
?>