<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models;

use AlibabaCloud\Tea\Model;

class DescribeJobMetricDataShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $arrayIndexShrink;

    /**
     * @example job-xxxxx
     *
     * @var string
     */
    public $jobId;

    /**
     * @example cpu_utilization
     *
     * @var string
     */
    public $metricName;

    /**
     * @example Task0
     *
     * @var string
     */
    public $taskName;
    protected $_name = [
        'arrayIndexShrink' => 'ArrayIndex',
        'jobId'            => 'JobId',
        'metricName'       => 'MetricName',
        'taskName'         => 'TaskName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->arrayIndexShrink) {
            $res['ArrayIndex'] = $this->arrayIndexShrink;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeJobMetricDataShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ArrayIndex'])) {
            $model->arrayIndexShrink = $map['ArrayIndex'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        return $model;
    }
}
