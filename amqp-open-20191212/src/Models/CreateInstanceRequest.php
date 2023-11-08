<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqpopen\V20191212\Models;

use AlibabaCloud\Tea\Model;

class CreateInstanceRequest extends Model
{
    /**
     * @example AutoRenewal
     *
     * @var bool
     */
    public $autoRenew;

    /**
     * @example 1
     *
     * @var int
     */
    public $autoRenewPeriod;

    /**
     * @example c2c5d1274axxxxxxxx
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example professional
     *
     * @var string
     */
    public $instanceType;

    /**
     * @example 50000
     *
     * @var int
     */
    public $maxConnections;

    /**
     * @example 128
     *
     * @var int
     */
    public $maxEipTps;

    /**
     * @example 1000
     *
     * @var int
     */
    public $maxPrivateTps;

    /**
     * @example Subscription
     *
     * @var string
     */
    public $paymentType;

    /**
     * @example 1
     *
     * @var int
     */
    public $period;

    /**
     * @example Month
     *
     * @var string
     */
    public $periodCycle;

    /**
     * @example 1000
     *
     * @var int
     */
    public $queueCapacity;

    /**
     * @example 7
     *
     * @var int
     */
    public $storageSize;

    /**
     * @example true
     *
     * @var bool
     */
    public $supportEip;

    /**
     * @example true
     *
     * @var bool
     */
    public $supportTracing;

    /**
     * @example 3
     *
     * @var int
     */
    public $tracingStorageTime;
    protected $_name = [
        'autoRenew'          => 'AutoRenew',
        'autoRenewPeriod'    => 'AutoRenewPeriod',
        'clientToken'        => 'ClientToken',
        'instanceType'       => 'InstanceType',
        'maxConnections'     => 'MaxConnections',
        'maxEipTps'          => 'MaxEipTps',
        'maxPrivateTps'      => 'MaxPrivateTps',
        'paymentType'        => 'PaymentType',
        'period'             => 'Period',
        'periodCycle'        => 'PeriodCycle',
        'queueCapacity'      => 'QueueCapacity',
        'storageSize'        => 'StorageSize',
        'supportEip'         => 'SupportEip',
        'supportTracing'     => 'SupportTracing',
        'tracingStorageTime' => 'TracingStorageTime',
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
