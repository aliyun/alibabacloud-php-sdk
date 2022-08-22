<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models;

use AlibabaCloud\Tea\Model;

class DeviceControlShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $controlRequestShrink;

    /**
     * @var string
     */
    public $deviceInfoShrink;
    protected $_name = [
        'controlRequestShrink' => 'ControlRequest',
        'deviceInfoShrink'     => 'DeviceInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->controlRequestShrink) {
            $res['ControlRequest'] = $this->controlRequestShrink;
        }
        if (null !== $this->deviceInfoShrink) {
            $res['DeviceInfo'] = $this->deviceInfoShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeviceControlShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ControlRequest'])) {
            $model->controlRequestShrink = $map['ControlRequest'];
        }
        if (isset($map['DeviceInfo'])) {
            $model->deviceInfoShrink = $map['DeviceInfo'];
        }

        return $model;
    }
}
