<!DOCTYPE html>
 <html> 
 <head> 
    <title>Customer</title>
</head>
<body>
    <!-- <center> -->
    <h1>Data Customer</h1>
    <!-- </center> -->
    <!-- <center> -->
    <?php echo anchor('dashboard','Kembali');?>
    <?php echo anchor('dashboard/tambah_c','Tambah Data');?>
    <!-- </center> -->
    <table style="margin:20px;" border="1">
    <!-- <table>  -->
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Tempat lahir</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Status</th>
            <th>Nomor Rekening</th>
            <th>Cabang Pembuaka</th>
            <!-- <th>Jenmis Produk</th> -->
            <th>Action</th>
        </tr>
        <?php
        $no=1;
        foreach($customer as $c){
            // $nama_produk=$this->db->get_where('jenis_produk', array('id_produk'=>$c->jenis_prod))->row();
            ?>
        <tr>
            <td><?php echo $no++?></td>
            <td><?php echo $c->nama ?></td>
            <td><?php echo $c->tempat_lahir ?></td>
            <td><?php echo $c->tanggal_lahir ?></td>
            <td><?php echo $c->alamat ?></td>
            <td><?php echo $c->status ?></td>
            <td><?php echo $c->no_rekening ?></td>
            <td><?php echo $c->cabang_pembuka ?></td>
            <!-- <td><?php echo $nama_produk->jenis_prod ?></td> -->

            <td> 
                
                <?php echo anchor ('dashboard/edit_c/'.$c->id_customer,'Edit');?>
                <?php echo anchor ('dashboard/hapus_c/'.$c->id_customer,'Hapus');?>
                
            </td>
        </tr>
        <?php }?>
    </table>
</body>
</html>