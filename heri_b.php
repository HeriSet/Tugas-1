<!DOCTYPE html>
<html>
<head>
	<title>TUGAS B</title>
	<style>
		.judul{ 
			font-size: 40px;
			text-align: center;
			}
		body {
			 margin: 0;
			 font-family: cambria;
			 color: solid black;
             background-color: red;      
			 } 
		article {
			color: solid black;
			float: left;
			width: 50%;
            height: 400px;	

		}
        section {
			background-color: white;
            margin-left: 270px;
            margin-right: 270px;
            margin-top: 100px;
			padding-bottom:320px;
			padding-top:20px;
			border-radius: 20px;
			background: rgba(255, 250, 250, 0.5);

        }
			
	</style>
</head>
<body background= "bg.jpg" style = "background-size: cover; background-attachment: fixed;">
    <?php
    $nim  = 192520029;
    $nama = "Heri Setyawan";
    $alamat = "Tamansari, Butuh, Purworejo";
    $alamat_email = "herisetyawan322@gmail.com";
    $bidang_minat = "Multimedia";

    ?>
	<section>
		<h1 class="judul">BIODATA DIRI</h1>
		<article>
		<img src="8.png" style = "margin-left: 150px; width: 200px;">
		</article>
		<article >
        <p>Nim  : <?php echo $nim ?></p>
		<p>Nama : <?php echo $nama ?></p>
		<p>Alamat : <?php echo $alamat ?></p>
		<p>Alamat Email : <?php echo $alamat_email ?></p>
        <p>Bidang Minat : <?php echo $bidang_minat ?></p>
		</article>
	</section>
</body>
</html>
