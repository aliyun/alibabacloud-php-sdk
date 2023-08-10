<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeCheckJobsResponseBody;

use AlibabaCloud\Tea\Model;

class checkJobs extends Model
{
    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var int
     */
    public $checkPoint;

    /**
     * @var int
     */
    public $checkType;

    /**
     * @var int
     */
    public $diffCount;

    /**
     * @var int
     */
    public $diffSum;

    /**
     * @var string
     */
    public $dtsInstanceID;

    /**
     * @var string
     */
    public $dtsJobId;

    /**
     * @var int
     */
    public $finishCount;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $instanceClass;

    /**
     * @var string
     */
    public $jobName;

    /**
     * @var string
     */
    public $jobStepId;

    /**
     * @var string
     */
    public $parentJobType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'chargeType'    => 'ChargeType',
        'checkPoint'    => 'CheckPoint',
        'checkType'     => 'CheckType',
        'diffCount'     => 'DiffCount',
        'diffSum'       => 'DiffSum',
        'dtsInstanceID' => 'DtsInstanceID',
        'dtsJobId'      => 'DtsJobId',
        'finishCount'   => 'FinishCount',
        'groupId'       => 'GroupId',
        'instanceClass' => 'InstanceClass',
        'jobName'       => 'JobName',
        'jobStepId'     => 'JobStepId',
        'parentJobType' => 'ParentJobType',
        'regionId'      => 'RegionId',
        'status'        => 'Status',
        'totalCount'    => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->checkPoint) {
            $res['CheckPoint'] = $this->checkPoint;
        }
        if (null !== $this->checkType) {
            $res['CheckType'] = $this->checkType;
        }
        if (null !== $this->diffCount) {
            $res['DiffCount'] = $this->diffCount;
        }
        if (null !== $this->diffSum) {
            $res['DiffSum'] = $this->diffSum;
        }
        if (null !== $this->dtsInstanceID) {
            $res['DtsInstanceID'] = $this->dtsInstanceID;
        }
        if (null !== $this->dtsJobId) {
            $res['DtsJobId'] = $this->dtsJobId;
        }
        if (null !== $this->finishCount) {
            $res['FinishCount'] = $this->finishCount;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->instanceClass) {
            $res['InstanceClass'] = $this->instanceClass;
        }
        if (null !== $this->jobName) {
            $res['JobName'] = $this->jobName;
        }
        if (null !== $this->jobStepId) {
            $res['JobStepId'] = $this->jobStepId;
        }
        if (null !== $this->parentJobType) {
            $res['ParentJobType'] = $this->parentJobType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return checkJobs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['CheckPoint'])) {
            $model->checkPoint = $map['CheckPoint'];
        }
        if (isset($map['CheckType'])) {
            $model->checkType = $map['CheckType'];
        }
        if (isset($map['DiffCount'])) {
            $model->diffCount = $map['DiffCount'];
        }
        if (isset($map['DiffSum'])) {
            $model->diffSum = $map['DiffSum'];
        }
        if (isset($map['DtsInstanceID'])) {
            $model->dtsInstanceID = $map['DtsInstanceID'];
        }
        if (isset($map['DtsJobId'])) {
            $model->dtsJobId = $map['DtsJobId'];
        }
        if (isset($map['FinishCount'])) {
            $model->finishCount = $map['FinishCount'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['InstanceClass'])) {
            $model->instanceClass = $map['InstanceClass'];
        }
        if (isset($map['JobName'])) {
            $model->jobName = $map['JobName'];
        }
        if (isset($map['JobStepId'])) {
            $model->jobStepId = $map['JobStepId'];
        }
        if (isset($map['ParentJobType'])) {
            $model->parentJobType = $map['ParentJobType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
