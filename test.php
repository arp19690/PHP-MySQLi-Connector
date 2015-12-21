<?php

require_once ('config.php');
require_once ('database.php');

$db = new Database(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
$db->insert('name', array('my_first_name', 'arp19690', 'my_last_name'), array('first', 'middle', 'last'));
$db->insert('name', array('f', 'arp19690', 'l'), array('first', 'middle', 'last'));
echo $db->error();
echo $db->error();
$db->update('name', array('middle' => 'my_middle_name'), array('first', 'my_first_name'));
echo $db->error();
$db->select('name', true, '*', 'middle = "my_middle_name"');
echo $db->error();
echo "result   " . $db->getResult();
