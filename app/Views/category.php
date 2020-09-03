<?= $this->extend("templetes") ?>
<?= $this->section("title") ?>

Kategori

<?= $this->endSection() ?>
<?= $this->section("content") ?>

<br><br>
<form method="post" action="<?= base_url('/insert_category') ?>">
	<div class="form-group">
		<label>Nama Kategori</label>
		<input type="text" name="name" class="form-control" required>
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-block btn-info">
			Submit
		</button>
	</div>
</form>

<?= $this->endSection() ?>