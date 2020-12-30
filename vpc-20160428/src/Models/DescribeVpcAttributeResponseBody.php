<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpcAttributeResponseBody\associatedCens;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpcAttributeResponseBody\cloudResources;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpcAttributeResponseBody\secondaryCidrBlocks;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpcAttributeResponseBody\userCidrs;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpcAttributeResponseBody\vSwitchIds;
use AlibabaCloud\Tea\Model;

class DescribeVpcAttributeResponseBody extends Model
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
    public $dhcpOptionsSetStatus;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $classicLinkEnabled;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var vSwitchIds
     */
    public $vSwitchIds;

    /**
     * @var secondaryCidrBlocks
     */
    public $secondaryCidrBlocks;

    /**
     * @var string
     */
    public $cidrBlock;

    /**
     * @var userCidrs
     */
    public $userCidrs;

    /**
     * @var string
     */
    public $VRouterId;

    /**
     * @var string
     */
    public $dhcpOptionsSetId;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var associatedCens
     */
    public $associatedCens;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $vpcName;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $ipv6CidrBlock;

    /**
     * @var cloudResources
     */
    public $cloudResources;
    protected $_name = [
        'status'               => 'Status',
        'isDefault'            => 'IsDefault',
        'dhcpOptionsSetStatus' => 'DhcpOptionsSetStatus',
        'description'          => 'Description',
        'classicLinkEnabled'   => 'ClassicLinkEnabled',
        'requestId'            => 'RequestId',
        'resourceGroupId'      => 'ResourceGroupId',
        'vSwitchIds'           => 'VSwitchIds',
        'secondaryCidrBlocks'  => 'SecondaryCidrBlocks',
        'cidrBlock'            => 'CidrBlock',
        'userCidrs'            => 'UserCidrs',
        'VRouterId'            => 'VRouterId',
        'dhcpOptionsSetId'     => 'DhcpOptionsSetId',
        'vpcId'                => 'VpcId',
        'ownerId'              => 'OwnerId',
        'associatedCens'       => 'AssociatedCens',
        'creationTime'         => 'CreationTime',
        'vpcName'              => 'VpcName',
        'regionId'             => 'RegionId',
        'ipv6CidrBlock'        => 'Ipv6CidrBlock',
        'cloudResources'       => 'CloudResources',
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
        if (null !== $this->dhcpOptionsSetStatus) {
            $res['DhcpOptionsSetStatus'] = $this->dhcpOptionsSetStatus;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->classicLinkEnabled) {
            $res['ClassicLinkEnabled'] = $this->classicLinkEnabled;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->vSwitchIds) {
            $res['VSwitchIds'] = null !== $this->vSwitchIds ? $this->vSwitchIds->toMap() : null;
        }
        if (null !== $this->secondaryCidrBlocks) {
            $res['SecondaryCidrBlocks'] = null !== $this->secondaryCidrBlocks ? $this->secondaryCidrBlocks->toMap() : null;
        }
        if (null !== $this->cidrBlock) {
            $res['CidrBlock'] = $this->cidrBlock;
        }
        if (null !== $this->userCidrs) {
            $res['UserCidrs'] = null !== $this->userCidrs ? $this->userCidrs->toMap() : null;
        }
        if (null !== $this->VRouterId) {
            $res['VRouterId'] = $this->VRouterId;
        }
        if (null !== $this->dhcpOptionsSetId) {
            $res['DhcpOptionsSetId'] = $this->dhcpOptionsSetId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->associatedCens) {
            $res['AssociatedCens'] = null !== $this->associatedCens ? $this->associatedCens->toMap() : null;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->vpcName) {
            $res['VpcName'] = $this->vpcName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->ipv6CidrBlock) {
            $res['Ipv6CidrBlock'] = $this->ipv6CidrBlock;
        }
        if (null !== $this->cloudResources) {
            $res['CloudResources'] = null !== $this->cloudResources ? $this->cloudResources->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVpcAttributeResponseBody
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
        if (isset($map['DhcpOptionsSetStatus'])) {
            $model->dhcpOptionsSetStatus = $map['DhcpOptionsSetStatus'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ClassicLinkEnabled'])) {
            $model->classicLinkEnabled = $map['ClassicLinkEnabled'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['VSwitchIds'])) {
            $model->vSwitchIds = vSwitchIds::fromMap($map['VSwitchIds']);
        }
        if (isset($map['SecondaryCidrBlocks'])) {
            $model->secondaryCidrBlocks = secondaryCidrBlocks::fromMap($map['SecondaryCidrBlocks']);
        }
        if (isset($map['CidrBlock'])) {
            $model->cidrBlock = $map['CidrBlock'];
        }
        if (isset($map['UserCidrs'])) {
            $model->userCidrs = userCidrs::fromMap($map['UserCidrs']);
        }
        if (isset($map['VRouterId'])) {
            $model->VRouterId = $map['VRouterId'];
        }
        if (isset($map['DhcpOptionsSetId'])) {
            $model->dhcpOptionsSetId = $map['DhcpOptionsSetId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['AssociatedCens'])) {
            $model->associatedCens = associatedCens::fromMap($map['AssociatedCens']);
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['VpcName'])) {
            $model->vpcName = $map['VpcName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Ipv6CidrBlock'])) {
            $model->ipv6CidrBlock = $map['Ipv6CidrBlock'];
        }
        if (isset($map['CloudResources'])) {
            $model->cloudResources = cloudResources::fromMap($map['CloudResources']);
        }

        return $model;
    }
}
