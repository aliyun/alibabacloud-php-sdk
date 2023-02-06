<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\RevokeSecurityGroupRequest;

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
     * @description The transport layer protocol of security group rule N. The value of this parameter is case-insensitive. Valid values:
     *
     *   TCP
     *   UDP
     *   ICMP
     *   ICMPv6
     *   GRE
     *   ALL: All protocols are supported.
     *
     * Valid values of N: 1 to 100.
     * @example TCP
     *
     * @var string
     */
    public $ipProtocol;

    /**
     * @description The destination IPv6 CIDR block for security group rule N. CIDR blocks and IPv6 addresses are supported.
     *
     * >  The Permissions.N.Ipv6DestCidrIp parameter is valid only when the destination is ECS instances that reside in VPCs and support IPv6 CIDR blocks. You cannot specify both this parameter and the `DestCidrIp` parameter.
     * @example 2001:db8:1233:1a00::***
     *
     * @var string
     */
    public $ipv6DestCidrIp;

    /**
     * @description The source IPv6 CIDR block for security group rule N. CIDR blocks and IPv6 addresses are supported.
     *
     * >  The Permissions.N.Ipv6SourceCidrIp parameter is valid only when the source is ECS instances that reside in VPCs and that support IPv6 CIDR blocks. You cannot specify both this parameter and the `SourceCidrIp` parameter.
     * @example 2001:db8:1234:1a00::***
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
     *   accept: allows access.
     *   drop: denies access and returns no responses. In this case, the request times out or the connection cannot be established.
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
     *   When the Permissions.N.IpProtocol parameter is set to TCP or UDP, the port number range is 1 to 65535. Specify a port range in the format of \<Start port number>/\<End port number>. Example: 1/200.
     *   When the Permissions.N.IpProtocol parameter is set to ICMP, the port number range is -1/-1, which indicates all ports.
     *   When the Permissions.N.IpProtocol parameter is set to GRE, the port number range is -1/-1, which indicates all ports.
     *   When the Permissions.N.IpProtocol parameter is set to ALL, the port number range is -1/-1, which indicates all ports.
     *
     * Valid values of N: 1 to 100.
     * @example 1/200
     *
     * @var string
     */
    public $portRange;

    /**
     * @description The priority of security group rule N. A smaller value indicates a higher priority. Valid values: 1 to 100.
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
     * @description The ID of the source security group that is referenced in security group rule N.
     *
     *   At lease one of `SourceGroupId`, `SourceCidrIp`, `Ipv6SourceCidrIp`, and `SourcePrefixListId` must be specified.
     *   If `SourceGroupId` is specified but `SourceCidrIp` or `Ipv6SourceCidrIp` is not specified, the NicType parameter must be set to intranet.
     *   If both `SourceGroupId` and `SourceCidrIp` are specified, `SourceCidrIp` takes precedence.
     *
     * Take note of the following items:
     *
     *   For advanced security groups, security groups cannot be used as authorization objects.
     *   For each basic security group, a maximum of 20 security groups can be used as authorization objects.
     *
     * Valid values of N: 1 to 100.
     * @example sg-bp67acfmxa123b****
     *
     * @var string
     */
    public $sourceGroupId;

    /**
     * @description The Alibaba Cloud account that manages the source security group when you delete security group rule N across accounts.
     *
     *   If both `SourceGroupOwnerAccount` and `SourceGroupOwnerId` are not specified, access permissions are configured for another security group managed by your account.
     *   If `SourceCidrIp` is specified, the `SourceGroupOwnerAccount` parameter is ignored.
     *
     * Valid values of N: 1 to 100.
     * @example Test@aliyun.com
     *
     * @var string
     */
    public $sourceGroupOwnerAccount;

    /**
     * @description The ID of the Alibaba Cloud account that manages the source security group when you delete security group rule N across accounts.
     *
     *   If both `SourceGroupOwnerId` and `SourceGroupOwnerAccount` are not specified, access permissions are configured for another security group managed by your account.
     *   If `SourceCidrIp` is specified, the `SourceGroupOwnerId` parameter is ignored.
     *
     * Valid values of N: 1 to 100.
     * @example 12345678910
     *
     * @var int
     */
    public $sourceGroupOwnerId;

    /**
     * @description The range of source ports that correspond to the transport layer protocol for security group rule N. Valid values:
     *
     *   When the Permissions.N.IpProtocol parameter is set to TCP or UDP, the port number range is 1 to 65535. Specify a port range in the format of \<Start port number>/\<End port number>. Example: 1/200.
     *   When the Permissions.N.IpProtocol parameter is set to ICMP, the port number range is -1/-1, which indicates all ports.
     *   When the Permissions.N.IpProtocol parameter is set to GRE, the port number range is -1/-1, which indicates all ports.
     *   When the Permissions.N.IpProtocol parameter is set to ALL, the port number range is -1/-1, which indicates all ports.
     *
     * Valid values of N: 1 to 100.
     * @example 80/80
     *
     * @var string
     */
    public $sourcePortRange;

    /**
     * @description The ID of the source prefix list that is referenced in security group rule N. You can call the [DescribePrefixLists](~~205046~~) operation to query the IDs of available prefix lists.
     *
     * Take note of the following items:
     *
     *   If a security group is in the classic network, you cannot reference prefix lists in the security group rules. For information about the limits on security groups and prefix lists, see the "Security group limits" section in [Limits](~~25412#SecurityGroupQuota1~~).
     *   If you specify the `SourceCidrIp`, `Ipv6SourceCidrIp`, or `SourceGroupId` parameter, this parameter is ignored.
     *
     * Valid values of N: 1 to 100.
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
