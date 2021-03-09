<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OnsMqtt\V20200420\Models\GetDeviceCredentialResponseBody;

use AlibabaCloud\Tea\Model;

class deviceCredential extends Model
{
    /**
     * @var int
     */
    public $updateTime;

    /**
     * @var string
     */
    public $deviceAccessKeyId;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $deviceAccessKeySecret;

    /**
     * @var string
     */
    public $clientId;
    protected $_name = [
        'updateTime'            => 'UpdateTime',
        'deviceAccessKeyId'     => 'DeviceAccessKeyId',
        'createTime'            => 'CreateTime',
        'instanceId'            => 'InstanceId',
        'deviceAccessKeySecret' => 'DeviceAccessKeySecret',
        'clientId'              => 'ClientId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->deviceAccessKeyId) {
            $res['DeviceAccessKeyId'] = $this->deviceAccessKeyId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->deviceAccessKeySecret) {
            $res['DeviceAccessKeySecret'] = $this->deviceAccessKeySecret;
        }
        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deviceCredential
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['DeviceAccessKeyId'])) {
            $model->deviceAccessKeyId = $map['DeviceAccessKeyId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['DeviceAccessKeySecret'])) {
            $model->deviceAccessKeySecret = $map['DeviceAccessKeySecret'];
        }
        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }

        return $model;
    }
}
