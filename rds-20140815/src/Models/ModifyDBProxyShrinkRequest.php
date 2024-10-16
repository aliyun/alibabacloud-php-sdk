<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class ModifyDBProxyShrinkRequest extends Model
{
    /**
     * @description Specifies whether to enable or disable the database proxy feature. Valid values:
     *
     *   **Startup**: enables the database proxy feature.
     *   **Shutdown**: disables the database proxy feature.
     *
     * This parameter is required.
     * @example Startup
     *
     * @var string
     */
    public $configDBProxyService;

    /**
     * @description The instance ID. You can call the DescribeDBInstances operation to query the instance ID.
     *
     * This parameter is required.
     * @example rm-uf6wjk5xxxxxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description A reserved parameter. You do not need to specify this parameter.
     *
     * @example normal
     *
     * @var string
     */
    public $DBProxyEngineType;

    /**
     * @description The number of proxy instances that are enabled. Valid values: **1** to **16**. Default value: **1**.
     *
     * >  The capability of the database proxy to process requests increases with the number of proxy instances that are enabled. You can monitor the load on the instance and specify an appropriate number of proxy instances based on the load monitoring data.
     * @example 1
     *
     * @var string
     */
    public $DBProxyInstanceNum;

    /**
     * @description This parameter is reserved. You do not need to specify this parameter.
     *
     * @example common
     *
     * @var string
     */
    public $DBProxyInstanceType;

    /**
     * @var string
     */
    public $DBProxyNodesShrink;

    /**
     * @description The network type of the instance. Set the value to **VPC**.
     *
     * > This parameter is required if you enable the database proxy feature for an ApsaraDB RDS for MySQL instance that uses cloud disks or an ApsaraDB RDS for PostgreSQL instance.
     * @example VPC
     *
     * @var string
     */
    public $instanceNetworkType;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description Whether to enable connection keep. Valid values:
     *
     * > - This parameter is supported only for an ApsaraDB RDS for MySQL.
     * > - When you modify the connection persistence state, the value of **ConfigDBProxyService** is modify.
     * @example Enabled
     *
     * @var string
     */
    public $persistentConnectionStatus;

    /**
     * @description The region ID. You can call the DescribeRegions operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The resource group ID.
     *
     * @example rg-acfmy*****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The ID of the virtual private cloud (VPC) to which the instance belongs. You can call the DescribeDBInstanceAttribute operation to query the VPC ID.
     *
     * >  This parameter is required if you enable the database proxy feature for an ApsaraDB RDS for MySQL instance that uses cloud disks or an ApsaraDB RDS for PostgreSQL instance.
     * @example vpc-xxxxxxxxxxxx
     *
     * @var string
     */
    public $VPCId;

    /**
     * @description The vSwitch ID of the instance. You can call the DescribeDBInstanceAttribute operation to query the vSwitch ID.
     *
     * >  This parameter is required if you enable the database proxy feature for an ApsaraDB RDS for MySQL instance that uses cloud disks or an ApsaraDB RDS for PostgreSQL instance.
     * @example vsw-xxxxxxxxxxxx
     *
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'configDBProxyService'       => 'ConfigDBProxyService',
        'DBInstanceId'               => 'DBInstanceId',
        'DBProxyEngineType'          => 'DBProxyEngineType',
        'DBProxyInstanceNum'         => 'DBProxyInstanceNum',
        'DBProxyInstanceType'        => 'DBProxyInstanceType',
        'DBProxyNodesShrink'         => 'DBProxyNodes',
        'instanceNetworkType'        => 'InstanceNetworkType',
        'ownerId'                    => 'OwnerId',
        'persistentConnectionStatus' => 'PersistentConnectionStatus',
        'regionId'                   => 'RegionId',
        'resourceGroupId'            => 'ResourceGroupId',
        'resourceOwnerAccount'       => 'ResourceOwnerAccount',
        'resourceOwnerId'            => 'ResourceOwnerId',
        'VPCId'                      => 'VPCId',
        'vSwitchId'                  => 'VSwitchId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configDBProxyService) {
            $res['ConfigDBProxyService'] = $this->configDBProxyService;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->DBProxyEngineType) {
            $res['DBProxyEngineType'] = $this->DBProxyEngineType;
        }
        if (null !== $this->DBProxyInstanceNum) {
            $res['DBProxyInstanceNum'] = $this->DBProxyInstanceNum;
        }
        if (null !== $this->DBProxyInstanceType) {
            $res['DBProxyInstanceType'] = $this->DBProxyInstanceType;
        }
        if (null !== $this->DBProxyNodesShrink) {
            $res['DBProxyNodes'] = $this->DBProxyNodesShrink;
        }
        if (null !== $this->instanceNetworkType) {
            $res['InstanceNetworkType'] = $this->instanceNetworkType;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->persistentConnectionStatus) {
            $res['PersistentConnectionStatus'] = $this->persistentConnectionStatus;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->VPCId) {
            $res['VPCId'] = $this->VPCId;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDBProxyShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigDBProxyService'])) {
            $model->configDBProxyService = $map['ConfigDBProxyService'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DBProxyEngineType'])) {
            $model->DBProxyEngineType = $map['DBProxyEngineType'];
        }
        if (isset($map['DBProxyInstanceNum'])) {
            $model->DBProxyInstanceNum = $map['DBProxyInstanceNum'];
        }
        if (isset($map['DBProxyInstanceType'])) {
            $model->DBProxyInstanceType = $map['DBProxyInstanceType'];
        }
        if (isset($map['DBProxyNodes'])) {
            $model->DBProxyNodesShrink = $map['DBProxyNodes'];
        }
        if (isset($map['InstanceNetworkType'])) {
            $model->instanceNetworkType = $map['InstanceNetworkType'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PersistentConnectionStatus'])) {
            $model->persistentConnectionStatus = $map['PersistentConnectionStatus'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['VPCId'])) {
            $model->VPCId = $map['VPCId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        return $model;
    }
}
