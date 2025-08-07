<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeAIDBClusterPerformanceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeAIDBClusterPerformanceResponseBody\performanceKeys\points;

class performanceKeys extends Model
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
     * @var points[]
     */
    public $points;
    protected $_name = [
        'DBNodeId' => 'DBNodeId',
        'measurement' => 'Measurement',
        'metricName' => 'MetricName',
        'points' => 'Points',
    ];

    public function validate()
    {
        if (\is_array($this->points)) {
            Model::validateArray($this->points);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->points)) {
                $res['Points'] = [];
                $n1 = 0;
                foreach ($this->points as $item1) {
                    $res['Points'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['Points'])) {
                $model->points = [];
                $n1 = 0;
                foreach ($map['Points'] as $item1) {
                    $model->points[$n1] = points::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
