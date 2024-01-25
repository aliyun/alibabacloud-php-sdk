<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MindLive\V20210301\Models\RequestDeviceInfoResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $deviceId;

    /**
     * @var string
     */
    public $deviceName;

    /**
     * @var string
     */
    public $deviceSn;

    /**
     * @var string
     */
    public $publicIp;
    protected $_name = [
        'deviceId'   => 'DeviceId',
        'deviceName' => 'DeviceName',
        'deviceSn'   => 'DeviceSn',
        'publicIp'   => 'PublicIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->deviceSn) {
            $res['DeviceSn'] = $this->deviceSn;
        }
        if (null !== $this->publicIp) {
            $res['PublicIp'] = $this->publicIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['DeviceSn'])) {
            $model->deviceSn = $map['DeviceSn'];
        }
        if (isset($map['PublicIp'])) {
            $model->publicIp = $map['PublicIp'];
        }

        return $model;
    }
}
