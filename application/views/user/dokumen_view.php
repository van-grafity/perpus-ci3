<?php if(! defined('BASEPATH')) exit('No direct script acess allowed');?>
<div class="content-wrapper">
  <section class="content-header">
    <h1>
      <i class="fa fa-edit" style="color:green"> </i>  Daftar Dokumen
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url('dashboard');?>"><i class="fa fa-dashboard"></i>&nbsp; Dashboard</a></li>
        <li class="active"><i class="fa fa-edit"></i>&nbsp; Daftar Dokumen</li>
    </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                </div>
                <div class="box-body">
                    <table class="table table-bordered table-striped" id="mytable">
                        <thead>
                            <tr>
                                <th width="5%">No</th>
                                <th>Nama Dokumen</th>
                                <th>Kategori</th>
                                <th>Deskripsi</th>
                                <th>File</th>
                                <th>Upload By</th>
                                <th>Tanggal Upload</th>
                                <th width="15%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>
                    </table>
                    <a href="<?php echo base_url('user');?>" class="btn btn-default btn-flat"><i class="fa fa-arrow-left"></i>&nbsp; Kembali</a>
                </div>
            </div>
            </div>
        </div>
    </section>
</div>
<script>
    $(document).ready(function(){
        $('#mytable').DataTable();
    });
</script>

<!-- <?php
$no = 1;
foreach($data as $row){
?>
<tr>
    <td><?php echo $no++;?></td>
    <td><?php echo $row->nama;?></td>
    <td><?php echo $row->kategori;?></td>
    <td><?php echo $row->deskripsi;?></td>
    <td><?php echo $row->file;?></td>
    <td><?php echo $row->upload_by;?></td>
    <td><?php echo $row->tgl_upload;?></td>
    <td>
        <a href="<?php echo base_url('user/edit/'.$row->id);?>" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i>&nbsp; Edit</a>
        <a href="<?php echo base_url('user/delete/'.$row->id);?>" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp; Hapus</a>
    </td>
</tr>
<?php
}
?> -->