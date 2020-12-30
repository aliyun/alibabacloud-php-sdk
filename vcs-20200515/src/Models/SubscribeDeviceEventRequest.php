<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models;

use AlibabaCloud\Tea\Model;

class SubscribeDeviceEventRequest extends Model
{
    /**
     * @var string
     */
    public $deviceId;

    /**
     * @var string
     */
    public $pushConfig;
    protected $_name = [
        'deviceId'   => 'DeviceId',
        'pushConfig' => 'PushConfig',
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
        if (null !== $this->pushConfig) {
            $res['PushConfig'] = $this->pushConfig;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubscribeDeviceEventRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['PushConfig'])) {
            $model->pushConfig = $map['PushConfig'];
        }

        return $model;
    }
}
