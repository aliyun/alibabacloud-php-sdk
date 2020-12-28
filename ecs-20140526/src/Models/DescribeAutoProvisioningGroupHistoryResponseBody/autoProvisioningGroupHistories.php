<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoProvisioningGroupHistoryResponseBody;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoProvisioningGroupHistoryResponseBody\autoProvisioningGroupHistories\activityDetails;
use AlibabaCloud\Tea\Model;

class autoProvisioningGroupHistories extends Model
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
     * @var activityDetails[]
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
            $res['ActivityDetails'] = [];
            if (null !== $this->activityDetails && \is_array($this->activityDetails)) {
                $n = 0;
                foreach ($this->activityDetails as $item) {
                    $res['ActivityDetails'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return autoProvisioningGroupHistories
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
            if (!empty($map['ActivityDetails'])) {
                $model->activityDetails = [];
                $n                      = 0;
                foreach ($map['ActivityDetails'] as $item) {
                    $model->activityDetails[$n++] = null !== $item ? activityDetails::fromMap($item) : $item;
                }
            }
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
