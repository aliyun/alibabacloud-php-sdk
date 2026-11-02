<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class CloudMonitoringSimpleEscalationEntry extends Model
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
    public $comparisonOperator;

    /**
     * @var string
     */
    public $preCondition;

    /**
     * @var string
     */
    public $sensitivity;

    /**
     * @var string
     */
    public $severity;

    /**
     * @var string
     */
    public $statistics;

    /**
     * @var string
     */
    public $threshold;

    /**
     * @var int
     */
    public $times;
    protected $_name = [
        'absDeviation' => 'absDeviation',
        'baselinePeriod' => 'baselinePeriod',
        'comparisonOperator' => 'comparisonOperator',
        'preCondition' => 'preCondition',
        'sensitivity' => 'sensitivity',
        'severity' => 'severity',
        'statistics' => 'statistics',
        'threshold' => 'threshold',
        'times' => 'times',
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

        if (null !== $this->comparisonOperator) {
            $res['comparisonOperator'] = $this->comparisonOperator;
        }

        if (null !== $this->preCondition) {
            $res['preCondition'] = $this->preCondition;
        }

        if (null !== $this->sensitivity) {
            $res['sensitivity'] = $this->sensitivity;
        }

        if (null !== $this->severity) {
            $res['severity'] = $this->severity;
        }

        if (null !== $this->statistics) {
            $res['statistics'] = $this->statistics;
        }

        if (null !== $this->threshold) {
            $res['threshold'] = $this->threshold;
        }

        if (null !== $this->times) {
            $res['times'] = $this->times;
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

        if (isset($map['comparisonOperator'])) {
            $model->comparisonOperator = $map['comparisonOperator'];
        }

        if (isset($map['preCondition'])) {
            $model->preCondition = $map['preCondition'];
        }

        if (isset($map['sensitivity'])) {
            $model->sensitivity = $map['sensitivity'];
        }

        if (isset($map['severity'])) {
            $model->severity = $map['severity'];
        }

        if (isset($map['statistics'])) {
            $model->statistics = $map['statistics'];
        }

        if (isset($map['threshold'])) {
            $model->threshold = $map['threshold'];
        }

        if (isset($map['times'])) {
            $model->times = $map['times'];
        }

        return $model;
    }
}
