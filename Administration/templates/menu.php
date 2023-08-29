<?php
      // On recupere l'URL de la page pour ensuite affecter class = "active" aux liens de nav
      $page = $_SERVER['REQUEST_URI'];
      $page = str_replace("/siteyetistudio/", "",$page);
?>
    
    <nav class="pcoded-navbar">
        <div class="navbar-wrapper">
            <div class="navbar-brand header-logo">
                <a href="<?php echo $url; ?>/accueil.php" class="b-brand">
                    <div class="b-bg">
                        <i class="fa fa-wrench"></i>
                    </div>
                    <span class="b-title">PM, R & M Avocats</span>
                </a>
                <a class="mobile-menu" id="mobile-collapse" href="javascript:"><span></span></a>
            </div>
            <div class="navbar-content scroll-div">
                <ul class="nav pcoded-inner-navbar">
                    <li class="nav-item pcoded-menu-caption">
                        <label>Navigation</label>
                    </li>
                    <li data-username="Accueil" <?php if ($pageactive == "Accueil") {  ?> class="nav-item active" <?php } ?>>
                        <a href="accueil.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Accueil</span></a>
                    </li>
                    <li class="nav-item pcoded-menu-caption">
                        <label>SITE WEB</label>
                    </li>
                    <li data-username="Publier sur le site web" <?php if ($pageactive == "RDV1") {  ?> class="nav-item active" <?php } ?>>
                        <a href="<?php echo $url; ?>Administration/publication_publier.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Publier sur le site web</span></a>
                    </li>
                    <li data-username="Modifier une publication" <?php if ($pageactive == "RDV2") {  ?> class="nav-item active" <?php } ?>>
                        <a href="<?php echo $url; ?>Administration/publications_liste.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-clock"></i></span><span class="pcoded-mtext">Gérer les publications</span></a>
                    </li>
					 <li data-username="Archive des publications" <?php if ($pageactive == "RDV3") {  ?> class="nav-item active" <?php } ?>>
                        <a href="<?php echo $url; ?>Administration/publications_archives.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-trash"></i></span><span class="pcoded-mtext">Archive des publications</span></a>
                    </li>
                    <li class="nav-item pcoded-menu-caption">
                        <label>Ressources humaines</label>
                    </li>
                    <!-- <li data-username="rediger CR" class="nav-item">
                        <a href="<?php echo $url; ?>/redact_cr.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-edit"></i></span><span class="pcoded-mtext">Rédiger CR</span></a>
                    </li> -->
                    <!--<li data-username="Liste des comptes-rendus" <?php if ($pageactive == "CR") {  ?> class="nav-item active" <?php } ?>>
                        <a href="<?php echo $url; ?>Administration/liste_cr.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Liste des comptes rendus</span></a>
                    </li> -->
                    <!--<li data-username="Liste des comptes" <?php if ($pageactive == "LM") {  ?> class="nav-item active" <?php } ?>>
                        <a href="<?php echo $url; ?>Administration/liste_comptes.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-list"></i></span><span class="pcoded-mtext">Liste des médecins</span></a>
                    </li> -->
                    <li data-username="Ajouter un compte" <?php if ($pageactive == "AM") {  ?> class="nav-item active" <?php } ?>>
                        <a href="<?php echo $url; ?>Administration/ajouter_compte.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-plus-circle"></i></span><span class="pcoded-mtext">Ajouter un compte</span></a>
                    </li>
                    <!--<li class="nav-item pcoded-menu-caption">
                        <label>Chart & Maps</label>
                    </li>
                     <li data-username="Charts Morris" class="nav-item"><a href="<?php echo $url; ?>/chart-morris.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-pie-chart"></i></span><span class="pcoded-mtext">Chart</span></a></li> -->
                     <?php if ($user['grade'] >= 3) { ?>
                    <li class="nav-item pcoded-menu-caption">
                        <label>Administration</label>
                    </li>
                    <li data-username="Paramètres du site" <?php if ($pageactive == "PARAMS") {  ?> class="nav-item active" <?php } ?>><a href="<?php echo $url; ?>Administration/site_settings.php" class="nav-link"><span class="pcoded-micon"><i class="feather icon-settings"></i></span><span class="pcoded-mtext">Paramètres du site</span></a></li>
                    <!--<li data-username="Notifications" <?php if ($pageactive == "NOTIFS") {  ?> class="nav-item active" <?php } ?>><a href="<?php echo $url; ?>Administration/notifications.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-bell"></i></span><span class="pcoded-mtext">Notifications</span></a></li>-->
                    <!--<li data-username="Création de compte"><a href="<?php echo $url; ?>Administration/inscription.php" class="nav-link"><span class="pcoded-micon"><i class="feather icon-plus-circle"></i></span><span class="pcoded-mtext">Création de compte</span></a></li>-->
                    <li data-username="Historique (logs)" <?php if ($pageactive == "LOGS") {  ?> class="nav-item active" <?php } ?>><a href="<?php echo $url; ?>Administration/logs.php" class="nav-link"><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Historique (logs)</span></a></li>
                    <?php } ?>

                    <li class="nav-item pcoded-menu-caption">
                        <label>Mon compte</label>
                    </li>
                    <!-- <li data-username="" class="nav-item pcoded-hasmenu">
                        <a href="javascript:" class="nav-link "><span class="pcoded-micon"><i class="feather icon-lock"></i></span><span class="pcoded-mtext">Authentication</span></a>
                        <ul class="pcoded-submenu">
                            <li class=""><a href="auth-signup.html" class="" target="_blank">S'enregistrer</a></li>
                            <li class=""><a href="auth-signin.html" class="" target="_blank">Connexion</a></li>
                        </ul>
                    </li>
                    <li data-username="Sample Page" class="nav-item"><a href="sample-page.php" class="nav-link"><span class="pcoded-micon"><i class="feather icon-sidebar"></i></span><span class="pcoded-mtext">Sample page</span></a></li> -->
                    <li data-username="Déconnexion" class="nav-item"><a href="<?php echo $url; ?>Administration/logout.php" class="nav-link"><span class="pcoded-micon"><i class="feather icon-power"></i></span><span class="pcoded-mtext">Déconnexion</span></a></li>
                </ul>
            </div>
        </div>
    </nav>