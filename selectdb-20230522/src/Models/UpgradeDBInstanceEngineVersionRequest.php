<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Selectdb\V20230522\Models;

use AlibabaCloud\Tea\Model;

class UpgradeDBInstanceEngineVersionRequest extends Model
{
    /**
     * @description The instance ID.
     *
     * This parameter is required.
     * @example selectdb-cn-7213cjv****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The database engine version of the instance.
     *
     * This parameter is required.
     * @example 2.4
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @var bool
     */
    public $parallelOperation;

    /**
     * @description The region ID of the instance.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The update mode. If you do not specify this parameter, the system immediately updates the database engine version. If you set this parameter to 1, the system updates the database engine version during the maintenance window.
     *
     * @example 1
     *
     * @var string
     */
    public $switchTimeMode;
    protected $_name = [
        'DBInstanceId'      => 'DBInstanceId',
        'engineVersion'     => 'EngineVersion',
        'parallelOperation' => 'ParallelOperation',
        'regionId'          => 'RegionId',
        'resourceOwnerId'   => 'ResourceOwnerId',
        'switchTimeMode'    => 'SwitchTimeMode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }
        if (null !== $this->parallelOperation) {
            $res['ParallelOperation'] = $this->parallelOperation;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->switchTimeMode) {
            $res['SwitchTimeMode'] = $this->switchTimeMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpgradeDBInstanceEngineVersionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }
        if (isset($map['ParallelOperation'])) {
            $model->parallelOperation = $map['ParallelOperation'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SwitchTimeMode'])) {
            $model->switchTimeMode = $map['SwitchTimeMode'];
        }

        return $model;
    }
}
