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
     * @description The billing information.
     *
     * @var billingConfig
     */
    public $billingConfig;

    /**
     * @description The service status of the NAT gateway. Valid values:
     *
     *   **Normal**: normal
     *   **FinancialLocked**: locked due to overdue payments
     *
     * @example Normal
     *
     * @var string
     */
    public $businessStatus;

    /**
     * @description The time when the NAT gateway was created. Format: YYYY-MM-DDThh:mm:ssZ.
     *
     * @example 2021-12-08T12:20:20Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The information about the deletion protection feature.
     *
     * @var deletionProtectionInfo
     */
    public $deletionProtectionInfo;

    /**
     * @description The description of the NAT gateway.
     *
     * @example NAT
     *
     * @var string
     */
    public $description;

    /**
     * @description Indicates whether the traffic monitoring feature is enabled. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * @example true
     *
     * @var bool
     */
    public $ecsMetricEnabled;

    /**
     * @description The time when the NAT gateway expires.
     *
     * @example 2021-12-26T12:20:20Z
     *
     * @var string
     */
    public $expiredTime;

    /**
     * @description The information about the DNAT table.
     *
     * @var forwardTable
     */
    public $forwardTable;

    /**
     * @description The information about the FULLNAT table.
     *
     * @var fullNatTable
     */
    public $fullNatTable;

    /**
     * @description The elastic IP addresses (EIPs) that are associated with the Internet NAT gateway.
     *
     * @var ipList[]
     */
    public $ipList;

    /**
     * @description The name of the NAT gateway.
     *
     * @example abc
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the NAT gateway.
     *
     * @example ngw-bp1047e2d4z7kf2ki****
     *
     * @var string
     */
    public $natGatewayId;

    /**
     * @description The type of the Internet NAT gateway. Only **Enhanced** is returned, which indicates an enhanced Internet NAT gateway.
     *
     * @example Enhanced
     *
     * @var string
     */
    public $natType;

    /**
     * @description The type of the NAT gateway. Valid values:
     *
     *   **internet**: an Internet NAT gateway
     *   **intranet**: a VPC NAT gateway
     *
     * @example internet
     *
     * @var string
     */
    public $networkType;

    /**
     * @description The private network information about the NAT gateway.
     *
     * @var privateInfo
     */
    public $privateInfo;

    /**
     * @description Indicates whether the NAT gateway supports PrivateLink. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * @example true
     *
     * @var bool
     */
    public $privateLinkEnabled;

    /**
     * @description The mode that is used by PrivateLink. Valid values:
     *
     *   **FullNat**: the FULLNAT mode
     *   **Geneve**: the GENEVE mode
     *
     * @example FullNat
     *
     * @var string
     */
    public $privateLinkMode;

    /**
     * @description The ID of the region where the NAT gateway is deployed.
     *
     * @example cn-qingdao
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the request.
     *
     * @example 4EC47282-1B74-4534-BD0E-403F3EE64CAF
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-bp67acfmxazb4ph****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The information about the SNAT table.
     *
     * @var snatTable
     */
    public $snatTable;

    /**
     * @description The status of the NAT gateway. Valid values:
     *
     *   **Creating**: being created. The operation to create a NAT gateway is asynchronous. The NAT gateway remains in the **Creating** state until it is created.
     *   **Available**: available. After a NAT gateway is created, it remains in a stable state.
     *   **Modifying**: being modified. The operation to upgrade or downgrade a NAT gateway is asynchronous. The NAT gateway remains in the **Modifying** state until it is upgraded or downgraded.
     *   **Deleting**: being deleted. The operation to delete a NAT gateway is asynchronous. The NAT gateway remains in the **Deleting** state until it is deleted.
     *   **Converting**: being converted. The operation to convert a standard NAT gateway to an enhanced NAT gateway is asynchronous. The NAT gateway remains in the **Converting** state until it is converted.
     *
     * @example Available
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the VPC to which the NAT gateway belongs.
     *
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
