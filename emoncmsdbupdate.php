<?php

// Update Emoncms database

$applychanges = true;

define('EMONCMS_EXEC', 1);
chdir("/var/www/emoncms");
require "process_settings.php";
require "core.php";
$mysqli = @new mysqli($server,$username,$password,$database);

require_once "Lib/dbschemasetup.php";
print json_encode(db_schema_setup($mysqli,load_db_schema(),$applychanges))."\n";
