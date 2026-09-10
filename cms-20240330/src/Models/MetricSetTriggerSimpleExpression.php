<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class MetricSetTriggerSimpleExpression extends Model
{
    /**
     * @var float
     */
    public $absDeviation;

    /**
     * @var string
     */
    public $baselinePeriod;

    /**
     * @var string
     */
    public $expressionType;

    /**
     * @var float
     */
    public $max;

    /**
     * @var float
     */
    public $min;

    /**
     * @var string
     */
    public $operator;

    /**
     * @var string
     */
    public $queryName;

    /**
     * @var string
     */
    public $sensitivity;

    /**
     * @var float
     */
    public $threshold;
    protected $_name = [
        'absDeviation' => 'absDeviation',
        'baselinePeriod' => 'baselinePeriod',
        'expressionType' => 'expressionType',
        'max' => 'max',
        'min' => 'min',
        'operator' => 'operator',
        'queryName' => 'queryName',
        'sensitivity' => 'sensitivity',
        'threshold' => 'threshold',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->absDeviation) {
            $res['absDeviation'] = $this->absDeviation;
        }

        if (null !== $this->baselinePeriod) {
            $res['baselinePeriod'] = $this->baselinePeriod;
        }

        if (null !== $this->expressionType) {
            $res['expressionType'] = $this->expressionType;
        }

        if (null !== $this->max) {
            $res['max'] = $this->max;
        }

        if (null !== $this->min) {
            $res['min'] = $this->min;
        }

        if (null !== $this->operator) {
            $res['operator'] = $this->operator;
        }

        if (null !== $this->queryName) {
            $res['queryName'] = $this->queryName;
        }

        if (null !== $this->sensitivity) {
            $res['sensitivity'] = $this->sensitivity;
        }

        if (null !== $this->threshold) {
            $res['threshold'] = $this->threshold;
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
        if (isset($map['absDeviation'])) {
            $model->absDeviation = $map['absDeviation'];
        }

        if (isset($map['baselinePeriod'])) {
            $model->baselinePeriod = $map['baselinePeriod'];
        }

        if (isset($map['expressionType'])) {
            $model->expressionType = $map['expressionType'];
        }

        if (isset($map['max'])) {
            $model->max = $map['max'];
        }

        if (isset($map['min'])) {
            $model->min = $map['min'];
        }

        if (isset($map['operator'])) {
            $model->operator = $map['operator'];
        }

        if (isset($map['queryName'])) {
            $model->queryName = $map['queryName'];
        }

        if (isset($map['sensitivity'])) {
            $model->sensitivity = $map['sensitivity'];
        }

        if (isset($map['threshold'])) {
            $model->threshold = $map['threshold'];
        }

        return $model;
    }
}
