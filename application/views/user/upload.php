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
			    <div class="box-body">
                    <form action="<?php echo base_url('user/submit');?>" method="POST" enctype="multipart/form-data">
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
                                <!-- deskripsi -->
                                <div class="form-group">
                                    <label>Deskripsi</label>
                                    <textarea name="deskripsi" class="form-control" rows="3" placeholder="Deskripsi Dokumen"></textarea>
                                </div>
                                <!-- file -->
                                <div class="form-group">
                                    <label>File</label>
                                    <input type="file" name="file" class="form-control" required="required">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-flat"><i class="fa fa-save"></i>&nbsp; Upload</button>
                                    <a href="<?php echo base_url('user');?>" class="btn btn-default btn-flat"><i class="fa fa-arrow-left"></i>&nbsp; Kembali</a>
                                </div>
                                <input type="hidden" name="upload_by" value="<?php echo $this->session->userdata('id_user');?>">
                                <input type="hidden" name="tgl_upload" value="<?php echo date('Y-m-d');?>">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </section>
</div>