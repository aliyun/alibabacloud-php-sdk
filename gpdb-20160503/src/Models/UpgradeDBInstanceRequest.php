<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Dara\Model;

class UpgradeDBInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $cacheStorageSize;

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
     * @var string
     */
    public $masterNodeNum;

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
    public $resourceGroupId;

    /**
     * @var string
     */
    public $segDiskPerformanceLevel;

    /**
     * @var string
     */
    public $segNodeNum;

    /**
     * @var string
     */
    public $segStorageType;

    /**
     * @var string
     */
    public $serverlessResource;

    /**
     * @var string
     */
    public $storageSize;

    /**
     * @var int
     */
    public $upgradeType;
    protected $_name = [
        'cacheStorageSize' => 'CacheStorageSize',
        'DBInstanceClass' => 'DBInstanceClass',
        'DBInstanceGroupCount' => 'DBInstanceGroupCount',
        'DBInstanceId' => 'DBInstanceId',
        'instanceSpec' => 'InstanceSpec',
        'masterNodeNum' => 'MasterNodeNum',
        'ownerId' => 'OwnerId',
        'payType' => 'PayType',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'segDiskPerformanceLevel' => 'SegDiskPerformanceLevel',
        'segNodeNum' => 'SegNodeNum',
        'segStorageType' => 'SegStorageType',
        'serverlessResource' => 'ServerlessResource',
        'storageSize' => 'StorageSize',
        'upgradeType' => 'UpgradeType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cacheStorageSize) {
            $res['CacheStorageSize'] = $this->cacheStorageSize;
        }

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

        if (null !== $this->masterNodeNum) {
            $res['MasterNodeNum'] = $this->masterNodeNum;
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

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->segDiskPerformanceLevel) {
            $res['SegDiskPerformanceLevel'] = $this->segDiskPerformanceLevel;
        }

        if (null !== $this->segNodeNum) {
            $res['SegNodeNum'] = $this->segNodeNum;
        }

        if (null !== $this->segStorageType) {
            $res['SegStorageType'] = $this->segStorageType;
        }

        if (null !== $this->serverlessResource) {
            $res['ServerlessResource'] = $this->serverlessResource;
        }

        if (null !== $this->storageSize) {
            $res['StorageSize'] = $this->storageSize;
        }

        if (null !== $this->upgradeType) {
            $res['UpgradeType'] = $this->upgradeType;
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
        if (isset($map['CacheStorageSize'])) {
            $model->cacheStorageSize = $map['CacheStorageSize'];
        }

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

        if (isset($map['MasterNodeNum'])) {
            $model->masterNodeNum = $map['MasterNodeNum'];
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

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['SegDiskPerformanceLevel'])) {
            $model->segDiskPerformanceLevel = $map['SegDiskPerformanceLevel'];
        }

        if (isset($map['SegNodeNum'])) {
            $model->segNodeNum = $map['SegNodeNum'];
        }

        if (isset($map['SegStorageType'])) {
            $model->segStorageType = $map['SegStorageType'];
        }

        if (isset($map['ServerlessResource'])) {
            $model->serverlessResource = $map['ServerlessResource'];
        }

        if (isset($map['StorageSize'])) {
            $model->storageSize = $map['StorageSize'];
        }

        if (isset($map['UpgradeType'])) {
            $model->upgradeType = $map['UpgradeType'];
        }

        return $model;
    }
}
