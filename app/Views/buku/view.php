<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<h1>Product View</h1>
<div class="container">
	<div class="row">
		<div class="col-6">
			<div class="card">
				<div class="card-body">
					<img width="200" class="img-fluid" alt="image" src="<?= base_url('uploads/'.$items->image) ?>" />
				</div>
			</div>
		</div>
		<div class="col-6">
			<h1 class="text-success"><?= $buku->name ?></h1>
		</div>
	</div>
</div>
<?= $this->endSection() ?>