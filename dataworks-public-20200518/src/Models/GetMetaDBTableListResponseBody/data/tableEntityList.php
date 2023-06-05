<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaDBTableListResponseBody\data;

use AlibabaCloud\Tea\Model;

class tableEntityList extends Model
{
    /**
     * @example abc
     *
     * @var string
     */
    public $databaseName;

    /**
     * @example odps.engine_name.tname
     *
     * @var string
     */
    public $tableGuid;

    /**
     * @description The name of the metadatabase.
     *
     * @example tname
     *
     * @var string
     */
    public $tableName;
    protected $_name = [
        'databaseName' => 'DatabaseName',
        'tableGuid'    => 'TableGuid',
        'tableName'    => 'TableName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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

    /**
     * @param array $map
     *
     * @return tableEntityList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
