<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20180601\Models;

use AlibabaCloud\Tea\Model;

class ListHiveColumnLineagesRequest extends Model
{
    /**
     * @example C-D033DD5FB82436A6
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example balance
     *
     * @var string
     */
    public $columnName;

    /**
     * @example default
     *
     * @var string
     */
    public $databaseName;

    /**
     * @example test_table
     *
     * @var string
     */
    public $tableName;
    protected $_name = [
        'clusterId'    => 'ClusterId',
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
     * @return ListHiveColumnLineagesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
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
