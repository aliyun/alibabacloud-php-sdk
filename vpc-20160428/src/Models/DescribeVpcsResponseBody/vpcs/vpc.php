<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpcsResponseBody\vpcs;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpcsResponseBody\vpcs\vpc\natGatewayIds;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpcsResponseBody\vpcs\vpc\routerTableIds;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpcsResponseBody\vpcs\vpc\secondaryCidrBlocks;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpcsResponseBody\vpcs\vpc\tags;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpcsResponseBody\vpcs\vpc\userCidrs;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpcsResponseBody\vpcs\vpc\vSwitchIds;
use AlibabaCloud\Tea\Model;

class vpc extends Model
{
    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var tags
     */
    public $tags;

    /**
     * @var userCidrs
     */
    public $userCidrs;

    /**
     * @var natGatewayIds
     */
    public $natGatewayIds;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $vpcName;

    /**
     * @var string
     */
    public $cidrBlock;

    /**
     * @var string
     */
    public $dhcpOptionsSetStatus;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $dhcpOptionsSetId;

    /**
     * @var vSwitchIds
     */
    public $vSwitchIds;

    /**
     * @var string
     */
    public $ipv6CidrBlock;

    /**
     * @var routerTableIds
     */
    public $routerTableIds;

    /**
     * @var bool
     */
    public $isDefault;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $VRouterId;

    /**
     * @var secondaryCidrBlocks
     */
    public $secondaryCidrBlocks;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $cenStatus;
    protected $_name = [
        'vpcId'                => 'VpcId',
        'status'               => 'Status',
        'creationTime'         => 'CreationTime',
        'tags'                 => 'Tags',
        'userCidrs'            => 'UserCidrs',
        'natGatewayIds'        => 'NatGatewayIds',
        'ownerId'              => 'OwnerId',
        'vpcName'              => 'VpcName',
        'cidrBlock'            => 'CidrBlock',
        'dhcpOptionsSetStatus' => 'DhcpOptionsSetStatus',
        'description'          => 'Description',
        'dhcpOptionsSetId'     => 'DhcpOptionsSetId',
        'vSwitchIds'           => 'VSwitchIds',
        'ipv6CidrBlock'        => 'Ipv6CidrBlock',
        'routerTableIds'       => 'RouterTableIds',
        'isDefault'            => 'IsDefault',
        'regionId'             => 'RegionId',
        'VRouterId'            => 'VRouterId',
        'secondaryCidrBlocks'  => 'SecondaryCidrBlocks',
        'resourceGroupId'      => 'ResourceGroupId',
        'cenStatus'            => 'CenStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->userCidrs) {
            $res['UserCidrs'] = null !== $this->userCidrs ? $this->userCidrs->toMap() : null;
        }
        if (null !== $this->natGatewayIds) {
            $res['NatGatewayIds'] = null !== $this->natGatewayIds ? $this->natGatewayIds->toMap() : null;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->vpcName) {
            $res['VpcName'] = $this->vpcName;
        }
        if (null !== $this->cidrBlock) {
            $res['CidrBlock'] = $this->cidrBlock;
        }
        if (null !== $this->dhcpOptionsSetStatus) {
            $res['DhcpOptionsSetStatus'] = $this->dhcpOptionsSetStatus;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->dhcpOptionsSetId) {
            $res['DhcpOptionsSetId'] = $this->dhcpOptionsSetId;
        }
        if (null !== $this->vSwitchIds) {
            $res['VSwitchIds'] = null !== $this->vSwitchIds ? $this->vSwitchIds->toMap() : null;
        }
        if (null !== $this->ipv6CidrBlock) {
            $res['Ipv6CidrBlock'] = $this->ipv6CidrBlock;
        }
        if (null !== $this->routerTableIds) {
            $res['RouterTableIds'] = null !== $this->routerTableIds ? $this->routerTableIds->toMap() : null;
        }
        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->VRouterId) {
            $res['VRouterId'] = $this->VRouterId;
        }
        if (null !== $this->secondaryCidrBlocks) {
            $res['SecondaryCidrBlocks'] = null !== $this->secondaryCidrBlocks ? $this->secondaryCidrBlocks->toMap() : null;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->cenStatus) {
            $res['CenStatus'] = $this->cenStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vpc
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }
        if (isset($map['UserCidrs'])) {
            $model->userCidrs = userCidrs::fromMap($map['UserCidrs']);
        }
        if (isset($map['NatGatewayIds'])) {
            $model->natGatewayIds = natGatewayIds::fromMap($map['NatGatewayIds']);
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['VpcName'])) {
            $model->vpcName = $map['VpcName'];
        }
        if (isset($map['CidrBlock'])) {
            $model->cidrBlock = $map['CidrBlock'];
        }
        if (isset($map['DhcpOptionsSetStatus'])) {
            $model->dhcpOptionsSetStatus = $map['DhcpOptionsSetStatus'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DhcpOptionsSetId'])) {
            $model->dhcpOptionsSetId = $map['DhcpOptionsSetId'];
        }
        if (isset($map['VSwitchIds'])) {
            $model->vSwitchIds = vSwitchIds::fromMap($map['VSwitchIds']);
        }
        if (isset($map['Ipv6CidrBlock'])) {
            $model->ipv6CidrBlock = $map['Ipv6CidrBlock'];
        }
        if (isset($map['RouterTableIds'])) {
            $model->routerTableIds = routerTableIds::fromMap($map['RouterTableIds']);
        }
        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['VRouterId'])) {
            $model->VRouterId = $map['VRouterId'];
        }
        if (isset($map['SecondaryCidrBlocks'])) {
            $model->secondaryCidrBlocks = secondaryCidrBlocks::fromMap($map['SecondaryCidrBlocks']);
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['CenStatus'])) {
            $model->cenStatus = $map['CenStatus'];
        }

        return $model;
    }
}
