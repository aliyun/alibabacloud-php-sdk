<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqpopen\V20191212\Models\GetInstanceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Amqpopen\V20191212\Models\GetInstanceResponseBody\data\tags;

class data extends Model
{
    /**
     * @var bool
     */
    public $autoRenewInstance;

    /**
     * @var string
     */
    public $classicEndpoint;

    /**
     * @var bool
     */
    public $encryptedInstance;

    /**
     * @var int
     */
    public $expireTime;

    /**
     * @var string
     */
    public $instanceId;

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
    public $maxQueue;

    /**
     * @var int
     */
    public $maxTps;

    /**
     * @var int
     */
    public $maxVhost;

    /**
     * @var int
     */
    public $orderCreateTime;

    /**
     * @var string
     */
    public $orderType;

    /**
     * @var string
     */
    public $privateEndpoint;

    /**
     * @var string
     */
    public $publicEndpoint;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $storageSize;

    /**
     * @var bool
     */
    public $supportEIP;

    /**
     * @var bool
     */
    public $supportTracing;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var int
     */
    public $tracingStorageTime;
    protected $_name = [
        'autoRenewInstance' => 'AutoRenewInstance',
        'classicEndpoint' => 'ClassicEndpoint',
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
        'publicEndpoint' => 'PublicEndpoint',
        'resourceGroupId' => 'ResourceGroupId',
        'status' => 'Status',
        'storageSize' => 'StorageSize',
        'supportEIP' => 'SupportEIP',
        'supportTracing' => 'SupportTracing',
        'tags' => 'Tags',
        'tracingStorageTime' => 'TracingStorageTime',
    ];

    public function validate()
    {
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoRenewInstance) {
            $res['AutoRenewInstance'] = $this->autoRenewInstance;
        }

        if (null !== $this->classicEndpoint) {
            $res['ClassicEndpoint'] = $this->classicEndpoint;
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
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['AutoRenewInstance'])) {
            $model->autoRenewInstance = $map['AutoRenewInstance'];
        }

        if (isset($map['ClassicEndpoint'])) {
            $model->classicEndpoint = $map['ClassicEndpoint'];
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
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1++] = tags::fromMap($item1);
                }
            }
        }

        if (isset($map['TracingStorageTime'])) {
            $model->tracingStorageTime = $map['TracingStorageTime'];
        }

        return $model;
    }
}
