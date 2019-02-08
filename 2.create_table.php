<?php

$db = new SQLite3('test.db');
   if(!$db) {
      echo $db->lastErrorMsg();
   } else {
      echo "Database connected successfully";
   }

   $sql =<<<EOF
      CREATE TABLE COMPANY
      (ID INT PRIMARY KEY     NOT NULL,
      NAME           TEXT    NOT NULL,
      AGE            INT     NOT NULL,
      ADDRESS        CHAR(50),
      SALARY         REAL);
EOF;


   $result = $db->exec($sql);

   if(!$result){
    echo $db->lastErrorMsg();
   }else{
    echo "\ntable creation sccessful\n";
   }

   $db->close();