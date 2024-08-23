<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\RevokeSecurityGroupEgressRequest;

use AlibabaCloud\Tea\Model;

class permissions extends Model
{
    /**
     * @description The description of the security group rule. The description must be 1 to 512 characters in length.
     *
     * Valid values of N: 1 to 100.
     * @example This is description.
     *
     * @var string
     */
    public $description;

    /**
     * @description The destination IPv4 CIDR block of the security group rule. IPv4 CIDR blocks and IPv4 addresses are supported.
     *
     * Valid values of N: 1 to 100.
     * @example 10.0.0.0/8
     *
     * @var string
     */
    public $destCidrIp;

    /**
     * @description The ID of the destination security group from which you want to remove access control configurations.
     *
     *   You must specify at least one of the following parameters: `DestGroupId`, `DestCidrIp`, `Ipv6DestCidrIp`, and `DestPrefixListId`.
     *   If you specify `DestGroupId` but do not specify `DestCidrIp`, you must set `NicType` to intranet.
     *   If you specify both `DestGroupId` and `DestCidrIp`, `DestCidrIp` takes precedence.
     *
     * When you specify this parameter, take note of the following items:
     *
     *   In advanced security groups, security groups cannot be used as authorization objects.
     *   In each basic security group, up to 20 security groups can be used as authorization objects in security group rules.
     *
     * Valid values of N: 1 to 100.
     * @example sg-bp67acfmxa123b****
     *
     * @var string
     */
    public $destGroupId;

    /**
     * @description The Alibaba Cloud account that manages the destination security group specified in the security group rule.
     *
     *   If both `DestGroupOwnerAccount` and `DestGroupOwnerId` are empty, access control configurations are removed from another security group managed by your Alibaba Cloud account.
     *   If you specify `DestCidrIp`, `DestGroupOwnerAccount` is ignored.
     *
     * Valid values of N: 1 to 100.
     * @example Test@aliyun.com
     *
     * @var string
     */
    public $destGroupOwnerAccount;

    /**
     * @description The ID of the Alibaba Cloud account that manages the destination security group specified in the security group rule.
     *
     *   If both `DestGroupOwnerId` and `DestGroupOwnerAccount` are empty, access control configurations are removed from another security group managed by your Alibaba Cloud account.
     *   If you specify `DestCidrIp`, `DestGroupOwnerId` is invalid.
     *
     * Valid values of N: 1 to 100.
     * @example 12345678910
     *
     * @var string
     */
    public $destGroupOwnerId;

    /**
     * @description The ID of the destination prefix list of the security group rule. You can call the [DescribePrefixLists](https://help.aliyun.com/document_detail/205046.html) operation to query the IDs of available prefix lists.
     *
     * When you specify this parameter, take note of the following items:
     *
     *   If a security group resides in the classic network, you cannot specify prefix lists in the rules of the security group. For information about the limits on security groups and prefix lists, see the [Security group limits](~~25412#SecurityGroupQuota1~~) section of the "Limits and quotas" topic.
     *   If you specify `DestCidrIp`, `Ipv6DestCidrIp`, or `DestGroupId`, this parameter is ignored.
     *
     * Valid values of N: 1 to 100.
     * @example pl-x1j1k5ykzqlixdcy****
     *
     * @var string
     */
    public $destPrefixListId;

    /**
     * @description The protocol. The values of this parameter are case-insensitive. Valid values:
     *
     *   TCP.
     *   UDP.
     *   ICMP.
     *   ICMPv6.
     *   GRE.
     *   ALL: All protocols are supported.
     *
     * Valid values of N: 1 to 100.
     * @example TCP
     *
     * @var string
     */
    public $ipProtocol;

    /**
     * @description The destination IPv6 CIDR block of the security group rule. IPv6 CIDR blocks and IPv6 addresses are supported.
     *
     * >  This parameter is valid only for Elastic Compute Service (ECS) instances that reside in virtual private clouds (VPCs) and support IPv6 CIDR blocks. You cannot specify both this parameter and `DestCidrIp` in the same request.
     * @example 2001:db8:1233:1a00::***
     *
     * @var string
     */
    public $ipv6DestCidrIp;

    /**
     * @description The source IPv6 CIDR block. IPv6 CIDR blocks and IPv6 addresses are supported.
     *
     * >  This parameter is valid only for ECS instances that reside in VPCs and support IPv6 CIDR blocks. You cannot specify both this parameter and `DestCidrIp` in the same request.
     * @example 2001:db8:1234:1a00::***
     *
     * @var string
     */
    public $ipv6SourceCidrIp;

    /**
     * @description The network interface controller (NIC) type of the security group rule if the security group resides in the classic network. Valid values:
     *
     *   internet: public NIC.
     *   intranet: internal NIC.
     *
     * Valid values of N: 1 to 100.
     * @example intranet
     *
     * @var string
     */
    public $nicType;

    /**
     * @description The action of the security group rule. Valid values:
     *
     *   accept: allows outbound traffic.
     *   drop: denies outbound traffic and returns no responses. In this case, the request times out or the connection cannot be established.
     *
     * Valid values of N: 1 to 100.
     * @example accept
     *
     * @var string
     */
    public $policy;

    /**
     * @description The range of destination port numbers for the protocols specified in the security group rule. Valid values:
     *
     *   If you set IpProtocol to TCP or UDP, the port number range is 1 to 65535. Specify a port number range in the format of \\<Start port number>/\\<End port number>. Example: 1/200.
     *   If you set IpProtocol to ICMP, the port number range is -1/-1.
     *   If you set IpProtocol to GRE, the port number range is -1/-1.
     *   If you set IpProtocol to ALL, the port number range is -1/-1, which indicates all port numbers.
     *
     * Valid values of N: 1 to 100.
     * @example 22/22
     *
     * @var string
     */
    public $portRange;

    /**
     * @description The priority of the security group rule. A smaller value specifies a higher priority. Valid values: 1 to 100.
     *
     * Valid values of N: 1 to 100.
     * @example 1
     *
     * @var string
     */
    public $priority;

    /**
     * @description The source IPv4 CIDR block. IPv4 CIDR blocks and IPv4 addresses are supported.
     *
     * Valid values of N: 1 to 100.
     * @example 10.0.0.0/8
     *
     * @var string
     */
    public $sourceCidrIp;

    /**
     * @description The range of source port numbers for the protocols specified in the security group rule. Valid values:
     *
     *   If you set IpProtocol to TCP or UDP, the port number range is 1 to 65535. Specify a port number range in the format of \\<Start port number>/\\<End port number>. Example: 1/200.
     *   If you set IpProtocol to ICMP, the port number range is -1/-1.
     *   If you set IpProtocol to GRE, the port number range is -1/-1.
     *   If you set IpProtocol to ALL, the port number range is -1/-1, which indicates all port numbers.
     *
     * Valid values of N: 1 to 100.
     * @example 22/22
     *
     * @var string
     */
    public $sourcePortRange;
    protected $_name = [
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
        'policy'                => 'Policy',
        'portRange'             => 'PortRange',
        'priority'              => 'Priority',
        'sourceCidrIp'          => 'SourceCidrIp',
        'sourcePortRange'       => 'SourcePortRange',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }
        if (null !== $this->portRange) {
            $res['PortRange'] = $this->portRange;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
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
     * @return permissions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }
        if (isset($map['PortRange'])) {
            $model->portRange = $map['PortRange'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
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
