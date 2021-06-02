<?php
	defined('BASEPATH') OR exit('Akses langsung tidak diperbolehkan');
	//echo validation_errors();
?>

<section class="container-fluid">
	<div class="row">
		<div class="form-input clearfix">
			<div class="col-md-12">
				
				<?php
					if(isset($_SESSION['input_sukses']))
					{
				?>
						<div class="alert alert-success">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						  	<strong>Sukses!</strong> <?php echo $_SESSION['input_sukses']; ?>
						</div>
				<?php
					}
				?>

				<div class="panel panel-primary">
					<div class="panel-heading">Tambah Data Post</div>
					<div class="panel-body">
						<!-- <form action="<?php //echo base_url('home/tambahpost'); ?>" method="post" class="form-horizontal"> -->
						
						<?php echo form_open('home/tambahpost', ['class' => 'form-horizontal', 'method' => 'post']); ?>
							<!-- <div class="form-group <?php echo (form_error('id') != '') ? 'has-error has-feedback' : '' ?>">
								<label for="id" class="control-label col-sm-2">Id Post </label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="id" value="<?php echo set_value('id'); ?>">
									<?php echo (form_error('id') != '') ? '<span class="glyphicon glyphicon-remove form-control-feedback"></span>' : '' ?>
									<?php echo form_error('id'); ?>
								</div>
							</div> -->

							<div class="form-group">
								<label for="title" class="control-label col-sm-2">title </label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="title" value="<?php echo set_value('title'); ?>">
									<?php echo form_error('title'); ?>
								</div>
							</div>

							<div class="form-group">
								<label for="description" class="control-label col-sm-2">description </label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="description" value="<?php echo set_value('description'); ?>">
									<?php echo form_error('description'); ?>
								</div>
							</div>

							<div class="form-group">
								<label for="content" class="control-label col-sm-2">content </label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="content" value="<?php echo set_value('content'); ?>">
									<?php echo form_error('content'); ?>
								</div>
							</div>

							<div class="form-group">
								<label for="publish_date" class="control-label col-sm-2">publish_date </label>
								<div class="col-sm-10">
									<input type="date" class="form-control" name="publish_date" value="<?php echo set_value('publish_date'); ?>">
									<?php echo form_error('publish_date'); ?>
								</div>
							</div>

							<div class="form-group">
								<div class="btn-form col-sm-12">
									<a href="<?php echo base_url('home/lihatdata'); ?>"><button type="button" class='btn btn-default'>Batal</button></a>
									<button type="submit" class='btn btn-primary'>Simpan</button>
								</div>
							</div>
						<?php echo form_close(); ?>

					</div>
				</div>
			</div>
		</div>
	</div>
</section>