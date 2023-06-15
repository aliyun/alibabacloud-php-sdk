<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class ModifyDBInstanceNetworkTypeRequest extends Model
{
    /**
     * @description The number of days for which you want to retain the classic network endpoint. Valid values: **1 to 120**. Default value: **7**.
     *
     * > If you set the **RetainClassic** parameter to **True**, you must also specify this parameter.
     * @example 7
     *
     * @var string
     */
    public $classicExpiredDays;

    /**
     * @description The ID of the instance.
     *
     * @example rm-uf6wjk5xxxxxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The network type after the modification. Set the value to **VPC**.
     *
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
     * @description The internal IP address of the instance. The internal IP address must be within the CIDR block supported by the specified vSwitch. ApsaraDB RDS automatically assigns an internal IP address to the instance based on the values of the **VPCId** and **VSwitchId** parameters.
     *
     * @example 172.10.40.25
     *
     * @var string
     */
    public $privateIpAddress;

    /**
     * @description The number of days for which you want to retain the read/write splitting endpoint of the classic network type. Valid values: **1 to 120**. Default value: **7**.
     *
     * > This parameter takes effect only when a read/write splitting endpoint of the classic network type exists and the **RetainClassic** parameter is set to **True**.
     * @example 7
     *
     * @var int
     */
    public $readWriteSplittingClassicExpiredDays;

    /**
     * @description The internal IP address that corresponds to the read/write splitting endpoint of the instance. The internal IP address must be within the CIDR block supported by the specified vSwitch. The system automatically assigns an internal IP address to the read-only instance based on the values of the **VPCId** and **VSwitchId** parameters.
     *
     * > This value is valid when a read/write splitting endpoint of the classic network type exists.
     * @example 192.168.0.22
     *
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
     * @description Specifies whether to retain the classic network endpoint. Valid values:
     *
     *   **True**: retains the classic network endpoint.
     *   **False**: does not retain the classic network endpoint.
     *
     * Default value: **False**.
     * @example True
     *
     * @var string
     */
    public $retainClassic;

    /**
     * @description The ID of the VPC.
     *
     * @example vpc-uf6f7l4fg90xxxxxx
     *
     * @var string
     */
    public $VPCId;

    /**
     * @description The ID of the vSwitch. This parameter is required if the **VPCId** parameter is specified.
     *
     * @example vsw-uf6adz52c2pxxxxx
     *
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
