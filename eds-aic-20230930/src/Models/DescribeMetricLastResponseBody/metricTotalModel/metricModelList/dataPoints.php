<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeMetricLastResponseBody\metricTotalModel\metricModelList;

use AlibabaCloud\Dara\Model;

class dataPoints extends Model
{
    /**
     * @var float
     */
    public $average;

    /**
     * @var string
     */
    public $gpuId;

    /**
     * @var float
     */
    public $maximum;

    /**
     * @var float
     */
    public $minimum;

    /**
     * @var int
     */
    public $timestamp;
    protected $_name = [
        'average' => 'Average',
        'gpuId' => 'GpuId',
        'maximum' => 'Maximum',
        'minimum' => 'Minimum',
        'timestamp' => 'Timestamp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->average) {
            $res['Average'] = $this->average;
        }

        if (null !== $this->gpuId) {
            $res['GpuId'] = $this->gpuId;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Average'])) {
            $model->average = $map['Average'];
        }

        if (isset($map['GpuId'])) {
            $model->gpuId = $map['GpuId'];
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
