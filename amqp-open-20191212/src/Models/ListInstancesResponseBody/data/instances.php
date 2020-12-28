<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqpopen\V20191212\Models\ListInstancesResponseBody\data;

use AlibabaCloud\Tea\Model;

class instances extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var bool
     */
    public $supportEIP;

    /**
     * @var bool
     */
    public $autoRenewInstance;

    /**
     * @var int
     */
    public $expireTime;

    /**
     * @var int
     */
    public $orderCreateTime;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $privateEndpoint;

    /**
     * @var string
     */
    public $orderType;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $publicEndpoint;
    protected $_name = [
        'status'            => 'Status',
        'supportEIP'        => 'SupportEIP',
        'autoRenewInstance' => 'AutoRenewInstance',
        'expireTime'        => 'ExpireTime',
        'orderCreateTime'   => 'OrderCreateTime',
        'instanceName'      => 'InstanceName',
        'privateEndpoint'   => 'PrivateEndpoint',
        'orderType'         => 'OrderType',
        'instanceId'        => 'InstanceId',
        'instanceType'      => 'InstanceType',
        'publicEndpoint'    => 'PublicEndpoint',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->supportEIP) {
            $res['SupportEIP'] = $this->supportEIP;
        }
        if (null !== $this->autoRenewInstance) {
            $res['AutoRenewInstance'] = $this->autoRenewInstance;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->orderCreateTime) {
            $res['OrderCreateTime'] = $this->orderCreateTime;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->privateEndpoint) {
            $res['PrivateEndpoint'] = $this->privateEndpoint;
        }
        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->publicEndpoint) {
            $res['PublicEndpoint'] = $this->publicEndpoint;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SupportEIP'])) {
            $model->supportEIP = $map['SupportEIP'];
        }
        if (isset($map['AutoRenewInstance'])) {
            $model->autoRenewInstance = $map['AutoRenewInstance'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['OrderCreateTime'])) {
            $model->orderCreateTime = $map['OrderCreateTime'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['PrivateEndpoint'])) {
            $model->privateEndpoint = $map['PrivateEndpoint'];
        }
        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['PublicEndpoint'])) {
            $model->publicEndpoint = $map['PublicEndpoint'];
        }

        return $model;
    }
}
