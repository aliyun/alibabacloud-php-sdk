<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqpopen\V20191212\Models;

use AlibabaCloud\Dara\Model;

class CreateInstanceRequest extends Model
{
    /**
     * @var bool
     */
    public $autoRenew;

    /**
     * @var int
     */
    public $autoRenewPeriod;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $edition;

    /**
     * @var bool
     */
    public $encryptedInstance;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $kmsKeyId;

    /**
     * @var int
     */
    public $maxConnections;

    /**
     * @var int
     */
    public $maxEipTps;

    /**
     * @var int
     */
    public $maxPrivateTps;

    /**
     * @var string
     */
    public $paymentType;

    /**
     * @var int
     */
    public $period;

    /**
     * @var string
     */
    public $periodCycle;

    /**
     * @var int
     */
    public $provisionedCapacity;

    /**
     * @var int
     */
    public $queueCapacity;

    /**
     * @var string
     */
    public $renewStatus;

    /**
     * @var string
     */
    public $renewalDurationUnit;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $serverlessChargeType;

    /**
     * @var int
     */
    public $storageSize;

    /**
     * @var bool
     */
    public $supportEip;

    /**
     * @var bool
     */
    public $supportTracing;

    /**
     * @var int
     */
    public $tracingStorageTime;
    protected $_name = [
        'autoRenew' => 'AutoRenew',
        'autoRenewPeriod' => 'AutoRenewPeriod',
        'clientToken' => 'ClientToken',
        'edition' => 'Edition',
        'encryptedInstance' => 'EncryptedInstance',
        'instanceName' => 'InstanceName',
        'instanceType' => 'InstanceType',
        'kmsKeyId' => 'KmsKeyId',
        'maxConnections' => 'MaxConnections',
        'maxEipTps' => 'MaxEipTps',
        'maxPrivateTps' => 'MaxPrivateTps',
        'paymentType' => 'PaymentType',
        'period' => 'Period',
        'periodCycle' => 'PeriodCycle',
        'provisionedCapacity' => 'ProvisionedCapacity',
        'queueCapacity' => 'QueueCapacity',
        'renewStatus' => 'RenewStatus',
        'renewalDurationUnit' => 'RenewalDurationUnit',
        'resourceGroupId' => 'ResourceGroupId',
        'serverlessChargeType' => 'ServerlessChargeType',
        'storageSize' => 'StorageSize',
        'supportEip' => 'SupportEip',
        'supportTracing' => 'SupportTracing',
        'tracingStorageTime' => 'TracingStorageTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->edition) {
            $res['Edition'] = $this->edition;
        }

        if (null !== $this->encryptedInstance) {
            $res['EncryptedInstance'] = $this->encryptedInstance;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        if (null !== $this->kmsKeyId) {
            $res['KmsKeyId'] = $this->kmsKeyId;
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

        if (null !== $this->provisionedCapacity) {
            $res['ProvisionedCapacity'] = $this->provisionedCapacity;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['Edition'])) {
            $model->edition = $map['Edition'];
        }

        if (isset($map['EncryptedInstance'])) {
            $model->encryptedInstance = $map['EncryptedInstance'];
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        if (isset($map['KmsKeyId'])) {
            $model->kmsKeyId = $map['KmsKeyId'];
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

        if (isset($map['ProvisionedCapacity'])) {
            $model->provisionedCapacity = $map['ProvisionedCapacity'];
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
