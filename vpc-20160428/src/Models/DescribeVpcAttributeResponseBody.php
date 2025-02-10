<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpcAttributeResponseBody\associatedCens;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpcAttributeResponseBody\associatedPropagationSources;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpcAttributeResponseBody\cloudResources;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpcAttributeResponseBody\ipv6CidrBlocks;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpcAttributeResponseBody\secondaryCidrBlocks;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpcAttributeResponseBody\tags;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpcAttributeResponseBody\userCidrs;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpcAttributeResponseBody\vSwitchIds;

class DescribeVpcAttributeResponseBody extends Model
{
    /**
     * @var associatedCens
     */
    public $associatedCens;
    /**
     * @var associatedPropagationSources
     */
    public $associatedPropagationSources;
    /**
     * @var string
     */
    public $cidrBlock;
    /**
     * @var bool
     */
    public $classicLinkEnabled;
    /**
     * @var cloudResources
     */
    public $cloudResources;
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
    public $ipv4GatewayId;
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
    public $requestId;
    /**
     * @var string
     */
    public $resourceGroupId;
    /**
     * @var secondaryCidrBlocks
     */
    public $secondaryCidrBlocks;
    /**
     * @var string
     */
    public $status;
    /**
     * @var bool
     */
    public $supportIpv4Gateway;
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
        'associatedCens'               => 'AssociatedCens',
        'associatedPropagationSources' => 'AssociatedPropagationSources',
        'cidrBlock'                    => 'CidrBlock',
        'classicLinkEnabled'           => 'ClassicLinkEnabled',
        'cloudResources'               => 'CloudResources',
        'creationTime'                 => 'CreationTime',
        'description'                  => 'Description',
        'dhcpOptionsSetId'             => 'DhcpOptionsSetId',
        'dhcpOptionsSetStatus'         => 'DhcpOptionsSetStatus',
        'dnsHostnameStatus'            => 'DnsHostnameStatus',
        'enabledIpv6'                  => 'EnabledIpv6',
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
        if (null !== $this->associatedCens) {
            $this->associatedCens->validate();
        }
        if (null !== $this->associatedPropagationSources) {
            $this->associatedPropagationSources->validate();
        }
        if (null !== $this->cloudResources) {
            $this->cloudResources->validate();
        }
        if (null !== $this->ipv6CidrBlocks) {
            $this->ipv6CidrBlocks->validate();
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
        if (null !== $this->associatedCens) {
            $res['AssociatedCens'] = null !== $this->associatedCens ? $this->associatedCens->toArray($noStream) : $this->associatedCens;
        }

        if (null !== $this->associatedPropagationSources) {
            $res['AssociatedPropagationSources'] = null !== $this->associatedPropagationSources ? $this->associatedPropagationSources->toArray($noStream) : $this->associatedPropagationSources;
        }

        if (null !== $this->cidrBlock) {
            $res['CidrBlock'] = $this->cidrBlock;
        }

        if (null !== $this->classicLinkEnabled) {
            $res['ClassicLinkEnabled'] = $this->classicLinkEnabled;
        }

        if (null !== $this->cloudResources) {
            $res['CloudResources'] = null !== $this->cloudResources ? $this->cloudResources->toArray($noStream) : $this->cloudResources;
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

        if (null !== $this->ipv4GatewayId) {
            $res['Ipv4GatewayId'] = $this->ipv4GatewayId;
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
            $res['SecondaryCidrBlocks'] = null !== $this->secondaryCidrBlocks ? $this->secondaryCidrBlocks->toArray($noStream) : $this->secondaryCidrBlocks;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->supportIpv4Gateway) {
            $res['SupportIpv4Gateway'] = $this->supportIpv4Gateway;
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

        if (isset($map['DnsHostnameStatus'])) {
            $model->dnsHostnameStatus = $map['DnsHostnameStatus'];
        }

        if (isset($map['EnabledIpv6'])) {
            $model->enabledIpv6 = $map['EnabledIpv6'];
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
