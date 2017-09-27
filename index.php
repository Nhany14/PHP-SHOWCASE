<?php
require_once __DIR__.'/lib/database.php';
require_once __DIR__.'/lib/table-view.php';

$database = new Database('localhost', 'root', '', 'php-showcase');
$table = $database->queryTable('SELECT * FROM monhoc');

$tableView = new TableView(array(
  'titles' => array('Mã môn học', 'Tên môn học', 'Tín chỉ'),
  'body' => $table
));
echo $tableView->render();
?>