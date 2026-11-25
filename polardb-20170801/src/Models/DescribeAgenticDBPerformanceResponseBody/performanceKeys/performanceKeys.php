<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeAgenticDBPerformanceResponseBody\performanceKeys;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeAgenticDBPerformanceResponseBody\performanceKeys\performanceKeys\points;

class performanceKeys extends Model
{
    /**
     * @var string
     */
    public $branchId;

    /**
     * @var string
     */
    public $endpointId;

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
        'branchId' => 'BranchId',
        'endpointId' => 'EndpointId',
        'measurement' => 'Measurement',
        'metricName' => 'MetricName',
        'points' => 'Points',
    ];

    public function validate()
    {
        if (null !== $this->points) {
            $this->points->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->branchId) {
            $res['BranchId'] = $this->branchId;
        }

        if (null !== $this->endpointId) {
            $res['EndpointId'] = $this->endpointId;
        }

        if (null !== $this->measurement) {
            $res['Measurement'] = $this->measurement;
        }

        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }

        if (null !== $this->points) {
            $res['Points'] = null !== $this->points ? $this->points->toArray($noStream) : $this->points;
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
        if (isset($map['BranchId'])) {
            $model->branchId = $map['BranchId'];
        }

        if (isset($map['EndpointId'])) {
            $model->endpointId = $map['EndpointId'];
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
