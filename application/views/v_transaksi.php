<!DOCTYPE html>
 <html> 
 <head> 
    <title>Transaksi</title>
</head>
<body>
    <!-- <center> -->
    <h1>Data Transaksi</h1>
    <!-- </center> -->
    <!-- <center> -->
    <?php echo anchor('dashboard','Kembali');?>
    <?php echo anchor('dashboard/tambah_t','Tambah Transaksi');?>
    <!-- </center> -->
    <table style="margin:20px;" border="1">
    <!-- <table>  -->
        <tr>
            <th>No</th>
            <th>Nomor Rekening</th>
            <th>Cabang</th>
            <th>Jenis Produk</th>
            <th>Debit</th>
            <th>Kredit</th>
            <th>Ballance</th>
            <th>Tanggal Transaksi</th>
            <!-- <th>Jenmis Produk</th> -->
            <th>Action</th>
        </tr>
        <?php
        $no=1;
        foreach($transaksi as $t){
            // $nama_produk=$this->db->get_where('jenis_produk', array('id_produk'=>$c->jenis_prod))->row();
            ?>
        <tr>
            <td><?php echo $no++?></td>
            <td><?php echo $t->no_rekening ?></td>
            <td><?php echo $t->cabang ?></td>
            <td><?php echo $t->jenis_produk ?></td>
            <td><?php echo $t->debit ?></td>
            <td><?php echo $t->kredit ?></td>
            <td><?php echo $t->balance ?></td>
            <td><?php echo $t->tanggal_transaksi ?></td>

         
            <td> 
            <?php echo anchor ('dashboard/edit_t/'.$t->id_transaksi,'Edit');?>
                <?php echo anchor ('dashboard/hapus_t/'.$t->id_transaksi,'Hapus');?>
            </td> 
        </tr>
        <?php }?>
    </table>
</body>
</html>