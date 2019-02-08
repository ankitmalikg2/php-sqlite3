<?php

$db = new SQLite3('test.db');
   if(!$db) {
      echo $db->lastErrorMsg();
   } else {
      echo "Database connected successfully";
   }


   $sql ="SELECT * from COMPANY";

   $result = $db->query($sql);
   while($row = $result->fetchArray(SQLITE3_ASSOC) ) {
       print_r($row);
   }

   $db->close();