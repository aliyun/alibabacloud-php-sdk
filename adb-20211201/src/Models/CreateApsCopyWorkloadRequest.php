<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Dara\Model;

class CreateApsCopyWorkloadRequest extends Model
{
    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var int
     */
    public $datasourceId;

    /**
     * @var string
     */
    public $dbName;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $tableName;

    /**
     * @var string
     */
    public $workloadId;

    /**
     * @var string
     */
    public $workloadType;
    protected $_name = [
        'DBClusterId' => 'DBClusterId',
        'datasourceId' => 'DatasourceId',
        'dbName' => 'DbName',
        'regionId' => 'RegionId',
        'tableName' => 'TableName',
        'workloadId' => 'WorkloadId',
        'workloadType' => 'WorkloadType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
