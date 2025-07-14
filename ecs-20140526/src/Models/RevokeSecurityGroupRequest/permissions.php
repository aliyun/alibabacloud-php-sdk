<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\RevokeSecurityGroupRequest;

use AlibabaCloud\Tea\Model;

class permissions extends Model
{
    /**
     * @description The description of the security group rule. The description must be 1 to 512 characters in length.
     *
     * @example This is description.
     *
     * @var string
     */
    public $description;

    /**
     * @description The destination IPv4 CIDR block. IPv4 CIDR blocks and IPv4 addresses are supported.
     *
     * This parameter is used to support quintuple rules. For more information, see [Security group quintuple rules](https://help.aliyun.com/document_detail/97439.html).
     *
     * @example 10.0.0.0/8
     *
     * @var string
     */
    public $destCidrIp;

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
     * @example TCP
     *
     * @var string
     */
    public $ipProtocol;

    /**
     * @description The destination IPv6 CIDR block. IPv6 CIDR blocks and IPv6 addresses are supported.
     *
     * This parameter is used to support quintuple rules. For more information, see [Security group quintuple rules](https://help.aliyun.com/document_detail/97439.html).
     *
     * >  This parameter is valid only for ECS instances that reside in VPCs and support IPv6 CIDR blocks. You cannot specify both this parameter and `DestCidrIp` in the same request.
     *
     * @example 2001:db8:1233:1a00::***
     *
     * @var string
     */
    public $ipv6DestCidrIp;

    /**
     * @description The source IPv6 CIDR block of the security group rule. IPv6 CIDR blocks and IPv6 addresses are supported.
     *
     * >  This parameter is valid only for Elastic Compute Service (ECS) instances that reside in virtual private clouds (VPCs) and support IPv6 CIDR blocks. You cannot specify both this parameter and `SourceCidrIp` in the same request.
     *
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
     * If the security group resides in a VPC, this parameter is set to intranet by default and cannot be modified.
     *
     * If you specify `SourceGroupId` to delete inbound security group rules that reference the specified security group as an authorization object, you must set this parameter to intranet.
     *
     * Default value: internet.
     *
     * @example intranet
     *
     * @var string
     */
    public $nicType;

    /**
     * @description The action of the security group rule. Valid values:
     *
     *   accept: allows inbound access.
     *   drop: denies inbound access and returns no responses. In this case, the request times out or the connection cannot be established.
     *
     * Default value: accept.
     *
     * @example accept
     *
     * @var string
     */
    public $policy;

    /**
     * @description The destination port range of the security group rule. Valid values:
     *
     *   If you set IpProtocol to TCP or UDP, the valid values of this parameter are 1 to 65535. Specify a port range in the format of \\<Start port number>/\\<End port number>. Example: 1/200.
     *   If you set IpProtocol to ICMP, the port range is -1/-1.
     *   If you set IpProtocol to GRE, the port range is -1/-1.
     *   If you set IpProtocol to ALL, the port range is -1/-1.
     *
     * @example 1/200
     *
     * @var string
     */
    public $portRange;

    /**
     * @description The ID of the port list. You can call the `DescribePortRangeLists` operation to query the IDs of available port lists.
     *
     *   If you specify `Permissions.N.PortRange`, this parameter is ignored.
     *   If a security group resides in the classic network, you cannot reference port lists in the rules of the security group. For information about the limits on security groups and port lists, see the [Security groups](~~25412#SecurityGroupQuota1~~) section of the "Limits and quotas on ECS" topic.
     *
     * @example prl-2ze9743****
     *
     * @var string
     */
    public $portRangeListId;

    /**
     * @description The priority of the security group rule. A smaller value specifies a higher priority. Valid values: 1 to 100.
     *
     * Default value: 1.
     *
     * @example 1
     *
     * @var string
     */
    public $priority;

    /**
     * @description The source IPv4 CIDR block of the security group rule. IPv4 CIDR blocks and IPv4 addresses are supported.
     *
     * @example 10.0.0.0/8
     *
     * @var string
     */
    public $sourceCidrIp;

    /**
     * @description The ID of the source security group referenced in the security group rule.
     *
     *   You must specify at least one of the following parameters: `SourceGroupId`, `SourceCidrIp`, `Ipv6SourceCidrIp`, and `SourcePrefixListId`.
     *   If you specify `SourceGroupId` but do not specify `SourceCidrIp` or `Ipv6SourceCidrIp`, you must set NicType to intranet.
     *   If you specify both `SourceGroupId` and `SourceCidrIp`, `SourceCidrIp` takes precedence.
     *
     * Take note of the following items:
     *
     *   Advanced security groups do not support security group rules that reference security groups as authorization objects (sources or destinations of traffic).
     *   Each basic security group can contain up to 20 security group rules that reference security groups as authorization objects.
     *
     * @example sg-bp67acfmxa123b****
     *
     * @var string
     */
    public $sourceGroupId;

    /**
     * @description The Alibaba Cloud account that manages the source security group referenced in the security group rule.
     *
     *   If both `SourceGroupOwnerAccount` and `SourceGroupOwnerId` are empty, access control on another security group in your Alibaba Cloud account is removed.
     *   If you specify `SourceCidrIp`, `SourceGroupOwnerAccount` is ignored.
     *
     * @example Test@aliyun.com
     *
     * @var string
     */
    public $sourceGroupOwnerAccount;

    /**
     * @description The ID of the Alibaba Cloud account that manages the source security group referenced in the security group rule.
     *
     *   If both `SourceGroupOwnerId` and `SourceGroupOwnerAccount` are empty, access control on another security group in your Alibaba Cloud account is removed.
     *   If you specify `SourceCidrIp`, `SourceGroupOwnerId` is ignored.
     *
     * @example 12345678910
     *
     * @var int
     */
    public $sourceGroupOwnerId;

    /**
     * @description The source port range of the security group rule. Valid values:
     *
     *   If you set IpProtocol to TCP or UDP, the valid values of this parameter are 1 to 65535. Specify a port range in the format of \\<Start port number>/\\<End port number>. Example: 1/200.
     *   If you set IpProtocol to ICMP, the port range is -1/-1.
     *   If you set IpProtocol to GRE, the port range is -1/-1.
     *   If you set IpProtocol to ALL, the port range is -1/-1.
     *
     * This parameter is used to support quintuple rules. For more information, see [Security group quintuple rules](https://help.aliyun.com/document_detail/97439.html).
     *
     * @example 80/80
     *
     * @var string
     */
    public $sourcePortRange;

    /**
     * @description The ID of the source prefix list of the security group rule. You can call the [DescribePrefixLists](https://help.aliyun.com/document_detail/205046.html) operation to query the IDs of available prefix lists.
     *
     * Take note of the following items:
     *
     *   If a security group resides in the classic network, you cannot specify prefix lists in the rules of the security group. For information about the limits on security groups and prefix lists, see the [Security groups](~~25412#SecurityGroupQuota1~~) section of the "Limits and quotas on ECS" topic.
     *   If you specify `SourceCidrIp`, `Ipv6SourceCidrIp`, or `SourceGroupId`, this parameter is ignored.
     *
     * @example pl-x1j1k5ykzqlixdcy****
     *
     * @var string
     */
    public $sourcePrefixListId;
    protected $_name = [
        'description' => 'Description',
        'destCidrIp' => 'DestCidrIp',
        'ipProtocol' => 'IpProtocol',
        'ipv6DestCidrIp' => 'Ipv6DestCidrIp',
        'ipv6SourceCidrIp' => 'Ipv6SourceCidrIp',
        'nicType' => 'NicType',
        'policy' => 'Policy',
        'portRange' => 'PortRange',
        'portRangeListId' => 'PortRangeListId',
        'priority' => 'Priority',
        'sourceCidrIp' => 'SourceCidrIp',
        'sourceGroupId' => 'SourceGroupId',
        'sourceGroupOwnerAccount' => 'SourceGroupOwnerAccount',
        'sourceGroupOwnerId' => 'SourceGroupOwnerId',
        'sourcePortRange' => 'SourcePortRange',
        'sourcePrefixListId' => 'SourcePrefixListId',
    ];

    public function validate() {}

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
        if (null !== $this->portRangeListId) {
            $res['PortRangeListId'] = $this->portRangeListId;
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
        if (isset($map['PortRangeListId'])) {
            $model->portRangeListId = $map['PortRangeListId'];
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
