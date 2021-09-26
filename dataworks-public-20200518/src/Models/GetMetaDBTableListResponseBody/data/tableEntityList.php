<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaDBTableListResponseBody\data;

use AlibabaCloud\Tea\Model;

class tableEntityList extends Model
{
    /**
     * @var string
     */
    public $tableName;

    /**
     * @var string
     */
    public $tableGuid;

    /**
     * @var string
     */
    public $databaseName;
    protected $_name = [
        'tableName'    => 'TableName',
        'tableGuid'    => 'TableGuid',
        'databaseName' => 'DatabaseName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }
        if (null !== $this->tableGuid) {
            $res['TableGuid'] = $this->tableGuid;
        }
        if (null !== $this->databaseName) {
            $res['DatabaseName'] = $this->databaseName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tableEntityList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }
        if (isset($map['TableGuid'])) {
            $model->tableGuid = $map['TableGuid'];
        }
        if (isset($map['DatabaseName'])) {
            $model->databaseName = $map['DatabaseName'];
        }

        return $model;
    }
}
