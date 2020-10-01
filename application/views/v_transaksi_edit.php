<html>
    <head>
        <title>Ubah Transaksi</title>
    </head>
    <body>
        <center><h2>Ubah Transaksi</h2></center>
        <?php foreach ($transaksi as $t){?>
       <form action="<?php echo base_url().'dashboard/update_t';?>" method ="post">
            <table style="margin:20px auto">
                <tr>
                    <td>NoRekening</td>
                    <td>
                    <input type="hidden" name="id" value="<?php echo $t->id_transaksi?>">
                    <input type="text" name="no_rekening" value="<?php echo $t->no_rekening?>">
                    </td>
                </tr>
                <tr>
                    <td>Cabang</td>
                    <td><input type="text" name="cabang" value="<?php echo $t->cabang?>"></td>
                </tr>
                <tr>
                <td>Jenis Produk</td>
                <td><input type="text" name="jenis_produk" value="<?php echo $t->jenis_produk?>"></td>
                </tr>
                <!-- <td><label for="produk">Produk</label></td>
                    <td>
                   
                    <select>
                    <option value="Tabungan">Tabungan</option>
                    <option value="Giro">Giro</option>
                    <option value="Deposito">Deposito</option>
                    </select>
                    </td> -->
                <tr>
                    <td>Debit</td>
                    <td><input type="text" name="debit" value="<?php echo $t->debit?>"></td>
                </tr>
                <tr>
                    <td>Kredit</td>
                    <td><input type="text" name="kredit" value="<?php echo $t->kredit?>"></td>
                </tr>
                <tr>
                    <td>Balance</td>
                    <td><input type="text" name="balance" value="<?php echo $t->balance?>"></td>
                </tr>
                <tr>
                    <td>Tanggal Transaksi</td>
                    <td><input type="date" name="tanggal_transaksi" value="<?php echo $t->tanggal_transaksi?>"></td>
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