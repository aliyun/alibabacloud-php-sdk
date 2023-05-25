<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class AssignIpv6AddressesRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @description The IPv6 addresses that you want to assign to the ENI. You can specify up to 10 IPv6 addresses.
     *
     * Example: Ipv6Address.1=2001:db8:1234:1a00::\*\*\*\*
     *
     * > You must specify `Ipv6Addresses.N` or `Ipv6AddressCount` but cannot specify both.
     * @example 2001:db8:1234:1a00::****
     *
     * @var string[]
     */
    public $ipv6Address;

    /**
     * @description The number of IPv6 addresses that you want to generate at random for the ENI. Valid values: 1 to 10.
     *
     * > You must specify `Ipv6Addresses.N` or `Ipv6AddressCount` but cannot specify both.
     * @example 1
     *
     * @var int
     */
    public $ipv6AddressCount;

    /**
     * @description > This parameter is in invitational preview and is unavailable for general users.
     *
     * @var string[]
     */
    public $ipv6Prefix;

    /**
     * @description > This parameter is in invitational preview and is unavailable for general users.
     *
     * @example hide
     *
     * @var int
     */
    public $ipv6PrefixCount;

    /**
     * @description The ENI ID.
     *
     * @example eni-bp1iqejowblx6h8j****
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
    protected $_name = [
        'clientToken'          => 'ClientToken',
        'ipv6Address'          => 'Ipv6Address',
        'ipv6AddressCount'     => 'Ipv6AddressCount',
        'ipv6Prefix'           => 'Ipv6Prefix',
        'ipv6PrefixCount'      => 'Ipv6PrefixCount',
        'networkInterfaceId'   => 'NetworkInterfaceId',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
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
        if (null !== $this->ipv6Address) {
            $res['Ipv6Address'] = $this->ipv6Address;
        }
        if (null !== $this->ipv6AddressCount) {
            $res['Ipv6AddressCount'] = $this->ipv6AddressCount;
        }
        if (null !== $this->ipv6Prefix) {
            $res['Ipv6Prefix'] = $this->ipv6Prefix;
        }
        if (null !== $this->ipv6PrefixCount) {
            $res['Ipv6PrefixCount'] = $this->ipv6PrefixCount;
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AssignIpv6AddressesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Ipv6Address'])) {
            if (!empty($map['Ipv6Address'])) {
                $model->ipv6Address = $map['Ipv6Address'];
            }
        }
        if (isset($map['Ipv6AddressCount'])) {
            $model->ipv6AddressCount = $map['Ipv6AddressCount'];
        }
        if (isset($map['Ipv6Prefix'])) {
            if (!empty($map['Ipv6Prefix'])) {
                $model->ipv6Prefix = $map['Ipv6Prefix'];
            }
        }
        if (isset($map['Ipv6PrefixCount'])) {
            $model->ipv6PrefixCount = $map['Ipv6PrefixCount'];
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        return $model;
    }
}
