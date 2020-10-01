<html>
    <head>
        <title>Customer tambah</title>
    </head>
    <body>
        
       <form action="<?php echo base_url().'dashboard/tambah_aksi_c';?>" method ="post">
            <table style="margin:20px auto">
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>Tempat lahir</td>
                    <td><input type="text" name="tempat_lahir"></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td><input type="date" name="tanggal_lahir"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat"></td>
                </tr>
                <tr>
                <td>Status</td>
                <td><input type="text" name="status"></td>
                </tr>
                <!-- <tr>
                    <td><label for="status">Status</label></td>
                    <td>
                    
                    <select>
                    <option value="Menikah">Menikah</option>
                    <option value="Duda">Duda</option>
                    <option value="Single">Single</option>
                    <option value="Janda">Janda</option>

                    </select>
                    </td>
                </tr> -->
                <tr>
                    <td>Nomor rekening</td>
                    <td><input type="text" name="no_rekening"></td>
                </tr>
                <tr>
                    <td>Cabang pembuka</td>
                    <td><input type="text" name="cabang_pembuka"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Tambah"></td>
                </tr>
            </table>
       </form>
    </body>
</html>