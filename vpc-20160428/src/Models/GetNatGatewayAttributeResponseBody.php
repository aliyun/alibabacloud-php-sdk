<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\GetNatGatewayAttributeResponseBody\billingConfig;
use AlibabaCloud\SDK\Vpc\V20160428\Models\GetNatGatewayAttributeResponseBody\deletionProtectionInfo;
use AlibabaCloud\SDK\Vpc\V20160428\Models\GetNatGatewayAttributeResponseBody\forwardTable;
use AlibabaCloud\SDK\Vpc\V20160428\Models\GetNatGatewayAttributeResponseBody\fullNatTable;
use AlibabaCloud\SDK\Vpc\V20160428\Models\GetNatGatewayAttributeResponseBody\ipList;
use AlibabaCloud\SDK\Vpc\V20160428\Models\GetNatGatewayAttributeResponseBody\privateInfo;
use AlibabaCloud\SDK\Vpc\V20160428\Models\GetNatGatewayAttributeResponseBody\snatTable;
use AlibabaCloud\Tea\Model;

class GetNatGatewayAttributeResponseBody extends Model
{
    /**
     * @var billingConfig
     */
    public $billingConfig;

    /**
     * @example Normal
     *
     * @var string
     */
    public $businessStatus;

    /**
     * @example 2021-12-08T12:20:20Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @var deletionProtectionInfo
     */
    public $deletionProtectionInfo;

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
     * @example 2021-12-26T12:20:20Z
     *
     * @var string
     */
    public $expiredTime;

    /**
     * @var forwardTable
     */
    public $forwardTable;

    /**
     * @var fullNatTable
     */
    public $fullNatTable;

    /**
     * @var ipList[]
     */
    public $ipList;

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
     * @var privateInfo
     */
    public $privateInfo;

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
     * @example cn-qingdao
     *
     * @var string
     */
    public $regionId;

    /**
     * @example 4EC47282-1B74-4534-BD0E-403F3EE64CAF
     *
     * @var string
     */
    public $requestId;

    /**
     * @example rg-bp67acfmxazb4ph****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var snatTable
     */
    public $snatTable;

    /**
     * @example Available
     *
     * @var string
     */
    public $status;

    /**
     * @example vpc-bp15zckdt37pq72z****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'billingConfig'          => 'BillingConfig',
        'businessStatus'         => 'BusinessStatus',
        'creationTime'           => 'CreationTime',
        'deletionProtectionInfo' => 'DeletionProtectionInfo',
        'description'            => 'Description',
        'ecsMetricEnabled'       => 'EcsMetricEnabled',
        'expiredTime'            => 'ExpiredTime',
        'forwardTable'           => 'ForwardTable',
        'fullNatTable'           => 'FullNatTable',
        'ipList'                 => 'IpList',
        'name'                   => 'Name',
        'natGatewayId'           => 'NatGatewayId',
        'natType'                => 'NatType',
        'networkType'            => 'NetworkType',
        'privateInfo'            => 'PrivateInfo',
        'privateLinkEnabled'     => 'PrivateLinkEnabled',
        'privateLinkMode'        => 'PrivateLinkMode',
        'regionId'               => 'RegionId',
        'requestId'              => 'RequestId',
        'resourceGroupId'        => 'ResourceGroupId',
        'snatTable'              => 'SnatTable',
        'status'                 => 'Status',
        'vpcId'                  => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->billingConfig) {
            $res['BillingConfig'] = null !== $this->billingConfig ? $this->billingConfig->toMap() : null;
        }
        if (null !== $this->businessStatus) {
            $res['BusinessStatus'] = $this->businessStatus;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->deletionProtectionInfo) {
            $res['DeletionProtectionInfo'] = null !== $this->deletionProtectionInfo ? $this->deletionProtectionInfo->toMap() : null;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->ecsMetricEnabled) {
            $res['EcsMetricEnabled'] = $this->ecsMetricEnabled;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->forwardTable) {
            $res['ForwardTable'] = null !== $this->forwardTable ? $this->forwardTable->toMap() : null;
        }
        if (null !== $this->fullNatTable) {
            $res['FullNatTable'] = null !== $this->fullNatTable ? $this->fullNatTable->toMap() : null;
        }
        if (null !== $this->ipList) {
            $res['IpList'] = [];
            if (null !== $this->ipList && \is_array($this->ipList)) {
                $n = 0;
                foreach ($this->ipList as $item) {
                    $res['IpList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->natGatewayId) {
            $res['NatGatewayId'] = $this->natGatewayId;
        }
        if (null !== $this->natType) {
            $res['NatType'] = $this->natType;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->privateInfo) {
            $res['PrivateInfo'] = null !== $this->privateInfo ? $this->privateInfo->toMap() : null;
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->snatTable) {
            $res['SnatTable'] = null !== $this->snatTable ? $this->snatTable->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetNatGatewayAttributeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BillingConfig'])) {
            $model->billingConfig = billingConfig::fromMap($map['BillingConfig']);
        }
        if (isset($map['BusinessStatus'])) {
            $model->businessStatus = $map['BusinessStatus'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['DeletionProtectionInfo'])) {
            $model->deletionProtectionInfo = deletionProtectionInfo::fromMap($map['DeletionProtectionInfo']);
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EcsMetricEnabled'])) {
            $model->ecsMetricEnabled = $map['EcsMetricEnabled'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['ForwardTable'])) {
            $model->forwardTable = forwardTable::fromMap($map['ForwardTable']);
        }
        if (isset($map['FullNatTable'])) {
            $model->fullNatTable = fullNatTable::fromMap($map['FullNatTable']);
        }
        if (isset($map['IpList'])) {
            if (!empty($map['IpList'])) {
                $model->ipList = [];
                $n             = 0;
                foreach ($map['IpList'] as $item) {
                    $model->ipList[$n++] = null !== $item ? ipList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NatGatewayId'])) {
            $model->natGatewayId = $map['NatGatewayId'];
        }
        if (isset($map['NatType'])) {
            $model->natType = $map['NatType'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['PrivateInfo'])) {
            $model->privateInfo = privateInfo::fromMap($map['PrivateInfo']);
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SnatTable'])) {
            $model->snatTable = snatTable::fromMap($map['SnatTable']);
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
