<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNatGatewaysResponseBody\natGateways;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNatGatewaysResponseBody\natGateways\natGateway\forwardTableIds;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNatGatewaysResponseBody\natGateways\natGateway\ipLists;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNatGatewaysResponseBody\natGateways\natGateway\natGatewayPrivateInfo;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNatGatewaysResponseBody\natGateways\natGateway\snatTableIds;
use AlibabaCloud\Tea\Model;

class natGateway extends Model
{
    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $natType;

    /**
     * @var string
     */
    public $spec;

    /**
     * @var bool
     */
    public $deletionProtection;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $instanceChargeType;

    /**
     * @var bool
     */
    public $ecsMetricEnabled;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $expiredTime;

    /**
     * @var ipLists
     */
    public $ipLists;

    /**
     * @var natGatewayPrivateInfo
     */
    public $natGatewayPrivateInfo;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $natGatewayId;

    /**
     * @var string
     */
    public $internetChargeType;

    /**
     * @var string
     */
    public $businessStatus;

    /**
     * @var forwardTableIds
     */
    public $forwardTableIds;

    /**
     * @var snatTableIds
     */
    public $snatTableIds;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'vpcId'                 => 'VpcId',
        'creationTime'          => 'CreationTime',
        'status'                => 'Status',
        'natType'               => 'NatType',
        'spec'                  => 'Spec',
        'deletionProtection'    => 'DeletionProtection',
        'regionId'              => 'RegionId',
        'instanceChargeType'    => 'InstanceChargeType',
        'ecsMetricEnabled'      => 'EcsMetricEnabled',
        'description'           => 'Description',
        'expiredTime'           => 'ExpiredTime',
        'ipLists'               => 'IpLists',
        'natGatewayPrivateInfo' => 'NatGatewayPrivateInfo',
        'resourceGroupId'       => 'ResourceGroupId',
        'natGatewayId'          => 'NatGatewayId',
        'internetChargeType'    => 'InternetChargeType',
        'businessStatus'        => 'BusinessStatus',
        'forwardTableIds'       => 'ForwardTableIds',
        'snatTableIds'          => 'SnatTableIds',
        'name'                  => 'Name',
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
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->natType) {
            $res['NatType'] = $this->natType;
        }
        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }
        if (null !== $this->deletionProtection) {
            $res['DeletionProtection'] = $this->deletionProtection;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }
        if (null !== $this->ecsMetricEnabled) {
            $res['EcsMetricEnabled'] = $this->ecsMetricEnabled;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->ipLists) {
            $res['IpLists'] = null !== $this->ipLists ? $this->ipLists->toMap() : null;
        }
        if (null !== $this->natGatewayPrivateInfo) {
            $res['NatGatewayPrivateInfo'] = null !== $this->natGatewayPrivateInfo ? $this->natGatewayPrivateInfo->toMap() : null;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->natGatewayId) {
            $res['NatGatewayId'] = $this->natGatewayId;
        }
        if (null !== $this->internetChargeType) {
            $res['InternetChargeType'] = $this->internetChargeType;
        }
        if (null !== $this->businessStatus) {
            $res['BusinessStatus'] = $this->businessStatus;
        }
        if (null !== $this->forwardTableIds) {
            $res['ForwardTableIds'] = null !== $this->forwardTableIds ? $this->forwardTableIds->toMap() : null;
        }
        if (null !== $this->snatTableIds) {
            $res['SnatTableIds'] = null !== $this->snatTableIds ? $this->snatTableIds->toMap() : null;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['NatType'])) {
            $model->natType = $map['NatType'];
        }
        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }
        if (isset($map['DeletionProtection'])) {
            $model->deletionProtection = $map['DeletionProtection'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }
        if (isset($map['EcsMetricEnabled'])) {
            $model->ecsMetricEnabled = $map['EcsMetricEnabled'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['IpLists'])) {
            $model->ipLists = ipLists::fromMap($map['IpLists']);
        }
        if (isset($map['NatGatewayPrivateInfo'])) {
            $model->natGatewayPrivateInfo = natGatewayPrivateInfo::fromMap($map['NatGatewayPrivateInfo']);
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['NatGatewayId'])) {
            $model->natGatewayId = $map['NatGatewayId'];
        }
        if (isset($map['InternetChargeType'])) {
            $model->internetChargeType = $map['InternetChargeType'];
        }
        if (isset($map['BusinessStatus'])) {
            $model->businessStatus = $map['BusinessStatus'];
        }
        if (isset($map['ForwardTableIds'])) {
            $model->forwardTableIds = forwardTableIds::fromMap($map['ForwardTableIds']);
        }
        if (isset($map['SnatTableIds'])) {
            $model->snatTableIds = snatTableIds::fromMap($map['SnatTableIds']);
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
