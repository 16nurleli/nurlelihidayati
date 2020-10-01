<html>
    <head>
        <title>Customer tambah</title>
    </head>
    <body>
    <?php foreach ($customer as $c){?>
       <form action="<?php echo base_url().'dashboard/update_c';?>" method ="post">
            <table style="margin:20px auto">
                <tr>
                    <td>Nama</td>
                    <td><input type="hidden" name="id_customer" value="<?php echo $c->id_customer?>">
                    <input type="text" name="nama" value="<?php echo $c->nama?>"></td>
                </tr>
                <tr>
                    <td>Tempat lahir</td>
                    <td><input type="text" name="tempat_lahir" value="<?php echo $c->tempat_lahir?>"></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td><input type="date" name="tanggal_lahir" value="<?php echo $c->tanggal_lahir?>"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat" value="<?php echo $c->alamat?>"></td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td><input type="text" name="status" value="<?php echo $c->status?>"></td>
                </tr>
                <tr>
                    <td>Nomor rekening</td>
                    <td><input type="text" name="no_rekening" value="<?php echo $c->no_rekening?>"></td>
                </tr>
                <tr>
                    <td>Cabang pembuka</td>
                    <td><input type="text" name="cabang_pembuka" value="<?php echo $c->cabang_pembuka?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Simpan"></td>
                </tr>
            </table>
       </form>
       <?php } ?>
    </body>
</html>