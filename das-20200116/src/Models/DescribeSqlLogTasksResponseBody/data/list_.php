<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\DescribeSqlLogTasksResponseBody\data;

use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeSqlLogTasksResponseBody\data\list_\filters;
use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @description The time when the analysis task was complete. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1712751923000
     *
     * @var int
     */
    public $analysisTaskFinishTime;

    /**
     * @description The state of the analysis task.
     *
     * >  This parameter is a system parameter. You do not need to pay attention to the parameter.
     * @example SCAN_ANALYZE_COMPLETED
     *
     * @var string
     */
    public $analysisTaskStatus;

    /**
     * @description The time when the task was created. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1681363254423
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The time when the task ended. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1705975320000
     *
     * @var int
     */
    public $end;

    /**
     * @description Indicates whether the task expired. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example false
     *
     * @var bool
     */
    public $expire;

    /**
     * @description The filter parameters.
     *
     * @var filters[]
     */
    public $filters;

    /**
     * @description The ID of the database instance.
     *
     * @example rm-2zew761kf7ho18752
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The number of log records.
     *
     * @example 99999
     *
     * @var int
     */
    public $logCount;

    /**
     * @description The task name.
     *
     * @example test01
     *
     * @var string
     */
    public $name;

    /**
     * @description The task progress.
     *
     * @example 100
     *
     * @var int
     */
    public $progress;

    /**
     * @description The URL that is returned if the value of TaskType is **Export**.
     *
     * @example https://das-sqllog-download-cn-shanghai.oss-cn-shanghai.aliyuncs.com/la
     *
     * @var string
     */
    public $result;

    /**
     * @description The number of files that are scanned.
     *
     * @example 3000
     *
     * @var int
     */
    public $scanFileSize;

    /**
     * @description The time when the task started. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1683859555482
     *
     * @var int
     */
    public $start;

    /**
     * @description The task state. Valid values:
     *
     *   **INIT**: The task is to be scheduled.
     *   **RUNNING**: The task is running.
     *   **FAILED**: The task failed.
     *   **CANCELED**: The task is canceled.
     *   **COMPLETED**: The task is complete.
     *
     * >  If a task is in the **COMPLETED** state, you can view the results of the task.
     * @example RUNNING
     *
     * @var string
     */
    public $status;

    /**
     * @description The task ID.
     *
     * @example 9a4f5c4494dbd6713185d87a97aa53e8
     *
     * @var string
     */
    public $taskId;

    /**
     * @description The task type. Valid values:
     *
     *   **Export**
     *   **Query**
     *
     * @example Export
     *
     * @var string
     */
    public $taskType;
    protected $_name = [
        'analysisTaskFinishTime' => 'AnalysisTaskFinishTime',
        'analysisTaskStatus'     => 'AnalysisTaskStatus',
        'createTime'             => 'CreateTime',
        'end'                    => 'End',
        'expire'                 => 'Expire',
        'filters'                => 'Filters',
        'instanceId'             => 'InstanceId',
        'logCount'               => 'LogCount',
        'name'                   => 'Name',
        'progress'               => 'Progress',
        'result'                 => 'Result',
        'scanFileSize'           => 'ScanFileSize',
        'start'                  => 'Start',
        'status'                 => 'Status',
        'taskId'                 => 'TaskId',
        'taskType'               => 'TaskType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->analysisTaskFinishTime) {
            $res['AnalysisTaskFinishTime'] = $this->analysisTaskFinishTime;
        }
        if (null !== $this->analysisTaskStatus) {
            $res['AnalysisTaskStatus'] = $this->analysisTaskStatus;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->end) {
            $res['End'] = $this->end;
        }
        if (null !== $this->expire) {
            $res['Expire'] = $this->expire;
        }
        if (null !== $this->filters) {
            $res['Filters'] = [];
            if (null !== $this->filters && \is_array($this->filters)) {
                $n = 0;
                foreach ($this->filters as $item) {
                    $res['Filters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->logCount) {
            $res['LogCount'] = $this->logCount;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }
        if (null !== $this->scanFileSize) {
            $res['ScanFileSize'] = $this->scanFileSize;
        }
        if (null !== $this->start) {
            $res['Start'] = $this->start;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AnalysisTaskFinishTime'])) {
            $model->analysisTaskFinishTime = $map['AnalysisTaskFinishTime'];
        }
        if (isset($map['AnalysisTaskStatus'])) {
            $model->analysisTaskStatus = $map['AnalysisTaskStatus'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['End'])) {
            $model->end = $map['End'];
        }
        if (isset($map['Expire'])) {
            $model->expire = $map['Expire'];
        }
        if (isset($map['Filters'])) {
            if (!empty($map['Filters'])) {
                $model->filters = [];
                $n              = 0;
                foreach ($map['Filters'] as $item) {
                    $model->filters[$n++] = null !== $item ? filters::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['LogCount'])) {
            $model->logCount = $map['LogCount'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }
        if (isset($map['ScanFileSize'])) {
            $model->scanFileSize = $map['ScanFileSize'];
        }
        if (isset($map['Start'])) {
            $model->start = $map['Start'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        return $model;
    }
}
