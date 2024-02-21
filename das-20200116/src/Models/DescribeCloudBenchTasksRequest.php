<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models;

use AlibabaCloud\Tea\Model;

class DescribeCloudBenchTasksRequest extends Model
{
    /**
     * @description The end of the time range to query. Set this parameter to a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * >  The end time must be later than the start time.
     * @example 1596177993001
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The page number. The value must be a positive integer. Default value: 1.
     *
     * @example 1
     *
     * @var string
     */
    public $pageNo;

    /**
     * @description The number of entries per page. The value must be a positive integer. Default value: 10.
     *
     * @example 10
     *
     * @var string
     */
    public $pageSize;

    /**
     * @description The beginning of the time range to query. Set this parameter to a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1596177993000
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The status of the stress testing task. Valid values:
     *
     *   **SUCCESS**: The task is successful.
     *   **IGNORED**: The task is ignored.
     *   **RUNNING**: The task is running.
     *   **EXCEPTION**: The task is abnormal.
     *
     * @example SUCCESS
     *
     * @var string
     */
    public $status;

    /**
     * @description The type of the stress testing task. Valid values:
     *
     *   **pressure test** (default): A task of this type replays the traffic that is captured from the source instance on the destination instance at the maximum playback rate that is supported by the destination instance.
     *   **smart pressure test**: A task of this type analyzes the traffic that is captured from the source instance over a short period of time and generates traffic on the destination instance for continuous stress testing. The business model based on which the traffic is generated on the destination instance and the traffic distribution are consistent with those on the source instance. Stress testing tasks of this type can help you reduce the amount of time that is consumed to collect data from the source instance and reduce storage costs and performance overheads.
     *
     * @example pressure test
     *
     * @var string
     */
    public $taskType;
    protected $_name = [
        'endTime'   => 'EndTime',
        'pageNo'    => 'PageNo',
        'pageSize'  => 'PageSize',
        'startTime' => 'StartTime',
        'status'    => 'Status',
        'taskType'  => 'TaskType',
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
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCloudBenchTasksRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        return $model;
    }
}
