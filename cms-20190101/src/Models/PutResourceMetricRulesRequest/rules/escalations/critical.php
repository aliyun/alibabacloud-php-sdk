<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\PutResourceMetricRulesRequest\rules\escalations;

use AlibabaCloud\Tea\Model;

class critical extends Model
{
    /**
     * @var string
     */
    public $comparisonOperator;

    /**
     * @var int
     */
    public $n;

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
     * @var int
     */
    public $times;
    protected $_name = [
        'comparisonOperator' => 'ComparisonOperator',
        'n'                  => 'N',
        'preCondition'       => 'PreCondition',
        'statistics'         => 'Statistics',
        'threshold'          => 'Threshold',
        'times'              => 'Times',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->comparisonOperator) {
            $res['ComparisonOperator'] = $this->comparisonOperator;
        }
        if (null !== $this->n) {
            $res['N'] = $this->n;
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

    /**
     * @param array $map
     *
     * @return critical
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ComparisonOperator'])) {
            $model->comparisonOperator = $map['ComparisonOperator'];
        }
        if (isset($map['N'])) {
            $model->n = $map['N'];
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
