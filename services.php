<?php
function getStudentData()
{
    $selectQuery = "SELECT * FROM students";
    $result = pg_query($selectQuery);
    while ($row = pg_fetch_row($result)) {
        print_r($row);
        echo "<br />\n";
    }
}
