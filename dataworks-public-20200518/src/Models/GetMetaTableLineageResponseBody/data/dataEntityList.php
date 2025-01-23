<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTableLineageResponseBody\data;

use AlibabaCloud\Dara\Model;

class dataEntityList extends Model
{
    /**
     * @var int
     */
    public $createTimestamp;
    /**
     * @var string
     */
    public $databaseName;
    /**
     * @var string
     */
    public $tableGuid;
    /**
     * @var string
     */
    public $tableName;
    protected $_name = [
        'createTimestamp' => 'CreateTimestamp',
        'databaseName'    => 'DatabaseName',
        'tableGuid'       => 'TableGuid',
        'tableName'       => 'TableName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTimestamp) {
            $res['CreateTimestamp'] = $this->createTimestamp;
        }

        if (null !== $this->databaseName) {
            $res['DatabaseName'] = $this->databaseName;
        }

        if (null !== $this->tableGuid) {
            $res['TableGuid'] = $this->tableGuid;
        }

        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
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
        if (isset($map['CreateTimestamp'])) {
            $model->createTimestamp = $map['CreateTimestamp'];
        }

        if (isset($map['DatabaseName'])) {
            $model->databaseName = $map['DatabaseName'];
        }

        if (isset($map['TableGuid'])) {
            $model->tableGuid = $map['TableGuid'];
        }

        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        return $model;
    }
}
