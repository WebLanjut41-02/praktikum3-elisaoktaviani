<html>
<head>
<title>Form</title>
</head>
<body>
<form action="<?php echo base_url();?>CI2/index.php/C_mendaftarpesan/index">
<?php echo validation_errors(); ?>

<?php echo form_open('form'); ?>

<h5>Nama</h5>
<input type="text" name="nama" value="" size="70" />

<div><input type="submit" value="Submit" /></div>

</form>

</body>
</html>

