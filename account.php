<?php

require("scripts/checker.php");
render("accountpage.php", ["title" => "{$_SESSION["id"]}'s account"]);

?>
