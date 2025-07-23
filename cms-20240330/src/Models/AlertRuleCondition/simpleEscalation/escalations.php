<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\AlertRuleCondition\simpleEscalation;

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
    public $level;

    /**
     * @var string
     */
    public $statistics;

    /**
     * @var float
     */
    public $threshold;

    /**
     * @var int
     */
    public $times;
    protected $_name = [
        'comparisonOperator' => 'comparisonOperator',
        'level' => 'level',
        'statistics' => 'statistics',
        'threshold' => 'threshold',
        'times' => 'times',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->comparisonOperator) {
            $res['comparisonOperator'] = $this->comparisonOperator;
        }
        if (null !== $this->level) {
            $res['level'] = $this->level;
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
        if (isset($map['level'])) {
            $model->level = $map['level'];
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
