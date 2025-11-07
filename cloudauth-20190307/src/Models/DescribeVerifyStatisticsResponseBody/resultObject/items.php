<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeVerifyStatisticsResponseBody\resultObject;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $date;

    /**
     * @var string
     */
    public $initDevicePassRate;

    /**
     * @var int
     */
    public $initService;

    /**
     * @var string
     */
    public $initServiceConversionRate;

    /**
     * @var string
     */
    public $initServicePassRate;

    /**
     * @var string
     */
    public $passRate;
    protected $_name = [
        'date' => 'Date',
        'initDevicePassRate' => 'InitDevicePassRate',
        'initService' => 'InitService',
        'initServiceConversionRate' => 'InitServiceConversionRate',
        'initServicePassRate' => 'InitServicePassRate',
        'passRate' => 'PassRate',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->date) {
            $res['Date'] = $this->date;
        }

        if (null !== $this->initDevicePassRate) {
            $res['InitDevicePassRate'] = $this->initDevicePassRate;
        }

        if (null !== $this->initService) {
            $res['InitService'] = $this->initService;
        }

        if (null !== $this->initServiceConversionRate) {
            $res['InitServiceConversionRate'] = $this->initServiceConversionRate;
        }

        if (null !== $this->initServicePassRate) {
            $res['InitServicePassRate'] = $this->initServicePassRate;
        }

        if (null !== $this->passRate) {
            $res['PassRate'] = $this->passRate;
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
        if (isset($map['Date'])) {
            $model->date = $map['Date'];
        }

        if (isset($map['InitDevicePassRate'])) {
            $model->initDevicePassRate = $map['InitDevicePassRate'];
        }

        if (isset($map['InitService'])) {
            $model->initService = $map['InitService'];
        }

        if (isset($map['InitServiceConversionRate'])) {
            $model->initServiceConversionRate = $map['InitServiceConversionRate'];
        }

        if (isset($map['InitServicePassRate'])) {
            $model->initServicePassRate = $map['InitServicePassRate'];
        }

        if (isset($map['PassRate'])) {
            $model->passRate = $map['PassRate'];
        }

        return $model;
    }
}
