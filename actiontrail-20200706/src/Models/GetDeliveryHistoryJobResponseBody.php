<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Actiontrail\V20200706\Models;

use AlibabaCloud\SDK\Actiontrail\V20200706\Models\GetDeliveryHistoryJobResponseBody\status;
use AlibabaCloud\Tea\Model;

class GetDeliveryHistoryJobResponseBody extends Model
{
    /**
     * @description The time when the task was created.
     *
     * @example 2021-05-27T07:15:03Z
     *
     * @var string
     */
    public $createdTime;

    /**
     * @description The time when the task ended.
     *
     * @example 2021-05-27T07:20:03Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The home region of the trail.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $homeRegion;

    /**
     * @description The ID of the task.
     *
     * @example 16602
     *
     * @var int
     */
    public $jobId;

    /**
     * @description The task status. Valid values:
     *
     *   0: The task is initializing.
     *   1: The task is delivering historical events.
     *   2: The task is complete.
     *   3: The task fails.
     *
     * @example 2
     *
     * @var int
     */
    public $jobStatus;

    /**
     * @description The ID of the request.
     *
     * @example FAFEC427-A00D-5653-B837-D0FA52220D8C
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The time when the task started.
     *
     * @example 2021-02-26T07:15:03Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description A list of task statuses in each region.
     *
     * @var status[]
     */
    public $status;

    /**
     * @description The name of the trail based on which the task delivers events.
     *
     * @example trail-name
     *
     * @var string
     */
    public $trailName;

    /**
     * @description The time when the task was updated.
     *
     * @example 2021-05-27T07:28:47Z
     *
     * @var string
     */
    public $updatedTime;
    protected $_name = [
        'createdTime' => 'CreatedTime',
        'endTime'     => 'EndTime',
        'homeRegion'  => 'HomeRegion',
        'jobId'       => 'JobId',
        'jobStatus'   => 'JobStatus',
        'requestId'   => 'RequestId',
        'startTime'   => 'StartTime',
        'status'      => 'Status',
        'trailName'   => 'TrailName',
        'updatedTime' => 'UpdatedTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->homeRegion) {
            $res['HomeRegion'] = $this->homeRegion;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->jobStatus) {
            $res['JobStatus'] = $this->jobStatus;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = [];
            if (null !== $this->status && \is_array($this->status)) {
                $n = 0;
                foreach ($this->status as $item) {
                    $res['Status'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->trailName) {
            $res['TrailName'] = $this->trailName;
        }
        if (null !== $this->updatedTime) {
            $res['UpdatedTime'] = $this->updatedTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDeliveryHistoryJobResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['HomeRegion'])) {
            $model->homeRegion = $map['HomeRegion'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['JobStatus'])) {
            $model->jobStatus = $map['JobStatus'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            if (!empty($map['Status'])) {
                $model->status = [];
                $n             = 0;
                foreach ($map['Status'] as $item) {
                    $model->status[$n++] = null !== $item ? status::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TrailName'])) {
            $model->trailName = $map['TrailName'];
        }
        if (isset($map['UpdatedTime'])) {
            $model->updatedTime = $map['UpdatedTime'];
        }

        return $model;
    }
}
