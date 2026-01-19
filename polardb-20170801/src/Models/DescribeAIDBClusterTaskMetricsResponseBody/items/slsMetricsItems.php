<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeAIDBClusterTaskMetricsResponseBody\items;

use AlibabaCloud\Dara\Model;

class slsMetricsItems extends Model
{
    /**
     * @var int
     */
    public $currentStep;

    /**
     * @var float
     */
    public $epoch;

    /**
     * @var int
     */
    public $globalStep;

    /**
     * @var string
     */
    public $logTime;

    /**
     * @var mixed[]
     */
    public $metric;

    /**
     * @var string
     */
    public $metricType;

    /**
     * @var string
     */
    public $timestamp;
    protected $_name = [
        'currentStep' => 'CurrentStep',
        'epoch' => 'Epoch',
        'globalStep' => 'GlobalStep',
        'logTime' => 'LogTime',
        'metric' => 'Metric',
        'metricType' => 'MetricType',
        'timestamp' => 'Timestamp',
    ];

    public function validate()
    {
        if (\is_array($this->metric)) {
            Model::validateArray($this->metric);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentStep) {
            $res['CurrentStep'] = $this->currentStep;
        }

        if (null !== $this->epoch) {
            $res['Epoch'] = $this->epoch;
        }

        if (null !== $this->globalStep) {
            $res['GlobalStep'] = $this->globalStep;
        }

        if (null !== $this->logTime) {
            $res['LogTime'] = $this->logTime;
        }

        if (null !== $this->metric) {
            if (\is_array($this->metric)) {
                $res['Metric'] = [];
                foreach ($this->metric as $key1 => $value1) {
                    $res['Metric'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->metricType) {
            $res['MetricType'] = $this->metricType;
        }

        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
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
        if (isset($map['CurrentStep'])) {
            $model->currentStep = $map['CurrentStep'];
        }

        if (isset($map['Epoch'])) {
            $model->epoch = $map['Epoch'];
        }

        if (isset($map['GlobalStep'])) {
            $model->globalStep = $map['GlobalStep'];
        }

        if (isset($map['LogTime'])) {
            $model->logTime = $map['LogTime'];
        }

        if (isset($map['Metric'])) {
            if (!empty($map['Metric'])) {
                $model->metric = [];
                foreach ($map['Metric'] as $key1 => $value1) {
                    $model->metric[$key1] = $value1;
                }
            }
        }

        if (isset($map['MetricType'])) {
            $model->metricType = $map['MetricType'];
        }

        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        return $model;
    }
}
