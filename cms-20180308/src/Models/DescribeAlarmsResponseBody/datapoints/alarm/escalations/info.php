<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20180308\Models\DescribeAlarmsResponseBody\datapoints\alarm\escalations;

use AlibabaCloud\Dara\Model;

class info extends Model
{
    /**
     * @var string
     */
    public $alertSensitivity;

    /**
     * @var string
     */
    public $comparisonOperator;

    /**
     * @var string
     */
    public $historyDataRange;

    /**
     * @var string
     */
    public $preCondition;

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
    public $times;
    protected $_name = [
        'alertSensitivity' => 'AlertSensitivity',
        'comparisonOperator' => 'ComparisonOperator',
        'historyDataRange' => 'HistoryDataRange',
        'preCondition' => 'PreCondition',
        'statistics' => 'Statistics',
        'threshold' => 'Threshold',
        'times' => 'Times',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertSensitivity) {
            $res['AlertSensitivity'] = $this->alertSensitivity;
        }

        if (null !== $this->comparisonOperator) {
            $res['ComparisonOperator'] = $this->comparisonOperator;
        }

        if (null !== $this->historyDataRange) {
            $res['HistoryDataRange'] = $this->historyDataRange;
        }

        if (null !== $this->preCondition) {
            $res['PreCondition'] = $this->preCondition;
        }

        if (null !== $this->statistics) {
            $res['Statistics'] = $this->statistics;
        }

        if (null !== $this->threshold) {
            $res['Threshold'] = $this->threshold;
        }

        if (null !== $this->times) {
            $res['Times'] = $this->times;
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
        if (isset($map['AlertSensitivity'])) {
            $model->alertSensitivity = $map['AlertSensitivity'];
        }

        if (isset($map['ComparisonOperator'])) {
            $model->comparisonOperator = $map['ComparisonOperator'];
        }

        if (isset($map['HistoryDataRange'])) {
            $model->historyDataRange = $map['HistoryDataRange'];
        }

        if (isset($map['PreCondition'])) {
            $model->preCondition = $map['PreCondition'];
        }

        if (isset($map['Statistics'])) {
            $model->statistics = $map['Statistics'];
        }

        if (isset($map['Threshold'])) {
            $model->threshold = $map['Threshold'];
        }

        if (isset($map['Times'])) {
            $model->times = $map['Times'];
        }

        return $model;
    }
}
