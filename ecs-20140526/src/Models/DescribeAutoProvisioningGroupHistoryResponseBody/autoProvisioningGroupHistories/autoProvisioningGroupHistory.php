<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoProvisioningGroupHistoryResponseBody\autoProvisioningGroupHistories;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoProvisioningGroupHistoryResponseBody\autoProvisioningGroupHistories\autoProvisioningGroupHistory\activityDetails;
use AlibabaCloud\Tea\Model;

class autoProvisioningGroupHistory extends Model
{
    /**
     * @description An array consisting of ActivityDetail data.
     *
     * @var activityDetails
     */
    public $activityDetails;

    /**
     * @description The execution time of the last instance creation performed by the single scheduling task.
     *
     * @example 2019-04-01T15:10:20Z
     *
     * @var string
     */
    public $lastEventTime;

    /**
     * @description The start time of executing the single scheduling task.
     *
     * @example 2019-04-01T15:10:20Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The execution status of the single scheduling task. Valid values:
     *
     *   prepare: The scheduling task is being executed.
     *   success: The scheduling task is executed.
     *   failed: The scheduling task failed to be executed.
     *
     * @example success
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the scheduling task.
     *
     * @example apg-task-bp67acfmxazb4p****
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'activityDetails' => 'ActivityDetails',
        'lastEventTime'   => 'LastEventTime',
        'startTime'       => 'StartTime',
        'status'          => 'Status',
        'taskId'          => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activityDetails) {
            $res['ActivityDetails'] = null !== $this->activityDetails ? $this->activityDetails->toMap() : null;
        }
        if (null !== $this->lastEventTime) {
            $res['LastEventTime'] = $this->lastEventTime;
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
     * @return autoProvisioningGroupHistory
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActivityDetails'])) {
            $model->activityDetails = activityDetails::fromMap($map['ActivityDetails']);
        }
        if (isset($map['LastEventTime'])) {
            $model->lastEventTime = $map['LastEventTime'];
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
