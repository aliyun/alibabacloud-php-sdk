<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\AuthorizeSecurityGroupEgressRequest\permissions;
use AlibabaCloud\Tea\Model;

class AuthorizeSecurityGroupEgressRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the value, but you must make sure that it is unique among different requests. The **ClientToken** value can contain only ASCII characters and cannot exceed 64 characters in length. For more information, see [How to ensure idempotence](~~25693~~).
     *
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description This parameter is discontinued. Use `Permissions.N.Description` to specify the description of security group rule N.
     *
     * @example This is description.
     *
     * @var string
     */
    public $description;

    /**
     * @description This parameter is discontinued. Use `Permissions.N.DestCidrIp` to specify the destination IPv4 CIDR block.
     *
     * @example 10.0.0.0/8
     *
     * @var string
     */
    public $destCidrIp;

    /**
     * @description This parameter is discontinued. Use `Permissions.N.DestGroupId` to specify the ID of the destination security group.
     *
     * @example sg-bp67acfmxazb4p****
     *
     * @var string
     */
    public $destGroupId;

    /**
     * @description This parameter is discontinued. Use `Permissions.N.DestGroupOwnerAccount` to specify the Alibaba Cloud account that manages the destination security group.
     *
     * @example Test@aliyun.com
     *
     * @var string
     */
    public $destGroupOwnerAccount;

    /**
     * @description This parameter is discontinued. Use `Permissions.N.DestGroupOwnerId` to specify the ID of the Alibaba Cloud account that manages the destination security group.
     *
     * @example 12345678910
     *
     * @var int
     */
    public $destGroupOwnerId;

    /**
     * @description This parameter is discontinued. Use `Permissions.N.DestPrefixListId` to specify the ID of the destination prefix list.
     *
     * @example pl-x1j1k5ykzqlixdcy****
     *
     * @var string
     */
    public $destPrefixListId;

    /**
     * @description This parameter is discontinued. Use `Permissions.N.IpProtocol` to specify the transport layer protocol.
     *
     * @example ALL
     *
     * @var string
     */
    public $ipProtocol;

    /**
     * @description This parameter is discontinued. Use `Permissions.N.Ipv6DestCidrIp` to specify the destination IPv6 CIDR block.
     *
     * @example 2001:db8:1233:1a00::***
     *
     * @var string
     */
    public $ipv6DestCidrIp;

    /**
     * @description This parameter is discontinued. Use `Permissions.N.Ipv6SourceCidrIp` to specify the source IPv6 CIDR block.
     *
     * @example 2001:db8:1234:1a00::***
     *
     * @var string
     */
    public $ipv6SourceCidrIp;

    /**
     * @description This parameter is discontinued. Use `Permissions.N.NicType` to specify the NIC type.
     *
     * @example intranet
     *
     * @var string
     */
    public $nicType;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description Details about the security group rules.
     *
     * @var permissions[]
     */
    public $permissions;

    /**
     * @description This parameter is discontinued. Use `Permissions.N.Policy` to specify whether to allow outbound access.
     *
     * @example accept
     *
     * @var string
     */
    public $policy;

    /**
     * @description This parameter is discontinued. Use `Permissions.N.PortRange` to specify the range of destination ports.
     *
     * @example 80/80
     *
     * @var string
     */
    public $portRange;

    /**
     * @description This parameter is discontinued. Use `Permissions.N.Priority` to specify the rule priority.
     *
     * @example 1
     *
     * @var string
     */
    public $priority;

    /**
     * @description The region ID of the source security group. You can call the [DescribeRegions](~~25609~~) operation to query the most recent region list.
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
     * @description The ID of the security group.
     *
     * @example sg-bp67acfmxazb4p****
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description This parameter is discontinued. Use `Permissions.N.SourceCidrIp` to specify the source IPv4 CIDR block.
     *
     * @example 10.0.0.0/8
     *
     * @var string
     */
    public $sourceCidrIp;

    /**
     * @description This parameter is discontinued. Use `Permissions.N.SourcePortRange` to specify the range of source ports.
     *
     * @example 80/80
     *
     * @var string
     */
    public $sourcePortRange;
    protected $_name = [
        'clientToken'           => 'ClientToken',
        'description'           => 'Description',
        'destCidrIp'            => 'DestCidrIp',
        'destGroupId'           => 'DestGroupId',
        'destGroupOwnerAccount' => 'DestGroupOwnerAccount',
        'destGroupOwnerId'      => 'DestGroupOwnerId',
        'destPrefixListId'      => 'DestPrefixListId',
        'ipProtocol'            => 'IpProtocol',
        'ipv6DestCidrIp'        => 'Ipv6DestCidrIp',
        'ipv6SourceCidrIp'      => 'Ipv6SourceCidrIp',
        'nicType'               => 'NicType',
        'ownerAccount'          => 'OwnerAccount',
        'ownerId'               => 'OwnerId',
        'permissions'           => 'Permissions',
        'policy'                => 'Policy',
        'portRange'             => 'PortRange',
        'priority'              => 'Priority',
        'regionId'              => 'RegionId',
        'resourceOwnerAccount'  => 'ResourceOwnerAccount',
        'resourceOwnerId'       => 'ResourceOwnerId',
        'securityGroupId'       => 'SecurityGroupId',
        'sourceCidrIp'          => 'SourceCidrIp',
        'sourcePortRange'       => 'SourcePortRange',
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
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->destCidrIp) {
            $res['DestCidrIp'] = $this->destCidrIp;
        }
        if (null !== $this->destGroupId) {
            $res['DestGroupId'] = $this->destGroupId;
        }
        if (null !== $this->destGroupOwnerAccount) {
            $res['DestGroupOwnerAccount'] = $this->destGroupOwnerAccount;
        }
        if (null !== $this->destGroupOwnerId) {
            $res['DestGroupOwnerId'] = $this->destGroupOwnerId;
        }
        if (null !== $this->destPrefixListId) {
            $res['DestPrefixListId'] = $this->destPrefixListId;
        }
        if (null !== $this->ipProtocol) {
            $res['IpProtocol'] = $this->ipProtocol;
        }
        if (null !== $this->ipv6DestCidrIp) {
            $res['Ipv6DestCidrIp'] = $this->ipv6DestCidrIp;
        }
        if (null !== $this->ipv6SourceCidrIp) {
            $res['Ipv6SourceCidrIp'] = $this->ipv6SourceCidrIp;
        }
        if (null !== $this->nicType) {
            $res['NicType'] = $this->nicType;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->permissions) {
            $res['Permissions'] = [];
            if (null !== $this->permissions && \is_array($this->permissions)) {
                $n = 0;
                foreach ($this->permissions as $item) {
                    $res['Permissions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }
        if (null !== $this->portRange) {
            $res['PortRange'] = $this->portRange;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
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
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->sourceCidrIp) {
            $res['SourceCidrIp'] = $this->sourceCidrIp;
        }
        if (null !== $this->sourcePortRange) {
            $res['SourcePortRange'] = $this->sourcePortRange;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AuthorizeSecurityGroupEgressRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DestCidrIp'])) {
            $model->destCidrIp = $map['DestCidrIp'];
        }
        if (isset($map['DestGroupId'])) {
            $model->destGroupId = $map['DestGroupId'];
        }
        if (isset($map['DestGroupOwnerAccount'])) {
            $model->destGroupOwnerAccount = $map['DestGroupOwnerAccount'];
        }
        if (isset($map['DestGroupOwnerId'])) {
            $model->destGroupOwnerId = $map['DestGroupOwnerId'];
        }
        if (isset($map['DestPrefixListId'])) {
            $model->destPrefixListId = $map['DestPrefixListId'];
        }
        if (isset($map['IpProtocol'])) {
            $model->ipProtocol = $map['IpProtocol'];
        }
        if (isset($map['Ipv6DestCidrIp'])) {
            $model->ipv6DestCidrIp = $map['Ipv6DestCidrIp'];
        }
        if (isset($map['Ipv6SourceCidrIp'])) {
            $model->ipv6SourceCidrIp = $map['Ipv6SourceCidrIp'];
        }
        if (isset($map['NicType'])) {
            $model->nicType = $map['NicType'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Permissions'])) {
            if (!empty($map['Permissions'])) {
                $model->permissions = [];
                $n                  = 0;
                foreach ($map['Permissions'] as $item) {
                    $model->permissions[$n++] = null !== $item ? permissions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }
        if (isset($map['PortRange'])) {
            $model->portRange = $map['PortRange'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
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
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['SourceCidrIp'])) {
            $model->sourceCidrIp = $map['SourceCidrIp'];
        }
        if (isset($map['SourcePortRange'])) {
            $model->sourcePortRange = $map['SourcePortRange'];
        }

        return $model;
    }
}
