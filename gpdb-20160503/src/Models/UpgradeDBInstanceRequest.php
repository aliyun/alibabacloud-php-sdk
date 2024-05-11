<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class UpgradeDBInstanceRequest extends Model
{
    /**
     * @description This parameter is no longer used.
     *
     * @example null
     *
     * @var string
     */
    public $DBInstanceClass;

    /**
     * @description This parameter is no longer used.
     *
     * @example null
     *
     * @var string
     */
    public $DBInstanceGroupCount;

    /**
     * @description The instance ID.
     *
     * This parameter is required.
     * @example gp-rj***************
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The specifications of each compute node. For information about the supported specifications, see [Instance specifications](https://help.aliyun.com/document_detail/35406.html).
     *
     * > This parameter is available only for instances in elastic storage mode.
     * @example 4C16G
     *
     * @var string
     */
    public $instanceSpec;

    /**
     * @description This parameter is no longer used.
     *
     * @example 2
     *
     * @var string
     */
    public $masterNodeNum;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description This parameter is no longer used.
     *
     * @example null
     *
     * @var string
     */
    public $payType;

    /**
     * @description The region ID of the instance.
     *
     * > You can call the [DescribeRegions](https://help.aliyun.com/document_detail/86912.html) operation to query the most recent region list.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group to which the instance belongs. For information about how to obtain the ID of a resource group, see [View basic information of a resource group](https://help.aliyun.com/document_detail/151181.html).
     *
     * @example rg-bp67acfmxazb4p****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The performance level of enhanced SSDs (ESSDs). Valid values:
     *
     *   **pl0**
     *   **pl1**
     *   **pl2**
     *
     * @example pl1
     *
     * @var string
     */
    public $segDiskPerformanceLevel;

    /**
     * @description The number of compute nodes. The number of compute nodes varies based on the instance resource type and edition.
     *
     *   Valid values for High-availability Edition instances in elastic storage mode: 4 to 512, in 4 increments.
     *   Valid values for High-performance Edition instances in elastic storage mode: 2 to 512, in 2 increments.
     *   Valid values for instances in manual Serverless mode: 2 to 512, in 2 increments.
     *
     * @example 2
     *
     * @var string
     */
    public $segNodeNum;

    /**
     * @description The disk storage type of the instance after the change. The disk storage type can be changed only to ESSD. Set the value to **cloud_essd**.
     *
     * @example cloud_essd
     *
     * @var string
     */
    public $segStorageType;

    /**
     * @description The storage capacity of each compute node. Unit: GB. Valid values: 50 to 6000, in 50 increments.
     *
     * > This parameter is available only for instances in elastic storage mode.
     * @example 100
     *
     * @var string
     */
    public $storageSize;

    /**
     * @description The type of the instance configuration change. Valid values:
     *
     *   **0** (default): changes the number of compute nodes.
     *   **1**: changes the specifications and storage capacity of each compute node.
     *   **2**: changes the number of coordinator nodes.
     *   **3**: changes the disk storage type and ESSD performance level of the instance.
     *
     * >
     *
     *   The supported changes to compute node configurations vary based on the instance resource type. For more information, see the "[Usage notes](https://help.aliyun.com/document_detail/50956.html)" section of the Change compute node configurations topic.
     *
     *   After you specify a change type, only the corresponding parameters take effect. For example, if you set **UpgradeType** to 0, the parameter that is used to change the number of compute nodes takes effect, but the parameter that is used to change the number of coordinator nodes does not.
     *   The number of coordinator nodes can be changed only on the China site (aliyun.com).
     *   The disk storage type can be changed only from ultra disks to ESSDs.
     *
     * @example 0
     *
     * @var int
     */
    public $upgradeType;
    protected $_name = [
        'DBInstanceClass'         => 'DBInstanceClass',
        'DBInstanceGroupCount'    => 'DBInstanceGroupCount',
        'DBInstanceId'            => 'DBInstanceId',
        'instanceSpec'            => 'InstanceSpec',
        'masterNodeNum'           => 'MasterNodeNum',
        'ownerId'                 => 'OwnerId',
        'payType'                 => 'PayType',
        'regionId'                => 'RegionId',
        'resourceGroupId'         => 'ResourceGroupId',
        'segDiskPerformanceLevel' => 'SegDiskPerformanceLevel',
        'segNodeNum'              => 'SegNodeNum',
        'segStorageType'          => 'SegStorageType',
        'storageSize'             => 'StorageSize',
        'upgradeType'             => 'UpgradeType',
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
        if (null !== $this->storageSize) {
            $res['StorageSize'] = $this->storageSize;
        }
        if (null !== $this->upgradeType) {
            $res['UpgradeType'] = $this->upgradeType;
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
        if (isset($map['StorageSize'])) {
            $model->storageSize = $map['StorageSize'];
        }
        if (isset($map['UpgradeType'])) {
            $model->upgradeType = $map['UpgradeType'];
        }

        return $model;
    }
}
