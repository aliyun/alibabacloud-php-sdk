<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Actiontrail\V20200706\Models;

use AlibabaCloud\SDK\Actiontrail\V20200706\Models\GetDeliveryHistoryJobResponseBody\status;
use AlibabaCloud\Tea\Model;

class GetDeliveryHistoryJobResponseBody extends Model
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
    public $requestId;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var status[]
     */
    public $status;

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
