<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\CreateScheduledPreloadExecutionsResponseBody;

use AlibabaCloud\Tea\Model;

class failedExecutions extends Model
{
    /**
     * @description The ID of the Alibaba Cloud account.
     *
     * @example 15685865xxx14622
     *
     * @var string
     */
    public $aliUid;

    /**
     * @description The end time of the prefetch plans.
     *
     * @example 2024-06-03T02:43:35Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The ID of the prefetch plan.
     *
     * @example 66599bd7397885b43804901c
     *
     * @var string
     */
    public $id;

    /**
     * @description The time interval between each batch execution. Unit: seconds.
     *
     * @example 60
     *
     * @var int
     */
    public $interval;

    /**
     * @description The ID of the prefetch task.
     *
     * @example 665d3af3621bccf3fe29e1a4
     *
     * @var string
     */
    public $jobId;

    /**
     * @description The number of URLs prefetched in each batch.
     *
     * @example 10
     *
     * @var int
     */
    public $sliceLen;

    /**
     * @description The start time of the prefetch plans.
     *
     * @example 2024-06-02T02:43:35Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The status of the prefetch plan. Valid values:
     *
     *   **waiting**
     *   **running**
     *   **finished**
     *   **failed**
     *   **stopped**
     *
     * @example running
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'aliUid' => 'AliUid',
        'endTime' => 'EndTime',
        'id' => 'Id',
        'interval' => 'Interval',
        'jobId' => 'JobId',
        'sliceLen' => 'SliceLen',
        'startTime' => 'StartTime',
        'status' => 'Status',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->sliceLen) {
            $res['SliceLen'] = $this->sliceLen;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return failedExecutions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['SliceLen'])) {
            $model->sliceLen = $map['SliceLen'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
