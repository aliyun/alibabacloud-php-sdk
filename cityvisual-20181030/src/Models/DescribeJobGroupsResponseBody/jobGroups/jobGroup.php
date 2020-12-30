<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cityvisual\V20181030\Models\DescribeJobGroupsResponseBody\jobGroups;

use AlibabaCloud\SDK\Cityvisual\V20181030\Models\DescribeJobGroupsResponseBody\jobGroups\jobGroup\computeJobs;
use AlibabaCloud\SDK\Cityvisual\V20181030\Models\DescribeJobGroupsResponseBody\jobGroups\jobGroup\jobGroupParams;
use AlibabaCloud\Tea\Model;

class jobGroup extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $jobGroupId;

    /**
     * @var string
     */
    public $algoLibId;

    /**
     * @var int
     */
    public $jobCount;

    /**
     * @var string
     */
    public $jobGroupName;

    /**
     * @var jobGroupParams
     */
    public $jobGroupParams;

    /**
     * @var string
     */
    public $resourceProfileId;

    /**
     * @var int
     */
    public $streamPerJob;

    /**
     * @var int
     */
    public $planedJobCount;

    /**
     * @var computeJobs
     */
    public $computeJobs;
    protected $_name = [
        'status'            => 'Status',
        'jobGroupId'        => 'JobGroupId',
        'algoLibId'         => 'AlgoLibId',
        'jobCount'          => 'JobCount',
        'jobGroupName'      => 'JobGroupName',
        'jobGroupParams'    => 'JobGroupParams',
        'resourceProfileId' => 'ResourceProfileId',
        'streamPerJob'      => 'StreamPerJob',
        'planedJobCount'    => 'PlanedJobCount',
        'computeJobs'       => 'ComputeJobs',
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
        if (null !== $this->jobGroupId) {
            $res['JobGroupId'] = $this->jobGroupId;
        }
        if (null !== $this->algoLibId) {
            $res['AlgoLibId'] = $this->algoLibId;
        }
        if (null !== $this->jobCount) {
            $res['JobCount'] = $this->jobCount;
        }
        if (null !== $this->jobGroupName) {
            $res['JobGroupName'] = $this->jobGroupName;
        }
        if (null !== $this->jobGroupParams) {
            $res['JobGroupParams'] = null !== $this->jobGroupParams ? $this->jobGroupParams->toMap() : null;
        }
        if (null !== $this->resourceProfileId) {
            $res['ResourceProfileId'] = $this->resourceProfileId;
        }
        if (null !== $this->streamPerJob) {
            $res['StreamPerJob'] = $this->streamPerJob;
        }
        if (null !== $this->planedJobCount) {
            $res['PlanedJobCount'] = $this->planedJobCount;
        }
        if (null !== $this->computeJobs) {
            $res['ComputeJobs'] = null !== $this->computeJobs ? $this->computeJobs->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return jobGroup
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['JobGroupId'])) {
            $model->jobGroupId = $map['JobGroupId'];
        }
        if (isset($map['AlgoLibId'])) {
            $model->algoLibId = $map['AlgoLibId'];
        }
        if (isset($map['JobCount'])) {
            $model->jobCount = $map['JobCount'];
        }
        if (isset($map['JobGroupName'])) {
            $model->jobGroupName = $map['JobGroupName'];
        }
        if (isset($map['JobGroupParams'])) {
            $model->jobGroupParams = jobGroupParams::fromMap($map['JobGroupParams']);
        }
        if (isset($map['ResourceProfileId'])) {
            $model->resourceProfileId = $map['ResourceProfileId'];
        }
        if (isset($map['StreamPerJob'])) {
            $model->streamPerJob = $map['StreamPerJob'];
        }
        if (isset($map['PlanedJobCount'])) {
            $model->planedJobCount = $map['PlanedJobCount'];
        }
        if (isset($map['ComputeJobs'])) {
            $model->computeJobs = computeJobs::fromMap($map['ComputeJobs']);
        }

        return $model;
    }
}
