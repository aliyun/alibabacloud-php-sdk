<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVSwitchAttributesResponseBody\routeTable;
use AlibabaCloud\Tea\Model;

class DescribeVSwitchAttributesResponseBody extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var bool
     */
    public $isDefault;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $networkAclId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var int
     */
    public $availableIpAddressCount;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $cidrBlock;

    /**
     * @var routeTable
     */
    public $routeTable;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $vSwitchName;

    /**
     * @var string
     */
    public $ipv6CidrBlock;
    protected $_name = [
        'status'                  => 'Status',
        'isDefault'               => 'IsDefault',
        'description'             => 'Description',
        'networkAclId'            => 'NetworkAclId',
        'requestId'               => 'RequestId',
        'resourceGroupId'         => 'ResourceGroupId',
        'zoneId'                  => 'ZoneId',
        'availableIpAddressCount' => 'AvailableIpAddressCount',
        'vSwitchId'               => 'VSwitchId',
        'cidrBlock'               => 'CidrBlock',
        'routeTable'              => 'RouteTable',
        'vpcId'                   => 'VpcId',
        'ownerId'                 => 'OwnerId',
        'creationTime'            => 'CreationTime',
        'vSwitchName'             => 'VSwitchName',
        'ipv6CidrBlock'           => 'Ipv6CidrBlock',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->networkAclId) {
            $res['NetworkAclId'] = $this->networkAclId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->availableIpAddressCount) {
            $res['AvailableIpAddressCount'] = $this->availableIpAddressCount;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->cidrBlock) {
            $res['CidrBlock'] = $this->cidrBlock;
        }
        if (null !== $this->routeTable) {
            $res['RouteTable'] = null !== $this->routeTable ? $this->routeTable->toMap() : null;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->vSwitchName) {
            $res['VSwitchName'] = $this->vSwitchName;
        }
        if (null !== $this->ipv6CidrBlock) {
            $res['Ipv6CidrBlock'] = $this->ipv6CidrBlock;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['NetworkAclId'])) {
            $model->networkAclId = $map['NetworkAclId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['AvailableIpAddressCount'])) {
            $model->availableIpAddressCount = $map['AvailableIpAddressCount'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['CidrBlock'])) {
            $model->cidrBlock = $map['CidrBlock'];
        }
        if (isset($map['RouteTable'])) {
            $model->routeTable = routeTable::fromMap($map['RouteTable']);
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['VSwitchName'])) {
            $model->vSwitchName = $map['VSwitchName'];
        }
        if (isset($map['Ipv6CidrBlock'])) {
            $model->ipv6CidrBlock = $map['Ipv6CidrBlock'];
        }

        return $model;
    }
}
