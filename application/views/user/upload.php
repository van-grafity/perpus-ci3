<?php if(! defined('BASEPATH')) exit('No direct script acess allowed');?>
<div class="content-wrapper">
  <section class="content-header">
    <h1>
        <i class="fa fa-plus" style="color:green"> </i>  Upload Dokumen
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url('dashboard');?>"><i class="fa fa-dashboard"></i>&nbsp; Dashboard</a></li>
        <li class="active"><i class="fa fa-plus"></i>&nbsp; Upload Dokumen</li>
    </ol>
  </section>
  <section class="content">
	<div class="row">
	    <div class="col-md-12">
	        <div class="box box-primary">
                <div class="box-header with-border">
                </div>
			    <!-- /.box-header -->
			    <div class="box-body">
                    <form action="<?php echo base_url('user/do_upload');?>" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Nama Dokumen</label>
                                    <input type="text" class="form-control" name="nama" required="required" placeholder="Nama Dokumen">
                                </div>
                                <div class="form-group">
                                    <label>Kategori</label>
                                    <select name="kategori" class="form-control" required="required">
                                        <option value="">-- Pilih Kategori --</option>
                                        <option value="1">Dokumen</option>
                                        <option value="2">Laporan</option>
                                        <option value="3">Proposal</option>
                                        <option value="4">Surat</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>File</label>
                                    <input type="file" class="form-control" name="file" required="required">
                                </div>
                                <div class="form-group">
                                    <label>Keterangan</label>
                                    <textarea name="keterangan" class="form-control" required="required" placeholder="Keterangan"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Upload By</label>
                                    <input type="text" class="form-control" name="upload_by" required="required" placeholder="Upload By">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary btn-flat"><i class="fa fa-save"></i>&nbsp; Upload</button>
                            <a href="<?php echo base_url('user');?>" class="btn btn-warning btn-flat"><i class="fa fa-arrow-left"></i>&nbsp; Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </section>
</div>
                            