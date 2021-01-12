<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class ModifyDBInstanceNetworkTypeRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

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
    public $DBInstanceId;

    /**
     * @var string
     */
    public $retainClassic;

    /**
     * @var string
     */
    public $classicExpiredDays;

    /**
     * @var string
     */
    public $instanceNetworkType;

    /**
     * @var int
     */
    public $readWriteSplittingClassicExpiredDays;

    /**
     * @var string
     */
    public $VPCId;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $privateIpAddress;

    /**
     * @var string
     */
    public $readWriteSplittingPrivateIpAddress;

    /**
     * @var string
     */
    public $ownerAccount;
    protected $_name = [
        'ownerId'                              => 'OwnerId',
        'resourceOwnerAccount'                 => 'ResourceOwnerAccount',
        'resourceOwnerId'                      => 'ResourceOwnerId',
        'DBInstanceId'                         => 'DBInstanceId',
        'retainClassic'                        => 'RetainClassic',
        'classicExpiredDays'                   => 'ClassicExpiredDays',
        'instanceNetworkType'                  => 'InstanceNetworkType',
        'readWriteSplittingClassicExpiredDays' => 'ReadWriteSplittingClassicExpiredDays',
        'VPCId'                                => 'VPCId',
        'vSwitchId'                            => 'VSwitchId',
        'privateIpAddress'                     => 'PrivateIpAddress',
        'readWriteSplittingPrivateIpAddress'   => 'ReadWriteSplittingPrivateIpAddress',
        'ownerAccount'                         => 'OwnerAccount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->retainClassic) {
            $res['RetainClassic'] = $this->retainClassic;
        }
        if (null !== $this->classicExpiredDays) {
            $res['ClassicExpiredDays'] = $this->classicExpiredDays;
        }
        if (null !== $this->instanceNetworkType) {
            $res['InstanceNetworkType'] = $this->instanceNetworkType;
        }
        if (null !== $this->readWriteSplittingClassicExpiredDays) {
            $res['ReadWriteSplittingClassicExpiredDays'] = $this->readWriteSplittingClassicExpiredDays;
        }
        if (null !== $this->VPCId) {
            $res['VPCId'] = $this->VPCId;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->privateIpAddress) {
            $res['PrivateIpAddress'] = $this->privateIpAddress;
        }
        if (null !== $this->readWriteSplittingPrivateIpAddress) {
            $res['ReadWriteSplittingPrivateIpAddress'] = $this->readWriteSplittingPrivateIpAddress;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDBInstanceNetworkTypeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['RetainClassic'])) {
            $model->retainClassic = $map['RetainClassic'];
        }
        if (isset($map['ClassicExpiredDays'])) {
            $model->classicExpiredDays = $map['ClassicExpiredDays'];
        }
        if (isset($map['InstanceNetworkType'])) {
            $model->instanceNetworkType = $map['InstanceNetworkType'];
        }
        if (isset($map['ReadWriteSplittingClassicExpiredDays'])) {
            $model->readWriteSplittingClassicExpiredDays = $map['ReadWriteSplittingClassicExpiredDays'];
        }
        if (isset($map['VPCId'])) {
            $model->VPCId = $map['VPCId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['PrivateIpAddress'])) {
            $model->privateIpAddress = $map['PrivateIpAddress'];
        }
        if (isset($map['ReadWriteSplittingPrivateIpAddress'])) {
            $model->readWriteSplittingPrivateIpAddress = $map['ReadWriteSplittingPrivateIpAddress'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }

        return $model;
    }
}
