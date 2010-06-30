<?php
###############################################################################
# This file is a part of the SmartWFM PHP-Backend                             #
# Copyright (C) 2010 Morris Jobke <kabum@users.sourceforge.net>               #
#                                                                             #
# SmartWFM PHP-Backend is free software; you can redestribute it and/or modify#
# it under terms of GNU General Public License by Free Software Foundation.   #
#                                                                             #
# This program is distributed in the hope that it will be useful, but         #
# WITHOUT ANY WARRANTY. See GPLv3 for more details.                           #
###############################################################################

define('SMARTWFM_DEBUG', false);

require_once("lib/FirePHPCore/fb.php");

if(SMARTWFM_DEBUG == true) {
	date_default_timezone_set("Europe/Berlin");
	ini_set('display_errors',1);
	error_reporting(E_ALL|E_STRICT);

	FB::setEnabled(true);
}

require_once("lib/SmartWFM/main.php");
require_once("lib/SmartWFM/tools.php");
require_once("lib/SmartWFM/validate.php");

$smartwfm = new SmartWFM();
$smartwfm->init();
$smartwfm->process();

?>
