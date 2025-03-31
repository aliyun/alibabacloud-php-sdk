<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OnsMqtt\V20200420\Models\GetDeviceCredentialResponseBody;

use AlibabaCloud\Dara\Model;

class deviceCredential extends Model
{
    /**
     * @var string
     */
    public $clientId;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $deviceAccessKeyId;

    /**
     * @var string
     */
    public $deviceAccessKeySecret;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'clientId' => 'ClientId',
        'createTime' => 'CreateTime',
        'deviceAccessKeyId' => 'DeviceAccessKeyId',
        'deviceAccessKeySecret' => 'DeviceAccessKeySecret',
        'instanceId' => 'InstanceId',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->deviceAccessKeyId) {
            $res['DeviceAccessKeyId'] = $this->deviceAccessKeyId;
        }

        if (null !== $this->deviceAccessKeySecret) {
            $res['DeviceAccessKeySecret'] = $this->deviceAccessKeySecret;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['DeviceAccessKeyId'])) {
            $model->deviceAccessKeyId = $map['DeviceAccessKeyId'];
        }

        if (isset($map['DeviceAccessKeySecret'])) {
            $model->deviceAccessKeySecret = $map['DeviceAccessKeySecret'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
