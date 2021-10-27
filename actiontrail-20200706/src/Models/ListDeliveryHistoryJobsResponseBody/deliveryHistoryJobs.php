<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Actiontrail\V20200706\Models\ListDeliveryHistoryJobsResponseBody;

use AlibabaCloud\Tea\Model;

class deliveryHistoryJobs extends Model
{
    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $homeRegion;

    /**
     * @var int
     */
    public $jobId;

    /**
     * @var int
     */
    public $jobStatus;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $trailName;

    /**
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
