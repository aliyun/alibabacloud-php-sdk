<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqpopen\V20191212\Models\GetInstanceResponseBody;

use AlibabaCloud\SDK\Amqpopen\V20191212\Models\GetInstanceResponseBody\data\tags;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $autoRenewInstance;

    /**
     * @example amqp-cn-st21x7kv****.not-support
     *
     * @var string
     */
    public $classicEndpoint;

    /**
     * @var string
     */
    public $edition;

    /**
     * @var bool
     */
    public $encryptedInstance;

    /**
     * @example 1651507200000
     *
     * @var int
     */
    public $expireTime;

    /**
     * @example amqp-cn-*********
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example yunQi-instance
     *
     * @var string
     */
    public $instanceName;

    /**
     * @example enterprise
     *
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $kmsKeyId;

    /**
     * @example 1500
     *
     * @var int
     */
    public $maxConnections;

    /**
     * @example 1000
     *
     * @var int
     */
    public $maxEipTps;

    /**
     * @example 1000
     *
     * @var int
     */
    public $maxQueue;

    /**
     * @example 1000
     *
     * @var int
     */
    public $maxTps;

    /**
     * @example 50
     *
     * @var int
     */
    public $maxVhost;

    /**
     * @example 1651507200000
     *
     * @var int
     */
    public $orderCreateTime;

    /**
     * @example PRE_PAID
     *
     * @var string
     */
    public $orderType;

    /**
     * @example amqp-cn-st21x7kv****.mq-amqp.cn-hangzhou-a.aliyuncs.com
     *
     * @var string
     */
    public $privateEndpoint;

    /**
     * @var int
     */
    public $provisionedCapacity;

    /**
     * @example xxx.cn-hangzhou.xxx.net.mq.amqp.aliyuncs.com
     *
     * @var string
     */
    public $publicEndpoint;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @example SERVING
     *
     * @var string
     */
    public $status;

    /**
     * @example 200
     *
     * @var int
     */
    public $storageSize;

    /**
     * @example true
     *
     * @var bool
     */
    public $supportEIP;

    /**
     * @example True
     *
     * @var bool
     */
    public $supportTracing;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @example 15
     *
     * @var int
     */
    public $tracingStorageTime;
    protected $_name = [
        'autoRenewInstance' => 'AutoRenewInstance',
        'classicEndpoint' => 'ClassicEndpoint',
        'edition' => 'Edition',
        'encryptedInstance' => 'EncryptedInstance',
        'expireTime' => 'ExpireTime',
        'instanceId' => 'InstanceId',
        'instanceName' => 'InstanceName',
        'instanceType' => 'InstanceType',
        'kmsKeyId' => 'KmsKeyId',
        'maxConnections' => 'MaxConnections',
        'maxEipTps' => 'MaxEipTps',
        'maxQueue' => 'MaxQueue',
        'maxTps' => 'MaxTps',
        'maxVhost' => 'MaxVhost',
        'orderCreateTime' => 'OrderCreateTime',
        'orderType' => 'OrderType',
        'privateEndpoint' => 'PrivateEndpoint',
        'provisionedCapacity' => 'ProvisionedCapacity',
        'publicEndpoint' => 'PublicEndpoint',
        'resourceGroupId' => 'ResourceGroupId',
        'status' => 'Status',
        'storageSize' => 'StorageSize',
        'supportEIP' => 'SupportEIP',
        'supportTracing' => 'SupportTracing',
        'tags' => 'Tags',
        'tracingStorageTime' => 'TracingStorageTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoRenewInstance) {
            $res['AutoRenewInstance'] = $this->autoRenewInstance;
        }
        if (null !== $this->classicEndpoint) {
            $res['ClassicEndpoint'] = $this->classicEndpoint;
        }
        if (null !== $this->edition) {
            $res['Edition'] = $this->edition;
        }
        if (null !== $this->encryptedInstance) {
            $res['EncryptedInstance'] = $this->encryptedInstance;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
        if (null !== $this->maxQueue) {
            $res['MaxQueue'] = $this->maxQueue;
        }
        if (null !== $this->maxTps) {
            $res['MaxTps'] = $this->maxTps;
        }
        if (null !== $this->maxVhost) {
            $res['MaxVhost'] = $this->maxVhost;
        }
        if (null !== $this->orderCreateTime) {
            $res['OrderCreateTime'] = $this->orderCreateTime;
        }
        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }
        if (null !== $this->privateEndpoint) {
            $res['PrivateEndpoint'] = $this->privateEndpoint;
        }
        if (null !== $this->provisionedCapacity) {
            $res['ProvisionedCapacity'] = $this->provisionedCapacity;
        }
        if (null !== $this->publicEndpoint) {
            $res['PublicEndpoint'] = $this->publicEndpoint;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->storageSize) {
            $res['StorageSize'] = $this->storageSize;
        }
        if (null !== $this->supportEIP) {
            $res['SupportEIP'] = $this->supportEIP;
        }
        if (null !== $this->supportTracing) {
            $res['SupportTracing'] = $this->supportTracing;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->tracingStorageTime) {
            $res['TracingStorageTime'] = $this->tracingStorageTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoRenewInstance'])) {
            $model->autoRenewInstance = $map['AutoRenewInstance'];
        }
        if (isset($map['ClassicEndpoint'])) {
            $model->classicEndpoint = $map['ClassicEndpoint'];
        }
        if (isset($map['Edition'])) {
            $model->edition = $map['Edition'];
        }
        if (isset($map['EncryptedInstance'])) {
            $model->encryptedInstance = $map['EncryptedInstance'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
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
        if (isset($map['MaxQueue'])) {
            $model->maxQueue = $map['MaxQueue'];
        }
        if (isset($map['MaxTps'])) {
            $model->maxTps = $map['MaxTps'];
        }
        if (isset($map['MaxVhost'])) {
            $model->maxVhost = $map['MaxVhost'];
        }
        if (isset($map['OrderCreateTime'])) {
            $model->orderCreateTime = $map['OrderCreateTime'];
        }
        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }
        if (isset($map['PrivateEndpoint'])) {
            $model->privateEndpoint = $map['PrivateEndpoint'];
        }
        if (isset($map['ProvisionedCapacity'])) {
            $model->provisionedCapacity = $map['ProvisionedCapacity'];
        }
        if (isset($map['PublicEndpoint'])) {
            $model->publicEndpoint = $map['PublicEndpoint'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StorageSize'])) {
            $model->storageSize = $map['StorageSize'];
        }
        if (isset($map['SupportEIP'])) {
            $model->supportEIP = $map['SupportEIP'];
        }
        if (isset($map['SupportTracing'])) {
            $model->supportTracing = $map['SupportTracing'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TracingStorageTime'])) {
            $model->tracingStorageTime = $map['TracingStorageTime'];
        }

        return $model;
    }
}
