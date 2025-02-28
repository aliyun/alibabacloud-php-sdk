<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;

class ModifyDBProxyShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $configDBProxyService;
    /**
     * @var string
     */
    public $DBInstanceId;
    /**
     * @var string
     */
    public $DBProxyEngineType;
    /**
     * @var string
     */
    public $DBProxyInstanceNum;
    /**
     * @var string
     */
    public $DBProxyInstanceType;
    /**
     * @var string
     */
    public $DBProxyNodesShrink;
    /**
     * @var string
     */
    public $instanceNetworkType;
    /**
     * @var int
     */
    public $ownerId;
    /**
     * @var string
     */
    public $persistentConnectionStatus;
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
    public $resourceOwnerAccount;
    /**
     * @var int
     */
    public $resourceOwnerId;
    /**
     * @var string
     */
    public $VPCId;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
