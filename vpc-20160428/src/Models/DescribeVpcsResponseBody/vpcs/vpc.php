<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpcsResponseBody\vpcs;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpcsResponseBody\vpcs\vpc\ipv6CidrBlocks;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpcsResponseBody\vpcs\vpc\natGatewayIds;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpcsResponseBody\vpcs\vpc\routerTableIds;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpcsResponseBody\vpcs\vpc\secondaryCidrBlocks;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpcsResponseBody\vpcs\vpc\tags;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpcsResponseBody\vpcs\vpc\userCidrs;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpcsResponseBody\vpcs\vpc\vSwitchIds;

class vpc extends Model
{
    /**
     * @var string
     */
    public $cenStatus;

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
    public $dhcpOptionsSetId;

    /**
     * @var string
     */
    public $dhcpOptionsSetStatus;

    /**
     * @var string
     */
    public $dnsHostnameStatus;

    /**
     * @var bool
     */
    public $enabledIpv6;

    /**
     * @var string
     */
    public $ipv6CidrBlock;

    /**
     * @var ipv6CidrBlocks
     */
    public $ipv6CidrBlocks;

    /**
     * @var bool
     */
    public $isDefault;

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
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var routerTableIds
     */
    public $routerTableIds;

    /**
     * @var secondaryCidrBlocks
     */
    public $secondaryCidrBlocks;

    /**
     * @var string
     */
    public $status;

    /**
     * @var tags
     */
    public $tags;

    /**
     * @var userCidrs
     */
    public $userCidrs;

    /**
     * @var string
     */
    public $VRouterId;

    /**
     * @var vSwitchIds
     */
    public $vSwitchIds;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $vpcName;
    protected $_name = [
        'cenStatus' => 'CenStatus',
        'cidrBlock' => 'CidrBlock',
        'creationTime' => 'CreationTime',
        'description' => 'Description',
        'dhcpOptionsSetId' => 'DhcpOptionsSetId',
        'dhcpOptionsSetStatus' => 'DhcpOptionsSetStatus',
        'dnsHostnameStatus' => 'DnsHostnameStatus',
        'enabledIpv6' => 'EnabledIpv6',
        'ipv6CidrBlock' => 'Ipv6CidrBlock',
        'ipv6CidrBlocks' => 'Ipv6CidrBlocks',
        'isDefault' => 'IsDefault',
        'natGatewayIds' => 'NatGatewayIds',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'routerTableIds' => 'RouterTableIds',
        'secondaryCidrBlocks' => 'SecondaryCidrBlocks',
        'status' => 'Status',
        'tags' => 'Tags',
        'userCidrs' => 'UserCidrs',
        'VRouterId' => 'VRouterId',
        'vSwitchIds' => 'VSwitchIds',
        'vpcId' => 'VpcId',
        'vpcName' => 'VpcName',
    ];

    public function validate()
    {
        if (null !== $this->ipv6CidrBlocks) {
            $this->ipv6CidrBlocks->validate();
        }
        if (null !== $this->natGatewayIds) {
            $this->natGatewayIds->validate();
        }
        if (null !== $this->routerTableIds) {
            $this->routerTableIds->validate();
        }
        if (null !== $this->secondaryCidrBlocks) {
            $this->secondaryCidrBlocks->validate();
        }
        if (null !== $this->tags) {
            $this->tags->validate();
        }
        if (null !== $this->userCidrs) {
            $this->userCidrs->validate();
        }
        if (null !== $this->vSwitchIds) {
            $this->vSwitchIds->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->dnsHostnameStatus) {
            $res['DnsHostnameStatus'] = $this->dnsHostnameStatus;
        }

        if (null !== $this->enabledIpv6) {
            $res['EnabledIpv6'] = $this->enabledIpv6;
        }

        if (null !== $this->ipv6CidrBlock) {
            $res['Ipv6CidrBlock'] = $this->ipv6CidrBlock;
        }

        if (null !== $this->ipv6CidrBlocks) {
            $res['Ipv6CidrBlocks'] = null !== $this->ipv6CidrBlocks ? $this->ipv6CidrBlocks->toArray($noStream) : $this->ipv6CidrBlocks;
        }

        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
        }

        if (null !== $this->natGatewayIds) {
            $res['NatGatewayIds'] = null !== $this->natGatewayIds ? $this->natGatewayIds->toArray($noStream) : $this->natGatewayIds;
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
            $res['RouterTableIds'] = null !== $this->routerTableIds ? $this->routerTableIds->toArray($noStream) : $this->routerTableIds;
        }

        if (null !== $this->secondaryCidrBlocks) {
            $res['SecondaryCidrBlocks'] = null !== $this->secondaryCidrBlocks ? $this->secondaryCidrBlocks->toArray($noStream) : $this->secondaryCidrBlocks;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toArray($noStream) : $this->tags;
        }

        if (null !== $this->userCidrs) {
            $res['UserCidrs'] = null !== $this->userCidrs ? $this->userCidrs->toArray($noStream) : $this->userCidrs;
        }

        if (null !== $this->VRouterId) {
            $res['VRouterId'] = $this->VRouterId;
        }

        if (null !== $this->vSwitchIds) {
            $res['VSwitchIds'] = null !== $this->vSwitchIds ? $this->vSwitchIds->toArray($noStream) : $this->vSwitchIds;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        if (null !== $this->vpcName) {
            $res['VpcName'] = $this->vpcName;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['DnsHostnameStatus'])) {
            $model->dnsHostnameStatus = $map['DnsHostnameStatus'];
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
