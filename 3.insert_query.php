<?php

$db = new SQLite3('test.db');
   if(!$db) {
      echo $db->lastErrorMsg();
   } else {
      echo "Database connected successfully";
   }


   $sql =<<<EOF
      INSERT INTO COMPANY (ID,NAME,AGE,ADDRESS,SALARY)
      VALUES (1, 'Paul', 32, 'California', 20000.00 );

      INSERT INTO COMPANY (ID,NAME,AGE,ADDRESS,SALARY)
      VALUES (2, 'Allen', 25, 'Texas', 15000.00 );

      INSERT INTO COMPANY (ID,NAME,AGE,ADDRESS,SALARY)
      VALUES (3, 'Teddy', 23, 'Norway', 20000.00 );

      INSERT INTO COMPANY (ID,NAME,AGE,ADDRESS,SALARY)
      VALUES (4, 'Mark', 25, 'Rich-Mond ', 65000.00 );
EOF;


   $result = $db->exec($sql);

   if(!$result){
    echo $db->lastErrorMsg();
   }else{
    echo "\ntable creation sccessful\n";
   }