<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Tea\Model;

class DescribeProjectStepMetricRequest extends Model
{
    /**
     * @example AVG
     *
     * @var string
     */
    public $aggregator;

    /**
     * @example 1689244696
     *
     * @var int
     */
    public $beginTimestamp;

    /**
     * @example 1689254646
     *
     * @var int
     */
    public $endTimestamp;

    /**
     * @example 6
     *
     * @var int
     */
    public $maxPointNum;

    /**
     * @example RPS
     *
     * @var string
     */
    public $metricType;

    /**
     * @example np_dr****
     *
     * @var string
     */
    public $projectId;

    /**
     * @example FULL_TRANSFER
     *
     * @var string
     */
    public $stepName;
    protected $_name = [
        'aggregator'     => 'Aggregator',
        'beginTimestamp' => 'BeginTimestamp',
        'endTimestamp'   => 'EndTimestamp',
        'maxPointNum'    => 'MaxPointNum',
        'metricType'     => 'MetricType',
        'projectId'      => 'ProjectId',
        'stepName'       => 'StepName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aggregator) {
            $res['Aggregator'] = $this->aggregator;
        }
        if (null !== $this->beginTimestamp) {
            $res['BeginTimestamp'] = $this->beginTimestamp;
        }
        if (null !== $this->endTimestamp) {
            $res['EndTimestamp'] = $this->endTimestamp;
        }
        if (null !== $this->maxPointNum) {
            $res['MaxPointNum'] = $this->maxPointNum;
        }
        if (null !== $this->metricType) {
            $res['MetricType'] = $this->metricType;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->stepName) {
            $res['StepName'] = $this->stepName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeProjectStepMetricRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Aggregator'])) {
            $model->aggregator = $map['Aggregator'];
        }
        if (isset($map['BeginTimestamp'])) {
            $model->beginTimestamp = $map['BeginTimestamp'];
        }
        if (isset($map['EndTimestamp'])) {
            $model->endTimestamp = $map['EndTimestamp'];
        }
        if (isset($map['MaxPointNum'])) {
            $model->maxPointNum = $map['MaxPointNum'];
        }
        if (isset($map['MetricType'])) {
            $model->metricType = $map['MetricType'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['StepName'])) {
            $model->stepName = $map['StepName'];
        }

        return $model;
    }
}
