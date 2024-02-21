<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models;

use AlibabaCloud\Tea\Model;

class GetPfsMetricTrendsRequest extends Model
{
    /**
     * @description The end of the time range to query. Set this parameter to a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * >  The end time must be later than the start time. You can view the data of up to seven days in the previous 30 days.
     * @example 1678432430967
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The instance ID.
     *
     * @example rm-m5ea73876ukci****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The metric whose trend you want to query. Valid values:
     *
     *   **count**: the number of executions.
     *   **avgRt**: the average execution duration.
     *   **rtRate**: the execution duration percentage.
     *   **rowsExamined**: the total number of scanned rows.
     *
     * @example Count
     *
     * @var string
     */
    public $metric;

    /**
     * @description The node ID.
     *
     * >  You must specify this parameter for an ApsaraDB RDS for MySQL cluster instance and a PolarDB for MySQL cluster.
     * @example r-x****-db-0
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description The beginning of the time range to query. Set this parameter to a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1677461663092
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'endTime'    => 'EndTime',
        'instanceId' => 'InstanceId',
        'metric'     => 'Metric',
        'nodeId'     => 'NodeId',
        'startTime'  => 'StartTime',
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
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->metric) {
            $res['Metric'] = $this->metric;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPfsMetricTrendsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Metric'])) {
            $model->metric = $map['Metric'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
