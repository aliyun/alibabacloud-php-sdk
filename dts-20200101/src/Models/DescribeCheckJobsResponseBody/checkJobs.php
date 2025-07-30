<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeCheckJobsResponseBody;

use AlibabaCloud\Tea\Model;

class checkJobs extends Model
{
    /**
     * @description Billing type, return values: - **POSTPAY**: Pay-as-you-go (postpaid). - **PREPAY**: Subscription (prepaid).
     *
     * @example POSTPAY
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description checkpoint
     *
     * @example 1111****
     *
     * @var int
     */
    public $checkPoint;

    /**
     * @description Data validation method, with values:
     * - **1**: Full validation. - **2**: Incremental validation.
     *
     * @example 1
     *
     * @var int
     */
    public $checkType;

    /**
     * @description Number of rows with data inconsistency
     *
     * @example 0
     *
     * @var int
     */
    public $diffCount;

    /**
     * @description Synchronization initialization progress, in percentage.
     *
     * @example 1
     *
     * @var int
     */
    public $diffSum;

    /**
     * @description Migration, synchronization, or subscription instance ID.
     *
     * @example dtsz8tc99sy2158b36
     *
     * @var string
     */
    public $dtsInstanceID;

    /**
     * @description Migration, synchronization, or subscription task ID.
     *
     * @example n08o6si4q338b1x
     *
     * @var string
     */
    public $dtsJobId;

    /**
     * @description The number of data rows in the table that have completed validation.
     *
     * @example 15094
     *
     * @var int
     */
    public $finishCount;

    /**
     * @description DTS task ID. In most cases, there is no need to set this parameter.
     *
     * @example c3d12dii27t632g
     *
     * @var string
     */
    public $groupId;

    /**
     * @description Instance specification.
     *
     * @example SMALL
     *
     * @var string
     */
    public $instanceClass;

    /**
     * @description Check the name of the task.
     *
     * @example dtstest
     *
     * @var string
     */
    public $jobName;

    /**
     * @description Task ID.
     *
     * @example as0e1ks426bq3z0
     *
     * @var string
     */
    public $jobStepId;

    /**
     * @description This parameter will be deprecated.
     *
     * @example ****
     *
     * @var string
     */
    public $parentJobType;

    /**
     * @description Region ID to which it belongs.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Check result, return values: -**0**: Check passed -**1**: Check failed
     *
     * @example 0
     *
     * @var int
     */
    public $status;

    /**
     * @description Verify the total number of rows in the data.
     *
     * @example 159
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'chargeType' => 'ChargeType',
        'checkPoint' => 'CheckPoint',
        'checkType' => 'CheckType',
        'diffCount' => 'DiffCount',
        'diffSum' => 'DiffSum',
        'dtsInstanceID' => 'DtsInstanceID',
        'dtsJobId' => 'DtsJobId',
        'finishCount' => 'FinishCount',
        'groupId' => 'GroupId',
        'instanceClass' => 'InstanceClass',
        'jobName' => 'JobName',
        'jobStepId' => 'JobStepId',
        'parentJobType' => 'ParentJobType',
        'regionId' => 'RegionId',
        'status' => 'Status',
        'totalCount' => 'TotalCount',
    ];

    public function validate() {}

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
