<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqpopen\V20191212\Models\ListInstancesResponseBody\data;

use AlibabaCloud\SDK\Amqpopen\V20191212\Models\ListInstancesResponseBody\data\instances\tags;
use AlibabaCloud\Tea\Model;

class instances extends Model
{
    /**
     * @description Indicates whether the instance is automatically renewed.
     *
     * @example false
     *
     * @var bool
     */
    public $autoRenewInstance;

    /**
     * @description The endpoint that is used to access the instance over the classic network. This parameter is no longer available.
     *
     * @example amqp-cn-st21x7kv****.not-support
     *
     * @var string
     */
    public $classicEndpoint;

    /**
     * @description The timestamp that indicates when the instance expires. Unit: milliseconds.
     *
     * @example 1651507200000
     *
     * @var int
     */
    public $expireTime;

    /**
     * @description The instance ID
     *
     * @example amqp-cn-st21x7kv****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The instance name.
     *
     * @example amqp-cn-st21x7kv****
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The instance type.
     *
     *   PROFESSIONAL: Professional Edition
     *   ENTERPRISE: Enterprise Edition
     *   VIP: Enterprise Platinum Edition
     *
     * @example professional
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The maximum number of Internet-based transactions per second (TPS) for the instance.
     *
     * @example 24832
     *
     * @var int
     */
    public $maxEipTps;

    /**
     * @description The maximum number of queues on the instance.
     *
     * @example 50
     *
     * @var int
     */
    public $maxQueue;

    /**
     * @description The maximum number of VPC-based TPS for the instance.
     *
     * @example 5000
     *
     * @var int
     */
    public $maxTps;

    /**
     * @description The maximum number of vhosts on the instance.
     *
     * @example 50
     *
     * @var int
     */
    public $maxVhost;

    /**
     * @description The timestamp that indicates when the order was created. Unit: milliseconds.
     *
     * @example 1572441939000
     *
     * @var int
     */
    public $orderCreateTime;

    /**
     * @description The billing method. Valid values:
     *
     *   PrePaid: the subscription billing method.
     *   POST_PAID: the pay-as-you-go billing method.
     *
     * @example PRE_PAID
     *
     * @var string
     */
    public $orderType;

    /**
     * @description The virtual private cloud (VPC) endpoint of the instance.
     *
     * @example amqp-cn-st21x7kv****.mq-amqp.cn-hangzhou-a.aliyuncs.com
     *
     * @var string
     */
    public $privateEndpoint;

    /**
     * @description The public endpoint of the instance.
     *
     * @example amqp-cn-st21x7kv****.mq-amqp.cn-hangzhou-a.aliyuncs.com
     *
     * @var string
     */
    public $publicEndpoint;

    /**
     * @description The instance status. Valid values:
     *
     *   DEPLOYING: The instance is being deployed.
     *   EXPIRED: The instance is expired.
     *   SERVING: The instance is running.
     *   RELEASED: The instance is released.
     *
     * @example SERVING
     *
     * @var string
     */
    public $status;

    /**
     * @description The disk size. Unit: GB.
     *
     * >  For Professional Edition instances and Enterprise Edition instances, this parameter is unavailable and \\*\\*-1\\*\\* is returned.
     * @example 200
     *
     * @var int
     */
    public $storageSize;

    /**
     * @description Indicates whether the instance supports elastic IP addresses (EIPs).
     *
     * @example true
     *
     * @var bool
     */
    public $supportEIP;

    /**
     * @description 标签列表。
     *
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
