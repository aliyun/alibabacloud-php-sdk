<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class CloudMonitoringCompositeEscalationEntry extends Model
{
    /**
     * @var string
     */
    public $comparisonOperator;

    /**
     * @var string
     */
    public $metricName;

    /**
     * @var int
     */
    public $period;

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
    protected $_name = [
        'comparisonOperator' => 'comparisonOperator',
        'metricName' => 'metricName',
        'period' => 'period',
        'preCondition' => 'preCondition',
        'statistics' => 'statistics',
        'threshold' => 'threshold',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->comparisonOperator) {
            $res['comparisonOperator'] = $this->comparisonOperator;
        }

        if (null !== $this->metricName) {
            $res['metricName'] = $this->metricName;
        }

        if (null !== $this->period) {
            $res['period'] = $this->period;
        }

        if (null !== $this->preCondition) {
            $res['preCondition'] = $this->preCondition;
        }

        if (null !== $this->statistics) {
            $res['statistics'] = $this->statistics;
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
        if (isset($map['comparisonOperator'])) {
            $model->comparisonOperator = $map['comparisonOperator'];
        }

        if (isset($map['metricName'])) {
            $model->metricName = $map['metricName'];
        }

        if (isset($map['period'])) {
            $model->period = $map['period'];
        }

        if (isset($map['preCondition'])) {
            $model->preCondition = $map['preCondition'];
        }

        if (isset($map['statistics'])) {
            $model->statistics = $map['statistics'];
        }

        if (isset($map['threshold'])) {
            $model->threshold = $map['threshold'];
        }

        return $model;
    }
}
