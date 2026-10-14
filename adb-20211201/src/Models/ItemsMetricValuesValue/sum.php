<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\ItemsMetricValuesValue;

use AlibabaCloud\Dara\Model;

class sum extends Model
{
    /**
     * @var float
     */
    public $changeRatePercent;

    /**
     * @var float
     */
    public $time1Value;

    /**
     * @var string
     */
    public $time1DisplayValue;

    /**
     * @var float
     */
    public $time1RatioPercent;

    /**
     * @var float
     */
    public $time2Value;

    /**
     * @var string
     */
    public $time2DisplayValue;

    /**
     * @var float
     */
    public $time2RatioPercent;
    protected $_name = [
        'changeRatePercent' => 'ChangeRatePercent',
        'time1Value' => 'Time1Value',
        'time1DisplayValue' => 'Time1DisplayValue',
        'time1RatioPercent' => 'Time1RatioPercent',
        'time2Value' => 'Time2Value',
        'time2DisplayValue' => 'Time2DisplayValue',
        'time2RatioPercent' => 'Time2RatioPercent',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->changeRatePercent) {
            $res['ChangeRatePercent'] = $this->changeRatePercent;
        }

        if (null !== $this->time1Value) {
            $res['Time1Value'] = $this->time1Value;
        }

        if (null !== $this->time1DisplayValue) {
            $res['Time1DisplayValue'] = $this->time1DisplayValue;
        }

        if (null !== $this->time1RatioPercent) {
            $res['Time1RatioPercent'] = $this->time1RatioPercent;
        }

        if (null !== $this->time2Value) {
            $res['Time2Value'] = $this->time2Value;
        }

        if (null !== $this->time2DisplayValue) {
            $res['Time2DisplayValue'] = $this->time2DisplayValue;
        }

        if (null !== $this->time2RatioPercent) {
            $res['Time2RatioPercent'] = $this->time2RatioPercent;
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
        if (isset($map['ChangeRatePercent'])) {
            $model->changeRatePercent = $map['ChangeRatePercent'];
        }

        if (isset($map['Time1Value'])) {
            $model->time1Value = $map['Time1Value'];
        }

        if (isset($map['Time1DisplayValue'])) {
            $model->time1DisplayValue = $map['Time1DisplayValue'];
        }

        if (isset($map['Time1RatioPercent'])) {
            $model->time1RatioPercent = $map['Time1RatioPercent'];
        }

        if (isset($map['Time2Value'])) {
            $model->time2Value = $map['Time2Value'];
        }

        if (isset($map['Time2DisplayValue'])) {
            $model->time2DisplayValue = $map['Time2DisplayValue'];
        }

        if (isset($map['Time2RatioPercent'])) {
            $model->time2RatioPercent = $map['Time2RatioPercent'];
        }

        return $model;
    }
}
