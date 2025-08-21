<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models;

use AlibabaCloud\Dara\Model;

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
        'deviceInfoShrink' => 'DeviceInfo',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
