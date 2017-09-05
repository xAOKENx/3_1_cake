<?php
namespace App\Model\Table;

use Cake\ORM\Table;

class ListsTable extends Table
{
  public function initialize(array $config)
  {
    $this->belongsTo('Masters')
         ->setForeignKey('division');
    }

}
