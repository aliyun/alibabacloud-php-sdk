<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\AlertEvent;

use AlibabaCloud\Tea\Model;

class metrics extends Model
{
    /**
     * @var string
     */
    public $curValue;

    /**
     * @var string
     */
    public $metricName;

    /**
     * @var string
     */
    public $metricNameEn;

    /**
     * @var string
     */
    public $metricNameZh;

    /**
     * @var string
     */
    public $operator;

    /**
     * @var string
     */
    public $statistics;

    /**
     * @var string
     */
    public $threshold;

    /**
     * @var string
     */
    public $unit;

    /**
     * @var float
     */
    public $unitFactor;
    protected $_name = [
        'curValue'     => 'CurValue',
        'metricName'   => 'MetricName',
        'metricNameEn' => 'MetricNameEn',
        'metricNameZh' => 'MetricNameZh',
        'operator'     => 'Operator',
        'statistics'   => 'Statistics',
        'threshold'    => 'Threshold',
        'unit'         => 'Unit',
        'unitFactor'   => 'UnitFactor',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->curValue) {
            $res['CurValue'] = $this->curValue;
        }
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }
        if (null !== $this->metricNameEn) {
            $res['MetricNameEn'] = $this->metricNameEn;
        }
        if (null !== $this->metricNameZh) {
            $res['MetricNameZh'] = $this->metricNameZh;
        }
        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }
        if (null !== $this->statistics) {
            $res['Statistics'] = $this->statistics;
        }
        if (null !== $this->threshold) {
            $res['Threshold'] = $this->threshold;
        }
        if (null !== $this->unit) {
            $res['Unit'] = $this->unit;
        }
        if (null !== $this->unitFactor) {
            $res['UnitFactor'] = $this->unitFactor;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return metrics
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurValue'])) {
            $model->curValue = $map['CurValue'];
        }
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }
        if (isset($map['MetricNameEn'])) {
            $model->metricNameEn = $map['MetricNameEn'];
        }
        if (isset($map['MetricNameZh'])) {
            $model->metricNameZh = $map['MetricNameZh'];
        }
        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }
        if (isset($map['Statistics'])) {
            $model->statistics = $map['Statistics'];
        }
        if (isset($map['Threshold'])) {
            $model->threshold = $map['Threshold'];
        }
        if (isset($map['Unit'])) {
            $model->unit = $map['Unit'];
        }
        if (isset($map['UnitFactor'])) {
            $model->unitFactor = $map['UnitFactor'];
        }

        return $model;
    }
}
