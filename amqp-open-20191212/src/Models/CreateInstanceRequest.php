<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqpopen\V20191212\Models;

use AlibabaCloud\Tea\Model;

class CreateInstanceRequest extends Model
{
    /**
     * @description Specifies whether to enable auto-renewal. Valid values:
     *
     *   true: enables auto-renewal.
     *   false: disables auto-renewal. If you select this value, you must manually renew the instance.
     *
     * @example AutoRenewal
     *
     * @var bool
     */
    public $autoRenew;

    /**
     * @description The auto-renewal duration. Unit: months.
     *
     * >  This parameter takes effect only if you set AutoRenew to true. Default value: 1.
     * @example 1
     *
     * @var int
     */
    public $autoRenewPeriod;

    /**
     * @description The client token.
     *
     * @example c2c5d1274axxxxxxxx
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The instance name. We recommend that you specify a name that does not exceed 64 characters in length.
     *
     * @example amqp-xxxxx
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The instance edition. Valid values:
     *
     *   professional: Professional Edition
     *   enterprise: Enterprise Edition
     *   vip: Enterprise Platinum Edition
     *
     * @example professional
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The maximum number of connections that can be established to the instance. Configure this parameter based on the values provided on the [ApsaraMQ for RocketMQ buy page](https://common-buy.aliyun.com/?commodityCode=ons_onsproxy_pre).
     *
     * @example 50000
     *
     * @var int
     */
    public $maxConnections;

    /**
     * @description The maximum number of EIP-based TPS on the instance. Configure this parameter based on the values provided on the [ApsaraMQ for RocketMQ buy page](https://common-buy.aliyun.com/?commodityCode=ons_onsproxy_pre).
     *
     * @example 128
     *
     * @var int
     */
    public $maxEipTps;

    /**
     * @description The maximum number of virtual private cloud (VPC)-based transactions per second (TPS) on the instance. Configure this parameter based on the values provided on the [ApsaraMQ for RocketMQ buy page](https://common-buy.aliyun.com/?commodityCode=ons_onsproxy_pre).
     *
     * @example 1000
     *
     * @var int
     */
    public $maxPrivateTps;

    /**
     * @description The billing method. Valid value:
     *
     *   Subscription
     *
     * This parameter is required.
     * @example Subscription
     *
     * @var string
     */
    public $paymentType;

    /**
     * @description The subscription period. The unit of the subscription period is specified by periodCycle.
     *
     * >  This parameter takes effect only if you set PaymentType to Subscription. Default value: 1.
     * @example 1
     *
     * @var int
     */
    public $period;

    /**
     * @description The unit of the subscription period. Valid values:
     *
     *   Month
     *   Year
     *
     * >  This parameter takes effect only if you set PaymentType to Subscription. Default value: Month.
     * @example Month
     *
     * @var string
     */
    public $periodCycle;

    /**
     * @description The number of queues. Valid values:
     *
     *   Professional Edition: 50 to 1000. The number of queues must increase in increments of 5.
     *   Enterprise Edition: 200 to 6000. The number of queues must increase in increments of 100.
     *   Enterprise Platinum Edition: 10000 to 80000. The number of queues must increase in increments of 100.
     *
     * @example 1000
     *
     * @var int
     */
    public $queueCapacity;

    /**
     * @description The renewal status. This parameter is the same as AutoRenew. You can configure one of these parameters. Valid value:
     * > If you configure both this parameter and AutoRenew, the value of this parameter is used.
     * @example false
     *
     * @var string
     */
    public $renewStatus;

    /**
     * @description The unit of the auto-renewal period. Valid values:
     * - Year
     * @example Month
     *
     * @var string
     */
    public $renewalDurationUnit;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The billing method of the pay-as-you-go instance. Valid values:
     * - onDemand: You are charged based on your actual usage
     * @example onDemand
     *
     * @var string
     */
    public $serverlessChargeType;

    /**
     * @description The storage capacity. Unit: GB. Valid values:
     *
     *   Professional Edition and Enterprise Edition instances: Set this parameter to 0.
     *
     * >  The value 0 specifies that storage space is available for Professional Edition and Enterprise Edition instances, but no storage fees are generated.
     *
     *   Platinum Edition instances: Set the value to m × 100, where m ranges from 7 to 28.
     *
     * @example 7
     *
     * @var int
     */
    public $storageSize;

    /**
     * @description Specifies whether elastic IP addresses (EIPs) are supported. Valid values:
     *
     *   True
     *   False
     *
     * @example true
     *
     * @var bool
     */
    public $supportEip;

    /**
     * @description Specifies whether to enable the message trace feature. Valid values:
     *
     *   true
     *   false
     *
     * >
     *
     *   Enterprise Platinum Edition instances allow you to retain message traces for 15 days free of charge. If you use an Enterprise Platinum Edition instance, you can set this parameter only to true and TracingStorageTime only to 15.
     *
     *   For instances of other editions, you can set this parameter to true or false.
     *
     * @example true
     *
     * @var bool
     */
    public $supportTracing;

    /**
     * @description The retention period of messages. Unit: days. Valid values:
     *
     *   3
     *   7
     *   15
     *
     * >  This parameter takes effect only if you set SupportTracing to true.
     * @example 3
     *
     * @var int
     */
    public $tracingStorageTime;
    protected $_name = [
        'autoRenew'            => 'AutoRenew',
        'autoRenewPeriod'      => 'AutoRenewPeriod',
        'clientToken'          => 'ClientToken',
        'instanceName'         => 'InstanceName',
        'instanceType'         => 'InstanceType',
        'maxConnections'       => 'MaxConnections',
        'maxEipTps'            => 'MaxEipTps',
        'maxPrivateTps'        => 'MaxPrivateTps',
        'paymentType'          => 'PaymentType',
        'period'               => 'Period',
        'periodCycle'          => 'PeriodCycle',
        'queueCapacity'        => 'QueueCapacity',
        'renewStatus'          => 'RenewStatus',
        'renewalDurationUnit'  => 'RenewalDurationUnit',
        'resourceGroupId'      => 'ResourceGroupId',
        'serverlessChargeType' => 'ServerlessChargeType',
        'storageSize'          => 'StorageSize',
        'supportEip'           => 'SupportEip',
        'supportTracing'       => 'SupportTracing',
        'tracingStorageTime'   => 'TracingStorageTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }
        if (null !== $this->autoRenewPeriod) {
            $res['AutoRenewPeriod'] = $this->autoRenewPeriod;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->maxConnections) {
            $res['MaxConnections'] = $this->maxConnections;
        }
        if (null !== $this->maxEipTps) {
            $res['MaxEipTps'] = $this->maxEipTps;
        }
        if (null !== $this->maxPrivateTps) {
            $res['MaxPrivateTps'] = $this->maxPrivateTps;
        }
        if (null !== $this->paymentType) {
            $res['PaymentType'] = $this->paymentType;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->periodCycle) {
            $res['PeriodCycle'] = $this->periodCycle;
        }
        if (null !== $this->queueCapacity) {
            $res['QueueCapacity'] = $this->queueCapacity;
        }
        if (null !== $this->renewStatus) {
            $res['RenewStatus'] = $this->renewStatus;
        }
        if (null !== $this->renewalDurationUnit) {
            $res['RenewalDurationUnit'] = $this->renewalDurationUnit;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->serverlessChargeType) {
            $res['ServerlessChargeType'] = $this->serverlessChargeType;
        }
        if (null !== $this->storageSize) {
            $res['StorageSize'] = $this->storageSize;
        }
        if (null !== $this->supportEip) {
            $res['SupportEip'] = $this->supportEip;
        }
        if (null !== $this->supportTracing) {
            $res['SupportTracing'] = $this->supportTracing;
        }
        if (null !== $this->tracingStorageTime) {
            $res['TracingStorageTime'] = $this->tracingStorageTime;
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
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }
        if (isset($map['AutoRenewPeriod'])) {
            $model->autoRenewPeriod = $map['AutoRenewPeriod'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['MaxConnections'])) {
            $model->maxConnections = $map['MaxConnections'];
        }
        if (isset($map['MaxEipTps'])) {
            $model->maxEipTps = $map['MaxEipTps'];
        }
        if (isset($map['MaxPrivateTps'])) {
            $model->maxPrivateTps = $map['MaxPrivateTps'];
        }
        if (isset($map['PaymentType'])) {
            $model->paymentType = $map['PaymentType'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['PeriodCycle'])) {
            $model->periodCycle = $map['PeriodCycle'];
        }
        if (isset($map['QueueCapacity'])) {
            $model->queueCapacity = $map['QueueCapacity'];
        }
        if (isset($map['RenewStatus'])) {
            $model->renewStatus = $map['RenewStatus'];
        }
        if (isset($map['RenewalDurationUnit'])) {
            $model->renewalDurationUnit = $map['RenewalDurationUnit'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ServerlessChargeType'])) {
            $model->serverlessChargeType = $map['ServerlessChargeType'];
        }
        if (isset($map['StorageSize'])) {
            $model->storageSize = $map['StorageSize'];
        }
        if (isset($map['SupportEip'])) {
            $model->supportEip = $map['SupportEip'];
        }
        if (isset($map['SupportTracing'])) {
            $model->supportTracing = $map['SupportTracing'];
        }
        if (isset($map['TracingStorageTime'])) {
            $model->tracingStorageTime = $map['TracingStorageTime'];
        }

        return $model;
    }
}
