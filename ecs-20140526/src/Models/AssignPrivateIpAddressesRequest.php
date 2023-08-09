<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class AssignPrivateIpAddressesRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests. The **token** can contain only ASCII characters and cannot exceed 64 characters in length. For more information, see [How to ensure idempotence](~~25693~~).
     *
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description > 该参数正在邀测中，暂未开放使用。
     *
     * @var string[]
     */
    public $ipv4Prefix;

    /**
     * @description > 该参数正在邀测中，暂未开放使用。
     *
     * @example hide
     *
     * @var int
     */
    public $ipv4PrefixCount;

    /**
     * @description The ID of the ENI.
     *
     * @example eni-bp67acfmxazb4p****
     *
     * @var string
     */
    public $networkInterfaceId;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description Secondary private IP address N to be automatically assigned from the CIDR block of the vSwitch that is connected to the ENI. Valid values of N:
     *
     *   When the ENI is in the Available (`Available`) state, the valid values of N are 1 to 50.
     *   When the ENI is in the InUse (`InUse`) state, the valid values of N are subject to the instance type. For more information, see [Overview of instance families](~~25378~~).
     *
     * To assign secondary private IP addresses to the ENI, you must specify `PrivateIpAddress.N` or `SecondaryPrivateIpAddressCount` but not both.
     * @example 10.1.**.**
     *
     * @var string[]
     */
    public $privateIpAddress;

    /**
     * @description The region ID of the ENI. You can call the [DescribeRegions](~~25609~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The number of private IP addresses to be automatically assigned from the CIDR block of the vSwitch that is connected to the ENI.
     *
     * To assign secondary private IP addresses to the ENI, you must specify `PrivateIpAddress.N` or `SecondaryPrivateIpAddressCount` but not both.
     * @example 1
     *
     * @var int
     */
    public $secondaryPrivateIpAddressCount;
    protected $_name = [
        'clientToken'                    => 'ClientToken',
        'ipv4Prefix'                     => 'Ipv4Prefix',
        'ipv4PrefixCount'                => 'Ipv4PrefixCount',
        'networkInterfaceId'             => 'NetworkInterfaceId',
        'ownerAccount'                   => 'OwnerAccount',
        'ownerId'                        => 'OwnerId',
        'privateIpAddress'               => 'PrivateIpAddress',
        'regionId'                       => 'RegionId',
        'resourceOwnerAccount'           => 'ResourceOwnerAccount',
        'resourceOwnerId'                => 'ResourceOwnerId',
        'secondaryPrivateIpAddressCount' => 'SecondaryPrivateIpAddressCount',
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
        if (null !== $this->ipv4Prefix) {
            $res['Ipv4Prefix'] = $this->ipv4Prefix;
        }
        if (null !== $this->ipv4PrefixCount) {
            $res['Ipv4PrefixCount'] = $this->ipv4PrefixCount;
        }
        if (null !== $this->networkInterfaceId) {
            $res['NetworkInterfaceId'] = $this->networkInterfaceId;
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->secondaryPrivateIpAddressCount) {
            $res['SecondaryPrivateIpAddressCount'] = $this->secondaryPrivateIpAddressCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AssignPrivateIpAddressesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Ipv4Prefix'])) {
            if (!empty($map['Ipv4Prefix'])) {
                $model->ipv4Prefix = $map['Ipv4Prefix'];
            }
        }
        if (isset($map['Ipv4PrefixCount'])) {
            $model->ipv4PrefixCount = $map['Ipv4PrefixCount'];
        }
        if (isset($map['NetworkInterfaceId'])) {
            $model->networkInterfaceId = $map['NetworkInterfaceId'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PrivateIpAddress'])) {
            if (!empty($map['PrivateIpAddress'])) {
                $model->privateIpAddress = $map['PrivateIpAddress'];
            }
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SecondaryPrivateIpAddressCount'])) {
            $model->secondaryPrivateIpAddressCount = $map['SecondaryPrivateIpAddressCount'];
        }

        return $model;
    }
}
