<?php
$app = new App();
$app->route("","SiteController","index");
$app->route("home","SiteController","index");
$app->route("contact", "ContactController", "index");
$app->route("sendEmail", "ContactController", "sendEmail");
