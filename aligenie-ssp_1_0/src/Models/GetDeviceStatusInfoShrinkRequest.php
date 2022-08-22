<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models;

use AlibabaCloud\Tea\Model;

class GetDeviceStatusInfoShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $deviceInfoShrink;
    protected $_name = [
        'deviceInfoShrink' => 'DeviceInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceInfoShrink) {
            $res['DeviceInfo'] = $this->deviceInfoShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDeviceStatusInfoShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceInfo'])) {
            $model->deviceInfoShrink = $map['DeviceInfo'];
        }

        return $model;
    }
}
