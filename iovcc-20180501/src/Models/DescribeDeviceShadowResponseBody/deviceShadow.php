<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models\DescribeDeviceShadowResponseBody;

use AlibabaCloud\Tea\Model;

class deviceShadow extends Model
{
    /**
     * @var string
     */
    public $deviceShadow;

    /**
     * @var string
     */
    public $deviceInfo;
    protected $_name = [
        'deviceShadow' => 'DeviceShadow',
        'deviceInfo'   => 'DeviceInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceShadow) {
            $res['DeviceShadow'] = $this->deviceShadow;
        }
        if (null !== $this->deviceInfo) {
            $res['DeviceInfo'] = $this->deviceInfo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deviceShadow
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceShadow'])) {
            $model->deviceShadow = $map['DeviceShadow'];
        }
        if (isset($map['DeviceInfo'])) {
            $model->deviceInfo = $map['DeviceInfo'];
        }

        return $model;
    }
}
