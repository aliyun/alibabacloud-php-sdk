<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSecurityGroupAttributeResponseBody\permissions;

use AlibabaCloud\Tea\Model;

class permission extends Model
{
    /**
     * @description The time at which the security group rule was created. The time is displayed in UTC.
     *
     * @example 2018-12-12T07:28:38Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The description of the security group.
     *
     * @example Description Sample 01
     *
     * @var string
     */
    public $description;

    /**
     * @description The destination CIDR block for outbound access control.
     *
     * @example 0.0.0.0/0
     *
     * @var string
     */
    public $destCidrIp;

    /**
     * @description The ID of the destination security group for outbound access control.
     *
     * @example sg-bp1czdx84jd88i7v****
     *
     * @var string
     */
    public $destGroupId;

    /**
     * @description The name of the destination security group.
     *
     * @example testDestGroupName
     *
     * @var string
     */
    public $destGroupName;

    /**
     * @description The Alibaba Cloud account that manages the destination security group.
     *
     * @example 1234567890
     *
     * @var string
     */
    public $destGroupOwnerAccount;

    /**
     * @description The ID of the destination prefix list for outbound access control.
     *
     * @example pl-x1j1k5ykzqlixabc****
     *
     * @var string
     */
    public $destPrefixListId;

    /**
     * @description The name of the destination prefix list.
     *
     * @example DestPrefixListName Sample
     *
     * @var string
     */
    public $destPrefixListName;

    /**
     * @description The direction in which the security group rule is applied.
     *
     * @example ingress
     *
     * @var string
     */
    public $direction;

    /**
     * @description The transport layer protocol.
     *
     * @example TCP
     *
     * @var string
     */
    public $ipProtocol;

    /**
     * @description The destination IPv6 CIDR block.
     *
     * @example 2001:db8:1233:1a00::***
     *
     * @var string
     */
    public $ipv6DestCidrIp;

    /**
     * @description The source IPv6 CIDR block.
     *
     * @example 2001:db8:1234:1a00::***
     *
     * @var string
     */
    public $ipv6SourceCidrIp;

    /**
     * @description The network type.
     *
     * @example intranet
     *
     * @var string
     */
    public $nicType;

    /**
     * @description The access control policy.
     *
     * @example Accept
     *
     * @var string
     */
    public $policy;

    /**
     * @description The port range.
     *
     * @example 80/80
     *
     * @var string
     */
    public $portRange;

    /**
     * @description The priority of the rule.
     *
     * @example 1
     *
     * @var string
     */
    public $priority;

    /**
     * @description The ID of the security group rule.
     *
     * @example sgr-bp12kewq32dfwrdi****
     *
     * @var string
     */
    public $securityGroupRuleId;

    /**
     * @description The source CIDR block for inbound access control.
     *
     * @example 0.0.0.0/0
     *
     * @var string
     */
    public $sourceCidrIp;

    /**
     * @description The source security group for inbound access control.
     *
     * @example sg-bp12kc4rqohaf2js****
     *
     * @var string
     */
    public $sourceGroupId;

    /**
     * @description The name of the source security group.
     *
     * @example testSourceGroupName1
     *
     * @var string
     */
    public $sourceGroupName;

    /**
     * @description The Alibaba Cloud account that manages the source security group.
     *
     * @example 1234567890
     *
     * @var string
     */
    public $sourceGroupOwnerAccount;

    /**
     * @description The source port range.
     *
     * @example 80/80
     *
     * @var string
     */
    public $sourcePortRange;

    /**
     * @description The ID of the source prefix list for inbound access control.
     *
     * @example pl-x1j1k5ykzqlixdcy****
     *
     * @var string
     */
    public $sourcePrefixListId;

    /**
     * @description The name of the source prefix list.
     *
     * @example SourcePrefixListName Sample
     *
     * @var string
     */
    public $sourcePrefixListName;
    protected $_name = [
        'createTime'              => 'CreateTime',
        'description'             => 'Description',
        'destCidrIp'              => 'DestCidrIp',
        'destGroupId'             => 'DestGroupId',
        'destGroupName'           => 'DestGroupName',
        'destGroupOwnerAccount'   => 'DestGroupOwnerAccount',
        'destPrefixListId'        => 'DestPrefixListId',
        'destPrefixListName'      => 'DestPrefixListName',
        'direction'               => 'Direction',
        'ipProtocol'              => 'IpProtocol',
        'ipv6DestCidrIp'          => 'Ipv6DestCidrIp',
        'ipv6SourceCidrIp'        => 'Ipv6SourceCidrIp',
        'nicType'                 => 'NicType',
        'policy'                  => 'Policy',
        'portRange'               => 'PortRange',
        'priority'                => 'Priority',
        'securityGroupRuleId'     => 'SecurityGroupRuleId',
        'sourceCidrIp'            => 'SourceCidrIp',
        'sourceGroupId'           => 'SourceGroupId',
        'sourceGroupName'         => 'SourceGroupName',
        'sourceGroupOwnerAccount' => 'SourceGroupOwnerAccount',
        'sourcePortRange'         => 'SourcePortRange',
        'sourcePrefixListId'      => 'SourcePrefixListId',
        'sourcePrefixListName'    => 'SourcePrefixListName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
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
        if (null !== $this->destGroupName) {
            $res['DestGroupName'] = $this->destGroupName;
        }
        if (null !== $this->destGroupOwnerAccount) {
            $res['DestGroupOwnerAccount'] = $this->destGroupOwnerAccount;
        }
        if (null !== $this->destPrefixListId) {
            $res['DestPrefixListId'] = $this->destPrefixListId;
        }
        if (null !== $this->destPrefixListName) {
            $res['DestPrefixListName'] = $this->destPrefixListName;
        }
        if (null !== $this->direction) {
            $res['Direction'] = $this->direction;
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
        if (null !== $this->securityGroupRuleId) {
            $res['SecurityGroupRuleId'] = $this->securityGroupRuleId;
        }
        if (null !== $this->sourceCidrIp) {
            $res['SourceCidrIp'] = $this->sourceCidrIp;
        }
        if (null !== $this->sourceGroupId) {
            $res['SourceGroupId'] = $this->sourceGroupId;
        }
        if (null !== $this->sourceGroupName) {
            $res['SourceGroupName'] = $this->sourceGroupName;
        }
        if (null !== $this->sourceGroupOwnerAccount) {
            $res['SourceGroupOwnerAccount'] = $this->sourceGroupOwnerAccount;
        }
        if (null !== $this->sourcePortRange) {
            $res['SourcePortRange'] = $this->sourcePortRange;
        }
        if (null !== $this->sourcePrefixListId) {
            $res['SourcePrefixListId'] = $this->sourcePrefixListId;
        }
        if (null !== $this->sourcePrefixListName) {
            $res['SourcePrefixListName'] = $this->sourcePrefixListName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return permission
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
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
        if (isset($map['DestGroupName'])) {
            $model->destGroupName = $map['DestGroupName'];
        }
        if (isset($map['DestGroupOwnerAccount'])) {
            $model->destGroupOwnerAccount = $map['DestGroupOwnerAccount'];
        }
        if (isset($map['DestPrefixListId'])) {
            $model->destPrefixListId = $map['DestPrefixListId'];
        }
        if (isset($map['DestPrefixListName'])) {
            $model->destPrefixListName = $map['DestPrefixListName'];
        }
        if (isset($map['Direction'])) {
            $model->direction = $map['Direction'];
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
        if (isset($map['SecurityGroupRuleId'])) {
            $model->securityGroupRuleId = $map['SecurityGroupRuleId'];
        }
        if (isset($map['SourceCidrIp'])) {
            $model->sourceCidrIp = $map['SourceCidrIp'];
        }
        if (isset($map['SourceGroupId'])) {
            $model->sourceGroupId = $map['SourceGroupId'];
        }
        if (isset($map['SourceGroupName'])) {
            $model->sourceGroupName = $map['SourceGroupName'];
        }
        if (isset($map['SourceGroupOwnerAccount'])) {
            $model->sourceGroupOwnerAccount = $map['SourceGroupOwnerAccount'];
        }
        if (isset($map['SourcePortRange'])) {
            $model->sourcePortRange = $map['SourcePortRange'];
        }
        if (isset($map['SourcePrefixListId'])) {
            $model->sourcePrefixListId = $map['SourcePrefixListId'];
        }
        if (isset($map['SourcePrefixListName'])) {
            $model->sourcePrefixListName = $map['SourcePrefixListName'];
        }

        return $model;
    }
}
