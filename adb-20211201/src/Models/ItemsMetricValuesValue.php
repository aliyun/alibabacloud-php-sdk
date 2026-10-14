<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20211201\Models\ItemsMetricValuesValue\avg;
use AlibabaCloud\SDK\Adb\V20211201\Models\ItemsMetricValuesValue\max;
use AlibabaCloud\SDK\Adb\V20211201\Models\ItemsMetricValuesValue\sum;
use AlibabaCloud\SDK\Adb\V20211201\Models\ItemsMetricValuesValue\time2;

class ItemsMetricValuesValue extends Model
{
    /**
     * @var string
     */
    public $metricCode;

    /**
     * @var string
     */
    public $metricName;

    /**
     * @var bool
     */
    public $primary;

    /**
     * @var time2
     */
    public $time2;

    /**
     * @var avg
     */
    public $avg;

    /**
     * @var sum
     */
    public $sum;

    /**
     * @var max
     */
    public $max;
    protected $_name = [
        'metricCode' => 'MetricCode',
        'metricName' => 'MetricName',
        'primary' => 'Primary',
        'time2' => 'Time2',
        'avg' => 'Avg',
        'sum' => 'Sum',
        'max' => 'Max',
    ];

    public function validate()
    {
        if (null !== $this->time2) {
            $this->time2->validate();
        }
        if (null !== $this->avg) {
            $this->avg->validate();
        }
        if (null !== $this->sum) {
            $this->sum->validate();
        }
        if (null !== $this->max) {
            $this->max->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->metricCode) {
            $res['MetricCode'] = $this->metricCode;
        }

        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }

        if (null !== $this->primary) {
            $res['Primary'] = $this->primary;
        }

        if (null !== $this->time2) {
            $res['Time2'] = null !== $this->time2 ? $this->time2->toArray($noStream) : $this->time2;
        }

        if (null !== $this->avg) {
            $res['Avg'] = null !== $this->avg ? $this->avg->toArray($noStream) : $this->avg;
        }

        if (null !== $this->sum) {
            $res['Sum'] = null !== $this->sum ? $this->sum->toArray($noStream) : $this->sum;
        }

        if (null !== $this->max) {
            $res['Max'] = null !== $this->max ? $this->max->toArray($noStream) : $this->max;
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
        if (isset($map['MetricCode'])) {
            $model->metricCode = $map['MetricCode'];
        }

        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }

        if (isset($map['Primary'])) {
            $model->primary = $map['Primary'];
        }

        if (isset($map['Time2'])) {
            $model->time2 = time2::fromMap($map['Time2']);
        }

        if (isset($map['Avg'])) {
            $model->avg = avg::fromMap($map['Avg']);
        }

        if (isset($map['Sum'])) {
            $model->sum = sum::fromMap($map['Sum']);
        }

        if (isset($map['Max'])) {
            $model->max = max::fromMap($map['Max']);
        }

        return $model;
    }
}
