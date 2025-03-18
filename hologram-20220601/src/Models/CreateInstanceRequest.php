<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hologram\V20220601\Models;

use AlibabaCloud\Tea\Model;

class CreateInstanceRequest extends Model
{
    /**
     * @description Specifies whether to enable auto-payment. Default value: true. Valid values:
     *
     *   true
     *   false
     *
     * >  The default value is true. If the balance of your account is insufficient, you can set this parameter to false. In this case, an unpaid order is generated. You can log on to the Expenses and Costs console to pay for the order.
     *
     * @example true
     *
     * @var bool
     */
    public $autoPay;

    /**
     * @description Specifies whether to enable monthly auto-renewal. The default value is false. Valid values:
     *
     *   true
     *   false
     *
     * @example false
     *
     * @var bool
     */
    public $autoRenew;

    /**
     * @description The billing method of the instance. Valid values:
     *
     *   PrePaid: subscription
     *   PostPaid: pay-as-you-go
     *
     * >  This parameter is invalid for Hologres Shared Cluster instances. Hologres Shared Cluster instances have fixed specifications and are pay-as-you-go instances.
     *
     * This parameter is required.
     *
     * @example PostPaid
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The infrequent access (IA) storage space of the instance. Unit: GB.
     *
     * >  This parameter is invalid for pay-as-you-go instances.
     *
     * @example 500
     *
     * @var int
     */
    public $coldStorageSize;

    /**
     * @description The instance specifications. Valid values:
     *
     *   8-core 32GB (number of compute nodes: 1)
     *   32-core 128GB (number of compute nodes: 2)
     *   64-core 256GB (number of compute nodes: 4)
     *   96-core 384GB (number of compute nodes: 6)
     *   128-core 512GB (number of compute nodes: 8)
     *   Others
     *
     * >
     *
     *   Set this parameter to the number of cores.
     *
     *   If you want to set this parameter to specifications with more than 1,024 GB, you must submit a ticket.
     *
     *   This parameter is invalid for Hologres Shared Cluster instances.
     *
     *   The specifications of 8-core 32GB (number of compute nodes: 1) are for trial use only and cannot be used for production.
     *
     * @example 64
     *
     * @var int
     */
    public $cpu;

    /**
     * @description The validity period of the instance that you want to purchase. For example, you can specify a validity period of two months.
     *
     * >  You do not need to configure this parameter for pay-as-you-go instances.
     *
     * @example 2
     *
     * @var int
     */
    public $duration;

    /**
     * @description Specifies whether to enable the Serverless Computing feature.
     *
     * Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $enableServerlessComputing;

    /**
     * @description The number of gateways. Valid values: 2 to 50.
     *
     * >  This parameter is required only for virtual warehouse instances.
     *
     * @example 4
     *
     * @var int
     */
    public $gatewayCount;

    /**
     * @description The initial database.
     *
     * @example chatbot
     *
     * @var string
     */
    public $initialDatabases;

    /**
     * @description The name of the instance. The name must be 2 to 64 characters in length.
     *
     * This parameter is required.
     *
     * @example my_holo
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The category of the instance. Valid values:
     *
     *   Standard: general-purpose instance
     *   Follower: read-only secondary instance
     *   Warehouse: virtual warehouse instance
     *   Shared: Hologres Shared Cluster instance
     *
     * This parameter is required.
     *
     * @example Standard
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The ID of the primary instance. This parameter is required for read-only secondary instances.
     *
     * >  The primary and secondary instances must meet the following requirements:
     *
     *   The primary instance is in the Running state.
     *
     *   The primary instance and secondary instances are deployed in the same region.
     *
     *   The primary instance and secondary instances are deployed in the same zone.
     *
     *   Less than 10 secondary instances are associated with the primary instance.
     *
     *   The primary instance and secondary instances belong to the same Alibaba Cloud account.
     *
     * @example hgpostcn-cn-lbj3aworq112
     *
     * @var string
     */
    public $leaderInstanceId;

    /**
     * @description The billing cycle. Valid values:
     *
     *   Month
     *   Hour
     *
     * >
     *
     *   This parameter can only be set to Month for subscription instances.
     *
     *   This parameter can only be set to Hour for pay-as-you-go instances.
     *
     *   By default, this parameter is set to Hour for Hologres Shared Cluster instances.
     *
     * @example Month
     *
     * @var string
     */
    public $pricingCycle;

    /**
     * @description The ID of the region. You can obtain region IDs in [Endpoints](https://www.alibabacloud.com/help/en/maxcompute/user-guide/endpoints).
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group. If you do not specify this parameter, the default resource group of the account is used.
     *
     * @example ""
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The standard storage space of the instance. Unit: GB.
     *
     * >  This parameter is invalid for pay-as-you-go instances.
     *
     * @example 500
     *
     * @var int
     */
    public $storageSize;

    /**
     * @var string
     */
    public $storageType;

    /**
     * @description The ID of the vSwitch. The zone in which the vSwitch resides must be the same as the zone in which the Hologres instance resides.
     *
     * This parameter is required.
     *
     * @example vsw-2vccsiymtxxxxxx
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The ID of the virtual private cloud (VPC). The region in which the VPC resides must be the same as the region in which the Hologres instance resides.
     *
     * This parameter is required.
     *
     * @example vpc-t4netc3y5xxxx
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The ID of the zone. For more information, see the "Operation description" section in this topic.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou-h
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'autoPay' => 'autoPay',
        'autoRenew' => 'autoRenew',
        'chargeType' => 'chargeType',
        'coldStorageSize' => 'coldStorageSize',
        'cpu' => 'cpu',
        'duration' => 'duration',
        'enableServerlessComputing' => 'enableServerlessComputing',
        'gatewayCount' => 'gatewayCount',
        'initialDatabases' => 'initialDatabases',
        'instanceName' => 'instanceName',
        'instanceType' => 'instanceType',
        'leaderInstanceId' => 'leaderInstanceId',
        'pricingCycle' => 'pricingCycle',
        'regionId' => 'regionId',
        'resourceGroupId' => 'resourceGroupId',
        'storageSize' => 'storageSize',
        'storageType' => 'storageType',
        'vSwitchId' => 'vSwitchId',
        'vpcId' => 'vpcId',
        'zoneId' => 'zoneId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoPay) {
            $res['autoPay'] = $this->autoPay;
        }
        if (null !== $this->autoRenew) {
            $res['autoRenew'] = $this->autoRenew;
        }
        if (null !== $this->chargeType) {
            $res['chargeType'] = $this->chargeType;
        }
        if (null !== $this->coldStorageSize) {
            $res['coldStorageSize'] = $this->coldStorageSize;
        }
        if (null !== $this->cpu) {
            $res['cpu'] = $this->cpu;
        }
        if (null !== $this->duration) {
            $res['duration'] = $this->duration;
        }
        if (null !== $this->enableServerlessComputing) {
            $res['enableServerlessComputing'] = $this->enableServerlessComputing;
        }
        if (null !== $this->gatewayCount) {
            $res['gatewayCount'] = $this->gatewayCount;
        }
        if (null !== $this->initialDatabases) {
            $res['initialDatabases'] = $this->initialDatabases;
        }
        if (null !== $this->instanceName) {
            $res['instanceName'] = $this->instanceName;
        }
        if (null !== $this->instanceType) {
            $res['instanceType'] = $this->instanceType;
        }
        if (null !== $this->leaderInstanceId) {
            $res['leaderInstanceId'] = $this->leaderInstanceId;
        }
        if (null !== $this->pricingCycle) {
            $res['pricingCycle'] = $this->pricingCycle;
        }
        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['resourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->storageSize) {
            $res['storageSize'] = $this->storageSize;
        }
        if (null !== $this->storageType) {
            $res['storageType'] = $this->storageType;
        }
        if (null !== $this->vSwitchId) {
            $res['vSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vpcId) {
            $res['vpcId'] = $this->vpcId;
        }
        if (null !== $this->zoneId) {
            $res['zoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['autoPay'])) {
            $model->autoPay = $map['autoPay'];
        }
        if (isset($map['autoRenew'])) {
            $model->autoRenew = $map['autoRenew'];
        }
        if (isset($map['chargeType'])) {
            $model->chargeType = $map['chargeType'];
        }
        if (isset($map['coldStorageSize'])) {
            $model->coldStorageSize = $map['coldStorageSize'];
        }
        if (isset($map['cpu'])) {
            $model->cpu = $map['cpu'];
        }
        if (isset($map['duration'])) {
            $model->duration = $map['duration'];
        }
        if (isset($map['enableServerlessComputing'])) {
            $model->enableServerlessComputing = $map['enableServerlessComputing'];
        }
        if (isset($map['gatewayCount'])) {
            $model->gatewayCount = $map['gatewayCount'];
        }
        if (isset($map['initialDatabases'])) {
            $model->initialDatabases = $map['initialDatabases'];
        }
        if (isset($map['instanceName'])) {
            $model->instanceName = $map['instanceName'];
        }
        if (isset($map['instanceType'])) {
            $model->instanceType = $map['instanceType'];
        }
        if (isset($map['leaderInstanceId'])) {
            $model->leaderInstanceId = $map['leaderInstanceId'];
        }
        if (isset($map['pricingCycle'])) {
            $model->pricingCycle = $map['pricingCycle'];
        }
        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }
        if (isset($map['resourceGroupId'])) {
            $model->resourceGroupId = $map['resourceGroupId'];
        }
        if (isset($map['storageSize'])) {
            $model->storageSize = $map['storageSize'];
        }
        if (isset($map['storageType'])) {
            $model->storageType = $map['storageType'];
        }
        if (isset($map['vSwitchId'])) {
            $model->vSwitchId = $map['vSwitchId'];
        }
        if (isset($map['vpcId'])) {
            $model->vpcId = $map['vpcId'];
        }
        if (isset($map['zoneId'])) {
            $model->zoneId = $map['zoneId'];
        }

        return $model;
    }
}
