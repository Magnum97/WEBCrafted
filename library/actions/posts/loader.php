<?php
if(
	!$_users->isLogged() OR
	(!$_users->hasPermission("webcrafted.admin.*") AND
	!$_users->hasPermission("webcrafted.admin.posts")) OR
	!isset($params[2])) {
	setFlash("Vous n'avez pas les droits nécessaires pour cette action", "error");
	redirect("login", false);
}

$_posts = loadBundle("fr.solicium.posts");

switch($params[2]) {
	case "create": {
		include(ROOT . "library/actions/posts/create.php");
		break;
	}
	case "edit": {
		include(ROOT . "library/actions/posts/edit.php");
		break;
	}
	case "delete": {
		include(ROOT . "library/actions/posts/delete.php");
		break;
	}
}
