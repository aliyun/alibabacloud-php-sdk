<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Tea\Model;

class DescribeMetricsDataRequest extends Model
{
    /**
     * @example 2021-06-13T15:40:43Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @example app,clusterId
     *
     * @var string
     */
    public $groupByLabels;

    /**
     * @example ob317v4uif****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example app:OB,clusterId:ob***
     *
     * @var string
     */
    public $labels;

    /**
     * @example 5
     *
     * @var string
     */
    public $limit;

    /**
     * @example tps
     *
     * @var string
     */
    public $metrics;

    /**
     * @example tps
     *
     * @var string
     */
    public $sortMetricKey;

    /**
     * @example DESC
     *
     * @var string
     */
    public $sortOrder;

    /**
     * @example 2021-06-13T15:40:43Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'endTime'       => 'EndTime',
        'groupByLabels' => 'GroupByLabels',
        'instanceId'    => 'InstanceId',
        'labels'        => 'Labels',
        'limit'         => 'Limit',
        'metrics'       => 'Metrics',
        'sortMetricKey' => 'SortMetricKey',
        'sortOrder'     => 'SortOrder',
        'startTime'     => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return DescribeMetricsDataRequest
     */
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
