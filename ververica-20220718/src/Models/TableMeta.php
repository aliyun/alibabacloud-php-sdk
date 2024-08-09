<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Tea\Model;

class TableMeta extends Model
{
    /**
     * @var string
     */
    public $catalogName;

    /**
     * @var string
     */
    public $databaseName;

    /**
     * @var string
     */
    public $tableName;
    protected $_name = [
        'catalogName'  => 'catalogName',
        'databaseName' => 'databaseName',
        'tableName'    => 'tableName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->catalogName) {
            $res['catalogName'] = $this->catalogName;
        }
        if (null !== $this->databaseName) {
            $res['databaseName'] = $this->databaseName;
        }
        if (null !== $this->tableName) {
            $res['tableName'] = $this->tableName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TableMeta
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['catalogName'])) {
            $model->catalogName = $map['catalogName'];
        }
        if (isset($map['databaseName'])) {
            $model->databaseName = $map['databaseName'];
        }
        if (isset($map['tableName'])) {
            $model->tableName = $map['tableName'];
        }

        return $model;
    }
}
