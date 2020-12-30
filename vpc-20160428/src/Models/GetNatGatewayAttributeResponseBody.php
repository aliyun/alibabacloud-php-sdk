<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\GetNatGatewayAttributeResponseBody\billingConfig;
use AlibabaCloud\SDK\Vpc\V20160428\Models\GetNatGatewayAttributeResponseBody\deletionProtectionInfo;
use AlibabaCloud\SDK\Vpc\V20160428\Models\GetNatGatewayAttributeResponseBody\forwardTable;
use AlibabaCloud\SDK\Vpc\V20160428\Models\GetNatGatewayAttributeResponseBody\ipList;
use AlibabaCloud\SDK\Vpc\V20160428\Models\GetNatGatewayAttributeResponseBody\privateInfo;
use AlibabaCloud\SDK\Vpc\V20160428\Models\GetNatGatewayAttributeResponseBody\snatTable;
use AlibabaCloud\Tea\Model;

class GetNatGatewayAttributeResponseBody extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var forwardTable
     */
    public $forwardTable;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var ipList[]
     */
    public $ipList;

    /**
     * @var deletionProtectionInfo
     */
    public $deletionProtectionInfo;

    /**
     * @var billingConfig
     */
    public $billingConfig;

    /**
     * @var string
     */
    public $natType;

    /**
     * @var string
     */
    public $businessStatus;

    /**
     * @var snatTable
     */
    public $snatTable;

    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $ecsMetricEnabled;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $expiredTime;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var privateInfo
     */
    public $privateInfo;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $natGatewayId;
    protected $_name = [
        'status'                 => 'Status',
        'forwardTable'           => 'ForwardTable',
        'description'            => 'Description',
        'requestId'              => 'RequestId',
        'resourceGroupId'        => 'ResourceGroupId',
        'ipList'                 => 'IpList',
        'deletionProtectionInfo' => 'DeletionProtectionInfo',
        'billingConfig'          => 'BillingConfig',
        'natType'                => 'NatType',
        'businessStatus'         => 'BusinessStatus',
        'snatTable'              => 'SnatTable',
        'name'                   => 'Name',
        'ecsMetricEnabled'       => 'EcsMetricEnabled',
        'vpcId'                  => 'VpcId',
        'expiredTime'            => 'ExpiredTime',
        'creationTime'           => 'CreationTime',
        'privateInfo'            => 'PrivateInfo',
        'regionId'               => 'RegionId',
        'natGatewayId'           => 'NatGatewayId',
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
        if (null !== $this->forwardTable) {
            $res['ForwardTable'] = null !== $this->forwardTable ? $this->forwardTable->toMap() : null;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
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
        if (null !== $this->deletionProtectionInfo) {
            $res['DeletionProtectionInfo'] = null !== $this->deletionProtectionInfo ? $this->deletionProtectionInfo->toMap() : null;
        }
        if (null !== $this->billingConfig) {
            $res['BillingConfig'] = null !== $this->billingConfig ? $this->billingConfig->toMap() : null;
        }
        if (null !== $this->natType) {
            $res['NatType'] = $this->natType;
        }
        if (null !== $this->businessStatus) {
            $res['BusinessStatus'] = $this->businessStatus;
        }
        if (null !== $this->snatTable) {
            $res['SnatTable'] = null !== $this->snatTable ? $this->snatTable->toMap() : null;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->ecsMetricEnabled) {
            $res['EcsMetricEnabled'] = $this->ecsMetricEnabled;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->privateInfo) {
            $res['PrivateInfo'] = null !== $this->privateInfo ? $this->privateInfo->toMap() : null;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->natGatewayId) {
            $res['NatGatewayId'] = $this->natGatewayId;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['ForwardTable'])) {
            $model->forwardTable = forwardTable::fromMap($map['ForwardTable']);
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
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
        if (isset($map['DeletionProtectionInfo'])) {
            $model->deletionProtectionInfo = deletionProtectionInfo::fromMap($map['DeletionProtectionInfo']);
        }
        if (isset($map['BillingConfig'])) {
            $model->billingConfig = billingConfig::fromMap($map['BillingConfig']);
        }
        if (isset($map['NatType'])) {
            $model->natType = $map['NatType'];
        }
        if (isset($map['BusinessStatus'])) {
            $model->businessStatus = $map['BusinessStatus'];
        }
        if (isset($map['SnatTable'])) {
            $model->snatTable = snatTable::fromMap($map['SnatTable']);
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['EcsMetricEnabled'])) {
            $model->ecsMetricEnabled = $map['EcsMetricEnabled'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['PrivateInfo'])) {
            $model->privateInfo = privateInfo::fromMap($map['PrivateInfo']);
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['NatGatewayId'])) {
            $model->natGatewayId = $map['NatGatewayId'];
        }

        return $model;
    }
}
