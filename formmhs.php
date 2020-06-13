<html>
<style>
table, th, td {
    border: 1px solid black;}
    </style>
    <body>
    <table style = "width:50%">
    <tr>
    <td>NIM</td>
    <td><?php echo $_POST["NIM"];?></td>
    </tr>
    <tr>
    <td>NAMA</td>
    <td><?php echo $_POST["NAMA"];?></td>
    </tr>
    <tr>
    <td>JENIS KELAMIN</td>
    <td><?php echo $_POST["KELAMIN"];?></td>
    </tr>
    <tr>
    <td>ALAMAT</td>
    <td><?php echo $_POST["ALAMAT"];?></td>
    </tr>
    <tr>
    <td>PROGRAM STUDI</td>
    <td><?php echo $_POST["PRODI"];?></td>
    </tr>
    <tr>
    <td>BAHASA PEMROGRAMAN YANG DIKUASAI</td>
    <td><?php if (isset ($_POST['pilih'])){
        $pilih = $_POST['pilih'];
        echo "";
        for($i = 0; $i <count($pilih); $i++){
            echo $pilih[$i]."<br>";
        }
    }?>
    </td>
    </tr>
    </table>
    </body>
    </html>