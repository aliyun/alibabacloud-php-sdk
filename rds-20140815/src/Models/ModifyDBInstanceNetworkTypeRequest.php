<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class ModifyDBInstanceNetworkTypeRequest extends Model
{
    /**
     * @var string
     */
    public $classicExpiredDays;

    /**
     * @var string
     */
    public $DBInstanceId;

    /**
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
     * @var string
     */
    public $privateIpAddress;

    /**
     * @var int
     */
    public $readWriteSplittingClassicExpiredDays;

    /**
     * @var string
     */
    public $readWriteSplittingPrivateIpAddress;

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
    public $retainClassic;

    /**
     * @var string
     */
    public $VPCId;

    /**
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'classicExpiredDays'                   => 'ClassicExpiredDays',
        'DBInstanceId'                         => 'DBInstanceId',
        'instanceNetworkType'                  => 'InstanceNetworkType',
        'ownerAccount'                         => 'OwnerAccount',
        'ownerId'                              => 'OwnerId',
        'privateIpAddress'                     => 'PrivateIpAddress',
        'readWriteSplittingClassicExpiredDays' => 'ReadWriteSplittingClassicExpiredDays',
        'readWriteSplittingPrivateIpAddress'   => 'ReadWriteSplittingPrivateIpAddress',
        'resourceOwnerAccount'                 => 'ResourceOwnerAccount',
        'resourceOwnerId'                      => 'ResourceOwnerId',
        'retainClassic'                        => 'RetainClassic',
        'VPCId'                                => 'VPCId',
        'vSwitchId'                            => 'VSwitchId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->classicExpiredDays) {
            $res['ClassicExpiredDays'] = $this->classicExpiredDays;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
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
        if (null !== $this->privateIpAddress) {
            $res['PrivateIpAddress'] = $this->privateIpAddress;
        }
        if (null !== $this->readWriteSplittingClassicExpiredDays) {
            $res['ReadWriteSplittingClassicExpiredDays'] = $this->readWriteSplittingClassicExpiredDays;
        }
        if (null !== $this->readWriteSplittingPrivateIpAddress) {
            $res['ReadWriteSplittingPrivateIpAddress'] = $this->readWriteSplittingPrivateIpAddress;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->retainClassic) {
            $res['RetainClassic'] = $this->retainClassic;
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
     * @return ModifyDBInstanceNetworkTypeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClassicExpiredDays'])) {
            $model->classicExpiredDays = $map['ClassicExpiredDays'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
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
        if (isset($map['PrivateIpAddress'])) {
            $model->privateIpAddress = $map['PrivateIpAddress'];
        }
        if (isset($map['ReadWriteSplittingClassicExpiredDays'])) {
            $model->readWriteSplittingClassicExpiredDays = $map['ReadWriteSplittingClassicExpiredDays'];
        }
        if (isset($map['ReadWriteSplittingPrivateIpAddress'])) {
            $model->readWriteSplittingPrivateIpAddress = $map['ReadWriteSplittingPrivateIpAddress'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['RetainClassic'])) {
            $model->retainClassic = $map['RetainClassic'];
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
