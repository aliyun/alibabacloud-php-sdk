<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListDeviceBasicInfoRequest\deviceInfos;

class ListDeviceBasicInfoRequest extends Model
{
    /**
     * @var deviceInfos
     */
    public $deviceInfos;
    protected $_name = [
        'deviceInfos' => 'DeviceInfos',
    ];

    public function validate()
    {
        if (null !== $this->deviceInfos) {
            $this->deviceInfos->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deviceInfos) {
            $res['DeviceInfos'] = null !== $this->deviceInfos ? $this->deviceInfos->toArray($noStream) : $this->deviceInfos;
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
        if (isset($map['DeviceInfos'])) {
            $model->deviceInfos = deviceInfos::fromMap($map['DeviceInfos']);
        }

        return $model;
    }
}
