<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models\GetDeviceCaptureStrategyResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
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
     * @description 星期一抓取策略
     *
     * @var string
     */
    public $mondayCaptureStrategy;

    /**
     * @description 星期二抓取策略
     *
     * @var string
     */
    public $tuesdayCaptureStrategy;

    /**
     * @description 星期三抓取策略
     *
     * @var string
     */
    public $wednesdayCaptureStrategy;

    /**
     * @description 星期四抓取策略
     *
     * @var string
     */
    public $thursdayCaptureStrategy;

    /**
     * @description 星期五抓取策略
     *
     * @var string
     */
    public $fridayCaptureStrategy;

    /**
     * @description 星期六抓取策略
     *
     * @var string
     */
    public $saturdayCaptureStrategy;

    /**
     * @description 星期日抓取策略
     *
     * @var string
     */
    public $sundayCaptureStrategy;
    protected $_name = [
        'deviceType'               => 'DeviceType',
        'deviceCode'               => 'DeviceCode',
        'mondayCaptureStrategy'    => 'MondayCaptureStrategy',
        'tuesdayCaptureStrategy'   => 'TuesdayCaptureStrategy',
        'wednesdayCaptureStrategy' => 'WednesdayCaptureStrategy',
        'thursdayCaptureStrategy'  => 'ThursdayCaptureStrategy',
        'fridayCaptureStrategy'    => 'FridayCaptureStrategy',
        'saturdayCaptureStrategy'  => 'SaturdayCaptureStrategy',
        'sundayCaptureStrategy'    => 'SundayCaptureStrategy',
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
        if (null !== $this->tuesdayCaptureStrategy) {
            $res['TuesdayCaptureStrategy'] = $this->tuesdayCaptureStrategy;
        }
        if (null !== $this->wednesdayCaptureStrategy) {
            $res['WednesdayCaptureStrategy'] = $this->wednesdayCaptureStrategy;
        }
        if (null !== $this->thursdayCaptureStrategy) {
            $res['ThursdayCaptureStrategy'] = $this->thursdayCaptureStrategy;
        }
        if (null !== $this->fridayCaptureStrategy) {
            $res['FridayCaptureStrategy'] = $this->fridayCaptureStrategy;
        }
        if (null !== $this->saturdayCaptureStrategy) {
            $res['SaturdayCaptureStrategy'] = $this->saturdayCaptureStrategy;
        }
        if (null !== $this->sundayCaptureStrategy) {
            $res['SundayCaptureStrategy'] = $this->sundayCaptureStrategy;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
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
        if (isset($map['TuesdayCaptureStrategy'])) {
            $model->tuesdayCaptureStrategy = $map['TuesdayCaptureStrategy'];
        }
        if (isset($map['WednesdayCaptureStrategy'])) {
            $model->wednesdayCaptureStrategy = $map['WednesdayCaptureStrategy'];
        }
        if (isset($map['ThursdayCaptureStrategy'])) {
            $model->thursdayCaptureStrategy = $map['ThursdayCaptureStrategy'];
        }
        if (isset($map['FridayCaptureStrategy'])) {
            $model->fridayCaptureStrategy = $map['FridayCaptureStrategy'];
        }
        if (isset($map['SaturdayCaptureStrategy'])) {
            $model->saturdayCaptureStrategy = $map['SaturdayCaptureStrategy'];
        }
        if (isset($map['SundayCaptureStrategy'])) {
            $model->sundayCaptureStrategy = $map['SundayCaptureStrategy'];
        }

        return $model;
    }
}
