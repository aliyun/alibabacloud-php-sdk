<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqpopen\V20191212\Models;

use AlibabaCloud\Tea\Model;

class UpdateInstanceRequest extends Model
{
    /**
     * @example c2c5d1274axxxxxxxx
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description This parameter is required.
     *
     * @example amqp-cn-jtexxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example professional
     *
     * @var string
     */
    public $instanceType;

    /**
     * @example 1000
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
     * @description This parameter is required.
     *
     * @example UPGRADE
     *
     * @var string
     */
    public $modifyType;

    /**
     * @example 1000
     *
     * @var int
     */
    public $queueCapacity;

    /**
     * @example onDemand
     *
     * @var string
     */
    public $serverlessChargeType;

    /**
     * @example 7
     *
     * @var int
     */
    public $storageSize;

    /**
     * @example false
     *
     * @var bool
     */
    public $supportEip;

    /**
     * @example false
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
        'clientToken'          => 'ClientToken',
        'instanceId'           => 'InstanceId',
        'instanceType'         => 'InstanceType',
        'maxConnections'       => 'MaxConnections',
        'maxEipTps'            => 'MaxEipTps',
        'maxPrivateTps'        => 'MaxPrivateTps',
        'modifyType'           => 'ModifyType',
        'queueCapacity'        => 'QueueCapacity',
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
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
        if (null !== $this->modifyType) {
            $res['ModifyType'] = $this->modifyType;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
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
        if (isset($map['ModifyType'])) {
            $model->modifyType = $map['ModifyType'];
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
