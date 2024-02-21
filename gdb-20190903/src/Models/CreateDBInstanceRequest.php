<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gdb\V20190903\Models;

use AlibabaCloud\Tea\Model;

class CreateDBInstanceRequest extends Model
{
    /**
     * @example false
     *
     * @var string
     */
    public $autoRenew;

    /**
     * @example false
     *
     * @var string
     */
    public $autoRenewPeriod;

    /**
     * @example ETnLKlblzczshOTUbOCz****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example ha
     *
     * @var string
     */
    public $DBInstanceCategory;

    /**
     * @example gdb.r.xlarge
     *
     * @var string
     */
    public $DBInstanceClass;

    /**
     * @example gdb_test
     *
     * @var string
     */
    public $DBInstanceDescription;

    /**
     * @example vpc
     *
     * @var string
     */
    public $DBInstanceNetworkType;

    /**
     * @example 1.0
     *
     * @var string
     */
    public $DBInstanceVersion;

    /**
     * @example 100
     *
     * @var string
     */
    public $DBNodeStorage;

    /**
     * @example cloud_essd
     *
     * @var string
     */
    public $DBNodeStorageType;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @example PostPaid
     *
     * @var string
     */
    public $payType;

    /**
     * @example null
     *
     * @var string
     */
    public $period;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example rg-acfmyiu4ekp****
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
     * @example 192.168.xx.xx,192.168.xx.xx
     *
     * @var string
     */
    public $securityIPList;

    /**
     * @example null
     *
     * @var string
     */
    public $usedTime;

    /**
     * @example vpc-bp175iuvg8nxqraf2****
     *
     * @var string
     */
    public $VPCId;

    /**
     * @example vsw-bp1gzt31twhlo0sa5****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @example cn-hangzhou-g
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'autoRenew'             => 'AutoRenew',
        'autoRenewPeriod'       => 'AutoRenewPeriod',
        'clientToken'           => 'ClientToken',
        'DBInstanceCategory'    => 'DBInstanceCategory',
        'DBInstanceClass'       => 'DBInstanceClass',
        'DBInstanceDescription' => 'DBInstanceDescription',
        'DBInstanceNetworkType' => 'DBInstanceNetworkType',
        'DBInstanceVersion'     => 'DBInstanceVersion',
        'DBNodeStorage'         => 'DBNodeStorage',
        'DBNodeStorageType'     => 'DBNodeStorageType',
        'ownerAccount'          => 'OwnerAccount',
        'ownerId'               => 'OwnerId',
        'payType'               => 'PayType',
        'period'                => 'Period',
        'regionId'              => 'RegionId',
        'resourceGroupId'       => 'ResourceGroupId',
        'resourceOwnerAccount'  => 'ResourceOwnerAccount',
        'resourceOwnerId'       => 'ResourceOwnerId',
        'securityIPList'        => 'SecurityIPList',
        'usedTime'              => 'UsedTime',
        'VPCId'                 => 'VPCId',
        'vSwitchId'             => 'VSwitchId',
        'zoneId'                => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }
        if (null !== $this->autoRenewPeriod) {
            $res['AutoRenewPeriod'] = $this->autoRenewPeriod;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->DBInstanceCategory) {
            $res['DBInstanceCategory'] = $this->DBInstanceCategory;
        }
        if (null !== $this->DBInstanceClass) {
            $res['DBInstanceClass'] = $this->DBInstanceClass;
        }
        if (null !== $this->DBInstanceDescription) {
            $res['DBInstanceDescription'] = $this->DBInstanceDescription;
        }
        if (null !== $this->DBInstanceNetworkType) {
            $res['DBInstanceNetworkType'] = $this->DBInstanceNetworkType;
        }
        if (null !== $this->DBInstanceVersion) {
            $res['DBInstanceVersion'] = $this->DBInstanceVersion;
        }
        if (null !== $this->DBNodeStorage) {
            $res['DBNodeStorage'] = $this->DBNodeStorage;
        }
        if (null !== $this->DBNodeStorageType) {
            $res['DBNodeStorageType'] = $this->DBNodeStorageType;
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
     * @return CreateDBInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }
        if (isset($map['AutoRenewPeriod'])) {
            $model->autoRenewPeriod = $map['AutoRenewPeriod'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DBInstanceCategory'])) {
            $model->DBInstanceCategory = $map['DBInstanceCategory'];
        }
        if (isset($map['DBInstanceClass'])) {
            $model->DBInstanceClass = $map['DBInstanceClass'];
        }
        if (isset($map['DBInstanceDescription'])) {
            $model->DBInstanceDescription = $map['DBInstanceDescription'];
        }
        if (isset($map['DBInstanceNetworkType'])) {
            $model->DBInstanceNetworkType = $map['DBInstanceNetworkType'];
        }
        if (isset($map['DBInstanceVersion'])) {
            $model->DBInstanceVersion = $map['DBInstanceVersion'];
        }
        if (isset($map['DBNodeStorage'])) {
            $model->DBNodeStorage = $map['DBNodeStorage'];
        }
        if (isset($map['DBNodeStorageType'])) {
            $model->DBNodeStorageType = $map['DBNodeStorageType'];
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
