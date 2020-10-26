<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models;

use AlibabaCloud\Tea\Model;

class UnsubscribeDeviceEventRequest extends Model
{
    /**
     * @var string
     */
    public $deviceId;
    protected $_name = [
        'deviceId' => 'DeviceId',
    ];

    public function validate()
    {
        Model::validateRequired('deviceId', $this->deviceId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UnsubscribeDeviceEventRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }

        return $model;
    }
}
