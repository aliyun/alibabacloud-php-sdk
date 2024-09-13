<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingRulesResponseBody\scalingRules;

use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingRulesResponseBody\scalingRules\hybridMetrics\dimensions;
use AlibabaCloud\Tea\Model;

class hybridMetrics extends Model
{
    /**
     * @var dimensions[]
     */
    public $dimensions;

    /**
     * @var string
     */
    public $expression;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $metricName;

    /**
     * @var string
     */
    public $statistic;
    protected $_name = [
        'dimensions' => 'Dimensions',
        'expression' => 'Expression',
        'id'         => 'Id',
        'metricName' => 'MetricName',
        'statistic'  => 'Statistic',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dimensions) {
            $res['Dimensions'] = [];
            if (null !== $this->dimensions && \is_array($this->dimensions)) {
                $n = 0;
                foreach ($this->dimensions as $item) {
                    $res['Dimensions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->expression) {
            $res['Expression'] = $this->expression;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }
        if (null !== $this->statistic) {
            $res['Statistic'] = $this->statistic;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hybridMetrics
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Dimensions'])) {
            if (!empty($map['Dimensions'])) {
                $model->dimensions = [];
                $n                 = 0;
                foreach ($map['Dimensions'] as $item) {
                    $model->dimensions[$n++] = null !== $item ? dimensions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Expression'])) {
            $model->expression = $map['Expression'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }
        if (isset($map['Statistic'])) {
            $model->statistic = $map['Statistic'];
        }

        return $model;
    }
}
