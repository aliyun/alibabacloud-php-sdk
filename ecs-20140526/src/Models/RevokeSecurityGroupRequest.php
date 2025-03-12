<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\RevokeSecurityGroupRequest\permissions;
use AlibabaCloud\Tea\Model;

class RevokeSecurityGroupRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests. The **ClientToken** value can contain only ASCII characters and cannot exceed 64 characters in length. For more information, see [How to ensure idempotence](https://help.aliyun.com/document_detail/25693.html).
     *
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description This parameter is deprecated. Use `Permissions.N.Description` to specify the rule description.
     *
     * @example This is description.
     *
     * @deprecated
     *
     * @var string
     */
    public $description;

    /**
     * @description This parameter is deprecated. Use `Permissions.N.DestCidrIp` to specify the destination IPv4 CIDR block.
     *
     * @example 10.0.0.0/8
     *
     * @deprecated
     *
     * @var string
     */
    public $destCidrIp;

    /**
     * @description This parameter is deprecated. Use `Permissions.N.IpProtocol` to specify the protocol.
     *
     * @example ALL
     *
     * @deprecated
     *
     * @var string
     */
    public $ipProtocol;

    /**
     * @description This parameter is deprecated. Use `Permissions.N.Ipv6DestCidrIp` to specify the destination IPv6 CIDR block.
     *
     * @example 2001:db8:1233:1a00::***
     *
     * @deprecated
     *
     * @var string
     */
    public $ipv6DestCidrIp;

    /**
     * @description This parameter is deprecated. Use `Permissions.N.Ipv6SourceCidrIp` to specify the source IPv6 CIDR block.
     *
     * @example 2001:db8:1234:1a00::***
     *
     * @deprecated
     *
     * @var string
     */
    public $ipv6SourceCidrIp;

    /**
     * @description This parameter is deprecated. Use `Permissions.N.NicType` to specify the network interface type.
     *
     * @example intranet
     *
     * @deprecated
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
     * @description The content of security group rules. You can specify 1 to 100 security group rules in a request.
     *
     * @var permissions[]
     */
    public $permissions;

    /**
     * @description This parameter is deprecated. Use `Permissions.N.Policy` to specify whether to allow inbound access.
     *
     * @example accept
     *
     * @deprecated
     *
     * @var string
     */
    public $policy;

    /**
     * @description This parameter is deprecated. Use `Permissions.N.PortRange` to specify the range of destination ports.
     *
     * @example 1/200
     *
     * @deprecated
     *
     * @var string
     */
    public $portRange;

    /**
     * @description This parameter is deprecated. Use `Permissions.N.Priority` to specify the rule priority.
     *
     * @example 1
     *
     * @deprecated
     *
     * @var string
     */
    public $priority;

    /**
     * @description The region ID of the security group. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/25609.html) operation to query the most recent region list.
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

    /**
     * @description The ID of the security group.
     *
     * This parameter is required.
     * @example sg-bp67acfmxazb4p****
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description The security group rule IDs. You can specify 1 to 100 security group rule IDs in a request.
     *
     * @var string[]
     */
    public $securityGroupRuleId;

    /**
     * @description This parameter is deprecated. Use `Permissions.N.SourceCidrIp` to specify the source IPv4 CIDR block.
     *
     * @example 10.0.0.0/8
     *
     * @deprecated
     *
     * @var string
     */
    public $sourceCidrIp;

    /**
     * @description This parameter is deprecated. Use `Permissions.N.SourceGroupId` to specify the ID of the source security group.
     *
     * @example sg-bp67acfmxa123b****
     *
     * @deprecated
     *
     * @var string
     */
    public $sourceGroupId;

    /**
     * @description This parameter is deprecated. Use `Permissions.N.SourceGroupOwnerAccount` to specify the Alibaba Cloud account that manages the source security group.
     *
     * @example Test@aliyun.com
     *
     * @deprecated
     *
     * @var string
     */
    public $sourceGroupOwnerAccount;

    /**
     * @description This parameter is deprecated. Use `Permissions.N.SourceGroupOwnerId` to specify the ID of the Alibaba Cloud account that manages the source security group.
     *
     * @example 12345678910
     *
     * @deprecated
     *
     * @var int
     */
    public $sourceGroupOwnerId;

    /**
     * @description This parameter is deprecated. Use `Permissions.N.SourcePortRange` to specify the range of source ports.
     *
     * @example 80/80
     *
     * @deprecated
     *
     * @var string
     */
    public $sourcePortRange;

    /**
     * @description This parameter is deprecated. Use `Permissions.N.SourcePrefixListId` to specify the ID of the source prefix list.
     *
     * @example pl-x1j1k5ykzqlixdcy****
     *
     * @deprecated
     *
     * @var string
     */
    public $sourcePrefixListId;
    protected $_name = [
        'clientToken'             => 'ClientToken',
        'description'             => 'Description',
        'destCidrIp'              => 'DestCidrIp',
        'ipProtocol'              => 'IpProtocol',
        'ipv6DestCidrIp'          => 'Ipv6DestCidrIp',
        'ipv6SourceCidrIp'        => 'Ipv6SourceCidrIp',
        'nicType'                 => 'NicType',
        'ownerAccount'            => 'OwnerAccount',
        'ownerId'                 => 'OwnerId',
        'permissions'             => 'Permissions',
        'policy'                  => 'Policy',
        'portRange'               => 'PortRange',
        'priority'                => 'Priority',
        'regionId'                => 'RegionId',
        'resourceOwnerAccount'    => 'ResourceOwnerAccount',
        'resourceOwnerId'         => 'ResourceOwnerId',
        'securityGroupId'         => 'SecurityGroupId',
        'securityGroupRuleId'     => 'SecurityGroupRuleId',
        'sourceCidrIp'            => 'SourceCidrIp',
        'sourceGroupId'           => 'SourceGroupId',
        'sourceGroupOwnerAccount' => 'SourceGroupOwnerAccount',
        'sourceGroupOwnerId'      => 'SourceGroupOwnerId',
        'sourcePortRange'         => 'SourcePortRange',
        'sourcePrefixListId'      => 'SourcePrefixListId',
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
        if (null !== $this->securityGroupRuleId) {
            $res['SecurityGroupRuleId'] = $this->securityGroupRuleId;
        }
        if (null !== $this->sourceCidrIp) {
            $res['SourceCidrIp'] = $this->sourceCidrIp;
        }
        if (null !== $this->sourceGroupId) {
            $res['SourceGroupId'] = $this->sourceGroupId;
        }
        if (null !== $this->sourceGroupOwnerAccount) {
            $res['SourceGroupOwnerAccount'] = $this->sourceGroupOwnerAccount;
        }
        if (null !== $this->sourceGroupOwnerId) {
            $res['SourceGroupOwnerId'] = $this->sourceGroupOwnerId;
        }
        if (null !== $this->sourcePortRange) {
            $res['SourcePortRange'] = $this->sourcePortRange;
        }
        if (null !== $this->sourcePrefixListId) {
            $res['SourcePrefixListId'] = $this->sourcePrefixListId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RevokeSecurityGroupRequest
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
        if (isset($map['SecurityGroupRuleId'])) {
            if (!empty($map['SecurityGroupRuleId'])) {
                $model->securityGroupRuleId = $map['SecurityGroupRuleId'];
            }
        }
        if (isset($map['SourceCidrIp'])) {
            $model->sourceCidrIp = $map['SourceCidrIp'];
        }
        if (isset($map['SourceGroupId'])) {
            $model->sourceGroupId = $map['SourceGroupId'];
        }
        if (isset($map['SourceGroupOwnerAccount'])) {
            $model->sourceGroupOwnerAccount = $map['SourceGroupOwnerAccount'];
        }
        if (isset($map['SourceGroupOwnerId'])) {
            $model->sourceGroupOwnerId = $map['SourceGroupOwnerId'];
        }
        if (isset($map['SourcePortRange'])) {
            $model->sourcePortRange = $map['SourcePortRange'];
        }
        if (isset($map['SourcePrefixListId'])) {
            $model->sourcePrefixListId = $map['SourcePrefixListId'];
        }

        return $model;
    }
}
