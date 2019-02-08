<?php

$db = new SQLite3('test.db');
   if(!$db) {
      echo $db->lastErrorMsg();
   } else {
      echo "Database connected successfully";
   }


   $sql =<<<EOF
      DELETE FROM COMPANY ;
EOF;


   $result = $db->exec($sql);

   if(!$result){
    echo $db->lastErrorMsg();
   }else{
    echo "\ntable creation sccessful\n";
   }