<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingRulesResponseBody\scalingRules;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingRulesResponseBody\scalingRules\hybridMetrics\dimensions;

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
        'id' => 'Id',
        'metricName' => 'MetricName',
        'statistic' => 'Statistic',
    ];

    public function validate()
    {
        if (\is_array($this->dimensions)) {
            Model::validateArray($this->dimensions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dimensions) {
            if (\is_array($this->dimensions)) {
                $res['Dimensions'] = [];
                $n1 = 0;
                foreach ($this->dimensions as $item1) {
                    $res['Dimensions'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Dimensions'])) {
            if (!empty($map['Dimensions'])) {
                $model->dimensions = [];
                $n1 = 0;
                foreach ($map['Dimensions'] as $item1) {
                    $model->dimensions[$n1++] = dimensions::fromMap($item1);
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
