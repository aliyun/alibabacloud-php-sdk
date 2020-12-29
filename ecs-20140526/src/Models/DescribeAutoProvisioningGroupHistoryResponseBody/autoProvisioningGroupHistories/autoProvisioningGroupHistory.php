<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoProvisioningGroupHistoryResponseBody\autoProvisioningGroupHistories;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoProvisioningGroupHistoryResponseBody\autoProvisioningGroupHistories\autoProvisioningGroupHistory\activityDetails;
use AlibabaCloud\Tea\Model;

class autoProvisioningGroupHistory extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var activityDetails
     */
    public $activityDetails;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $lastEventTime;
    protected $_name = [
        'status'          => 'Status',
        'startTime'       => 'StartTime',
        'activityDetails' => 'ActivityDetails',
        'taskId'          => 'TaskId',
        'lastEventTime'   => 'LastEventTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->activityDetails) {
            $res['ActivityDetails'] = null !== $this->activityDetails ? $this->activityDetails->toMap() : null;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->lastEventTime) {
            $res['LastEventTime'] = $this->lastEventTime;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['ActivityDetails'])) {
            $model->activityDetails = activityDetails::fromMap($map['ActivityDetails']);
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['LastEventTime'])) {
            $model->lastEventTime = $map['LastEventTime'];
        }

        return $model;
    }
}
