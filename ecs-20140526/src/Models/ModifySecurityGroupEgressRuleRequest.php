<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class ModifySecurityGroupEgressRuleRequest extends Model
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
     * @description The description of the security group rule. The description must be 1 to 512 characters in length.
     *
     * @example This is a new securitygroup rule.
     *
     * @var string
     */
    public $description;

    /**
     * @description The destination IPv4 CIDR block. IPv4 CIDR blocks and IPv4 addresses are supported.
     *
     * By default, this parameter is left empty.
     *
     * @example 10.0.0.0/8
     *
     * @var string
     */
    public $destCidrIp;

    /**
     * @description The ID of the destination security group. You must specify at least one of `DestGroupId` and `DestCidrIp`.
     *
     *   At least one of DestGroupId, DestCidrIp, Ipv6DestCidrIp, and DestPrefixListId must be specified.
     *   If DestGroupId is specified but DestCidrIp is not specified, the NicType parameter can be set only to intranet.
     *   If both DestGroupId and DestCidrIp are specified, DestCidrIp takes precedence.
     *
     * @example sg-bp67acfmxa123b****
     *
     * @var string
     */
    public $destGroupId;

    /**
     * @description The Alibaba Cloud account that manages the destination security group when you set security group rule N across accounts.
     *
     * @example EcsforCloud@Alibaba.com
     *
     * @var string
     */
    public $destGroupOwnerAccount;

    /**
     * @description The ID of the Alibaba Cloud account that manages the destination security group when you set security group rule N across accounts.
     *
     * @example 1234567890
     *
     * @var int
     */
    public $destGroupOwnerId;

    /**
     * @description The ID of the destination prefix list. You can call the [DescribePrefixLists](https://help.aliyun.com/document_detail/205046.html) operation to query the IDs of available prefix lists.
     *
     * If you specify `DestCidrIp`, `Ipv6DestCidrIp`, or `DestGroupId`, this parameter is ignored.
     *
     * @example pl-x1j1k5ykzqlixdcy****
     *
     * @var string
     */
    public $destPrefixListId;

    /**
     * @description The transport layer protocol of the security group rule. The value of this parameter is case-insensitive. Valid values:
     *
     *   ICMP
     *   GRE
     *   TCP
     *   UDP
     *   ALL: All protocols are supported.
     *
     * @example tcp
     *
     * @var string
     */
    public $ipProtocol;

    /**
     * @description The destination IPv6 CIDR block. IPv6 CIDR blocks and IPv6 addresses are supported.
     *
     * >  Only the IP addresses of instances in virtual private clouds (VPCs) are supported. You cannot specify both Ipv6DestCidrIp and `DestCidrIp`.
     *
     * By default, this parameter is left empty.
     *
     * @example 2001:db8:1233:1a00::***
     *
     * @var string
     */
    public $ipv6DestCidrIp;

    /**
     * @description The source IPv6 CIDR block. IPv6 CIDR blocks and IPv6 addresses are supported.
     *
     * >  Only the IP addresses of instances in VPCs are supported. You cannot specify both Ipv6SourceCidrIp and `SourceCidrIp`.
     *
     * By default, this parameter is left empty.
     *
     * @example 2001:db8:1234:1a00::***
     *
     * @var string
     */
    public $ipv6SourceCidrIp;

    /**
     * @description The network interface controller (NIC) type.
     *
     * >  You cannot modify this parameter when you modify a security group rule by specifying the ID of the rule. If you want to change the NIC type of a security group rule, you can create a security group rule of a desired NIC type and delete the existing rule.
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
     * @description The action of the security group rule. Valid values:
     *
     *   accept: allows access.
     *   drop: denies access and returns no responses.
     *
     * Default value: accept.
     *
     * @example accept
     *
     * @var string
     */
    public $policy;

    /**
     * @description The range of destination ports that correspond to the transport layer protocol. Valid values:
     *
     *   If you set IpProtocol to TCP or UDP, the port number range is 1 to 65535. Separate the start port number and the end port number with a forward slash (/). Example: 1/200.
     *   If you set IpProtocol to ICMP, the port number range is -1/-1.
     *   If you set IpProtocol to GRE, the port number range is -1/-1.
     *   If you set IpProtocol to ALL, the port number range is -1/-1.
     *
     * @example 80/80
     *
     * @var string
     */
    public $portRange;

    /**
     * @description The ID of the port list. You can call the `DescribePortRangeLists` operation to query the IDs of available prefix lists.
     *
     *   If you specify PortRange, the value of this parameter is ignored.
     *   If the security group is of the classic network type, you cannot reference port lists in the security group rules. For information about the limits on security groups and port lists, see the [Security groups](~~25412#SecurityGroupQuota1~~) section of the "Limits and quotas" topic.
     *
     * @example prl-2ze9743****
     *
     * @var string
     */
    public $portRangeListId;

    /**
     * @description The priority of the security group rule. Valid values: 1 to 100.
     *
     * Default value: 1.
     *
     * @example 1
     *
     * @var string
     */
    public $priority;

    /**
     * @description The region ID of the security group. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/25609.html) operation to query the most recent region list.
     *
     * This parameter is required.
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
     * This parameter is required.
     *
     * @example sg-bp67acfmxazb4p****
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description The ID of the security group rule. You can call the [DescribeSecurityGroupAttribute](https://help.aliyun.com/document_detail/2679845.html) operation to query the IDs of security group rules in a security group.
     *
     * @example sgr-bp67acfmxazb4q****
     *
     * @var string
     */
    public $securityGroupRuleId;

    /**
     * @description The source IPv4 CIDR block. IPv4 CIDR blocks and IPv4 addresses are supported.
     *
     * By default, this parameter is left empty.
     *
     * @example 10.0.0.0/8
     *
     * @var string
     */
    public $sourceCidrIp;

    /**
     * @description The range of source ports that correspond to the transport layer protocol. Valid values:
     *
     *   If you set IpProtocol to TCP or UDP, the port number range is 1 to 65535. Separate the start port number and the end port number with a forward slash (/). Example: 1/200.
     *   If you set IpProtocol to ICMP, the port number range is -1/-1.
     *   If you set IpProtocol to GRE, the port number range is -1/-1.
     *   If you set IpProtocol to ALL, the port number range is -1/-1.
     *
     * @example 80/80
     *
     * @var string
     */
    public $sourcePortRange;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'description' => 'Description',
        'destCidrIp' => 'DestCidrIp',
        'destGroupId' => 'DestGroupId',
        'destGroupOwnerAccount' => 'DestGroupOwnerAccount',
        'destGroupOwnerId' => 'DestGroupOwnerId',
        'destPrefixListId' => 'DestPrefixListId',
        'ipProtocol' => 'IpProtocol',
        'ipv6DestCidrIp' => 'Ipv6DestCidrIp',
        'ipv6SourceCidrIp' => 'Ipv6SourceCidrIp',
        'nicType' => 'NicType',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'policy' => 'Policy',
        'portRange' => 'PortRange',
        'portRangeListId' => 'PortRangeListId',
        'priority' => 'Priority',
        'regionId' => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'securityGroupId' => 'SecurityGroupId',
        'securityGroupRuleId' => 'SecurityGroupRuleId',
        'sourceCidrIp' => 'SourceCidrIp',
        'sourcePortRange' => 'SourcePortRange',
    ];

    public function validate() {}

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
        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }
        if (null !== $this->portRange) {
            $res['PortRange'] = $this->portRange;
        }
        if (null !== $this->portRangeListId) {
            $res['PortRangeListId'] = $this->portRangeListId;
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
        if (null !== $this->sourcePortRange) {
            $res['SourcePortRange'] = $this->sourcePortRange;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifySecurityGroupEgressRuleRequest
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
        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }
        if (isset($map['PortRange'])) {
            $model->portRange = $map['PortRange'];
        }
        if (isset($map['PortRangeListId'])) {
            $model->portRangeListId = $map['PortRangeListId'];
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
            $model->securityGroupRuleId = $map['SecurityGroupRuleId'];
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
