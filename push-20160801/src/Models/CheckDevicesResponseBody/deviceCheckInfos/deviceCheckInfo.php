<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models\CheckDevicesResponseBody\deviceCheckInfos;

use AlibabaCloud\Tea\Model;

class deviceCheckInfo extends Model
{
    /**
     * @var bool
     */
    public $available;

    /**
     * @var string
     */
    public $deviceId;
    protected $_name = [
        'available' => 'Available',
        'deviceId'  => 'DeviceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->available) {
            $res['Available'] = $this->available;
        }
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
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
        if (isset($map['Available'])) {
            $model->available = $map['Available'];
        }
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }

        return $model;
    }
}
