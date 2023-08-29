<?php
@session_start();
require('../global.php');

connected_only();

$pageinfo = "Organiser une visite";
$pageactive = "RDV1";

include('templates/meta.php');
?>

<body>
	<div class="loader-bg">
		<div class="loader-track">
			<div class="loader-fill"></div>
		</div>
	</div>
	<?php include('templates/menu.php'); ?>
	<?php include('templates/header.php'); ?>
	<div class="pcoded-main-container">
		<div class="pcoded-wrapper">
			<div class="pcoded-content">
				<div class="pcoded-inner-content">
					<div class="page-header">
						<div class="page-block">
							<div class="row align-items-center">
								<div class="col-md-12">
									<div class="page-header-title">
										<h5 class="m-b-10">
											Site web
										</h5>
									</div>
									<ul class="breadcrumb">
										<li class="breadcrumb-item">
											<a href=""><i class="feather icon-home"></i></a>
										</li>
										<li class="breadcrumb-item"><a href="javascript:">Site web</a></li>
										<li class="breadcrumb-item"><a href="javascript:">Publier sur le site web</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="main-body">
						<div class="page-wrapper">
							<div class="row">
								<div class="col-sm-12">
									<div class="card"><div class="card-header">
                                            <h5>Publication</h5>
                                            <p>Remplissez le formulaire ci-dessous afin de publier du nouveau contenu sur le site web.</p>
                                        </div>
										<div class="card-body">
											<hr><br>
											<div class="row">
												<div class="col-md-12">
													<form method="post" action="<?php echo $url; ?>inc/actions/site_publier.php" enctype="multipart/form-data">
														<label for="publi_titre" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Titre :</label>
															<input class="form-control" type="text" name="publi_titre" id="publi_titre" placeholder="Insérez un titre"></input><br>
														<label for="short_text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Texte bref (résumé) :</label>
															<input class="form-control" type="text" name="short_text" id="short_text" placeholder="Insérez un texte bref"></input><br>
														<label for="url_image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">URL de l'image :</label>
															<input class="form-control" type="text" name="url_image" id="url_image" placeholder="Insérez l'URL de votre image"></input><br>
														<label for="publi_texte" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Texte :</label>
															<textarea class="form-control" cols="40" rows="5" name="publi_texte" id="publi_texte" placeholder="Insérez votre texte"></textarea><br>
														</div>
											</div>
														<input type="submit" value="Publier" class="btn btn-primary" />
													</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	<script src="assets/js/vendor-all.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/js/pcoded.min.js"></script>

<div class="modal fade" id="ok" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="tbmodal">
			<h3 style="color:white;">La publication vient d'être envoyée.</h3>
		</div>
	</div>
</div>
<div class="modal fade" id="erreur" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="tbmodal">
			<h3 style="color:white;">Merci de remplir tous les champs.</h3>
		</div>
	</div>
</div>

<?php
	if(isset($_GET['action'])) 
	{
		$errlogin = htmlspecialchars($_GET['action']);
		
		switch($errlogin)
		{
			case 'ok':
?>
<script>
    $(document).ready(function()
    {
        $("#ok").modal('show');
    });
</script>
<?php  }

switch($errlogin) {
		case 'erreur':
			{
?>
<script>
    $(document).ready(function()
    {
        $("#erreur").modal('show');
    });
</script>
<?php break; } } } ?>	

</body>

</html>