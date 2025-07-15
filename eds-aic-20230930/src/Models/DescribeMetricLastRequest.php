<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Tea\Model;

class DescribeMetricLastRequest extends Model
{
    /**
     * @var string[]
     */
    public $androidInstanceIds;

    /**
     * @example 2019-01-31 11:00:00
     *
     * @var string
     */
    public $endTime;

    /**
     * @example 1000
     *
     * @var string
     */
    public $length;

    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $metricNames;

    /**
     * @example AAAAAV3MpHK1AP0pfERHZN5pu6l5V9uONHqPtDLM2U8s****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example 60
     *
     * @var int
     */
    public $period;

    /**
     * @example 2019-01-31 10:00:00
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'androidInstanceIds' => 'AndroidInstanceIds',
        'endTime' => 'EndTime',
        'length' => 'Length',
        'metricNames' => 'MetricNames',
        'nextToken' => 'NextToken',
        'period' => 'Period',
        'startTime' => 'StartTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->androidInstanceIds) {
            $res['AndroidInstanceIds'] = $this->androidInstanceIds;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->length) {
            $res['Length'] = $this->length;
        }
        if (null !== $this->metricNames) {
            $res['MetricNames'] = $this->metricNames;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeMetricLastRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AndroidInstanceIds'])) {
            if (!empty($map['AndroidInstanceIds'])) {
                $model->androidInstanceIds = $map['AndroidInstanceIds'];
            }
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Length'])) {
            $model->length = $map['Length'];
        }
        if (isset($map['MetricNames'])) {
            if (!empty($map['MetricNames'])) {
                $model->metricNames = $map['MetricNames'];
            }
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
