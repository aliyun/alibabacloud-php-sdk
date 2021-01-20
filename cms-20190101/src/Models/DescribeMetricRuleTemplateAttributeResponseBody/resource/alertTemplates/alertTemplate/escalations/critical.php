<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricRuleTemplateAttributeResponseBody\resource\alertTemplates\alertTemplate\escalations;

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
    public $times;

    /**
     * @var string
     */
    public $threshold;

    /**
     * @var string
     */
    public $statistics;
    protected $_name = [
        'comparisonOperator' => 'ComparisonOperator',
        'times'              => 'Times',
        'threshold'          => 'Threshold',
        'statistics'         => 'Statistics',
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
        if (null !== $this->times) {
            $res['Times'] = $this->times;
        }
        if (null !== $this->threshold) {
            $res['Threshold'] = $this->threshold;
        }
        if (null !== $this->statistics) {
            $res['Statistics'] = $this->statistics;
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
        if (isset($map['Times'])) {
            $model->times = $map['Times'];
        }
        if (isset($map['Threshold'])) {
            $model->threshold = $map['Threshold'];
        }
        if (isset($map['Statistics'])) {
            $model->statistics = $map['Statistics'];
        }

        return $model;
    }
}
