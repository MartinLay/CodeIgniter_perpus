<h1>Buku</h1>
<table class="table">
	<thead>
		<th>No</th>
		<th>Judul Buku</th>
		<th>Penulis</th>
	</thead>
	<tbody>
		<?php foreach($bukus as $index=>$buku): ?>
			<tr>
				<td><?= ($index+1) ?></td>
				<td><?= $buku->name ?></td>
				<td>
					<a href="<?= site_url('buku/view/'.$buku->id) ?>" class="btn btn-primary">View</a>
					<a href="<?= site_url('buku/update/'.$buku->id) ?>" class="btn btn-success">Update</a>
					<a href="<?= site_url('buku/delete/'.$buku->id) ?>" onclick="return confirm('Delete Data?');" class="btn btn-danger">Delete</a>
				</td>
			</tr>
		<?php endforeach ?>
	</tbody>
</table>
<?= $this->endSection() ?>