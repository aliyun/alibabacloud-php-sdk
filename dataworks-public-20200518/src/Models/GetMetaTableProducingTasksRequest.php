<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class GetMetaTableProducingTasksRequest extends Model
{
    /**
     * @example C-A_SAMPLE_CLUSTER_ID
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example odps
     *
     * @var string
     */
    public $dataSourceType;

    /**
     * @example default
     *
     * @var string
     */
    public $dbName;

    /**
     * @example myschema
     *
     * @var string
     */
    public $schemaName;

    /**
     * @description This parameter is required.
     *
     * @example odps.sample_project.sample_table
     *
     * @var string
     */
    public $tableGuid;

    /**
     * @example sample_table
     *
     * @var string
     */
    public $tableName;
    protected $_name = [
        'clusterId'      => 'ClusterId',
        'dataSourceType' => 'DataSourceType',
        'dbName'         => 'DbName',
        'schemaName'     => 'SchemaName',
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
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }
        if (null !== $this->schemaName) {
            $res['SchemaName'] = $this->schemaName;
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
     * @return GetMetaTableProducingTasksRequest
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
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['SchemaName'])) {
            $model->schemaName = $map['SchemaName'];
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
