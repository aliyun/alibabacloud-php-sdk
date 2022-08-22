<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models;

use AlibabaCloud\Tea\Model;

class ListDeviceBasicInfoShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $deviceInfosShrink;
    protected $_name = [
        'deviceInfosShrink' => 'DeviceInfos',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceInfosShrink) {
            $res['DeviceInfos'] = $this->deviceInfosShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDeviceBasicInfoShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceInfos'])) {
            $model->deviceInfosShrink = $map['DeviceInfos'];
        }

        return $model;
    }
}
