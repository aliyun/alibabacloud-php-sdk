<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class CreateDBInstanceForRebuildRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests.
     *
     * The token can contain only ASCII characters and cannot exceed 64 characters in length.
     * @example ETnLKlblzczshOTUbOCzxxxxxxx
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The name of the instance. The name must be 2 to 256 characters in length. The name can contain letters, digits, underscores (_), and hyphens (-). The name must start with a letter.
     *
     * > : The name cannot start with http:// or https://.
     * @example Test database
     *
     * @var string
     */
    public $DBInstanceDescription;

    /**
     * @description The instance ID. You can call the [DescribeDBInstances](https://help.aliyun.com/document_detail/610396.html) operation to query the ID of the instance.
     *
     * This parameter is required.
     * @example rm-uf6wjk5xxxxxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The type of the network connection to the instance. Valid values:
     *
     *   **Internet**
     *   **Intranet**
     *
     * @example Internet
     *
     * @var string
     */
    public $DBInstanceNetType;

    /**
     * @description The network type of the instance. Valid values:
     *
     *   **VPC**
     *   **Classic**
     *
     * Default value: Classic.
     *
     * >  The **VPCId** and **VSwitchId** parameters must be specified when this parameter is set to **VPC**.
     * @example VPC
     *
     * @var string
     */
    public $instanceNetworkType;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The billing method of the destination instance. Valid values:
     *
     *   **Postpaid**: pay-as-you-go
     *   **Prepaid**: subscription
     *
     * This parameter is required.
     * @example Postpaid
     *
     * @var string
     */
    public $payType;

    /**
     * @description The unit of the subscription duration. Valid values:
     *
     *   **Year**
     *   **Month**
     *
     * >  If you set the PayType parameter to **Prepaid**, you must specify this parameter.
     * @example Month
     *
     * @var string
     */
    public $period;

    /**
     * @description The region ID. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/610399.html) operation to query the most recent region list.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group. The value of this parameter can be NULL.
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
     * @description The IP address whitelist of the serverless instance. For more information, see [Use a database client or the CLI to connect to an ApsaraDB RDS for PostgreSQL instance](https://help.aliyun.com/document_detail/43185.html). If the IP address whitelist contains more than one entry, separate the entries with commas (,). Each entry must be unique. You can specify up to 1,000 entries. The entries in the IP address whitelist must be in one of the following formats:
     *
     *   IP addresses, such as 10.10.XX.XX.
     *   CIDR blocks, such as 10.10.XX.XX/24. In this example, 24 indicates that the prefix of each IP address in the IP address whitelist is 24 bits in length. You can replace 24 with a value within the range of 1 to 32.
     *
     * If this parameter is not specified, the default IP address whitelist is used.
     * @example 127.0.0.1
     *
     * @var string
     */
    public $securityIPList;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @description The subscription duration of the instance. Valid values:
     *
     *   If you set **Period** to **Year**, the value of **UsedTime** ranges from **1** to **5**.
     *   If you set **Period** to **Month**, the value of **UsedTime** ranges from **1** to **11**.
     *
     * > If you set **PayType** to **Prepaid**, you must specify this parameter.
     * @example 1
     *
     * @var string
     */
    public $usedTime;

    /**
     * @description The VPC ID of the instance. If you set **InstanceNetworkType** to **VPC**, you must specify this parameter.
     *
     * > : If you specify this parameter, you must also specify **ZoneId**.
     * @example vpc-uf6f7l4fg90xxxxxx
     *
     * @var string
     */
    public $VPCId;

    /**
     * @description The ID of the vSwitch. The vSwitch must belong to the zone that is specified by **ZoneId**.
     *
     * >
     *
     *   If you set **InstanceNetworkType** to **VPC**, you must also specify this parameter.
     *
     *   If you specify the ZoneSlaveId1 parameter, you must specify the IDs of two vSwitches for this parameter and separate the IDs with a comma (,).
     *
     * @example vsw-uf6adz52c2pxxxxx
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The zone ID of the primary instance. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/26243.html) operation to query the most recent zone list.
     *
     * > If you specify a virtual private cloud (VPC) and a vSwitch, you must specify this parameter to identify the zone for the vSwitch.
     * @example cn-hangzhou-e
     *
     * @var string
     */
    public $zoneId;

    /**
     * @description The zone ID of the secondary instance.
     *
     * >  If the instance does not run RDS Basic Edition, you must specify this parameter.
     * @example cn-hangzhou-c
     *
     * @var string
     */
    public $zoneIdSlave1;

    /**
     * @description The zone ID of the logger instance.
     *
     * >  This parameter is available only when the instance runs RDS Enterprise Edition.
     * @example cn-hangzhou-d
     *
     * @var string
     */
    public $zoneIdSlave2;
    protected $_name = [
        'clientToken'           => 'ClientToken',
        'DBInstanceDescription' => 'DBInstanceDescription',
        'DBInstanceId'          => 'DBInstanceId',
        'DBInstanceNetType'     => 'DBInstanceNetType',
        'instanceNetworkType'   => 'InstanceNetworkType',
        'ownerAccount'          => 'OwnerAccount',
        'ownerId'               => 'OwnerId',
        'payType'               => 'PayType',
        'period'                => 'Period',
        'regionId'              => 'RegionId',
        'resourceGroupId'       => 'ResourceGroupId',
        'resourceOwnerAccount'  => 'ResourceOwnerAccount',
        'resourceOwnerId'       => 'ResourceOwnerId',
        'securityIPList'        => 'SecurityIPList',
        'securityToken'         => 'SecurityToken',
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
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->DBInstanceDescription) {
            $res['DBInstanceDescription'] = $this->DBInstanceDescription;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->DBInstanceNetType) {
            $res['DBInstanceNetType'] = $this->DBInstanceNetType;
        }
        if (null !== $this->instanceNetworkType) {
            $res['InstanceNetworkType'] = $this->instanceNetworkType;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
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
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->securityIPList) {
            $res['SecurityIPList'] = $this->securityIPList;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
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
     * @return CreateDBInstanceForRebuildRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DBInstanceDescription'])) {
            $model->DBInstanceDescription = $map['DBInstanceDescription'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DBInstanceNetType'])) {
            $model->DBInstanceNetType = $map['DBInstanceNetType'];
        }
        if (isset($map['InstanceNetworkType'])) {
            $model->instanceNetworkType = $map['InstanceNetworkType'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
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
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SecurityIPList'])) {
            $model->securityIPList = $map['SecurityIPList'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
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
