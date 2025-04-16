<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoProvisioningGroupHistoryResponseBody\autoProvisioningGroupHistories;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoProvisioningGroupHistoryResponseBody\autoProvisioningGroupHistories\autoProvisioningGroupHistory\activityDetails;

class autoProvisioningGroupHistory extends Model
{
    /**
     * @var activityDetails
     */
    public $activityDetails;

    /**
     * @var string
     */
    public $lastEventTime;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'activityDetails' => 'ActivityDetails',
        'lastEventTime' => 'LastEventTime',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'taskId' => 'TaskId',
    ];

    public function validate()
    {
        if (null !== $this->activityDetails) {
            $this->activityDetails->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->activityDetails) {
            $res['ActivityDetails'] = null !== $this->activityDetails ? $this->activityDetails->toArray($noStream) : $this->activityDetails;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
