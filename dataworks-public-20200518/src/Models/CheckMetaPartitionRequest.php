<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class CheckMetaPartitionRequest extends Model
{
    /**
     * @description The name of the table.
     *
     * @example abc
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description Indicates whether the partition exists.
     *
     * @example emr
     *
     * @var string
     */
    public $dataSourceType;

    /**
     * @description The type of the data source. Valid values: odps and emr.
     *
     * @example abc
     *
     * @var string
     */
    public $databaseName;

    /**
     * @description The name of the database.
     *
     * This parameter is required.
     * @example ds=202005
     *
     * @var string
     */
    public $partition;

    /**
     * @description The ID of the E-MapReduce (EMR) cluster.
     *
     * @example odps.engine_name.table_name
     *
     * @var string
     */
    public $tableGuid;

    /**
     * @description The HTTP status code.
     *
     * @example abc
     *
     * @var string
     */
    public $tableName;
    protected $_name = [
        'clusterId'      => 'ClusterId',
        'dataSourceType' => 'DataSourceType',
        'databaseName'   => 'DatabaseName',
        'partition'      => 'Partition',
        'tableGuid'      => 'TableGuid',
        'tableName'      => 'TableName',
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
        if (null !== $this->dataSourceType) {
            $res['DataSourceType'] = $this->dataSourceType;
        }
        if (null !== $this->databaseName) {
            $res['DatabaseName'] = $this->databaseName;
        }
        if (null !== $this->partition) {
            $res['Partition'] = $this->partition;
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
     * @return CheckMetaPartitionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['DataSourceType'])) {
            $model->dataSourceType = $map['DataSourceType'];
        }
        if (isset($map['DatabaseName'])) {
            $model->databaseName = $map['DatabaseName'];
        }
        if (isset($map['Partition'])) {
            $model->partition = $map['Partition'];
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
