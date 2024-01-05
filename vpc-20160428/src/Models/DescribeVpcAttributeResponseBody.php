<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpcAttributeResponseBody\associatedCens;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpcAttributeResponseBody\associatedPropagationSources;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpcAttributeResponseBody\cloudResources;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpcAttributeResponseBody\ipv6CidrBlocks;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpcAttributeResponseBody\secondaryCidrBlocks;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpcAttributeResponseBody\tags;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpcAttributeResponseBody\userCidrs;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpcAttributeResponseBody\vSwitchIds;
use AlibabaCloud\Tea\Model;

class DescribeVpcAttributeResponseBody extends Model
{
    /**
     * @description The list of Cloud Enterprise Network (CEN) instances to which the VPC is attached.
     *
     * If the VPC is not attached to a CEN instance, the parameter is not returned.
     * @var associatedCens
     */
    public $associatedCens;

    /**
     * @var associatedPropagationSources
     */
    public $associatedPropagationSources;

    /**
     * @description The IPv4 CIDR block of the VPC.
     *
     * @example 192.168.0.0/16
     *
     * @var string
     */
    public $cidrBlock;

    /**
     * @description Indicates whether the ClassicLink feature is enabled. Valid values:
     *
     *   **true**
     *   **false** (default)
     *
     * @example false
     *
     * @var bool
     */
    public $classicLinkEnabled;

    /**
     * @description The list of resources deployed in the VPC.
     *
     * @var cloudResources
     */
    public $cloudResources;

    /**
     * @description The time when the VPC was created.
     *
     * @example 2021-10-16T07:31:09Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The description of the VPC.
     *
     * @example VPC
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the DHCP options set.
     *
     * @example dopt-o6w0df4epg9zo8isy****
     *
     * @var string
     */
    public $dhcpOptionsSetId;

    /**
     * @description The status of the DHCP options set. Valid values:
     *
     *   **Available**
     *   **InUse**
     *   **Deleted**
     *   **Pending**
     *
     * @example Available
     *
     * @var string
     */
    public $dhcpOptionsSetStatus;

    /**
     * @description The ID of the IPv4 gateway.
     *
     * @example ipv4gw-5tsnc6s4ogsedtp3k****
     *
     * @var string
     */
    public $ipv4GatewayId;

    /**
     * @description The IPv6 CIDR block of the VPC.
     *
     * @example 2408:XXXX:0:a600::/56
     *
     * @var string
     */
    public $ipv6CidrBlock;

    /**
     * @description The IPv6 CIDR block of the VPC.
     *
     * @var ipv6CidrBlocks
     */
    public $ipv6CidrBlocks;

    /**
     * @description Indicates whether the VPC is the default VPC. Valid values:
     *
     *   **true**
     *   **false** (default)
     *
     * @example false
     *
     * @var bool
     */
    public $isDefault;

    /**
     * @description The ID of the Alibaba Cloud account to which the VPC belongs.
     *
     * @example 283117732402483989
     *
     * @var int
     */
    public $ownerId;

    /**
     * @description The ID of the region to which the VPC belongs.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The request ID.
     *
     * @example 7486AE4A-129D-43DB-A714-2432C074BA04
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-acfmxazbvgb4ph****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The secondary IPv4 CIDR block of the VPC.
     *
     * @var secondaryCidrBlocks
     */
    public $secondaryCidrBlocks;

    /**
     * @description The status of the VPC. Valid values:
     *
     *   **Available**
     *   **Pending**
     *
     * @example Available
     *
     * @var string
     */
    public $status;

    /**
     * @description Indicates whether the VPC supports IPv4 gateways.
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $supportIpv4Gateway;

    /**
     * @description The information about the tags.
     *
     * @var tags
     */
    public $tags;

    /**
     * @description The user CIDR block. Multiple CIDR blocks are separated by commas (,). At most three CIDR blocks are returned.
     *
     * @var userCidrs
     */
    public $userCidrs;

    /**
     * @description The ID of the vRouter that belongs to the VPC.
     *
     * @example vrt-bp1jso6ng1at0ajsc****
     *
     * @var string
     */
    public $VRouterId;

    /**
     * @description The list of vSwitches deployed in the VPC.
     *
     * @var vSwitchIds
     */
    public $vSwitchIds;

    /**
     * @description The ID of the VPC.
     *
     * @example vpc-bp18sth14qii3pnvo****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The name of the VPC.
     *
     * @example doctest2
     *
     * @var string
     */
    public $vpcName;
    protected $_name = [
        'associatedCens'               => 'AssociatedCens',
        'associatedPropagationSources' => 'AssociatedPropagationSources',
        'cidrBlock'                    => 'CidrBlock',
        'classicLinkEnabled'           => 'ClassicLinkEnabled',
        'cloudResources'               => 'CloudResources',
        'creationTime'                 => 'CreationTime',
        'description'                  => 'Description',
        'dhcpOptionsSetId'             => 'DhcpOptionsSetId',
        'dhcpOptionsSetStatus'         => 'DhcpOptionsSetStatus',
        'ipv4GatewayId'                => 'Ipv4GatewayId',
        'ipv6CidrBlock'                => 'Ipv6CidrBlock',
        'ipv6CidrBlocks'               => 'Ipv6CidrBlocks',
        'isDefault'                    => 'IsDefault',
        'ownerId'                      => 'OwnerId',
        'regionId'                     => 'RegionId',
        'requestId'                    => 'RequestId',
        'resourceGroupId'              => 'ResourceGroupId',
        'secondaryCidrBlocks'          => 'SecondaryCidrBlocks',
        'status'                       => 'Status',
        'supportIpv4Gateway'           => 'SupportIpv4Gateway',
        'tags'                         => 'Tags',
        'userCidrs'                    => 'UserCidrs',
        'VRouterId'                    => 'VRouterId',
        'vSwitchIds'                   => 'VSwitchIds',
        'vpcId'                        => 'VpcId',
        'vpcName'                      => 'VpcName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->associatedCens) {
            $res['AssociatedCens'] = null !== $this->associatedCens ? $this->associatedCens->toMap() : null;
        }
        if (null !== $this->associatedPropagationSources) {
            $res['AssociatedPropagationSources'] = null !== $this->associatedPropagationSources ? $this->associatedPropagationSources->toMap() : null;
        }
        if (null !== $this->cidrBlock) {
            $res['CidrBlock'] = $this->cidrBlock;
        }
        if (null !== $this->classicLinkEnabled) {
            $res['ClassicLinkEnabled'] = $this->classicLinkEnabled;
        }
        if (null !== $this->cloudResources) {
            $res['CloudResources'] = null !== $this->cloudResources ? $this->cloudResources->toMap() : null;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->dhcpOptionsSetId) {
            $res['DhcpOptionsSetId'] = $this->dhcpOptionsSetId;
        }
        if (null !== $this->dhcpOptionsSetStatus) {
            $res['DhcpOptionsSetStatus'] = $this->dhcpOptionsSetStatus;
        }
        if (null !== $this->ipv4GatewayId) {
            $res['Ipv4GatewayId'] = $this->ipv4GatewayId;
        }
        if (null !== $this->ipv6CidrBlock) {
            $res['Ipv6CidrBlock'] = $this->ipv6CidrBlock;
        }
        if (null !== $this->ipv6CidrBlocks) {
            $res['Ipv6CidrBlocks'] = null !== $this->ipv6CidrBlocks ? $this->ipv6CidrBlocks->toMap() : null;
        }
        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->secondaryCidrBlocks) {
            $res['SecondaryCidrBlocks'] = null !== $this->secondaryCidrBlocks ? $this->secondaryCidrBlocks->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->supportIpv4Gateway) {
            $res['SupportIpv4Gateway'] = $this->supportIpv4Gateway;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->userCidrs) {
            $res['UserCidrs'] = null !== $this->userCidrs ? $this->userCidrs->toMap() : null;
        }
        if (null !== $this->VRouterId) {
            $res['VRouterId'] = $this->VRouterId;
        }
        if (null !== $this->vSwitchIds) {
            $res['VSwitchIds'] = null !== $this->vSwitchIds ? $this->vSwitchIds->toMap() : null;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vpcName) {
            $res['VpcName'] = $this->vpcName;
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
        if (isset($map['AssociatedCens'])) {
            $model->associatedCens = associatedCens::fromMap($map['AssociatedCens']);
        }
        if (isset($map['AssociatedPropagationSources'])) {
            $model->associatedPropagationSources = associatedPropagationSources::fromMap($map['AssociatedPropagationSources']);
        }
        if (isset($map['CidrBlock'])) {
            $model->cidrBlock = $map['CidrBlock'];
        }
        if (isset($map['ClassicLinkEnabled'])) {
            $model->classicLinkEnabled = $map['ClassicLinkEnabled'];
        }
        if (isset($map['CloudResources'])) {
            $model->cloudResources = cloudResources::fromMap($map['CloudResources']);
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DhcpOptionsSetId'])) {
            $model->dhcpOptionsSetId = $map['DhcpOptionsSetId'];
        }
        if (isset($map['DhcpOptionsSetStatus'])) {
            $model->dhcpOptionsSetStatus = $map['DhcpOptionsSetStatus'];
        }
        if (isset($map['Ipv4GatewayId'])) {
            $model->ipv4GatewayId = $map['Ipv4GatewayId'];
        }
        if (isset($map['Ipv6CidrBlock'])) {
            $model->ipv6CidrBlock = $map['Ipv6CidrBlock'];
        }
        if (isset($map['Ipv6CidrBlocks'])) {
            $model->ipv6CidrBlocks = ipv6CidrBlocks::fromMap($map['Ipv6CidrBlocks']);
        }
        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SecondaryCidrBlocks'])) {
            $model->secondaryCidrBlocks = secondaryCidrBlocks::fromMap($map['SecondaryCidrBlocks']);
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SupportIpv4Gateway'])) {
            $model->supportIpv4Gateway = $map['SupportIpv4Gateway'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }
        if (isset($map['UserCidrs'])) {
            $model->userCidrs = userCidrs::fromMap($map['UserCidrs']);
        }
        if (isset($map['VRouterId'])) {
            $model->VRouterId = $map['VRouterId'];
        }
        if (isset($map['VSwitchIds'])) {
            $model->vSwitchIds = vSwitchIds::fromMap($map['VSwitchIds']);
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VpcName'])) {
            $model->vpcName = $map['VpcName'];
        }

        return $model;
    }
}
