<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeCacheAnalysisReportListResponseBody\dailyTasks\dailyTask\tasks;

use AlibabaCloud\Tea\Model;

class task extends Model
{
    /**
     * @description The ID of the child node in the cluster instance.
     *
     * @example r-bp1zxszhcgatnx****-db-0
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description The start time of the offline key analytics task.
     *
     * @example 2019-08-01T19:08:49Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The state of the offline key analytics task. Valid values:
     *
     *   **success**
     *   **running**
     *
     * @example success
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the task.
     *
     * @example 156465****
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'nodeId'    => 'NodeId',
        'startTime' => 'StartTime',
        'status'    => 'Status',
        'taskId'    => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return task
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
