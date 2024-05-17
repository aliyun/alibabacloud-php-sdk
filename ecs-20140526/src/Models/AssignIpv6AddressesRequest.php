<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class AssignIpv6AddressesRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length.**** For more information, see [How to ensure idempotence](https://help.aliyun.com/document_detail/25693.html).
     *
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The IPv6 addresses to assign to the ENI. Valid values of N: 1 to 10.
     *
     * Example: Ipv6Address.1=2001:db8:1234:1a00::\\*\\*\\*\\*
     *
     * >  You must specify `Ipv6Addresses.N` or `Ipv6AddressCount`, but not both.
     * @example 2001:db8:1234:1a00::****
     *
     * @var string[]
     */
    public $ipv6Address;

    /**
     * @description The number of IPv6 addresses to randomly generate for the ENI. Valid values: 1 to 10.
     *
     * >  You must specify `Ipv6Addresses.N` or `Ipv6AddressCount`, but not both.
     * @example 1
     *
     * @var int
     */
    public $ipv6AddressCount;

    /**
     * @description The IPv6 prefixes to assign to the ENI. Valid values of N: 1 to 10.
     *
     * >  To assign IPv6 prefixes to the ENI, you must specify Ipv6Prefix.N or Ipv6PrefixCount, but not both.
     * @var string[]
     */
    public $ipv6Prefix;

    /**
     * @description The number of IPv6 prefixes to assign to the ENI. Valid values: 1 to 10.
     *
     * >  To assign IPv6 prefixes to the ENI, you must specify Ipv6Prefix.N or Ipv6PrefixCount, but not both.
     * @example hide
     *
     * @var int
     */
    public $ipv6PrefixCount;

    /**
     * @description The ENI ID.
     *
     * This parameter is required.
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
     * @description The region ID of the ENI. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/25609.html) operation to query the most recent region list.
     *
     * This parameter is required.
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
