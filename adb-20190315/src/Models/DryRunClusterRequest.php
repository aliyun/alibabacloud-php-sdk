<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\Tea\Model;

class DryRunClusterRequest extends Model
{
    /**
     * @description The specifications of computing resources.
     *
     * > You can call the [DescribeComputeResource](~~469002~~) operation to query the specifications of computing resources.
     * @example 32 Core 128 GB
     *
     * @var string
     */
    public $computeResource;

    /**
     * @description The description of the cluster.
     *
     *   The description cannot start with `http://` or `https://`.
     *   The description must be 2 to 256 characters in length
     *
     * @example test
     *
     * @var string
     */
    public $DBClusterDescription;

    /**
     * @description The ID of the AnalyticDB for MySQL Data Warehouse Edition (V3.0) cluster.
     *
     *   You can leave this parameter empty when you set Operation to **Buy**.
     *   This parameter must be specified when you set Operation to **Modify**.
     *
     * > You can call the [DescribeDBClusters](~~129857~~) operation to query the IDs of all AnalyticDB for MySQL Data Warehouse Edition (V3.0) clusters within a region.
     * @example am-bp1wyioad55bc****
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The network type of the cluster. Set the value to **VPC**.
     *
     * @example VPC
     *
     * @var string
     */
    public $DBClusterNetworkType;

    /**
     * @description The version of the AnalyticDB for MySQL Data Warehouse Edition cluster. Set the value to **3.0**.
     *
     * @example 3.0
     *
     * @var string
     */
    public $DBClusterVersion;

    /**
     * @description Specifies whether to enable the default resource group.
     *
     * > If you leave this parameter empty, true is used.
     * @example true
     *
     * @var bool
     */
    public $enableDefaultResourcePool;

    /**
     * @description The type of the operation. Valid values:
     *
     *   **Buy**: purchases a cluster.
     *   **Modify**: changes configurations of a cluster.
     *
     * @example Buy
     *
     * @var string
     */
    public $operation;

    /**
     * @description The billing method of the cluster. Valid values:
     *
     *   **Postpaid**: pay-as-you-go.
     *   **Prepaid**: subscription.
     *
     * @example Postpaid
     *
     * @var string
     */
    public $payType;

    /**
     * @description The subscription type of the subscription cluster. Valid values:
     *
     *   **Year**: subscription on a yearly basis.
     *   **Month**: subscription on a monthly basis.
     *
     * > This parameter must be specified when PayType is set to Prepaid.
     * @example Year
     *
     * @var string
     */
    public $period;

    /**
     * @description The region ID of the cluster.
     *
     * > You can call the [DescribeRegions](~~143074~~) operation to query the most recent region list.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The amount of reserved storage resources.
     *
     * @example 1
     *
     * @var string
     */
    public $storageResource;

    /**
     * @description The subscription duration of the subscription cluster.
     *
     *   Valid values when Period is set to Year: 1, 2, 3, and 5 (integer).
     *   Valid values when Period is set to Month: 1 to 11 (integer).
     *
     * >
     *
     *   This parameter must be specified when PayType is set to Prepaid.
     *
     *   Longer subscription durations offer more savings. Purchasing a cluster for one year is more cost-effective than purchasing the cluster for 10 or 11 months.
     *
     * @example 1
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
     * > You can call the [DescribeRegions](~~143074~~) operation to query the most recent zone list.
     * @example cn-hangzhou-h
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'computeResource'           => 'ComputeResource',
        'DBClusterDescription'      => 'DBClusterDescription',
        'DBClusterId'               => 'DBClusterId',
        'DBClusterNetworkType'      => 'DBClusterNetworkType',
        'DBClusterVersion'          => 'DBClusterVersion',
        'enableDefaultResourcePool' => 'EnableDefaultResourcePool',
        'operation'                 => 'Operation',
        'payType'                   => 'PayType',
        'period'                    => 'Period',
        'regionId'                  => 'RegionId',
        'storageResource'           => 'StorageResource',
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
        if (null !== $this->computeResource) {
            $res['ComputeResource'] = $this->computeResource;
        }
        if (null !== $this->DBClusterDescription) {
            $res['DBClusterDescription'] = $this->DBClusterDescription;
        }
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
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
        if (null !== $this->operation) {
            $res['Operation'] = $this->operation;
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
        if (null !== $this->storageResource) {
            $res['StorageResource'] = $this->storageResource;
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
     * @return DryRunClusterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ComputeResource'])) {
            $model->computeResource = $map['ComputeResource'];
        }
        if (isset($map['DBClusterDescription'])) {
            $model->DBClusterDescription = $map['DBClusterDescription'];
        }
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
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
        if (isset($map['Operation'])) {
            $model->operation = $map['Operation'];
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
        if (isset($map['StorageResource'])) {
            $model->storageResource = $map['StorageResource'];
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
