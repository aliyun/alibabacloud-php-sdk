<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\GetNatGatewayAttributeResponseBody\accessMode;
use AlibabaCloud\SDK\Vpc\V20160428\Models\GetNatGatewayAttributeResponseBody\billingConfig;
use AlibabaCloud\SDK\Vpc\V20160428\Models\GetNatGatewayAttributeResponseBody\deletionProtectionInfo;
use AlibabaCloud\SDK\Vpc\V20160428\Models\GetNatGatewayAttributeResponseBody\forwardTable;
use AlibabaCloud\SDK\Vpc\V20160428\Models\GetNatGatewayAttributeResponseBody\fullNatTable;
use AlibabaCloud\SDK\Vpc\V20160428\Models\GetNatGatewayAttributeResponseBody\ipList;
use AlibabaCloud\SDK\Vpc\V20160428\Models\GetNatGatewayAttributeResponseBody\logDelivery;
use AlibabaCloud\SDK\Vpc\V20160428\Models\GetNatGatewayAttributeResponseBody\privateInfo;
use AlibabaCloud\SDK\Vpc\V20160428\Models\GetNatGatewayAttributeResponseBody\snatTable;

class GetNatGatewayAttributeResponseBody extends Model
{
    /**
     * @var accessMode
     */
    public $accessMode;
    /**
     * @var billingConfig
     */
    public $billingConfig;
    /**
     * @var string
     */
    public $businessStatus;
    /**
     * @var string
     */
    public $creationTime;
    /**
     * @var deletionProtectionInfo
     */
    public $deletionProtectionInfo;
    /**
     * @var string
     */
    public $description;
    /**
     * @var bool
     */
    public $ecsMetricEnabled;
    /**
     * @var bool
     */
    public $enableSessionLog;
    /**
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
     * @var logDelivery
     */
    public $logDelivery;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $natGatewayId;
    /**
     * @var string
     */
    public $natType;
    /**
     * @var string
     */
    public $networkType;
    /**
     * @var privateInfo
     */
    public $privateInfo;
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
    public $requestId;
    /**
     * @var string
     */
    public $resourceGroupId;
    /**
     * @var snatTable
     */
    public $snatTable;
    /**
     * @var string
     */
    public $status;
    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'accessMode'             => 'AccessMode',
        'billingConfig'          => 'BillingConfig',
        'businessStatus'         => 'BusinessStatus',
        'creationTime'           => 'CreationTime',
        'deletionProtectionInfo' => 'DeletionProtectionInfo',
        'description'            => 'Description',
        'ecsMetricEnabled'       => 'EcsMetricEnabled',
        'enableSessionLog'       => 'EnableSessionLog',
        'expiredTime'            => 'ExpiredTime',
        'forwardTable'           => 'ForwardTable',
        'fullNatTable'           => 'FullNatTable',
        'ipList'                 => 'IpList',
        'logDelivery'            => 'LogDelivery',
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
        if (null !== $this->accessMode) {
            $this->accessMode->validate();
        }
        if (null !== $this->billingConfig) {
            $this->billingConfig->validate();
        }
        if (null !== $this->deletionProtectionInfo) {
            $this->deletionProtectionInfo->validate();
        }
        if (null !== $this->forwardTable) {
            $this->forwardTable->validate();
        }
        if (null !== $this->fullNatTable) {
            $this->fullNatTable->validate();
        }
        if (\is_array($this->ipList)) {
            Model::validateArray($this->ipList);
        }
        if (null !== $this->logDelivery) {
            $this->logDelivery->validate();
        }
        if (null !== $this->privateInfo) {
            $this->privateInfo->validate();
        }
        if (null !== $this->snatTable) {
            $this->snatTable->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessMode) {
            $res['AccessMode'] = null !== $this->accessMode ? $this->accessMode->toArray($noStream) : $this->accessMode;
        }

        if (null !== $this->billingConfig) {
            $res['BillingConfig'] = null !== $this->billingConfig ? $this->billingConfig->toArray($noStream) : $this->billingConfig;
        }

        if (null !== $this->businessStatus) {
            $res['BusinessStatus'] = $this->businessStatus;
        }

        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        if (null !== $this->deletionProtectionInfo) {
            $res['DeletionProtectionInfo'] = null !== $this->deletionProtectionInfo ? $this->deletionProtectionInfo->toArray($noStream) : $this->deletionProtectionInfo;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->ecsMetricEnabled) {
            $res['EcsMetricEnabled'] = $this->ecsMetricEnabled;
        }

        if (null !== $this->enableSessionLog) {
            $res['EnableSessionLog'] = $this->enableSessionLog;
        }

        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }

        if (null !== $this->forwardTable) {
            $res['ForwardTable'] = null !== $this->forwardTable ? $this->forwardTable->toArray($noStream) : $this->forwardTable;
        }

        if (null !== $this->fullNatTable) {
            $res['FullNatTable'] = null !== $this->fullNatTable ? $this->fullNatTable->toArray($noStream) : $this->fullNatTable;
        }

        if (null !== $this->ipList) {
            if (\is_array($this->ipList)) {
                $res['IpList'] = [];
                $n1            = 0;
                foreach ($this->ipList as $item1) {
                    $res['IpList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->logDelivery) {
            $res['LogDelivery'] = null !== $this->logDelivery ? $this->logDelivery->toArray($noStream) : $this->logDelivery;
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
            $res['PrivateInfo'] = null !== $this->privateInfo ? $this->privateInfo->toArray($noStream) : $this->privateInfo;
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
            $res['SnatTable'] = null !== $this->snatTable ? $this->snatTable->toArray($noStream) : $this->snatTable;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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

        if (isset($map['EnableSessionLog'])) {
            $model->enableSessionLog = $map['EnableSessionLog'];
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
                $n1            = 0;
                foreach ($map['IpList'] as $item1) {
                    $model->ipList[$n1++] = ipList::fromMap($item1);
                }
            }
        }

        if (isset($map['LogDelivery'])) {
            $model->logDelivery = logDelivery::fromMap($map['LogDelivery']);
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
