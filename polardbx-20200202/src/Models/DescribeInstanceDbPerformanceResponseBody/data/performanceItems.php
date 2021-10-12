<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeInstanceDbPerformanceResponseBody\data;

use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeInstanceDbPerformanceResponseBody\data\performanceItems\points;
use AlibabaCloud\Tea\Model;

class performanceItems extends Model
{
    /**
     * @var string
     */
    public $metricName;

    /**
     * @var string
     */
    public $measurement;

    /**
     * @var points[]
     */
    public $points;
    protected $_name = [
        'metricName'  => 'MetricName',
        'measurement' => 'Measurement',
        'points'      => 'Points',
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
        if (null !== $this->measurement) {
            $res['Measurement'] = $this->measurement;
        }
        if (null !== $this->points) {
            $res['Points'] = [];
            if (null !== $this->points && \is_array($this->points)) {
                $n = 0;
                foreach ($this->points as $item) {
                    $res['Points'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return performanceItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }
        if (isset($map['Measurement'])) {
            $model->measurement = $map['Measurement'];
        }
        if (isset($map['Points'])) {
            if (!empty($map['Points'])) {
                $model->points = [];
                $n             = 0;
                foreach ($map['Points'] as $item) {
                    $model->points[$n++] = null !== $item ? points::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
