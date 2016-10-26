<?php

function html_table ($data = array())
{
  $rows = array();
  foreach ($data as $row) {
    $cells = array();
    
    foreach ($row as $cell) {
      $cells[]= '<td>'.$cell.'<td>';
    }
    $rows[] = '<tr>' . implode('',$cells) . '</tr>';
  }
  return "<table class='hci-table'>" . implode('',$rows) . "</table>";
}
$data = array(
  array('1' => '<b>First Name</b>','2'=> '<b>Last Name</b>'),
  array('1'=>'Yanira','2'=> 'Morales'),
  array('1'=>'Willy','2'=>'Bob'),
  );
echo html_table($data);
