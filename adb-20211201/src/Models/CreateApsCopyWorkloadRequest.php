<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Tea\Model;

class CreateApsCopyWorkloadRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example am-bp1xxxxxxxx47
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @example 123
     *
     * @var int
     */
    public $datasourceId;

    /**
     * @example dbName
     *
     * @var string
     */
    public $dbName;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example test
     *
     * @var string
     */
    public $tableName;

    /**
     * @description This parameter is required.
     *
     * @example aps-******
     *
     * @var string
     */
    public $workloadId;

    /**
     * @description This parameter is required.
     *
     * @example SLS_INGESTION_ADB
     *
     * @var string
     */
    public $workloadType;
    protected $_name = [
        'DBClusterId'  => 'DBClusterId',
        'datasourceId' => 'DatasourceId',
        'dbName'       => 'DbName',
        'regionId'     => 'RegionId',
        'tableName'    => 'TableName',
        'workloadId'   => 'WorkloadId',
        'workloadType' => 'WorkloadType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->datasourceId) {
            $res['DatasourceId'] = $this->datasourceId;
        }
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }
        if (null !== $this->workloadId) {
            $res['WorkloadId'] = $this->workloadId;
        }
        if (null !== $this->workloadType) {
            $res['WorkloadType'] = $this->workloadType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateApsCopyWorkloadRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['DatasourceId'])) {
            $model->datasourceId = $map['DatasourceId'];
        }
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }
        if (isset($map['WorkloadId'])) {
            $model->workloadId = $map['WorkloadId'];
        }
        if (isset($map['WorkloadType'])) {
            $model->workloadType = $map['WorkloadType'];
        }

        return $model;
    }
}
