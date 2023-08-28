<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\SDK\Adb\V20211201\Models\CreateDBClusterRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateDBClusterRequest extends Model
{
    /**
     * @var string
     */
    public $backupSetId;

    /**
     * @description The reserved computing resources. Unit: ACUs. Valid values: 0 to 4096. The value must be in increments of 16 ACUs. Each ACU is equivalent to 1 core and 4 GB memory.
     *
     * >  You must specify a value with the unit for this parameter.
     * @example 16ACU
     *
     * @var string
     */
    public $computeResource;

    /**
     * @description The description of the cluster.
     *
     *   The description cannot start with `http://` or `https://`.
     *   The description must be 2 to 256 characters in length.
     *
     * @example test
     *
     * @var string
     */
    public $DBClusterDescription;

    /**
     * @description The network type of the cluster. Only **VPC** is supported.
     *
     * @example VPC
     *
     * @var string
     */
    public $DBClusterNetworkType;

    /**
     * @description The version of the cluster. Set the value to **5.0**.
     *
     * @example 5.0
     *
     * @var string
     */
    public $DBClusterVersion;

    /**
     * @description Specifies whether to distribute all the reserved computing resources to the default resource group user_default. Default value: true. Valid values:
     *
     *   **true**: distributes all the reserved computing resources to the default resource group.
     *   **false**: does not distribute all the reserved computing resources to the default resource group.
     *
     * @example true
     *
     * @var bool
     */
    public $enableDefaultResourcePool;

    /**
     * @description The billing method of the cluster. Valid values:
     *
     *   **Postpaid**: pay-as-you-go
     *   **Prepaid**: subscription
     *
     * @example Prepaid
     *
     * @var string
     */
    public $payType;

    /**
     * @description The subscription type of the subscription cluster. Valid values:
     *
     *   **Year**: subscription on a yearly basis
     *   **Month**: subscription on a monthly basis
     *
     * >  This parameter is required when PayType is set to Prepaid.
     * @example Month
     *
     * @var string
     */
    public $period;

    /**
     * @description The ID of the region in which to create the cluster.
     *
     * >  You can call the [DescribeRegions](~~454314~~) operation to query the most recent region list.
     * @example cn-hangzhou
     *
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
    public $restoreToTime;

    /**
     * @var string
     */
    public $restoreType;

    /**
     * @var string
     */
    public $sourceDbClusterId;

    /**
     * @description The reserved storage resources. Unit: AnalyticDB Compute Units (ACUs). Valid values: 0 to 2064. The value must be in increments of 24 ACUs. Each ACU is equivalent to 1 core and 4 GB memory.
     *
     * >  You must specify a value with the unit for this parameter.
     * @example 24ACU
     *
     * @var string
     */
    public $storageResource;

    /**
     * @var tag[]
     */
    public $tag;

    /**
     * @description The subscription duration of the subscription cluster. Valid values:
     *
     *   Valid values when **Period** is set to Year: 1 to 3 (integer)
     *   Valid values when **Period** is set to Month: 1 to 9 (integer)
     *
     * >  This parameter is required when PayType is set to **Prepaid**.
     * @example 3
     *
     * @var string
     */
    public $usedTime;

    /**
     * @description The virtual private cloud (VPC) ID of the cluster.
     *
     * @example vpc-bp1at5ze0t5u3xtqn****
     *
     * @var string
     */
    public $VPCId;

    /**
     * @description The vSwitch ID of the cluster.
     *
     * @example vsw-bp1aadw9k19x6cis9****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The zone ID of the cluster.
     *
     * >  You can call the [DescribeRegions](~~454314~~) operation to query the most recent zone list.
     * @example cn-hangzhou-h
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'backupSetId'               => 'BackupSetId',
        'computeResource'           => 'ComputeResource',
        'DBClusterDescription'      => 'DBClusterDescription',
        'DBClusterNetworkType'      => 'DBClusterNetworkType',
        'DBClusterVersion'          => 'DBClusterVersion',
        'enableDefaultResourcePool' => 'EnableDefaultResourcePool',
        'payType'                   => 'PayType',
        'period'                    => 'Period',
        'regionId'                  => 'RegionId',
        'resourceGroupId'           => 'ResourceGroupId',
        'restoreToTime'             => 'RestoreToTime',
        'restoreType'               => 'RestoreType',
        'sourceDbClusterId'         => 'SourceDbClusterId',
        'storageResource'           => 'StorageResource',
        'tag'                       => 'Tag',
        'usedTime'                  => 'UsedTime',
        'VPCId'                     => 'VPCId',
        'vSwitchId'                 => 'VSwitchId',
        'zoneId'                    => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupSetId) {
            $res['BackupSetId'] = $this->backupSetId;
        }
        if (null !== $this->computeResource) {
            $res['ComputeResource'] = $this->computeResource;
        }
        if (null !== $this->DBClusterDescription) {
            $res['DBClusterDescription'] = $this->DBClusterDescription;
        }
        if (null !== $this->DBClusterNetworkType) {
            $res['DBClusterNetworkType'] = $this->DBClusterNetworkType;
        }
        if (null !== $this->DBClusterVersion) {
            $res['DBClusterVersion'] = $this->DBClusterVersion;
        }
        if (null !== $this->enableDefaultResourcePool) {
            $res['EnableDefaultResourcePool'] = $this->enableDefaultResourcePool;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->restoreToTime) {
            $res['RestoreToTime'] = $this->restoreToTime;
        }
        if (null !== $this->restoreType) {
            $res['RestoreType'] = $this->restoreType;
        }
        if (null !== $this->sourceDbClusterId) {
            $res['SourceDbClusterId'] = $this->sourceDbClusterId;
        }
        if (null !== $this->storageResource) {
            $res['StorageResource'] = $this->storageResource;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->usedTime) {
            $res['UsedTime'] = $this->usedTime;
        }
        if (null !== $this->VPCId) {
            $res['VPCId'] = $this->VPCId;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDBClusterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupSetId'])) {
            $model->backupSetId = $map['BackupSetId'];
        }
        if (isset($map['ComputeResource'])) {
            $model->computeResource = $map['ComputeResource'];
        }
        if (isset($map['DBClusterDescription'])) {
            $model->DBClusterDescription = $map['DBClusterDescription'];
        }
        if (isset($map['DBClusterNetworkType'])) {
            $model->DBClusterNetworkType = $map['DBClusterNetworkType'];
        }
        if (isset($map['DBClusterVersion'])) {
            $model->DBClusterVersion = $map['DBClusterVersion'];
        }
        if (isset($map['EnableDefaultResourcePool'])) {
            $model->enableDefaultResourcePool = $map['EnableDefaultResourcePool'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['RestoreToTime'])) {
            $model->restoreToTime = $map['RestoreToTime'];
        }
        if (isset($map['RestoreType'])) {
            $model->restoreType = $map['RestoreType'];
        }
        if (isset($map['SourceDbClusterId'])) {
            $model->sourceDbClusterId = $map['SourceDbClusterId'];
        }
        if (isset($map['StorageResource'])) {
            $model->storageResource = $map['StorageResource'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['UsedTime'])) {
            $model->usedTime = $map['UsedTime'];
        }
        if (isset($map['VPCId'])) {
            $model->VPCId = $map['VPCId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
