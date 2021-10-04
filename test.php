<?php
require('./init.php');
include('./migrations.php');
include('./services.php');
// createDatabase();
connectToDb($db_name);
// dumpData();
getStudentData();
