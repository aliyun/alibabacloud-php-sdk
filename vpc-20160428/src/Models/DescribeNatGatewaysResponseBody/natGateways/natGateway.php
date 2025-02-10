<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNatGatewaysResponseBody\natGateways;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNatGatewaysResponseBody\natGateways\natGateway\accessMode;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNatGatewaysResponseBody\natGateways\natGateway\forwardTableIds;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNatGatewaysResponseBody\natGateways\natGateway\fullNatTableIds;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNatGatewaysResponseBody\natGateways\natGateway\ipLists;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNatGatewaysResponseBody\natGateways\natGateway\natGatewayPrivateInfo;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNatGatewaysResponseBody\natGateways\natGateway\snatTableIds;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNatGatewaysResponseBody\natGateways\natGateway\tags;

class natGateway extends Model
{
    /**
     * @var accessMode
     */
    public $accessMode;
    /**
     * @var bool
     */
    public $autoPay;
    /**
     * @var string
     */
    public $businessStatus;
    /**
     * @var string
     */
    public $creationTime;
    /**
     * @var bool
     */
    public $deletionProtection;
    /**
     * @var string
     */
    public $description;
    /**
     * @var bool
     */
    public $ecsMetricEnabled;
    /**
     * @var string
     */
    public $eipBindMode;
    /**
     * @var string
     */
    public $enableSessionLog;
    /**
     * @var string
     */
    public $expiredTime;
    /**
     * @var forwardTableIds
     */
    public $forwardTableIds;
    /**
     * @var fullNatTableIds
     */
    public $fullNatTableIds;
    /**
     * @var bool
     */
    public $icmpReplyEnabled;
    /**
     * @var string
     */
    public $instanceChargeType;
    /**
     * @var string
     */
    public $internetChargeType;
    /**
     * @var ipLists
     */
    public $ipLists;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $natGatewayId;
    /**
     * @var natGatewayPrivateInfo
     */
    public $natGatewayPrivateInfo;
    /**
     * @var string
     */
    public $natType;
    /**
     * @var string
     */
    public $networkType;
    /**
     * @var bool
     */
    public $privateLinkEnabled;
    /**
     * @var string
     */
    public $privateLinkMode;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $resourceGroupId;
    /**
     * @var bool
     */
    public $securityProtectionEnabled;
    /**
     * @var snatTableIds
     */
    public $snatTableIds;
    /**
     * @var string
     */
    public $spec;
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
    public $vpcId;
    protected $_name = [
        'accessMode'                => 'AccessMode',
        'autoPay'                   => 'AutoPay',
        'businessStatus'            => 'BusinessStatus',
        'creationTime'              => 'CreationTime',
        'deletionProtection'        => 'DeletionProtection',
        'description'               => 'Description',
        'ecsMetricEnabled'          => 'EcsMetricEnabled',
        'eipBindMode'               => 'EipBindMode',
        'enableSessionLog'          => 'EnableSessionLog',
        'expiredTime'               => 'ExpiredTime',
        'forwardTableIds'           => 'ForwardTableIds',
        'fullNatTableIds'           => 'FullNatTableIds',
        'icmpReplyEnabled'          => 'IcmpReplyEnabled',
        'instanceChargeType'        => 'InstanceChargeType',
        'internetChargeType'        => 'InternetChargeType',
        'ipLists'                   => 'IpLists',
        'name'                      => 'Name',
        'natGatewayId'              => 'NatGatewayId',
        'natGatewayPrivateInfo'     => 'NatGatewayPrivateInfo',
        'natType'                   => 'NatType',
        'networkType'               => 'NetworkType',
        'privateLinkEnabled'        => 'PrivateLinkEnabled',
        'privateLinkMode'           => 'PrivateLinkMode',
        'regionId'                  => 'RegionId',
        'resourceGroupId'           => 'ResourceGroupId',
        'securityProtectionEnabled' => 'SecurityProtectionEnabled',
        'snatTableIds'              => 'SnatTableIds',
        'spec'                      => 'Spec',
        'status'                    => 'Status',
        'tags'                      => 'Tags',
        'vpcId'                     => 'VpcId',
    ];

    public function validate()
    {
        if (null !== $this->accessMode) {
            $this->accessMode->validate();
        }
        if (null !== $this->forwardTableIds) {
            $this->forwardTableIds->validate();
        }
        if (null !== $this->fullNatTableIds) {
            $this->fullNatTableIds->validate();
        }
        if (null !== $this->ipLists) {
            $this->ipLists->validate();
        }
        if (null !== $this->natGatewayPrivateInfo) {
            $this->natGatewayPrivateInfo->validate();
        }
        if (null !== $this->snatTableIds) {
            $this->snatTableIds->validate();
        }
        if (null !== $this->tags) {
            $this->tags->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessMode) {
            $res['AccessMode'] = null !== $this->accessMode ? $this->accessMode->toArray($noStream) : $this->accessMode;
        }

        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }

        if (null !== $this->businessStatus) {
            $res['BusinessStatus'] = $this->businessStatus;
        }

        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        if (null !== $this->deletionProtection) {
            $res['DeletionProtection'] = $this->deletionProtection;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->ecsMetricEnabled) {
            $res['EcsMetricEnabled'] = $this->ecsMetricEnabled;
        }

        if (null !== $this->eipBindMode) {
            $res['EipBindMode'] = $this->eipBindMode;
        }

        if (null !== $this->enableSessionLog) {
            $res['EnableSessionLog'] = $this->enableSessionLog;
        }

        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }

        if (null !== $this->forwardTableIds) {
            $res['ForwardTableIds'] = null !== $this->forwardTableIds ? $this->forwardTableIds->toArray($noStream) : $this->forwardTableIds;
        }

        if (null !== $this->fullNatTableIds) {
            $res['FullNatTableIds'] = null !== $this->fullNatTableIds ? $this->fullNatTableIds->toArray($noStream) : $this->fullNatTableIds;
        }

        if (null !== $this->icmpReplyEnabled) {
            $res['IcmpReplyEnabled'] = $this->icmpReplyEnabled;
        }

        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }

        if (null !== $this->internetChargeType) {
            $res['InternetChargeType'] = $this->internetChargeType;
        }

        if (null !== $this->ipLists) {
            $res['IpLists'] = null !== $this->ipLists ? $this->ipLists->toArray($noStream) : $this->ipLists;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->natGatewayId) {
            $res['NatGatewayId'] = $this->natGatewayId;
        }

        if (null !== $this->natGatewayPrivateInfo) {
            $res['NatGatewayPrivateInfo'] = null !== $this->natGatewayPrivateInfo ? $this->natGatewayPrivateInfo->toArray($noStream) : $this->natGatewayPrivateInfo;
        }

        if (null !== $this->natType) {
            $res['NatType'] = $this->natType;
        }

        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }

        if (null !== $this->privateLinkEnabled) {
            $res['PrivateLinkEnabled'] = $this->privateLinkEnabled;
        }

        if (null !== $this->privateLinkMode) {
            $res['PrivateLinkMode'] = $this->privateLinkMode;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->securityProtectionEnabled) {
            $res['SecurityProtectionEnabled'] = $this->securityProtectionEnabled;
        }

        if (null !== $this->snatTableIds) {
            $res['SnatTableIds'] = null !== $this->snatTableIds ? $this->snatTableIds->toArray($noStream) : $this->snatTableIds;
        }

        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toArray($noStream) : $this->tags;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
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
        if (isset($map['AccessMode'])) {
            $model->accessMode = accessMode::fromMap($map['AccessMode']);
        }

        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }

        if (isset($map['BusinessStatus'])) {
            $model->businessStatus = $map['BusinessStatus'];
        }

        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }

        if (isset($map['DeletionProtection'])) {
            $model->deletionProtection = $map['DeletionProtection'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EcsMetricEnabled'])) {
            $model->ecsMetricEnabled = $map['EcsMetricEnabled'];
        }

        if (isset($map['EipBindMode'])) {
            $model->eipBindMode = $map['EipBindMode'];
        }

        if (isset($map['EnableSessionLog'])) {
            $model->enableSessionLog = $map['EnableSessionLog'];
        }

        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }

        if (isset($map['ForwardTableIds'])) {
            $model->forwardTableIds = forwardTableIds::fromMap($map['ForwardTableIds']);
        }

        if (isset($map['FullNatTableIds'])) {
            $model->fullNatTableIds = fullNatTableIds::fromMap($map['FullNatTableIds']);
        }

        if (isset($map['IcmpReplyEnabled'])) {
            $model->icmpReplyEnabled = $map['IcmpReplyEnabled'];
        }

        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }

        if (isset($map['InternetChargeType'])) {
            $model->internetChargeType = $map['InternetChargeType'];
        }

        if (isset($map['IpLists'])) {
            $model->ipLists = ipLists::fromMap($map['IpLists']);
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['NatGatewayId'])) {
            $model->natGatewayId = $map['NatGatewayId'];
        }

        if (isset($map['NatGatewayPrivateInfo'])) {
            $model->natGatewayPrivateInfo = natGatewayPrivateInfo::fromMap($map['NatGatewayPrivateInfo']);
        }

        if (isset($map['NatType'])) {
            $model->natType = $map['NatType'];
        }

        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }

        if (isset($map['PrivateLinkEnabled'])) {
            $model->privateLinkEnabled = $map['PrivateLinkEnabled'];
        }

        if (isset($map['PrivateLinkMode'])) {
            $model->privateLinkMode = $map['PrivateLinkMode'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['SecurityProtectionEnabled'])) {
            $model->securityProtectionEnabled = $map['SecurityProtectionEnabled'];
        }

        if (isset($map['SnatTableIds'])) {
            $model->snatTableIds = snatTableIds::fromMap($map['SnatTableIds']);
        }

        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
