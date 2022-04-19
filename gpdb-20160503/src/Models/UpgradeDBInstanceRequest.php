<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class UpgradeDBInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $DBInstanceClass;

    /**
     * @var string
     */
    public $DBInstanceGroupCount;

    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string
     */
    public $instanceSpec;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $segNodeNum;

    /**
     * @var string
     */
    public $storageSize;

    /**
     * @var string
     */
    public $masterNodeNum;

    /**
     * @var int
     */
    public $upgradeType;
    protected $_name = [
        'DBInstanceClass'      => 'DBInstanceClass',
        'DBInstanceGroupCount' => 'DBInstanceGroupCount',
        'DBInstanceId'         => 'DBInstanceId',
        'instanceSpec'         => 'InstanceSpec',
        'ownerId'              => 'OwnerId',
        'payType'              => 'PayType',
        'regionId'             => 'RegionId',
        'segNodeNum'           => 'SegNodeNum',
        'storageSize'          => 'StorageSize',
        'masterNodeNum'        => 'masterNodeNum',
        'upgradeType'          => 'upgradeType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceClass) {
            $res['DBInstanceClass'] = $this->DBInstanceClass;
        }
        if (null !== $this->DBInstanceGroupCount) {
            $res['DBInstanceGroupCount'] = $this->DBInstanceGroupCount;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->instanceSpec) {
            $res['InstanceSpec'] = $this->instanceSpec;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->segNodeNum) {
            $res['SegNodeNum'] = $this->segNodeNum;
        }
        if (null !== $this->storageSize) {
            $res['StorageSize'] = $this->storageSize;
        }
        if (null !== $this->masterNodeNum) {
            $res['masterNodeNum'] = $this->masterNodeNum;
        }
        if (null !== $this->upgradeType) {
            $res['upgradeType'] = $this->upgradeType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpgradeDBInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceClass'])) {
            $model->DBInstanceClass = $map['DBInstanceClass'];
        }
        if (isset($map['DBInstanceGroupCount'])) {
            $model->DBInstanceGroupCount = $map['DBInstanceGroupCount'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['InstanceSpec'])) {
            $model->instanceSpec = $map['InstanceSpec'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SegNodeNum'])) {
            $model->segNodeNum = $map['SegNodeNum'];
        }
        if (isset($map['StorageSize'])) {
            $model->storageSize = $map['StorageSize'];
        }
        if (isset($map['masterNodeNum'])) {
            $model->masterNodeNum = $map['masterNodeNum'];
        }
        if (isset($map['upgradeType'])) {
            $model->upgradeType = $map['upgradeType'];
        }

        return $model;
    }
}
