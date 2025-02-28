<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;

class DescribeRCMetricListRequest extends Model
{
    /**
     * @var string
     */
    public $endTime;
    /**
     * @var string
     */
    public $express;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var string
     */
    public $length;
    /**
     * @var string
     */
    public $metricName;
    /**
     * @var string
     */
    public $nextToken;
    /**
     * @var string
     */
    public $period;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $startTime;
    protected $_name = [
        'endTime'    => 'EndTime',
        'express'    => 'Express',
        'instanceId' => 'InstanceId',
        'length'     => 'Length',
        'metricName' => 'MetricName',
        'nextToken'  => 'NextToken',
        'period'     => 'Period',
        'regionId'   => 'RegionId',
        'startTime'  => 'StartTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->express) {
            $res['Express'] = $this->express;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->length) {
            $res['Length'] = $this->length;
        }

        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['Express'])) {
            $model->express = $map['Express'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Length'])) {
            $model->length = $map['Length'];
        }

        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
