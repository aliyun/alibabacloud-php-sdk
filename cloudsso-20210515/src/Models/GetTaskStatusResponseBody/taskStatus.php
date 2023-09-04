<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetTaskStatusResponseBody;

use AlibabaCloud\Tea\Model;

class taskStatus extends Model
{
    /**
     * @description The time when the task ended.
     *
     * @example 2021-11-05T02:58:08Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The cause of the task failure.
     *
     * >  This parameter is returned only when the value of `Status` is `Failed`.
     * @example No Permission.
     *
     * @var string
     */
    public $failureReason;

    /**
     * @description The time when the task started.
     *
     * @example 2021-11-05T02:58:07Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The status of the task. Valid values:
     *
     *   InProgress: The task is running.
     *   Success: The task is successful.
     *   Failed: The task failed.
     *
     * @example Success
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the task.
     *
     * @example t-shfqw1u1edszvxw5****
     *
     * @var string
     */
    public $taskId;

    /**
     * @description The type of the task. Valid values:
     *
     *   ProvisionAccessConfiguration: An access configuration is provisioned.
     *   DeprovisionAccessConfiguration: An access configuration is de-provisioned.
     *   CreateAccessAssignment: Access permissions on an account in the resource directory are assigned.
     *   DeleteAccessAssignment: Access permissions on an account in the resource directory are removed.
     *
     * @example DeleteAccessAssignment
     *
     * @var string
     */
    public $taskType;
    protected $_name = [
        'endTime'       => 'EndTime',
        'failureReason' => 'FailureReason',
        'startTime'     => 'StartTime',
        'status'        => 'Status',
        'taskId'        => 'TaskId',
        'taskType'      => 'TaskType',
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
        if (null !== $this->failureReason) {
            $res['FailureReason'] = $this->failureReason;
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
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return taskStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['FailureReason'])) {
            $model->failureReason = $map['FailureReason'];
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
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        return $model;
    }
}
