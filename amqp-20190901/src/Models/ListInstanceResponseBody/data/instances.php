<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqp\V20190901\Models\ListInstanceResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Amqp\V20190901\Models\ListInstanceResponseBody\data\instances\tags;

class instances extends Model
{
    /**
     * @var bool
     */
    public $autoRenew;

    /**
     * @var string
     */
    public $classicEndpoint;

    /**
     * @var int
     */
    public $expire;

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
     * @var int
     */
    public $maxEIPTPS;

    /**
     * @var int
     */
    public $maxQueue;

    /**
     * @var int
     */
    public $maxTPS;

    /**
     * @var int
     */
    public $maxVhost;

    /**
     * @var int
     */
    public $orderCreate;

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
     * @var tags
     */
    public $tags;
    protected $_name = [
        'autoRenew' => 'AutoRenew',
        'classicEndpoint' => 'ClassicEndpoint',
        'expire' => 'Expire',
        'instanceId' => 'InstanceId',
        'instanceName' => 'InstanceName',
        'instanceType' => 'InstanceType',
        'maxEIPTPS' => 'MaxEIPTPS',
        'maxQueue' => 'MaxQueue',
        'maxTPS' => 'MaxTPS',
        'maxVhost' => 'MaxVhost',
        'orderCreate' => 'OrderCreate',
        'orderType' => 'OrderType',
        'privateEndpoint' => 'PrivateEndpoint',
        'publicEndpoint' => 'PublicEndpoint',
        'status' => 'Status',
        'storageSize' => 'StorageSize',
        'supportEIP' => 'SupportEIP',
        'tags' => 'Tags',
    ];

    public function validate()
    {
        if (null !== $this->tags) {
            $this->tags->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }

        if (null !== $this->classicEndpoint) {
            $res['ClassicEndpoint'] = $this->classicEndpoint;
        }

        if (null !== $this->expire) {
            $res['Expire'] = $this->expire;
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

        if (null !== $this->maxEIPTPS) {
            $res['MaxEIPTPS'] = $this->maxEIPTPS;
        }

        if (null !== $this->maxQueue) {
            $res['MaxQueue'] = $this->maxQueue;
        }

        if (null !== $this->maxTPS) {
            $res['MaxTPS'] = $this->maxTPS;
        }

        if (null !== $this->maxVhost) {
            $res['MaxVhost'] = $this->maxVhost;
        }

        if (null !== $this->orderCreate) {
            $res['OrderCreate'] = $this->orderCreate;
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
            $res['Tags'] = null !== $this->tags ? $this->tags->toArray($noStream) : $this->tags;
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

        if (isset($map['ClassicEndpoint'])) {
            $model->classicEndpoint = $map['ClassicEndpoint'];
        }

        if (isset($map['Expire'])) {
            $model->expire = $map['Expire'];
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

        if (isset($map['MaxEIPTPS'])) {
            $model->maxEIPTPS = $map['MaxEIPTPS'];
        }

        if (isset($map['MaxQueue'])) {
            $model->maxQueue = $map['MaxQueue'];
        }

        if (isset($map['MaxTPS'])) {
            $model->maxTPS = $map['MaxTPS'];
        }

        if (isset($map['MaxVhost'])) {
            $model->maxVhost = $map['MaxVhost'];
        }

        if (isset($map['OrderCreate'])) {
            $model->orderCreate = $map['OrderCreate'];
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
            $model->tags = tags::fromMap($map['Tags']);
        }

        return $model;
    }
}
