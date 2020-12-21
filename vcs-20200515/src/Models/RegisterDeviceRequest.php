<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models;

use AlibabaCloud\Tea\Model;

class RegisterDeviceRequest extends Model
{
    /**
     * @var string
     */
    public $deviceSn;

    /**
     * @var string
     */
    public $deviceId;

    /**
     * @var string
     */
    public $serverId;

    /**
     * @var string
     */
    public $deviceTimeStamp;
    protected $_name = [
        'deviceSn'        => 'DeviceSn',
        'deviceId'        => 'DeviceId',
        'serverId'        => 'ServerId',
        'deviceTimeStamp' => 'DeviceTimeStamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceSn) {
            $res['DeviceSn'] = $this->deviceSn;
        }
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->serverId) {
            $res['ServerId'] = $this->serverId;
        }
        if (null !== $this->deviceTimeStamp) {
            $res['DeviceTimeStamp'] = $this->deviceTimeStamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RegisterDeviceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceSn'])) {
            $model->deviceSn = $map['DeviceSn'];
        }
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['ServerId'])) {
            $model->serverId = $map['ServerId'];
        }
        if (isset($map['DeviceTimeStamp'])) {
            $model->deviceTimeStamp = $map['DeviceTimeStamp'];
        }

        return $model;
    }
}
