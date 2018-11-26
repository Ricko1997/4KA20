<!DOCTYPE html>
<html>
<head>
	 <title>Tugas Web</title>
   <script>
            function validasi(){
                var npm = document.getElementById('npm');
                var nama = document.getElementById('nama');
                var kelas = document.getElementById('kelas');
                var password = document.getElementById('password');
                var password_confir = document.getElementById('password_confir');
 
                if (harusDiisi(npm, "npm belum diisi")) {
                    if (harusDiisi(nama, "nama belum diisi")) {
                        if (harusDiisi(kelas, "kelas belum diisi"))
                          if (harusDiisi(password, "password belum diisi"))
                            if (harusDiisi(password_confir, "password_confir belum diisi")) {
                            return true;
                        };
                    };
                };
                return false;
            }
 
            function harusDiisi(att, msg){
                if (att.value.length == 0) {
                    alert(msg);
                    att.focus();
                    return false;
                }
 
                return true;
            }
        </script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body background="zxc.JPG">

<center><h2>PENDAFTARAN</h2>
  <div class="col-5">
<form id="absensi" onsubmit="return validasi()" action="insert.php" method="post">
            <br><input class="form-control" type="text" placeholder="NPM" name="npm" id="npm"></br>
            <br><input class="form-control" type="text" placeholder="Nama" name="nama" id="nama"></br>
            <br><input class="form-control" type="text" placeholder="Kelas" name="kelas" id="kelas"></br>
            <br><input class="form-control" type="password" placeholder="Password" name="password" id="password"></br>
            <br><input class="form-control" type="password" placeholder="Password_Confirmation" name="password_confir" id="password_confir"></br>
            <br><input type="submit" value="Simpan" maxlength="100"/></br>
            <br><a href="view.php">LIHAT TABEL</a></br>
        </form>
        <script type="text/javascript">
            window.onload = function () {
                document.getElementById("password").onchange = validatePassword;
                document.getElementById("password_confir").onchange = validatePassword;
            }
            function validatePassword(){
                var pass2=document.getElementById("password_confir").value;
                var pass1=document.getElementById("password").value;
                if(pass1!=pass2)
                    document.getElementById("password_confir").setCustomValidity("Passwords Tidak Sama, Coba Lagi");
                else
                    document.getElementById("password_confir").setCustomValidity('');
            }
        </script>
</html> 