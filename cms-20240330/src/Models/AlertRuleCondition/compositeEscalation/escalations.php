<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\AlertRuleCondition\compositeEscalation;

use AlibabaCloud\Tea\Model;

class escalations extends Model
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
    public $statistics;

    /**
     * @var float
     */
    public $threshold;
    protected $_name = [
        'comparisonOperator' => 'comparisonOperator',
        'metricName' => 'metricName',
        'period' => 'period',
        'statistics' => 'statistics',
        'threshold' => 'threshold',
    ];

    public function validate() {}

    public function toMap()
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
        if (null !== $this->statistics) {
            $res['statistics'] = $this->statistics;
        }
        if (null !== $this->threshold) {
            $res['threshold'] = $this->threshold;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return escalations
     */
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
        if (isset($map['statistics'])) {
            $model->statistics = $map['statistics'];
        }
        if (isset($map['threshold'])) {
            $model->threshold = $map['threshold'];
        }

        return $model;
    }
}
