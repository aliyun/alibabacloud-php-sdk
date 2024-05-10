<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpcsResponseBody\vpcs;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpcsResponseBody\vpcs\vpc\ipv6CidrBlocks;
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
     * @description The status of the Cloud Enterprise Network (CEN) instance to which the VPC is attached. **Attached** is returned only if the VPC is attached to a CEN instance.
     *
     * @example Attached
     *
     * @var string
     */
    public $cenStatus;

    /**
     * @description The IPv4 CIDR block of the VPC.
     *
     * @example 192.168.0.0/16
     *
     * @var string
     */
    public $cidrBlock;

    /**
     * @description The time when the VPC was created.
     *
     * @example 2021-04-18T15:02:37Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The description of the VPC.
     *
     * @example This is my VPC.
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
     * @var bool
     */
    public $enabledIpv6;

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
     * @description Indicates whether the VPC is the default VPC in the region. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example false
     *
     * @var bool
     */
    public $isDefault;

    /**
     * @description The ID of the Internet NAT gateway.
     *
     * @var natGatewayIds
     */
    public $natGatewayIds;

    /**
     * @description The ID of the Alibaba Cloud account to which the VPC belongs.
     *
     * @example 253460731706911258
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
     * @description The ID of the resource group to which the VPC belongs.
     *
     * @example rg-acfmxazb4ph****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The information about the route table.
     *
     * @var routerTableIds
     */
    public $routerTableIds;

    /**
     * @description The information about the secondary CIDR block.
     *
     * @var secondaryCidrBlocks
     */
    public $secondaryCidrBlocks;

    /**
     * @description The status of the VPC. Valid values:
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
     * @description The tag information about the VPC.
     *
     * @var tags
     */
    public $tags;

    /**
     * @description The list of user CIDR blocks.
     *
     * @var userCidrs
     */
    public $userCidrs;

    /**
     * @description The ID of the vRouter.
     *
     * @example vrt-bp1jcg5cmxjbl9xgc****
     *
     * @var string
     */
    public $VRouterId;

    /**
     * @description The vSwitches in the VPC.
     *
     * You can query up to 300 vSwitches in the VPC. The information about the latest vSwitches is returned. If you want to query the information about all vSwitches in a VPC, call the [DescribeVSwitches](https://help.aliyun.com/document_detail/35748.html) operation.
     * @var vSwitchIds
     */
    public $vSwitchIds;

    /**
     * @description The VPC ID.
     *
     * @example vpc-bp1qpo0kug3a20qqe****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The name of the VPC.
     *
     * @example vpc1
     *
     * @var string
     */
    public $vpcName;
    protected $_name = [
        'cenStatus'            => 'CenStatus',
        'cidrBlock'            => 'CidrBlock',
        'creationTime'         => 'CreationTime',
        'description'          => 'Description',
        'dhcpOptionsSetId'     => 'DhcpOptionsSetId',
        'dhcpOptionsSetStatus' => 'DhcpOptionsSetStatus',
        'enabledIpv6'          => 'EnabledIpv6',
        'ipv6CidrBlock'        => 'Ipv6CidrBlock',
        'ipv6CidrBlocks'       => 'Ipv6CidrBlocks',
        'isDefault'            => 'IsDefault',
        'natGatewayIds'        => 'NatGatewayIds',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'resourceGroupId'      => 'ResourceGroupId',
        'routerTableIds'       => 'RouterTableIds',
        'secondaryCidrBlocks'  => 'SecondaryCidrBlocks',
        'status'               => 'Status',
        'tags'                 => 'Tags',
        'userCidrs'            => 'UserCidrs',
        'VRouterId'            => 'VRouterId',
        'vSwitchIds'           => 'VSwitchIds',
        'vpcId'                => 'VpcId',
        'vpcName'              => 'VpcName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cenStatus) {
            $res['CenStatus'] = $this->cenStatus;
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
        if (null !== $this->dhcpOptionsSetId) {
            $res['DhcpOptionsSetId'] = $this->dhcpOptionsSetId;
        }
        if (null !== $this->dhcpOptionsSetStatus) {
            $res['DhcpOptionsSetStatus'] = $this->dhcpOptionsSetStatus;
        }
        if (null !== $this->enabledIpv6) {
            $res['EnabledIpv6'] = $this->enabledIpv6;
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
        if (null !== $this->natGatewayIds) {
            $res['NatGatewayIds'] = null !== $this->natGatewayIds ? $this->natGatewayIds->toMap() : null;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->routerTableIds) {
            $res['RouterTableIds'] = null !== $this->routerTableIds ? $this->routerTableIds->toMap() : null;
        }
        if (null !== $this->secondaryCidrBlocks) {
            $res['SecondaryCidrBlocks'] = null !== $this->secondaryCidrBlocks ? $this->secondaryCidrBlocks->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
     * @return vpc
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CenStatus'])) {
            $model->cenStatus = $map['CenStatus'];
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
        if (isset($map['DhcpOptionsSetId'])) {
            $model->dhcpOptionsSetId = $map['DhcpOptionsSetId'];
        }
        if (isset($map['DhcpOptionsSetStatus'])) {
            $model->dhcpOptionsSetStatus = $map['DhcpOptionsSetStatus'];
        }
        if (isset($map['EnabledIpv6'])) {
            $model->enabledIpv6 = $map['EnabledIpv6'];
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
        if (isset($map['NatGatewayIds'])) {
            $model->natGatewayIds = natGatewayIds::fromMap($map['NatGatewayIds']);
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['RouterTableIds'])) {
            $model->routerTableIds = routerTableIds::fromMap($map['RouterTableIds']);
        }
        if (isset($map['SecondaryCidrBlocks'])) {
            $model->secondaryCidrBlocks = secondaryCidrBlocks::fromMap($map['SecondaryCidrBlocks']);
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
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
