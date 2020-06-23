<?php $this->load->view('_head'); ?>
<h2>Data Konsumen</h2>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
 Add Data
</button>
<br><br>
<table id="myTable" class="table table-condensed">
<?php $no = 1; ?>
	<thead>
	<tr>
		<th>NO</th>
		<th>Nama Konsumen</th>
		<th>Jenis Kendaraan</th>
		<th>No Polisi</th>
		<th>Tanggal Lahir</th>
		<TH>Jenis Kelamin</TH>
		<th>No Hp</th>
		<th>#</th>
	</tr>
	</thead>
	<tbody>
		<?php foreach ($konsumen as $v): ?>
			<tr>
				<td><?php echo $no++; ?></td>
			<td><?php echo $v->nama; ?></td>
			<td><?php echo $v->jenis_kendaraan; ?></td>
			<td><?= $v->no_polisi; ?></td>
			<td><?php echo $v->tanggal_lahir; ?></td>
			<td><?php echo $v->jenis_kelamin; ?></td>
			<td><?php echo $v->no_hp; ?></td>
			<td><div class="btn-group"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal<?= $v->id ?>">
Edit
</button><a href="<?php echo base_url('Konsumen/delete/').$v->id; ?>" class="btn btn-danger btn-sm">Delete</a></div></td>
			</tr>
			
		<?php endforeach ?>
	</tbody>
</table>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Konsumen</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form  class="" method="post" action="<?php echo base_url('Konsumen/add_exe'); ?>" enctype="multipart/form-data">
        	 <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Konsumen</label>
    <div class="col-sm-10">
      <input type="text" name="nama" class="form-control" id="inputEmail3" placeholder="nama konsumen">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Jenis Kendaraan</label>
    <div class="col-sm-10">
      <select name="jenis_kendaraan" class="form-control">
      	<option class="form-control" value="Mobil">Mobil</option>
      	<option class="form-control" value="Motor">Motor</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">No Polisi</label>
    <div class="col-sm-10">
      <input type="text" value="" name="no_polisi" class="form-control" id="inputPassword3">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Tanggal Lahir</label>
    <div class="col-sm-10">
      <input type="date" name="tgl_lahir" class="form-control" id="inputPassword3">
    </div>
  </div>
        <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Jenis Kelamin</label>
    <div class="col-sm-10">
      <select name="jenis_kelamin" class="form-control">
      	<option class="form-control" value="L">Laki - Laki</option>
      	<option class="form-control" value="P">Perempuan</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">No HP</label>
    <div class="col-sm-10">
      <input type="text" name="no_hp" class="form-control" id="inputPassword3">
    </div>
  </div>
      </div>
      <div class="modal-footer">
        <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
      </div>
      </form>
    </div>
  </div>
</div>
<!-- end modal-->
<!-- mmodal edit-->
<?php foreach ($konsumen as $p): ?>
	<div class="modal fade" id="myModal<?= $p->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">edit Data Konsumen</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form  class="" method="post" action="<?php echo base_url('Konsumen/edit_exe'); ?>" enctype="multipart/form-data">
        <input type="hidden" name="idd" value="<?= $p->id; ?>"></input>
        	 <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Konsumen</label>
    <div class="col-sm-10">
      <input type="text" name="ed_nama" value="<?php echo $p->nama; ?>" class="form-control" id="inputEmail3" placeholder="nama konsumen">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Jenis Kendaraan</label>
    <div class="col-sm-10">
      <select name="ed_jenis_kendaraan" class="form-control">
      	<option class="form-control" value="Mobil">Mobil</option>
      	<option class="form-control" value="Motor">Motor</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">No Polisi</label>
    <div class="col-sm-10">
      <input type="text" value="<?= $p->no_polisi; ?>" name="ed_no_polisi" class="form-control" id="inputPassword3">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Tanggal Lahir</label>
    <div class="col-sm-10">
      <input type="date" value="<?= $p->tanggal_lahir; ?>" name="ed_tgl_lahir" class="form-control" id="inputPassword3">
    </div>
  </div>
        <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Jenis Kelamin</label>
    <div class="col-sm-10">
      <select name="ed_jenis_kelamin" class="form-control">
      	<option class="form-control" value="L">Laki - Laki</option>
      	<option class="form-control" value="P">Perempuan</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">No HP</label>
    <div class="col-sm-10">
      <input type="text" value="<?= $p->no_hp; ?>" name="ed_no_hp" class="form-control" id="inputPassword3">
    </div>
  </div>
      </div>
      <div class="modal-footer">
        <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
      </div>
      </form>
    </div>
  </div>
</div>
<?php endforeach ?>

<!--end modal edit-->

<script type="text/javascript">
	$(document).ready(function(){
		 $('#myTable').DataTable()
		 $('#myModal').modal('show')
	}
</script>
<?php $this->load->view('_foot'); ?>
