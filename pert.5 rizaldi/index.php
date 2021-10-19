<html>
    <head>
        <title>Embed CSS</title>
        <style>
            body{ 
                width: 70%;
                margin: auto;
            }

            h1{
                color:red;
                font-family:arial;
            
            }

            h2{
                color:black;
                /* font-family;verdana; */
                /* font-style:oblique; */
                font-variant-caps: small-caps;
            }

            p{
                color:black;
                font-family:calibry;
            }

            label{
                font-family:arial;
                color:blue;
            }

            input[type=text]{
                width: 100%;
                padding: 11px 22px;
                margin: 8px 0;
                box-sizing: border-box;
            }

            textarea {
                width: 100%;
                height: 100px;
                padding: 12px 20px;
                margin: 10px 0px;
                box-sizing: border-box;
                border: 2px solid #ccc;
                border-radius: 4px;
                background-color: #f8f8f8;
                resize: none;
            }

            input[type=button], input[type=submit], input[type=reset] {
                background-color: #4CAF50;
                border: none;
                color: white;
                padding: 16px 32px;
                text-decoration: none;
                margin: 4px 0px;
                cursor: pointer;
                float: right;
            }

        </style>
    </head>
    <body>
        <center>
        <h1>Formulir Pendaftaran</h1>
        <h2>Training of Trainer & Rekrutmen Relawan</h2>
        <h2>Yayasan Taman Semesta</h2>
        </center>
        <p><b>Assalamualaikum</b></p> 
        
            <p>Semoga menjumpa dalam keadaan sehat. Kami mengucapkan terima kasih atas ketertarikan teman-teman mengikuti TOT dan Rekrutmen relawan ini. Agar memudahkan kami dalam mengenal calon peserta, silahkan mengisi formulir di bawah ini.
        </p>

        <form action="" method="POST">
            <h2>1. Identitas</h2>
            <label>Nama : </label>
            <input type="text" name="nama" id="name" />
            <label>Alamat : </label>
            <textarea name="alamat"></textarea>
            <label>Tempat/Tanggal lahir :</label>
            <input type="text" name="ttl" />
            <label>Asal Perguruan :</label>
            <input type="text" name="asalperguruan" />
            <label>Jurusan :</label>
            <input type="text" name="jurusan" />
            <label>No.HP :</label>
            <input type="text" name="hp" />
            <h2>2. Motivasi</h2>
            <label>Pendapat dan Impianmu Tentang Pendidikan Indonesia :</label>
            <textarea name="pendapat"></textarea>
            <label>Alasan Bergabung Pada Yayasan Ini :</label>
            <textarea name="alasan"></textarea>
            <label>Harapan Setelah di Terima :</label>
            <textarea name="harapan"></textarea>
            <span>*Silahkan kirim formulir ini ke bone_tesa@yahoo.com</span>
            <input type="submit" name="proses" value="Proses" />
        </form>

    </body>
</html>