<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIElasticDatasetAccelerator\V20220801\Models;

use AlibabaCloud\Dara\Model;

class QueryInstanceMetricsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $dimensionsShrink;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $metricType;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $timeStep;
    protected $_name = [
        'dimensionsShrink' => 'Dimensions',
        'endTime' => 'EndTime',
        'metricType' => 'MetricType',
        'startTime' => 'StartTime',
        'timeStep' => 'TimeStep',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dimensionsShrink) {
            $res['Dimensions'] = $this->dimensionsShrink;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->metricType) {
            $res['MetricType'] = $this->metricType;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->timeStep) {
            $res['TimeStep'] = $this->timeStep;
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
            $model->dimensionsShrink = $map['Dimensions'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['MetricType'])) {
            $model->metricType = $map['MetricType'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['TimeStep'])) {
            $model->timeStep = $map['TimeStep'];
        }

        return $model;
    }
}
