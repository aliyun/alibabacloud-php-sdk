<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaColumnLineageResponseBody\data;

use AlibabaCloud\Tea\Model;

class dataEntityList extends Model
{
    /**
     * @description The ID of the EMR cluster.
     *
     * @example abc
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The GUID of the field.
     *
     * @example odps.engine_name.table_name.1
     *
     * @var string
     */
    public $columnGuid;

    /**
     * @description The name of the field.
     *
     * @example 1
     *
     * @var string
     */
    public $columnName;

    /**
     * @description The name of the database.
     *
     * @example abc
     *
     * @var string
     */
    public $databaseName;

    /**
     * @description The name of the metatable.
     *
     * @example abc
     *
     * @var string
     */
    public $tableName;
    protected $_name = [
        'clusterId'    => 'ClusterId',
        'columnGuid'   => 'ColumnGuid',
        'columnName'   => 'ColumnName',
        'databaseName' => 'DatabaseName',
        'tableName'    => 'TableName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->columnGuid) {
            $res['ColumnGuid'] = $this->columnGuid;
        }
        if (null !== $this->columnName) {
            $res['ColumnName'] = $this->columnName;
        }
        if (null !== $this->databaseName) {
            $res['DatabaseName'] = $this->databaseName;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataEntityList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ColumnGuid'])) {
            $model->columnGuid = $map['ColumnGuid'];
        }
        if (isset($map['ColumnName'])) {
            $model->columnName = $map['ColumnName'];
        }
        if (isset($map['DatabaseName'])) {
            $model->databaseName = $map['DatabaseName'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        return $model;
    }
}
