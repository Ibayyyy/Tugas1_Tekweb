<!DOCTYPE html>
<html>
<head>
	<title>Biodata Kelompok</title>
</head>
<style>
	*{
		margin: 0;
		padding: 0;
		box-sizing: border=box;
	}

body{
	background: #FFDEAD;
}	

.team{
	display: flex;
}

.team .team_member{
	background: #C0C0C0;
	margin: 5px;
	margin-bottom: 50px;
	padding: 5px;
	line-height: 15px;
}

.team .team_member h3{
	color: #81c644;
	font-size: 26px;
	margin-top: 15px;
}

	</style>
<body>

<div class="wrapper">
	<h1 align="center" colspan="3"><font face="Time new roman">Daftar Anggota</h1><br/>
	<div class="team">
		<div class="team_member">
			<h3>
			<a href="<?php echo base_url('Biodata') ?>"><font size="5px">Iqbal Prayoga Willyana - 3411201040</a><br/><br/>	
			<h/h3>
			<p class="role"></p>
		</div>
	</div>

	<div class="team">
		<div class="team_member">
			<h3>
			<a href="<?php echo base_url('Biodata2') ?>"><font size="5px">Helmy Fauzan Wahyudiputra - 3411201013</a><br/><br/>
			<h/h3>
			<p class="role"></p>
		</div>
	</div>
	<div class="team">
		<div class="team_member">
			<h3>
			<a href="<?php echo base_url('Biodata3') ?>"><font size="5px">M Raqil Salman Alfarisi - 3411201005</a><br/><br/>
			<h/h3>
			<p class="role"></p>
		</div>
	</div>		
</div>
</body>
</html>