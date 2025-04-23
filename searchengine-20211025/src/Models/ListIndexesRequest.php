<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models;

use AlibabaCloud\Dara\Model;

class ListIndexesRequest extends Model
{
    /**
     * @var string
     */
    public $catalog;

    /**
     * @var string
     */
    public $database;

    /**
     * @var bool
     */
    public $newMode;

    /**
     * @var string
     */
    public $table;
    protected $_name = [
        'catalog' => 'catalog',
        'database' => 'database',
        'newMode' => 'newMode',
        'table' => 'table',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->catalog) {
            $res['catalog'] = $this->catalog;
        }

        if (null !== $this->database) {
            $res['database'] = $this->database;
        }

        if (null !== $this->newMode) {
            $res['newMode'] = $this->newMode;
        }

        if (null !== $this->table) {
            $res['table'] = $this->table;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['catalog'])) {
            $model->catalog = $map['catalog'];
        }

        if (isset($map['database'])) {
            $model->database = $map['database'];
        }

        if (isset($map['newMode'])) {
            $model->newMode = $map['newMode'];
        }

        if (isset($map['table'])) {
            $model->table = $map['table'];
        }

        return $model;
    }
}
