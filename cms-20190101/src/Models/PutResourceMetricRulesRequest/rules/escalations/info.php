<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\PutResourceMetricRulesRequest\rules\escalations;

use AlibabaCloud\Tea\Model;

class info extends Model
{
    /**
     * @var string
     */
    public $threshold;

    /**
     * @var int
     */
    public $times;

    /**
     * @var string
     */
    public $statistics;

    /**
     * @var string
     */
    public $comparisonOperator;
    protected $_name = [
        'threshold'          => 'Threshold',
        'times'              => 'Times',
        'statistics'         => 'Statistics',
        'comparisonOperator' => 'ComparisonOperator',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->threshold) {
            $res['Threshold'] = $this->threshold;
        }
        if (null !== $this->times) {
            $res['Times'] = $this->times;
        }
        if (null !== $this->statistics) {
            $res['Statistics'] = $this->statistics;
        }
        if (null !== $this->comparisonOperator) {
            $res['ComparisonOperator'] = $this->comparisonOperator;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return info
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Threshold'])) {
            $model->threshold = $map['Threshold'];
        }
        if (isset($map['Times'])) {
            $model->times = $map['Times'];
        }
        if (isset($map['Statistics'])) {
            $model->statistics = $map['Statistics'];
        }
        if (isset($map['ComparisonOperator'])) {
            $model->comparisonOperator = $map['ComparisonOperator'];
        }

        return $model;
    }
}
