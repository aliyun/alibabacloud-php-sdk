<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Dara\Model;

class DescribeMetricsDataRequest extends Model
{
    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $groupByLabels;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $labels;

    /**
     * @var string
     */
    public $limit;

    /**
     * @var string
     */
    public $metrics;

    /**
     * @var string
     */
    public $replicaType;

    /**
     * @var string
     */
    public $sortMetricKey;

    /**
     * @var string
     */
    public $sortOrder;

    /**
     * @var string
     */
    public $startTime;
    protected $_name = [
        'endTime' => 'EndTime',
        'groupByLabels' => 'GroupByLabels',
        'instanceId' => 'InstanceId',
        'labels' => 'Labels',
        'limit' => 'Limit',
        'metrics' => 'Metrics',
        'replicaType' => 'ReplicaType',
        'sortMetricKey' => 'SortMetricKey',
        'sortOrder' => 'SortOrder',
        'startTime' => 'StartTime',
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

        if (null !== $this->groupByLabels) {
            $res['GroupByLabels'] = $this->groupByLabels;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->labels) {
            $res['Labels'] = $this->labels;
        }

        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }

        if (null !== $this->metrics) {
            $res['Metrics'] = $this->metrics;
        }

        if (null !== $this->replicaType) {
            $res['ReplicaType'] = $this->replicaType;
        }

        if (null !== $this->sortMetricKey) {
            $res['SortMetricKey'] = $this->sortMetricKey;
        }

        if (null !== $this->sortOrder) {
            $res['SortOrder'] = $this->sortOrder;
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

        if (isset($map['GroupByLabels'])) {
            $model->groupByLabels = $map['GroupByLabels'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Labels'])) {
            $model->labels = $map['Labels'];
        }

        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }

        if (isset($map['Metrics'])) {
            $model->metrics = $map['Metrics'];
        }

        if (isset($map['ReplicaType'])) {
            $model->replicaType = $map['ReplicaType'];
        }

        if (isset($map['SortMetricKey'])) {
            $model->sortMetricKey = $map['SortMetricKey'];
        }

        if (isset($map['SortOrder'])) {
            $model->sortOrder = $map['SortOrder'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
