<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVSwitchesResponseBody\vSwitches;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVSwitchesResponseBody\vSwitches\vSwitch\routeTable;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVSwitchesResponseBody\vSwitches\vSwitch\tags;
use AlibabaCloud\Tea\Model;

class vSwitch extends Model
{
    /**
     * @var int
     */
    public $availableIpAddressCount;

    /**
     * @var string
     */
    public $cidrBlock;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $ipv6CidrBlock;

    /**
     * @var bool
     */
    public $isDefault;

    /**
     * @var string
     */
    public $networkAclId;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var routeTable
     */
    public $routeTable;

    /**
     * @var string
     */
    public $status;

    /**
     * @var tags
     */
    public $tags;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $vSwitchName;

    /**
     * @var string
     */
    public $vpcId;

    /**
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
        'resourceGroupId'         => 'ResourceGroupId',
        'routeTable'              => 'RouteTable',
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
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->routeTable) {
            $res['RouteTable'] = null !== $this->routeTable ? $this->routeTable->toMap() : null;
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
