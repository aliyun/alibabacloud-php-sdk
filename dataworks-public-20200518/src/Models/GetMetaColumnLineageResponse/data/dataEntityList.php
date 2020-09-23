<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaColumnLineageResponse\data;

use AlibabaCloud\Tea\Model;

class dataEntityList extends Model
{
    /**
     * @var string
     */
    public $columnName;

    /**
     * @var string
     */
    public $columnGuid;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $databaseName;

    /**
     * @var string
     */
    public $tableName;
    protected $_name = [
        'columnName'   => 'ColumnName',
        'columnGuid'   => 'ColumnGuid',
        'clusterId'    => 'ClusterId',
        'databaseName' => 'DatabaseName',
        'tableName'    => 'TableName',
    ];

    public function validate()
    {
        Model::validateRequired('columnName', $this->columnName, true);
        Model::validateRequired('columnGuid', $this->columnGuid, true);
        Model::validateRequired('clusterId', $this->clusterId, true);
        Model::validateRequired('databaseName', $this->databaseName, true);
        Model::validateRequired('tableName', $this->tableName, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->columnName) {
            $res['ColumnName'] = $this->columnName;
        }
        if (null !== $this->columnGuid) {
            $res['ColumnGuid'] = $this->columnGuid;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
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
        if (isset($map['ColumnName'])) {
            $model->columnName = $map['ColumnName'];
        }
        if (isset($map['ColumnGuid'])) {
            $model->columnGuid = $map['ColumnGuid'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
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
