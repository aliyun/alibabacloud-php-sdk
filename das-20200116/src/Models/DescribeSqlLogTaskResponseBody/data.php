<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\DescribeSqlLogTaskResponseBody;

use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeSqlLogTaskResponseBody\data\filters;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeSqlLogTaskResponseBody\data\queries;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The time when the task was created. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1681363254423
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The end of the time range to query. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1608888296000
     *
     * @var int
     */
    public $end;

    /**
     * @description Indicates whether the task has expired. Valid values:
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
     * @description The download URL of the export task.
     *
     * @example "https://das-sqllog-download-cn-hongkong.oss-cn-hongkong.aliyuncs.com/****"
     *
     * @var string
     */
    public $export;

    /**
     * @description The filter parameters.
     *
     * @var filters[]
     */
    public $filters;

    /**
     * @description The task name.
     *
     * @var string
     */
    public $name;

    /**
     * @description The results of the offline querying task.
     *
     * @var queries[]
     */
    public $queries;

    /**
     * @description The beginning of the time range to query. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1596177993000
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
     * @example COMPLETED
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
     * @example Query
     *
     * @var string
     */
    public $taskType;

    /**
     * @description The total number of tasks.
     *
     * @example 1
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'createTime' => 'CreateTime',
        'end'        => 'End',
        'expire'     => 'Expire',
        'export'     => 'Export',
        'filters'    => 'Filters',
        'name'       => 'Name',
        'queries'    => 'Queries',
        'start'      => 'Start',
        'status'     => 'Status',
        'taskId'     => 'TaskId',
        'taskType'   => 'TaskType',
        'total'      => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->end) {
            $res['End'] = $this->end;
        }
        if (null !== $this->expire) {
            $res['Expire'] = $this->expire;
        }
        if (null !== $this->export) {
            $res['Export'] = $this->export;
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
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->queries) {
            $res['Queries'] = [];
            if (null !== $this->queries && \is_array($this->queries)) {
                $n = 0;
                foreach ($this->queries as $item) {
                    $res['Queries'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['End'])) {
            $model->end = $map['End'];
        }
        if (isset($map['Expire'])) {
            $model->expire = $map['Expire'];
        }
        if (isset($map['Export'])) {
            $model->export = $map['Export'];
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Queries'])) {
            if (!empty($map['Queries'])) {
                $model->queries = [];
                $n              = 0;
                foreach ($map['Queries'] as $item) {
                    $model->queries[$n++] = null !== $item ? queries::fromMap($item) : $item;
                }
            }
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
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
