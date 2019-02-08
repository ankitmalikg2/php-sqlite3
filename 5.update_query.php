<?php

$db = new SQLite3('test.db');
   if(!$db) {
      echo $db->lastErrorMsg();
   } else {
      echo "Database connected successfully";
   }


   $sql =<<<EOF
      UPDATE COMPANY set NAME='Ankit',AGE=23 where ID=1;
EOF;


   $result = $db->exec($sql);

   if(!$result){
    echo $db->lastErrorMsg();
   }else{
    echo "\ntable creation sccessful\n";
   }