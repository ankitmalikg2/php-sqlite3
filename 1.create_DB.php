<?php

$db = new SQLite3('test.db');
   if(!$db) {
      echo $db->lastErrorMsg();
   } else {
      echo "Database created successfully";
   }