<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\ItemsMetricValuesValue;

use AlibabaCloud\Dara\Model;

class time2 extends Model
{
    /**
     * @var float
     */
    public $sumValue;

    /**
     * @var string
     */
    public $sumDisplayValue;

    /**
     * @var float
     */
    public $avgValue;

    /**
     * @var string
     */
    public $avgDisplayValue;

    /**
     * @var float
     */
    public $maxValue;

    /**
     * @var string
     */
    public $maxDisplayValue;

    /**
     * @var float
     */
    public $sumRatioPercent;

    /**
     * @var float
     */
    public $avgRatioPercent;
    protected $_name = [
        'sumValue' => 'SumValue',
        'sumDisplayValue' => 'SumDisplayValue',
        'avgValue' => 'AvgValue',
        'avgDisplayValue' => 'AvgDisplayValue',
        'maxValue' => 'MaxValue',
        'maxDisplayValue' => 'MaxDisplayValue',
        'sumRatioPercent' => 'SumRatioPercent',
        'avgRatioPercent' => 'AvgRatioPercent',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sumValue) {
            $res['SumValue'] = $this->sumValue;
        }

        if (null !== $this->sumDisplayValue) {
            $res['SumDisplayValue'] = $this->sumDisplayValue;
        }

        if (null !== $this->avgValue) {
            $res['AvgValue'] = $this->avgValue;
        }

        if (null !== $this->avgDisplayValue) {
            $res['AvgDisplayValue'] = $this->avgDisplayValue;
        }

        if (null !== $this->maxValue) {
            $res['MaxValue'] = $this->maxValue;
        }

        if (null !== $this->maxDisplayValue) {
            $res['MaxDisplayValue'] = $this->maxDisplayValue;
        }

        if (null !== $this->sumRatioPercent) {
            $res['SumRatioPercent'] = $this->sumRatioPercent;
        }

        if (null !== $this->avgRatioPercent) {
            $res['AvgRatioPercent'] = $this->avgRatioPercent;
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
        if (isset($map['SumValue'])) {
            $model->sumValue = $map['SumValue'];
        }

        if (isset($map['SumDisplayValue'])) {
            $model->sumDisplayValue = $map['SumDisplayValue'];
        }

        if (isset($map['AvgValue'])) {
            $model->avgValue = $map['AvgValue'];
        }

        if (isset($map['AvgDisplayValue'])) {
            $model->avgDisplayValue = $map['AvgDisplayValue'];
        }

        if (isset($map['MaxValue'])) {
            $model->maxValue = $map['MaxValue'];
        }

        if (isset($map['MaxDisplayValue'])) {
            $model->maxDisplayValue = $map['MaxDisplayValue'];
        }

        if (isset($map['SumRatioPercent'])) {
            $model->sumRatioPercent = $map['SumRatioPercent'];
        }

        if (isset($map['AvgRatioPercent'])) {
            $model->avgRatioPercent = $map['AvgRatioPercent'];
        }

        return $model;
    }
}
