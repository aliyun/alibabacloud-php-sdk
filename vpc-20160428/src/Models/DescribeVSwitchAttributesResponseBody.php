<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVSwitchAttributesResponseBody\routeTable;
use AlibabaCloud\Tea\Model;

class DescribeVSwitchAttributesResponseBody extends Model
{
    /**
     * @example 12
     *
     * @var int
     */
    public $availableIpAddressCount;

    /**
     * @example 192.168.0.1/24
     *
     * @var string
     */
    public $cidrBlock;

    /**
     * @example 2021-08-22T10:40:25Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @example abc
     *
     * @var string
     */
    public $description;

    /**
     * @example 2408:XXXX:3c5:44e::/64
     *
     * @var string
     */
    public $ipv6CidrBlock;

    /**
     * @example false
     *
     * @var bool
     */
    public $isDefault;

    /**
     * @example 1
     *
     * @var string
     */
    public $networkAclId;

    /**
     * @example 287683832402436789
     *
     * @var int
     */
    public $ownerId;

    /**
     * @example 7B48B4B9-1EAD-469F-B488-594DAB4B6A1A
     *
     * @var string
     */
    public $requestId;

    /**
     * @example rg-acfmxazb4ph****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var routeTable
     */
    public $routeTable;

    /**
     * @example Pending
     *
     * @var string
     */
    public $status;

    /**
     * @example vsw-25b7pv15t****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @example test
     *
     * @var string
     */
    public $vSwitchName;

    /**
     * @example vpc-257gq642n****
     *
     * @var string
     */
    public $vpcId;

    /**
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
        'status'                  => 'Status',
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
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
