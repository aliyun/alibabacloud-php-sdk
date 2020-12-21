<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models;

use AlibabaCloud\Tea\Model;

class GetDeviceCaptureStrategyRequest extends Model
{
    /**
     * @description 设备通道号
     *
     * @var string
     */
    public $deviceCode;

    /**
     * @description 设备类型
     *
     * @var string
     */
    public $deviceType;
    protected $_name = [
        'deviceCode' => 'DeviceCode',
        'deviceType' => 'DeviceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceCode) {
            $res['DeviceCode'] = $this->deviceCode;
        }
        if (null !== $this->deviceType) {
            $res['DeviceType'] = $this->deviceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDeviceCaptureStrategyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceCode'])) {
            $model->deviceCode = $map['DeviceCode'];
        }
        if (isset($map['DeviceType'])) {
            $model->deviceType = $map['DeviceType'];
        }

        return $model;
    }
}
