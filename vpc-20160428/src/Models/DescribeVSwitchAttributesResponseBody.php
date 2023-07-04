<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVSwitchAttributesResponseBody\routeTable;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVSwitchAttributesResponseBody\tags;
use AlibabaCloud\Tea\Model;

class DescribeVSwitchAttributesResponseBody extends Model
{
    /**
     * @description The number of available IP addresses.
     *
     * @example 12
     *
     * @var int
     */
    public $availableIpAddressCount;

    /**
     * @description The CIDR block of the vSwitch.
     *
     * @example 192.168.0.1/24
     *
     * @var string
     */
    public $cidrBlock;

    /**
     * @description The time when the vSwitch was created.
     *
     * @example 2021-08-22T10:40:25Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The description of the vSwitch.
     *
     * @example abc
     *
     * @var string
     */
    public $description;

    /**
     * @description The IPv6 CIDR block of the vSwitch.
     *
     * @example 2408:XXXX:3c5:44e::/64
     *
     * @var string
     */
    public $ipv6CidrBlock;

    /**
     * @description Indicates whether the vSwitch is the default vSwitch. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * @example false
     *
     * @var bool
     */
    public $isDefault;

    /**
     * @description The network access control list (ACL) rules.
     *
     * @example 1
     *
     * @var string
     */
    public $networkAclId;

    /**
     * @description The ID of the Alibaba Cloud account to which the vSwitch belongs.
     *
     * @example 287683832402436789
     *
     * @var int
     */
    public $ownerId;

    /**
     * @description The ID of the request.
     *
     * @example 7B48B4B9-1EAD-469F-B488-594DAB4B6A1A
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-acfmxazb4ph****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The information about the route table that is associated with the vSwitch.
     *
     * @var routeTable
     */
    public $routeTable;

    /**
     * @var string
     */
    public $shareType;

    /**
     * @description The status of the vSwitch. Valid values:
     *
     *   **Pending**
     *   **Available**
     *
     * @example Pending
     *
     * @var string
     */
    public $status;

    /**
     * @description The tag list.
     *
     * @var tags
     */
    public $tags;

    /**
     * @description The ID of the vSwitch.
     *
     * @example vsw-25b7pv15t****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The name of the vSwitch.
     *
     * @example test
     *
     * @var string
     */
    public $vSwitchName;

    /**
     * @description The ID of the VPC to which the vSwitch belongs.
     *
     * @example vpc-257gq642n****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The ID of the zone to which the vSwitch belongs.
     *
     * @example cn-beijing-a
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'availableIpAddressCount' => 'AvailableIpAddressCount',
        'cidrBlock'               => 'CidrBlock',
        'creationTime'            => 'CreationTime',
        'description'             => 'Description',
        'ipv6CidrBlock'           => 'Ipv6CidrBlock',
        'isDefault'               => 'IsDefault',
        'networkAclId'            => 'NetworkAclId',
        'ownerId'                 => 'OwnerId',
        'requestId'               => 'RequestId',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
     * @return DescribeVSwitchAttributesResponseBody
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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
