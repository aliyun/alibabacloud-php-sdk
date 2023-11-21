<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVSwitchesResponseBody\vSwitches;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVSwitchesResponseBody\vSwitches\vSwitch\routeTable;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVSwitchesResponseBody\vSwitches\vSwitch\tags;
use AlibabaCloud\Tea\Model;

class vSwitch extends Model
{
    /**
     * @description The number of available IP addresses in the vSwitch.
     *
     * @example 1
     *
     * @var int
     */
    public $availableIpAddressCount;

    /**
     * @description The IPv4 CIDR block of the vSwitch.
     *
     * @example 172.16.0.0/24
     *
     * @var string
     */
    public $cidrBlock;

    /**
     * @description The time when the vSwitch was created.
     *
     * @example 2022-01-18T12:43:57Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The description of the vSwitch.
     *
     * @example VSwitchDescription
     *
     * @var string
     */
    public $description;

    /**
     * @description Indicates whether IPv6 is enabled for the vSwitch. If you enable IPv6, you must configure an IPv6 CIDR block for the vSwitch. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $enabledIpv6;

    /**
     * @description The IPv6 CIDR block of the vSwitch.
     *
     * @example 2408:4002:10c4:4e03::/64
     *
     * @var string
     */
    public $ipv6CidrBlock;

    /**
     * @description Indicates whether the vSwitch is the default vSwitch. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $isDefault;

    /**
     * @description The ID of the network access control list (ACL).
     *
     * @example nacl-a2do9e413e0spzasx****
     *
     * @var string
     */
    public $networkAclId;

    /**
     * @description The ID of the Alibaba Cloud account to which the resource belongs.
     *
     * @example 253460731706911258
     *
     * @var int
     */
    public $ownerId;

    /**
     * @description The ID of the resource group to which the vSwitch belongs.
     *
     * @example rg-acfmxazb4ph6aiy****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The information about the route table.
     *
     * @var routeTable
     */
    public $routeTable;

    /**
     * @description Indicates whether the vSwitch is shared.
     *
     *   If no value is returned, the vSwitch is a regular vSwitch.
     *   If **Shared** is returned, the vSwitch is shared.
     *   If **Sharing** is returned, the vSwitch is being shared.
     *
     * @example Shared
     *
     * @var string
     */
    public $shareType;

    /**
     * @description The status of the vSwitch. Valid values:
     *
     *   **Pending**
     *   **Available**
     *
     * @example Available
     *
     * @var string
     */
    public $status;

    /**
     * @description The tags of the vSwitch.
     *
     * @var tags
     */
    public $tags;

    /**
     * @description The vSwitch ID.
     *
     * @example vsw-25bcdxs7pv1****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The vSwitch name.
     *
     * @example vSwitch
     *
     * @var string
     */
    public $vSwitchName;

    /**
     * @description The ID of the VPC to which the vSwitch belongs.
     *
     * @example vpc-257gcdcdq64****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The ID of the zone to which the vSwitch belongs.
     *
     * @example cn-hangzhou-d
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'availableIpAddressCount' => 'AvailableIpAddressCount',
        'cidrBlock'               => 'CidrBlock',
        'creationTime'            => 'CreationTime',
        'description'             => 'Description',
        'enabledIpv6'             => 'EnabledIpv6',
        'ipv6CidrBlock'           => 'Ipv6CidrBlock',
        'isDefault'               => 'IsDefault',
        'networkAclId'            => 'NetworkAclId',
        'ownerId'                 => 'OwnerId',
        'resourceGroupId'         => 'ResourceGroupId',
        'routeTable'              => 'RouteTable',
        'shareType'               => 'ShareType',
        'status'                  => 'Status',
        'tags'                    => 'Tags',
        'vSwitchId'               => 'VSwitchId',
        'vSwitchName'             => 'VSwitchName',
        'vpcId'                   => 'VpcId',
        'zoneId'                  => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->availableIpAddressCount) {
            $res['AvailableIpAddressCount'] = $this->availableIpAddressCount;
        }
        if (null !== $this->cidrBlock) {
            $res['CidrBlock'] = $this->cidrBlock;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->enabledIpv6) {
            $res['EnabledIpv6'] = $this->enabledIpv6;
        }
        if (null !== $this->ipv6CidrBlock) {
            $res['Ipv6CidrBlock'] = $this->ipv6CidrBlock;
        }
        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
        }
        if (null !== $this->networkAclId) {
            $res['NetworkAclId'] = $this->networkAclId;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->routeTable) {
            $res['RouteTable'] = null !== $this->routeTable ? $this->routeTable->toMap() : null;
        }
        if (null !== $this->shareType) {
            $res['ShareType'] = $this->shareType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vSwitchName) {
            $res['VSwitchName'] = $this->vSwitchName;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vSwitch
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvailableIpAddressCount'])) {
            $model->availableIpAddressCount = $map['AvailableIpAddressCount'];
        }
        if (isset($map['CidrBlock'])) {
            $model->cidrBlock = $map['CidrBlock'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EnabledIpv6'])) {
            $model->enabledIpv6 = $map['EnabledIpv6'];
        }
        if (isset($map['Ipv6CidrBlock'])) {
            $model->ipv6CidrBlock = $map['Ipv6CidrBlock'];
        }
        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
        }
        if (isset($map['NetworkAclId'])) {
            $model->networkAclId = $map['NetworkAclId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['RouteTable'])) {
            $model->routeTable = routeTable::fromMap($map['RouteTable']);
        }
        if (isset($map['ShareType'])) {
            $model->shareType = $map['ShareType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VSwitchName'])) {
            $model->vSwitchName = $map['VSwitchName'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
