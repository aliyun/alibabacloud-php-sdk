<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DescribeMetricDataRequest extends Model
{
    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $metricName;

    /**
     * @var string
     */
    public $period;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $dimensions;

    /**
     * @var string
     */
    public $express;

    /**
     * @var string
     */
    public $length;
    protected $_name = [
        'namespace'  => 'Namespace',
        'metricName' => 'MetricName',
        'period'     => 'Period',
        'startTime'  => 'StartTime',
        'endTime'    => 'EndTime',
        'dimensions' => 'Dimensions',
        'express'    => 'Express',
        'length'     => 'Length',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->dimensions) {
            $res['Dimensions'] = $this->dimensions;
        }
        if (null !== $this->express) {
            $res['Express'] = $this->express;
        }
        if (null !== $this->length) {
            $res['Length'] = $this->length;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeMetricDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Dimensions'])) {
            $model->dimensions = $map['Dimensions'];
        }
        if (isset($map['Express'])) {
            $model->express = $map['Express'];
        }
        if (isset($map['Length'])) {
            $model->length = $map['Length'];
        }

        return $model;
    }
}
