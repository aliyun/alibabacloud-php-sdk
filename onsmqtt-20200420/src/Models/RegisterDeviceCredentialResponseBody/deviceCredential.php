<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OnsMqtt\V20200420\Models\RegisterDeviceCredentialResponseBody;

use AlibabaCloud\Tea\Model;

class deviceCredential extends Model
{
    /**
     * @description The client ID of the device.
     *
     * @example GID_test@@@test
     *
     * @var string
     */
    public $clientId;

    /**
     * @description The timestamp that indicates when the access credential of the device was created. Unit: milliseconds.
     *
     * @example 1605541382000
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The AccessKey ID of the device.
     *
     * @example DC.Z5fXh9sRRVufyLi6wo****
     *
     * @var string
     */
    public $deviceAccessKeyId;

    /**
     * @description The AccessKey secret of the device.
     *
     * @example DC.BJMkn4eMQJK2vaApTS****
     *
     * @var string
     */
    public $deviceAccessKeySecret;

    /**
     * @description The ID of the ApsaraMQ for MQTT instance.
     *
     * @example post-cn-0pp12gl****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The timestamp that indicates when the access credential of the device was last updated. Unit: milliseconds.
     *
     * @example 1605541382000
     *
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'clientId'              => 'ClientId',
        'createTime'            => 'CreateTime',
        'deviceAccessKeyId'     => 'DeviceAccessKeyId',
        'deviceAccessKeySecret' => 'DeviceAccessKeySecret',
        'instanceId'            => 'InstanceId',
        'updateTime'            => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return deviceCredential
     */
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
