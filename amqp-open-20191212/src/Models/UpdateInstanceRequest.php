<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqpopen\V20191212\Models;

use AlibabaCloud\Tea\Model;

class UpdateInstanceRequest extends Model
{
    /**
     * @description The client token.
     *
     * @example c2c5d1274axxxxxxxx
     *
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $edition;

    /**
     * @description 实例是否开通数据存储加密功能
     *
     * @example false
     *
     * @var bool
     */
    public $encryptedInstance;

    /**
     * @description The ID of the ApsaraMQ for RabbitMQ instance.
     *
     * This parameter is required.
     *
     * @example amqp-cn-jtexxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The instance edition. Valid values for subscription instances:
     *
     *   professional: Professional Edition
     *   enterprise: Enterprise Edition
     *   vip: Enterprise Platinum Edition.
     *
     * If your instance is a pay-as-you-go instance, you do not need to configure this parameter.
     *
     * @example professional
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description 使用同地域下KMS密钥ID
     *
     * @example key-bjj66c2a893vmhawtq5fd
     *
     * @var string
     */
    public $kmsKeyId;

    /**
     * @description The maximum number of connections that can be created on the instance.
     *
     * @example 1000
     *
     * @var int
     */
    public $maxConnections;

    /**
     * @description The peak TPS for accessing the instance over the Internet.
     *
     * @example 128
     *
     * @var int
     */
    public $maxEipTps;

    /**
     * @description The peak transactions per second (TPS) for accessing the instance in a virtual private cloud (VPC).
     *
     * @example 1000
     *
     * @var int
     */
    public $maxPrivateTps;

    /**
     * @description The type of the configuration change. Valid values:
     *
     *   UPGRADE
     *   DOWNGRADE
     *
     * This parameter is required.
     *
     * @example UPGRADE
     *
     * @var string
     */
    public $modifyType;

    /**
     * @var int
     */
    public $provisionedCapacity;

    /**
     * @description The maximum number of queues that can be created on the instance.
     *
     * @example 1000
     *
     * @var int
     */
    public $queueCapacity;

    /**
     * @description The billing method of the serverless instance. Valid values:
     *
     *   onDemand: You are charged based on your actual usage.
     *
     * @example onDemand
     *
     * @var string
     */
    public $serverlessChargeType;

    /**
     * @description The size of the storage space that can be used to store messages.
     *
     * @example 7
     *
     * @var int
     */
    public $storageSize;

    /**
     * @description Specifies whether elastic IP addresses (EIPs) are supported.
     *
     * @example false
     *
     * @var bool
     */
    public $supportEip;

    /**
     * @description Specifies whether to enable the message trace feature.
     *
     * @example false
     *
     * @var bool
     */
    public $supportTracing;

    /**
     * @description The retention period of message traces.
     *
     * Valid values:
     *
     *   3
     *   7
     *   15
     *
     * @example 3
     *
     * @var int
     */
    public $tracingStorageTime;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'edition' => 'Edition',
        'encryptedInstance' => 'EncryptedInstance',
        'instanceId' => 'InstanceId',
        'instanceType' => 'InstanceType',
        'kmsKeyId' => 'KmsKeyId',
        'maxConnections' => 'MaxConnections',
        'maxEipTps' => 'MaxEipTps',
        'maxPrivateTps' => 'MaxPrivateTps',
        'modifyType' => 'ModifyType',
        'provisionedCapacity' => 'ProvisionedCapacity',
        'queueCapacity' => 'QueueCapacity',
        'serverlessChargeType' => 'ServerlessChargeType',
        'storageSize' => 'StorageSize',
        'supportEip' => 'SupportEip',
        'supportTracing' => 'SupportTracing',
        'tracingStorageTime' => 'TracingStorageTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->edition) {
            $res['Edition'] = $this->edition;
        }
        if (null !== $this->encryptedInstance) {
            $res['EncryptedInstance'] = $this->encryptedInstance;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
        if (null !== $this->modifyType) {
            $res['ModifyType'] = $this->modifyType;
        }
        if (null !== $this->provisionedCapacity) {
            $res['ProvisionedCapacity'] = $this->provisionedCapacity;
        }
        if (null !== $this->queueCapacity) {
            $res['QueueCapacity'] = $this->queueCapacity;
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
     * @return UpdateInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Edition'])) {
            $model->edition = $map['Edition'];
        }
        if (isset($map['EncryptedInstance'])) {
            $model->encryptedInstance = $map['EncryptedInstance'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
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
        if (isset($map['ModifyType'])) {
            $model->modifyType = $map['ModifyType'];
        }
        if (isset($map['ProvisionedCapacity'])) {
            $model->provisionedCapacity = $map['ProvisionedCapacity'];
        }
        if (isset($map['QueueCapacity'])) {
            $model->queueCapacity = $map['QueueCapacity'];
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
