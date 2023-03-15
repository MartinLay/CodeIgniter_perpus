<?php

$nam_buku = [
	'name' => 'name',
	'id' => 'name',
	'value' => $buku->name,
	'class' => 'form-control',
];

$penulis =[
	'name' => 'penulis',
	'id' => 'penulis',
	'value' => $buku->penulis,
	'class' => 'form-control',
	'type' => 'number',
	'min' => 0,
];

$submit = [
	'name' => 'submit',
	'id' => 'submit',
	'value' => 'Submit',
	'class' => 'btn btn-success',
	'type' => 'submit',
];

?>
<h1>Add Product</h1>

<?= form_open_multipart('buku/update/'.$buku->id) ?>
	<div class="form-group">
		<?= form_label("Name", "name") ?>
		<?= form_input($name) ?>
	</div>

	<div class="form-group">
		<?= form_label("Price", "price") ?>
		<?= form_input($price) ?>
	</div>

	<div class="form-group">
		<?= form_label("Stock", "stock") ?>
		<?= form_input($stock) ?>
	</div>

	<img class="img-fluid" alt="image" src="<?= base_url('uploads/'.$items->image) ?>" />

	<div class="form-group">
		<?= form_label("Image", "image") ?>
		<?= form_upload($image) ?>
	</div>

	<div class="text-right">
		<?= form_submit($submit) ?>
	</div>

<?= form_close() ?>
<?= $this->endSection() ?>