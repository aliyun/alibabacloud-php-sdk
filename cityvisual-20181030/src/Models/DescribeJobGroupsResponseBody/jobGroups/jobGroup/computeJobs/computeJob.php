<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cityvisual\V20181030\Models\DescribeJobGroupsResponseBody\jobGroups\jobGroup\computeJobs;

use AlibabaCloud\Tea\Model;

class computeJob extends Model
{
    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $computeJobName;

    /**
     * @var string
     */
    public $computeJobId;

    /**
     * @var string
     */
    public $computeJobStatus;

    /**
     * @var int
     */
    public $duration;
    protected $_name = [
        'endTime'          => 'EndTime',
        'startTime'        => 'StartTime',
        'computeJobName'   => 'ComputeJobName',
        'computeJobId'     => 'ComputeJobId',
        'computeJobStatus' => 'ComputeJobStatus',
        'duration'         => 'Duration',
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
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->computeJobName) {
            $res['ComputeJobName'] = $this->computeJobName;
        }
        if (null !== $this->computeJobId) {
            $res['ComputeJobId'] = $this->computeJobId;
        }
        if (null !== $this->computeJobStatus) {
            $res['ComputeJobStatus'] = $this->computeJobStatus;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return computeJob
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['ComputeJobName'])) {
            $model->computeJobName = $map['ComputeJobName'];
        }
        if (isset($map['ComputeJobId'])) {
            $model->computeJobId = $map['ComputeJobId'];
        }
        if (isset($map['ComputeJobStatus'])) {
            $model->computeJobStatus = $map['ComputeJobStatus'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }

        return $model;
    }
}
