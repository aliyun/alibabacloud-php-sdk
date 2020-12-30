<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models\CheckDevicesResponseBody\deviceCheckInfos;

use AlibabaCloud\Tea\Model;

class deviceCheckInfo extends Model
{
    /**
     * @var string
     */
    public $deviceId;

    /**
     * @var bool
     */
    public $available;
    protected $_name = [
        'deviceId'  => 'DeviceId',
        'available' => 'Available',
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
        if (null !== $this->available) {
            $res['Available'] = $this->available;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deviceCheckInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['Available'])) {
            $model->available = $map['Available'];
        }

        return $model;
    }
}
