<html>
    <head>
        <title>Tambah transaksi</title>
    </head>
    <body>
        <center><h2>Tambah Transaksi</h2></center>
       <form action="<?php echo base_url().'dashboard/tambah_aksi_t';?>" method ="post">
            <table style="margin:20px auto">
                <tr>
                    <td>NoRekening</td>
                    <td><input type="text" name="no_rekening"></td>
                </tr>
                <tr>
                    <td>Cabang</td>
                    <td><input type="text" name="cabang"></td>
                </tr>
                <tr>
                <td>Jenis Produk</td>
                <td><input type="text" name="jenis_produk"></td>
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
                    <td><input type="text" name="debit"></td>
                </tr>
                <tr>
                    <td>Kredit</td>
                    <td><input type="text" name="kredit"></td>
                </tr>
                <tr>
                    <td>Balance</td>
                    <td><input type="text" name="balance"></td>
                </tr>
                <tr>
                    <td>Tanggal Transaksi</td>
                    <td><input type="date" name="tanggal_transaksi"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Tambah"></td>
                </tr>
            </table>
       </form>
    </body>
</html>