<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class GetHoneypotNodeMetricListRequest extends Model
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
    public $length;
    /**
     * @var string
     */
    public $metricName;
    /**
     * @var string
     */
    public $namespace;
    /**
     * @var string
     */
    public $nodeId;
    /**
     * @var string
     */
    public $period;
    /**
     * @var string
     */
    public $startTime;
    protected $_name = [
        'endTime'    => 'EndTime',
        'express'    => 'Express',
        'length'     => 'Length',
        'metricName' => 'MetricName',
        'namespace'  => 'Namespace',
        'nodeId'     => 'NodeId',
        'period'     => 'Period',
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

        if (null !== $this->length) {
            $res['Length'] = $this->length;
        }

        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }

        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }

        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        if (null !== $this->period) {
            $res['Period'] = $this->period;
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

        if (isset($map['Length'])) {
            $model->length = $map['Length'];
        }

        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }

        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
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
