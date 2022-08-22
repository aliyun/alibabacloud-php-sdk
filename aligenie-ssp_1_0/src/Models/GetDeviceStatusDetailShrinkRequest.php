<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models;

use AlibabaCloud\Tea\Model;

class GetDeviceStatusDetailShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $deviceInfoShrink;

    /**
     * @var string
     */
    public $keysShrink;
    protected $_name = [
        'deviceInfoShrink' => 'DeviceInfo',
        'keysShrink'       => 'Keys',
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
        if (null !== $this->keysShrink) {
            $res['Keys'] = $this->keysShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDeviceStatusDetailShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceInfo'])) {
            $model->deviceInfoShrink = $map['DeviceInfo'];
        }
        if (isset($map['Keys'])) {
            $model->keysShrink = $map['Keys'];
        }

        return $model;
    }
}
