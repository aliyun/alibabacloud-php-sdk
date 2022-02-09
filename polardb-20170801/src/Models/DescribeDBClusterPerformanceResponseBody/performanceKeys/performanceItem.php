<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterPerformanceResponseBody\performanceKeys;

use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterPerformanceResponseBody\performanceKeys\performanceItem\points;
use AlibabaCloud\Tea\Model;

class performanceItem extends Model
{
    /**
     * @var string
     */
    public $DBNodeId;

    /**
     * @var string
     */
    public $measurement;

    /**
     * @var string
     */
    public $metricName;

    /**
     * @var points
     */
    public $points;
    protected $_name = [
        'DBNodeId'    => 'DBNodeId',
        'measurement' => 'Measurement',
        'metricName'  => 'MetricName',
        'points'      => 'Points',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBNodeId) {
            $res['DBNodeId'] = $this->DBNodeId;
        }
        if (null !== $this->measurement) {
            $res['Measurement'] = $this->measurement;
        }
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }
        if (null !== $this->points) {
            $res['Points'] = null !== $this->points ? $this->points->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return performanceItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBNodeId'])) {
            $model->DBNodeId = $map['DBNodeId'];
        }
        if (isset($map['Measurement'])) {
            $model->measurement = $map['Measurement'];
        }
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }
        if (isset($map['Points'])) {
            $model->points = points::fromMap($map['Points']);
        }

        return $model;
    }
}
