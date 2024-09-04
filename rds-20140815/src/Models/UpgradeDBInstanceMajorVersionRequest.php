<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class UpgradeDBInstanceMajorVersionRequest extends Model
{
    /**
     * @description Specify the point in time at which the system collects the statistics of the instance.
     *
     *   **Before**: The system collects the statistics of the instance before the switchover to ensure service stability. If the instance contains a large amount of data, the upgrade may require a long period of time.
     *   **After**: The system collects the statistics of the instance after the switchover to accelerate the upgrade. After the upgrade, if you access tables for which no statistics are generated, the query plans may be inaccurate, and your database service may be unavailable during peak hours.
     *
     * >  If you set the SwitchOver parameter to false, the value Before specifies that the system collects the statistics of the instance before the instance starts to process read and write requests, and the value After specifies that the system collects the statistics of the instance after the instance starts to process read and write requests.
     * @example After
     *
     * @var string
     */
    public $collectStatMode;

    /**
     * @description The new instance type of the instance. The new CPU and memory specifications of the instance must be higher than or equal to the original CPU and memory specifications. If you set the **UpgradeMode** parameter to **inPlaceUpgrade**, you **do not need to configure** this parameter.
     *
     * >  For more information about the instance types of ApsaraDB RDS for PostgreSQL instances, see [Instance types for primary ApsaraDB RDS for PostgreSQL instances](https://help.aliyun.com/document_detail/276990.html).
     * @example pg.n2.medium.2c
     *
     * @var string
     */
    public $DBInstanceClass;

    /**
     * @description The ID of the original instance.
     *
     * @example pgm-bp1gm3yh0ht1****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The new storage capacity of the instance. Unit: GB If you set the **UpgradeMode** parameter to **inPlaceUpgrade**, you **do not need to configure** this parameter.
     *
     * Valid values:
     *
     *   **PL1 ESSD**: 20 GB to 32,000 GB
     *   **PL2 ESSD**: 500 GB to 3,200 GB
     *   **PL3 ESSD**: 1,500 GB to 3,200 GB
     *   **General ESSD**: 40 GB to 2,000 GB
     *
     * >  If the original instance uses local disks, you can reduce the storage capacity of the instance when you upgrade the major engine version of the instance. For more information about the minimum storage capacity, see [Upgrade the major engine version](https://help.aliyun.com/document_detail/203309.html).
     * @example 20
     *
     * @var int
     */
    public $DBInstanceStorage;

    /**
     * @description The storage type of the instance that runs the required major engine version.
     *
     * Valid values:
     *
     *   **cloud_ssd**: standard SSD
     *   **cloud_essd**: performance level 1 (PL1) Enterprise SSD (ESSD)
     *   **cloud_essd2**: PL2 ESSD
     *   **cloud_essd3**: PL3 ESSD
     *   **general_essd**: general ESSD
     *
     * The major engine version upgrade feature is developed based on snapshots for cloud disks. You can select a storage type after the upgrade based on the following items:
     *
     *   If the original instance uses standard SSDs, set this parameter to cloud_ssd.
     *   If the original instance uses ESSDs, set this parameter to cloud_essd, cloud_essd2, cloud_essd3, or general_essd.
     *   If the original instance uses local SSDs, set this parameter to cloud_essd, cloud_essd2, cloud_essd3, or general_essd.
     *
     * @example cloud_essd
     *
     * @var string
     */
    public $DBInstanceStorageType;

    /**
     * @description The network type of the new instance. Set the value to VPC. The major engine version upgrade feature is supported only for instances that reside in VPCs.
     *
     * If the original instance resides in the classic network, you must migrate the instance to a VPC before you call this operation. For more information about how to view or change the network type of an instance, see [Change the network type of an ApsaraDB RDS for PostgreSQL instance](https://help.aliyun.com/document_detail/96761.html).
     * @example VPC
     *
     * @var string
     */
    public $instanceNetworkType;

    /**
     * @description The billing method. Set the value to Postpaid.
     *
     * This parameter is required.
     * @example Postpaid
     *
     * @var string
     */
    public $payType;

    /**
     * @description A reserved parameter. You do not need to specify this parameter.
     *
     * @example Month
     *
     * @var string
     */
    public $period;

    /**
     * @description The internal IP address of the new instance. You do not need to specify this parameter. The system automatically assigns an internal IP address based on the values of the VPCId and vSwitchId parameters.
     *
     * @example 172.16.XX.XX
     *
     * @var string
     */
    public $privateIpAddress;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description Specifies whether to switch your workloads over to the instance that runs the required major engine version based on your business requirements.
     *
     * Valid values:
     *
     *   **true**: The system automatically switches workloads over to the instance. This configuration method is used to perform an upgrade after you verify that the new major engine version is compatible with your workloads.
     *   **false**: The system does not automatically switch your workloads over to the instance. In most cases, this configuration method is used to test whether the new major engine version is compatible with your workloads before you perform the upgrade.
     *
     * >
     *
     *   If you set this parameter to true, you must take note of the following items:
     *
     *   After the switchover is complete, you cannot roll your workloads back to the original instance. Proceed with caution.
     *   During the switchover, the original instance processes only read requests. We recommend that you perform the switchover during off-peak hours.
     *   If read-only instances are attached to the original instance, you can set this parameter only to false. In this case, the read-only instances that are attached to the original instance cannot be cloned. After the upgrade is complete, you must create read-only instances for the instance.
     *
     *   If you set this parameter to false, you must take note of the following items:
     *
     *   The data migration does not interrupt your workloads on the original instance.
     *   After data is migrated to the instance that runs the required major engine version, you must update the endpoint configuration in your application. This update requires you to replace the endpoint of the original instance with the endpoint of the instance that runs the required major engine version. For more information about how to view the endpoint of an instance, see [Viewing and change of the internal and public endpoints and port numbers](https://help.aliyun.com/document_detail/96788.html).
     *
     * @example false
     *
     * @var string
     */
    public $switchOver;

    /**
     * @description A reserved parameter. You do not need to specify this parameter.
     *
     * @example 2021-07-10T13:15:12Z
     *
     * @var string
     */
    public $switchTime;

    /**
     * @description The point in time at which the workloads are switched over. This parameter is used together with the SwitchOver parameter. This parameter is available only when you set the **SwitchOver** parameter to **true**.
     *
     * Valid values:
     *
     *   **Immediate**: The workloads are immediately switched over.
     *   **MaintainTime**: The workloads are switched over within the maintenance window that you specify. You can call the ModifyDBInstanceMaintainTime operation to change the maintenance window of an instance.
     *
     * @example Immediate
     *
     * @var string
     */
    public $switchTimeMode;

    /**
     * @description The major engine version of the new instance. The value of this parameter must be the major engine version on which an upgrade check is performed.
     *
     * >  You can call the UpgradeDBInstanceMajorVersionPrecheck operation to perform an upgrade check.
     * @example 13.0
     *
     * @var string
     */
    public $targetMajorVersion;

    /**
     * @description The upgrade mode. This parameter is required when you set the **SwitchOver** parameter to **true**. Valid values:
     *
     *   **inPlaceUpgrade**: local upgrade. The major engine version upgrade is performed on the original instance, and no new instance is created. After the upgrade, the original instance runs the required major engine version and inherits the original orders, name, tags, alert rules in CloudMonitor, and backup settings.
     *   **blueGreenDeployment**: blue-green deployment. After the major engine version of the instance is upgraded, the original instance is retained and a new instance is created. Fees are generated for the new instance based on the billing method that you specified. However, no fees are generated for the creation of the new instance. After the upgrade is complete, fees are generated for both the original and new instances and the new instance cannot enjoy the discounts provided for the original instance.
     *
     * @example inPlaceUpgrade
     *
     * @var string
     */
    public $upgradeMode;

    /**
     * @description A reserved parameter. You do not need to specify this parameter.
     *
     * @example 1
     *
     * @var string
     */
    public $usedTime;

    /**
     * @description The virtual private cloud (VPC) ID of the instance. If you set the **UpgradeMode** parameter to **inPlaceUpgrade**, you **do not need to configure** this parameter.
     *
     * You can call the DescribeDBInstanceAttribute operation to query the VPC ID of the original instance.
     * @example vpc-bp1opxu1zkhn00gzv****
     *
     * @var string
     */
    public $VPCId;

    /**
     * @description The vSwitch ID of the instance that runs the required major engine version. If you set the **UpgradeMode** parameter to **inPlaceUpgrade**, you **do not need to configure** this parameter.
     *
     *   If the original instance runs RDS Basic Edition, configure the vSwitch ID for the instance that runs the required major engine version.
     *   If the original instance runs RDS High-availability Edition, configure the vSwitch IDs for the instance that runs the required major engine version and its secondary instance. Separate the vSwitch IDs with commas (,).
     *
     * >  The vSwitches that you specify must reside in the same zone as the original instance. You can call the DescribeVSwitches operation to query the vSwitch IDs.
     * @example vsw-bp10aqj6o4lclxdrm****,vsw-bp10aqj6o4lclxdrm****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The ID of the zone to which the primary instance that runs the required major engine version belongs. If you set the **UpgradeMode** parameter to **inPlaceUpgrade**, you **do not need to configure** this parameter.
     *
     * You can select a zone that belongs to the region in which the original instance resides.
     * @example cn-hangzhou-h
     *
     * @var string
     */
    public $zoneId;

    /**
     * @description The ID of the zone to which the secondary instance runs the required major engine version belongs. This parameter is available only when the original instance runs RDS High-availability Edition. If you set the **UpgradeMode** parameter to **inPlaceUpgrade**, you **do not need to configure** this parameter.
     *
     * You can call the DescribeRegions operation to query zone IDs.
     * @example cn-hangzhou-h
     *
     * @var string
     */
    public $zoneIdSlave1;

    /**
     * @description A reserved parameter. You do not need to specify this parameter.
     *
     * @example cn-hangzhou-h
     *
     * @var string
     */
    public $zoneIdSlave2;
    protected $_name = [
        'collectStatMode'       => 'CollectStatMode',
        'DBInstanceClass'       => 'DBInstanceClass',
        'DBInstanceId'          => 'DBInstanceId',
        'DBInstanceStorage'     => 'DBInstanceStorage',
        'DBInstanceStorageType' => 'DBInstanceStorageType',
        'instanceNetworkType'   => 'InstanceNetworkType',
        'payType'               => 'PayType',
        'period'                => 'Period',
        'privateIpAddress'      => 'PrivateIpAddress',
        'resourceOwnerId'       => 'ResourceOwnerId',
        'switchOver'            => 'SwitchOver',
        'switchTime'            => 'SwitchTime',
        'switchTimeMode'        => 'SwitchTimeMode',
        'targetMajorVersion'    => 'TargetMajorVersion',
        'upgradeMode'           => 'UpgradeMode',
        'usedTime'              => 'UsedTime',
        'VPCId'                 => 'VPCId',
        'vSwitchId'             => 'VSwitchId',
        'zoneId'                => 'ZoneId',
        'zoneIdSlave1'          => 'ZoneIdSlave1',
        'zoneIdSlave2'          => 'ZoneIdSlave2',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->collectStatMode) {
            $res['CollectStatMode'] = $this->collectStatMode;
        }
        if (null !== $this->DBInstanceClass) {
            $res['DBInstanceClass'] = $this->DBInstanceClass;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->DBInstanceStorage) {
            $res['DBInstanceStorage'] = $this->DBInstanceStorage;
        }
        if (null !== $this->DBInstanceStorageType) {
            $res['DBInstanceStorageType'] = $this->DBInstanceStorageType;
        }
        if (null !== $this->instanceNetworkType) {
            $res['InstanceNetworkType'] = $this->instanceNetworkType;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->privateIpAddress) {
            $res['PrivateIpAddress'] = $this->privateIpAddress;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->switchOver) {
            $res['SwitchOver'] = $this->switchOver;
        }
        if (null !== $this->switchTime) {
            $res['SwitchTime'] = $this->switchTime;
        }
        if (null !== $this->switchTimeMode) {
            $res['SwitchTimeMode'] = $this->switchTimeMode;
        }
        if (null !== $this->targetMajorVersion) {
            $res['TargetMajorVersion'] = $this->targetMajorVersion;
        }
        if (null !== $this->upgradeMode) {
            $res['UpgradeMode'] = $this->upgradeMode;
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
        if (null !== $this->zoneIdSlave1) {
            $res['ZoneIdSlave1'] = $this->zoneIdSlave1;
        }
        if (null !== $this->zoneIdSlave2) {
            $res['ZoneIdSlave2'] = $this->zoneIdSlave2;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpgradeDBInstanceMajorVersionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CollectStatMode'])) {
            $model->collectStatMode = $map['CollectStatMode'];
        }
        if (isset($map['DBInstanceClass'])) {
            $model->DBInstanceClass = $map['DBInstanceClass'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DBInstanceStorage'])) {
            $model->DBInstanceStorage = $map['DBInstanceStorage'];
        }
        if (isset($map['DBInstanceStorageType'])) {
            $model->DBInstanceStorageType = $map['DBInstanceStorageType'];
        }
        if (isset($map['InstanceNetworkType'])) {
            $model->instanceNetworkType = $map['InstanceNetworkType'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['PrivateIpAddress'])) {
            $model->privateIpAddress = $map['PrivateIpAddress'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SwitchOver'])) {
            $model->switchOver = $map['SwitchOver'];
        }
        if (isset($map['SwitchTime'])) {
            $model->switchTime = $map['SwitchTime'];
        }
        if (isset($map['SwitchTimeMode'])) {
            $model->switchTimeMode = $map['SwitchTimeMode'];
        }
        if (isset($map['TargetMajorVersion'])) {
            $model->targetMajorVersion = $map['TargetMajorVersion'];
        }
        if (isset($map['UpgradeMode'])) {
            $model->upgradeMode = $map['UpgradeMode'];
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
        if (isset($map['ZoneIdSlave1'])) {
            $model->zoneIdSlave1 = $map['ZoneIdSlave1'];
        }
        if (isset($map['ZoneIdSlave2'])) {
            $model->zoneIdSlave2 = $map['ZoneIdSlave2'];
        }

        return $model;
    }
}
