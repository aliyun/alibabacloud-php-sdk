<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\AuthorizeSecurityGroupRequest;

use AlibabaCloud\Tea\Model;

class permissions extends Model
{
    /**
     * @description The description of security group rule N. The description must be 1 to 512 characters in length.
     *
     * Valid values of N: 1 to 100.
     * @example This is description.
     *
     * @var string
     */
    public $description;

    /**
     * @description The destination IPv4 CIDR block for security group rule N. CIDR blocks and IPv4 addresses are supported.
     *
     * Valid values of N: 1 to 100.
     * @example 10.0.0.0/8
     *
     * @var string
     */
    public $destCidrIp;

    /**
     * @description The transport layer protocol of security group rule N. The values of this parameter are case-insensitive. Valid values:
     *
     *   TCP
     *   UDP
     *   ICMP
     *   ICMPv6
     *   GRE
     *   ALL: All protocols are supported.
     *
     * Valid values of N: 1 to 100.
     * @example ALL
     *
     * @var string
     */
    public $ipProtocol;

    /**
     * @description The destination IPv6 CIDR block for security group rule N. CIDR blocks and IPv6 addresses are supported.
     *
     * > This parameter takes effect only if the destinations are ECS instances that reside in VPCs and support IPv6 CIDR blocks. You cannot specify this parameter and `DestCidrIp` at the same time.
     * @example 2001:250:6000::***
     *
     * @var string
     */
    public $ipv6DestCidrIp;

    /**
     * @description The source IPv6 CIDR block for security group rule N. CIDR blocks and IPv6 addresses are supported.
     *
     * > This parameter takes effect only if the sources are ECS instances that reside in VPCs and support IPv6 CIDR blocks. You cannot specify this parameter and `SourceCidrIp` at the same time.
     * @example 2001:250:6000::***
     *
     * @var string
     */
    public $ipv6SourceCidrIp;

    /**
     * @description The network interface controller (NIC) type of security group rule N when the security group is in the classic network. Valid values:
     *
     *   internet: public NIC
     *   intranet: internal NIC
     *
     * Valid values of N: 1 to 100.
     * @example intranet
     *
     * @var string
     */
    public $nicType;

    /**
     * @description The action of security group rule N that determines whether to allow inbound access. Valid values:
     *
     *   accept: allows inbound access.
     *   drop: denies inbound access and does not return responses. In this case, the request times out or the connection cannot be established.
     *
     * Valid values of N: 1 to 100.
     * @example accept
     *
     * @var string
     */
    public $policy;

    /**
     * @description The range of destination ports that correspond to the transport layer protocol for security group rule N. Valid values:
     *
     *   If you set IpProtocol to TCP or UDP, the port number range is 1 to 65535. Separate the start port number and the end port number with a forward slash (/). Example: 1/200.
     *   If you set IpProtocol to ICMP, the port number range is -1/-1.
     *   If you set Permissions.N.IpProtocol to GRE, the port number range is -1/-1.
     *   If you set Permissions.N.IpProtocol to ALL, the port number range is -1/-1.
     *
     * Valid values of N: 1 to 100.
     * @example 80/80
     *
     * @var string
     */
    public $portRange;

    /**
     * @description The priority of security group rule N. A smaller value specifies a higher priority. Valid values: 1 to 100.
     *
     * Valid values of N: 1 to 100.
     * @example 1
     *
     * @var string
     */
    public $priority;

    /**
     * @description The source IPv4 CIDR block for security group rule N. CIDR blocks and IPv4 addresses are supported.
     *
     * Valid values of N: 1 to 100.
     * @example 10.0.0.0/8
     *
     * @var string
     */
    public $sourceCidrIp;

    /**
     * @description The ID of the source security group that you want to reference in the security group rule.
     *
     *   Specify at least one of the following parameters: `SourceGroupId`, `SourceCidrIp`, `Ipv6SourceCidrIp`, and `SourcePrefixListId`.
     *   If you specify `SourceGroupId` but do not specify `SourceCidrIp` or `Ipv6SourceCidrIp`, you must set `NicType` to `intranet`.
     *   If you specify `SourceGroupId` and `SourceCidrIp`, `SourceCidrIp` takes precedence.
     *
     * Take note of the following items:
     *
     *   You cannot reference security groups as destinations or sources in the rules of advanced security groups.
     *   You can reference up to 20 security groups as destinations or sources in the rules of each basic security group.
     *
     * @example sg-bp67acfmxazb4p****
     *
     * @var string
     */
    public $sourceGroupId;

    /**
     * @description The Alibaba Cloud account that manages the source security group when you configure a security group rule across accounts.
     *
     *   If you do not specify `SourceGroupOwnerAccount` and `SourceGroupOwnerId`, access permissions are configured for another security group managed by your account.
     *   If you specify `SourceCidrIp`, `SourceGroupOwnerAccount` is ignored.
     *
     * Valid values of N: 1 to 100.
     * @example test@aliyun.com
     *
     * @var string
     */
    public $sourceGroupOwnerAccount;

    /**
     * @description The ID of the Alibaba Cloud account that manages the source security group when you configure a security group rule across accounts.
     *
     *   If you do not specify `SourceGroupOwnerAccount` and `SourceGroupOwnerId`, access permissions are configured for another security group managed by your account.
     *   If you specify `SourceCidrIp`, `SourceGroupOwnerAccount` becomes invalid.
     *
     * Valid values of N: 1 to 100.
     * @example 1234567890
     *
     * @var int
     */
    public $sourceGroupOwnerId;

    /**
     * @description The range of source ports that correspond to the transport layer protocol for security group rule N. Valid values:
     *
     *   If you set Permissions.N.IpProtocol to TCP or UDP, the port number range is 1 to 65535. Separate the start port number and the end port number with a forward slash (/). Example: 1/200.
     *   If you set Permissions.N.IpProtocol to ICMP, the port number range is -1/-1.
     *   If you set Permissions.N.IpProtocol to GRE, the port number range is -1/-1.
     *   If you set Permissions.N.IpProtocol to ALL, the port number range is -1/-1.
     *
     * Valid values of N: 1 to 100.
     * @example 7000/8000
     *
     * @var string
     */
    public $sourcePortRange;

    /**
     * @description The ID of the source prefix list that you want to reference in the security group rule. You can call the [DescribePrefixLists](~~205046~~) operation to query the IDs of available prefix lists.
     *
     * Take note of the following items:
     *
     *   If the network type of a security group is classic network, you cannot reference prefix lists in the security group rules. For information about the limits on security groups and prefix lists, see the "Security group limits" section of the [Limits](~~25412#SecurityGroupQuota1~~) topic.
     *   If you specify the `SourceCidrIp`, `Ipv6SourceCidrIp`, or `SourceGroupId` parameter, this parameter is ignored.
     *
     * @example pl-x1j1k5ykzqlixdcy****
     *
     * @var string
     */
    public $sourcePrefixListId;
    protected $_name = [
        'description'             => 'Description',
        'destCidrIp'              => 'DestCidrIp',
        'ipProtocol'              => 'IpProtocol',
        'ipv6DestCidrIp'          => 'Ipv6DestCidrIp',
        'ipv6SourceCidrIp'        => 'Ipv6SourceCidrIp',
        'nicType'                 => 'NicType',
        'policy'                  => 'Policy',
        'portRange'               => 'PortRange',
        'priority'                => 'Priority',
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
