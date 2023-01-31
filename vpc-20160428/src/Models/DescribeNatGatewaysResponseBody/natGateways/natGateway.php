<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNatGatewaysResponseBody\natGateways;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNatGatewaysResponseBody\natGateways\natGateway\forwardTableIds;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNatGatewaysResponseBody\natGateways\natGateway\fullNatTableIds;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNatGatewaysResponseBody\natGateways\natGateway\ipLists;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNatGatewaysResponseBody\natGateways\natGateway\natGatewayPrivateInfo;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNatGatewaysResponseBody\natGateways\natGateway\snatTableIds;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNatGatewaysResponseBody\natGateways\natGateway\tags;
use AlibabaCloud\Tea\Model;

class natGateway extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $autoPay;

    /**
     * @example Normal
     *
     * @var string
     */
    public $businessStatus;

    /**
     * @example 2021-06-08T12:20:20Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @example true
     *
     * @var bool
     */
    public $deletionProtection;

    /**
     * @example NAT
     *
     * @var string
     */
    public $description;

    /**
     * @example true
     *
     * @var bool
     */
    public $ecsMetricEnabled;

    /**
     * @example MULTI_BINDED
     *
     * @var string
     */
    public $eipBindMode;

    /**
     * @example 2021-08-26T16:00Z
     *
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
     * @example false
     *
     * @var bool
     */
    public $icmpReplyEnabled;

    /**
     * @example PostPaid
     *
     * @var string
     */
    public $instanceChargeType;

    /**
     * @example PayByLcu
     *
     * @var string
     */
    public $internetChargeType;

    /**
     * @var ipLists
     */
    public $ipLists;

    /**
     * @example abc
     *
     * @var string
     */
    public $name;

    /**
     * @example ngw-bp1047e2d4z7kf2ki****
     *
     * @var string
     */
    public $natGatewayId;

    /**
     * @var natGatewayPrivateInfo
     */
    public $natGatewayPrivateInfo;

    /**
     * @example Enhanced
     *
     * @var string
     */
    public $natType;

    /**
     * @example internet
     *
     * @var string
     */
    public $networkType;

    /**
     * @example true
     *
     * @var bool
     */
    public $privateLinkEnabled;

    /**
     * @example FullNat
     *
     * @var string
     */
    public $privateLinkMode;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example rg-bp67acfmxazb4ph****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @example false
     *
     * @var bool
     */
    public $securityProtectionEnabled;

    /**
     * @var snatTableIds
     */
    public $snatTableIds;

    /**
     * @example Small
     *
     * @var string
     */
    public $spec;

    /**
     * @example Creating
     *
     * @var string
     */
    public $status;

    /**
     * @var tags
     */
    public $tags;

    /**
     * @example vpc-bp15zckdt37pq72z****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'autoPay'                   => 'AutoPay',
        'businessStatus'            => 'BusinessStatus',
        'creationTime'              => 'CreationTime',
        'deletionProtection'        => 'DeletionProtection',
        'description'               => 'Description',
        'ecsMetricEnabled'          => 'EcsMetricEnabled',
        'eipBindMode'               => 'EipBindMode',
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
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->forwardTableIds) {
            $res['ForwardTableIds'] = null !== $this->forwardTableIds ? $this->forwardTableIds->toMap() : null;
        }
        if (null !== $this->fullNatTableIds) {
            $res['FullNatTableIds'] = null !== $this->fullNatTableIds ? $this->fullNatTableIds->toMap() : null;
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
            $res['IpLists'] = null !== $this->ipLists ? $this->ipLists->toMap() : null;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->natGatewayId) {
            $res['NatGatewayId'] = $this->natGatewayId;
        }
        if (null !== $this->natGatewayPrivateInfo) {
            $res['NatGatewayPrivateInfo'] = null !== $this->natGatewayPrivateInfo ? $this->natGatewayPrivateInfo->toMap() : null;
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
            $res['SnatTableIds'] = null !== $this->snatTableIds ? $this->snatTableIds->toMap() : null;
        }
        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return natGateway
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
