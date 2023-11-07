<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Actiontrail\V20200706\Models\ListDeliveryHistoryJobsResponseBody;

use AlibabaCloud\Tea\Model;

class deliveryHistoryJobs extends Model
{
    /**
     * @description The time when the task was created.
     *
     * @example 2021-04-26T03:17:04Z
     *
     * @var string
     */
    public $createdTime;

    /**
     * @description The time when the task ended.
     *
     * @example 2021-04-26T03:22:04Z
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
     * @description The task ID.
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
     * @description The time when the task started.
     *
     * @example 2021-01-26T03:17:04Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The name of the trail.
     *
     * @example trail-name
     *
     * @var string
     */
    public $trailName;

    /**
     * @description The time when the task was updated.
     *
     * @example 2021-04-26T03:20:08Z
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
        'startTime'   => 'StartTime',
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
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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
     * @return deliveryHistoryJobs
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
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
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
