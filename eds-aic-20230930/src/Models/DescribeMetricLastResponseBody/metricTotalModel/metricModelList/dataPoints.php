<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeMetricLastResponseBody\metricTotalModel\metricModelList;

use AlibabaCloud\Tea\Model;

class dataPoints extends Model
{
    /**
     * @example 99.52
     *
     * @var float
     */
    public $average;

    /**
     * @example 100
     *
     * @var float
     */
    public $maximum;

    /**
     * @example 93.1
     *
     * @var float
     */
    public $minimum;

    /**
     * @example 1548777660000
     *
     * @var int
     */
    public $timestamp;
    protected $_name = [
        'average' => 'Average',
        'maximum' => 'Maximum',
        'minimum' => 'Minimum',
        'timestamp' => 'Timestamp',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->average) {
            $res['Average'] = $this->average;
        }
        if (null !== $this->maximum) {
            $res['Maximum'] = $this->maximum;
        }
        if (null !== $this->minimum) {
            $res['Minimum'] = $this->minimum;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataPoints
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Average'])) {
            $model->average = $map['Average'];
        }
        if (isset($map['Maximum'])) {
            $model->maximum = $map['Maximum'];
        }
        if (isset($map['Minimum'])) {
            $model->minimum = $map['Minimum'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        return $model;
    }
}
