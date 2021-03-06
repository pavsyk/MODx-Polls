<?php
$xpdo_meta_map['modPollLog']= array (
  'package' => 'polls',
  'table' => 'polls_logs',
  'fields' => 
  array (
    'question' => NULL,
    'answer' => NULL,
    'ipaddress' => NULL,
    'logdate' => NULL,
  ),
  'fieldMeta' => 
  array (
    'question' => 
    array (
      'dbtype' => 'int',
      'precision' => '11',
      'attributes' => 'unsigned',
      'phptype' => 'integer',
      'null' => false,
      'index' => 'index',
    ),
    'answer' => 
    array (
      'dbtype' => 'int',
      'precision' => '11',
      'attributes' => 'unsigned',
      'phptype' => 'integer',
      'null' => false,
      'index' => 'index',
    ),
    'ipaddress' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '50',
      'phptype' => 'string',
      'null' => false,
      'index' => 'index',
    ),
    'logdate' => 
    array (
      'dbtype' => 'datetime',
      'phptype' => 'datetime',
      'null' => false,
    ),
  ),
  'aggregates' => 
  array (
    'Question' => 
    array (
      'class' => 'modPollQuestion',
      'local' => 'answer',
      'foreign' => 'id',
      'cardinality' => 'one',
      'owner' => 'foreign',
    ),
    'Answer' => 
    array (
      'class' => 'modPollAnswer',
      'local' => 'answer',
      'foreign' => 'id',
      'cardinality' => 'one',
      'owner' => 'foreign',
    ),
  ),
);
