<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models;

use AlibabaCloud\Tea\Model;

class UpdateDeviceCaptureStrategyRequest extends Model
{
    /**
     * @description 设备类型
     *
     * @var string
     */
    public $deviceType;

    /**
     * @description 设备通道
     *
     * @var string
     */
    public $deviceCode;

    /**
     * @description 周一图片抓去模式
     *
     * @var string
     */
    public $mondayCaptureStrategy;
    protected $_name = [
        'deviceType'            => 'DeviceType',
        'deviceCode'            => 'DeviceCode',
        'mondayCaptureStrategy' => 'MondayCaptureStrategy',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceType) {
            $res['DeviceType'] = $this->deviceType;
        }
        if (null !== $this->deviceCode) {
            $res['DeviceCode'] = $this->deviceCode;
        }
        if (null !== $this->mondayCaptureStrategy) {
            $res['MondayCaptureStrategy'] = $this->mondayCaptureStrategy;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateDeviceCaptureStrategyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceType'])) {
            $model->deviceType = $map['DeviceType'];
        }
        if (isset($map['DeviceCode'])) {
            $model->deviceCode = $map['DeviceCode'];
        }
        if (isset($map['MondayCaptureStrategy'])) {
            $model->mondayCaptureStrategy = $map['MondayCaptureStrategy'];
        }

        return $model;
    }
}
