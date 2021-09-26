<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeScalingMetricsResponseBody;

use AlibabaCloud\Tea\Model;

class metricList extends Model
{
    /**
     * @var string
     */
    public $metricName;

    /**
     * @var string
     */
    public $unit;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var int
     */
    public $minValue;

    /**
     * @var int
     */
    public $maxValue;
    protected $_name = [
        'metricName'  => 'MetricName',
        'unit'        => 'Unit',
        'displayName' => 'DisplayName',
        'minValue'    => 'MinValue',
        'maxValue'    => 'MaxValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }
        if (null !== $this->unit) {
            $res['Unit'] = $this->unit;
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->minValue) {
            $res['MinValue'] = $this->minValue;
        }
        if (null !== $this->maxValue) {
            $res['MaxValue'] = $this->maxValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return metricList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }
        if (isset($map['Unit'])) {
            $model->unit = $map['Unit'];
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['MinValue'])) {
            $model->minValue = $map['MinValue'];
        }
        if (isset($map['MaxValue'])) {
            $model->maxValue = $map['MaxValue'];
        }

        return $model;
    }
}
