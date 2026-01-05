<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIElasticDatasetAccelerator\V20220801\Models;

use AlibabaCloud\Dara\Model;

class QueryInstanceMetricsRequest extends Model
{
    /**
     * @var mixed[]
     */
    public $dimensions;

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
        'dimensions' => 'Dimensions',
        'endTime' => 'EndTime',
        'metricType' => 'MetricType',
        'startTime' => 'StartTime',
        'timeStep' => 'TimeStep',
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
                foreach ($this->dimensions as $key1 => $value1) {
                    $res['Dimensions'][$key1] = $value1;
                }
            }
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
            if (!empty($map['Dimensions'])) {
                $model->dimensions = [];
                foreach ($map['Dimensions'] as $key1 => $value1) {
                    $model->dimensions[$key1] = $value1;
                }
            }
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
