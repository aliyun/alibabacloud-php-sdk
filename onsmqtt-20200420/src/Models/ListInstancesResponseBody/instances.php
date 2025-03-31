<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OnsMqtt\V20200420\Models\ListInstancesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\ListInstancesResponseBody\instances\mqttTags;

class instances extends Model
{
    /**
     * @var int
     */
    public $createTime;

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
     * @var int
     */
    public $instanceStatus;

    /**
     * @var int
     */
    public $instanceType;

    /**
     * @var string
     */
    public $kernelVersion;

    /**
     * @var mqttTags[]
     */
    public $mqttTags;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $specific;
    protected $_name = [
        'createTime' => 'CreateTime',
        'expireTime' => 'ExpireTime',
        'instanceId' => 'InstanceId',
        'instanceName' => 'InstanceName',
        'instanceStatus' => 'InstanceStatus',
        'instanceType' => 'InstanceType',
        'kernelVersion' => 'KernelVersion',
        'mqttTags' => 'MqttTags',
        'orderId' => 'OrderId',
        'regionId' => 'RegionId',
        'specific' => 'Specific',
    ];

    public function validate()
    {
        if (\is_array($this->mqttTags)) {
            Model::validateArray($this->mqttTags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
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

        if (null !== $this->instanceStatus) {
            $res['InstanceStatus'] = $this->instanceStatus;
        }

        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        if (null !== $this->kernelVersion) {
            $res['KernelVersion'] = $this->kernelVersion;
        }

        if (null !== $this->mqttTags) {
            if (\is_array($this->mqttTags)) {
                $res['MqttTags'] = [];
                $n1 = 0;
                foreach ($this->mqttTags as $item1) {
                    $res['MqttTags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->specific) {
            $res['Specific'] = $this->specific;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
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

        if (isset($map['InstanceStatus'])) {
            $model->instanceStatus = $map['InstanceStatus'];
        }

        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        if (isset($map['KernelVersion'])) {
            $model->kernelVersion = $map['KernelVersion'];
        }

        if (isset($map['MqttTags'])) {
            if (!empty($map['MqttTags'])) {
                $model->mqttTags = [];
                $n1 = 0;
                foreach ($map['MqttTags'] as $item1) {
                    $model->mqttTags[$n1++] = mqttTags::fromMap($item1);
                }
            }
        }

        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Specific'])) {
            $model->specific = $map['Specific'];
        }

        return $model;
    }
}
