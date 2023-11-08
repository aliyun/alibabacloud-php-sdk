<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqpopen\V20191212\Models\ListInstancesResponseBody\data;

use AlibabaCloud\SDK\Amqpopen\V20191212\Models\ListInstancesResponseBody\data\instances\tags;
use AlibabaCloud\Tea\Model;

class instances extends Model
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
     * @example 1651507200000
     *
     * @var int
     */
    public $expireTime;

    /**
     * @example amqp-cn-st21x7kv****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example amqp-cn-st21x7kv****
     *
     * @var string
     */
    public $instanceName;

    /**
     * @example professional
     *
     * @var string
     */
    public $instanceType;

    /**
     * @example 24832
     *
     * @var int
     */
    public $maxEipTps;

    /**
     * @example 50
     *
     * @var int
     */
    public $maxQueue;

    /**
     * @example 5000
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
     * @example 1572441939000
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
     * @example amqp-cn-st21x7kv****.mq-amqp.cn-hangzhou-a.aliyuncs.com
     *
     * @var string
     */
    public $publicEndpoint;

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
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'autoRenewInstance' => 'AutoRenewInstance',
        'classicEndpoint'   => 'ClassicEndpoint',
        'expireTime'        => 'ExpireTime',
        'instanceId'        => 'InstanceId',
        'instanceName'      => 'InstanceName',
        'instanceType'      => 'InstanceType',
        'maxEipTps'         => 'MaxEipTps',
        'maxQueue'          => 'MaxQueue',
        'maxTps'            => 'MaxTps',
        'maxVhost'          => 'MaxVhost',
        'orderCreateTime'   => 'OrderCreateTime',
        'orderType'         => 'OrderType',
        'privateEndpoint'   => 'PrivateEndpoint',
        'publicEndpoint'    => 'PublicEndpoint',
        'status'            => 'Status',
        'storageSize'       => 'StorageSize',
        'supportEIP'        => 'SupportEIP',
        'tags'              => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoRenewInstance) {
            $res['AutoRenewInstance'] = $this->autoRenewInstance;
        }
        if (null !== $this->classicEndpoint) {
            $res['ClassicEndpoint'] = $this->classicEndpoint;
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->storageSize) {
            $res['StorageSize'] = $this->storageSize;
        }
        if (null !== $this->supportEIP) {
            $res['SupportEIP'] = $this->supportEIP;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instances
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StorageSize'])) {
            $model->storageSize = $map['StorageSize'];
        }
        if (isset($map['SupportEIP'])) {
            $model->supportEIP = $map['SupportEIP'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
