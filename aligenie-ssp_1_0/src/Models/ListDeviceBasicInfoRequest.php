<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models;

use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListDeviceBasicInfoRequest\deviceInfos;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceInfos) {
            $res['DeviceInfos'] = null !== $this->deviceInfos ? $this->deviceInfos->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDeviceBasicInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceInfos'])) {
            $model->deviceInfos = deviceInfos::fromMap($map['DeviceInfos']);
        }

        return $model;
    }
}
