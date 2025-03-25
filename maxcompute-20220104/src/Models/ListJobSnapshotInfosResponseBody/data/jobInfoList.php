<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListJobSnapshotInfosResponseBody\data;

use AlibabaCloud\Tea\Model;

class jobInfoList extends Model
{
    /**
     * @description The CPU request amount of the job at the snapshot time point. Unit: Core.
     *
     * @example 200
     *
     * @var int
     */
    public $cpuRequest;

    /**
     * @description CPU usage of the job at the snapshot time. Unit: Core.
     *
     * @example 100
     *
     * @var int
     */
    public $cpuUsage;

    /**
     * @description The CPU satisfaction ratio of the job at the snapshot time point (cpuUsage/cpuRequest).
     *
     * @example 0.5
     *
     * @var float
     */
    public $cpuUsageToRequestRatio;

    /**
     * @description The ID of the upstream node.
     *
     * @example 76358164
     *
     * @var string
     */
    public $extNodeId;

    /**
     * @description The account ID of the task owner.
     *
     * @example duty_2
     *
     * @var string
     */
    public $extNodeOnDuty;

    /**
     * @description The upstream platform.
     *
     * @example Dataworks
     *
     * @var string
     */
    public $extPlantFrom;

    /**
     * @description The instance ID.
     *
     * @example 20241028****jkl
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The account that commits the job.
     *
     * @example ALIYUN$7632***@aliyun.com
     *
     * @var string
     */
    public $jobOwner;

    /**
     * @description The type of the job.
     *
     * @example SQL
     *
     * @var string
     */
    public $jobType;

    /**
     * @description Not applicable.
     *
     * @example -1
     *
     * @var float
     */
    public $maxCpuPct;

    /**
     * @description Not applicable.
     *
     * @example -1
     *
     * @var float
     */
    public $maxMemoryPct;

    /**
     * @description The Memory request amount of the job at the snapshot time point. Unit: MB.
     *
     * @example 409600
     *
     * @var int
     */
    public $memoryRequest;

    /**
     * @description Memory usage of the job at the snapshot time. Unit: MB.
     *
     * @example 409600
     *
     * @var int
     */
    public $memoryUsage;

    /**
     * @description The Memory satisfaction ratio of the job at the snapshot time point (memoryUsage/memoryRequest).
     *
     * @example 1
     *
     * @var float
     */
    public $memoryUsageToRequestRatio;

    /**
     * @description The CPU usage ratio of the annual or monthly subscription job at the snapshot time (CPU usage / (reserved CPU guarantee + elastic reserved CPU)). This parameter is not available for pay-as-you-go jobs.
     *
     * @example 0.6
     *
     * @var float
     */
    public $minCpuPct;

    /**
     * @description The memory usage ratio of the annual or monthly subscription job at the observation time (memory usage / (reserved memory guarantee + elastic reserved memory)). This parameter is not available for pay-as-you-go jobs.
     *
     * @example 0.6
     *
     * @var float
     */
    public $minMemoryPct;

    /**
     * @description The priority of the job.
     *
     * @example 9
     *
     * @var int
     */
    public $priority;

    /**
     * @description The name of the MaxCompute project.
     *
     * @example projectA
     *
     * @var string
     */
    public $project;

    /**
     * @description The nickname of the computing Quota used by the job.
     *
     * @example quota_A
     *
     * @var string
     */
    public $quotaNickname;

    /**
     * @description The type of the quota.
     *
     * @example subscription
     *
     * @var string
     */
    public $quotaType;

    /**
     * @description The region ID.
     *
     * @example cn-chengdu
     *
     * @var string
     */
    public $region;

    /**
     * @description The start time of the job.
     * > The time when the job received the first batch of computing resources.
     *
     * @example 1736821805
     *
     * @var int
     */
    public $runningAtTime;

    /**
     * @description The running duration, which is the duration from the runningAtTime to the snapshotTime of the job.  Unit: seconds (s).
     *
     * @example 43
     *
     * @var int
     */
    public $runningTime;

    /**
     * @description The signature of the SQL job.
     *
     * @example signatureabc
     *
     * @var string
     */
    public $signature;

    /**
     * @description The snapshot time.
     *
     * @example 1736821848
     *
     * @var int
     */
    public $snapshotTime;

    /**
     * @description The snapshot status of the job.
     *
     * > The snapshot status is only running.
     *
     * @example running
     *
     * @var string
     */
    public $status;

    /**
     * @description The time when the job was committed.
     *
     * @example 1736821785
     *
     * @var int
     */
    public $submittedAtTime;

    /**
     * @description The tenant ID.
     *
     * @example 213065738244354
     *
     * @var string
     */
    public $tenantId;

    /**
     * @description The interval from the time when the job was submitted to the snapshotTime .Unit: seconds (s).
     *
     * @example 63
     *
     * @var int
     */
    public $totalTime;

    /**
     * @description The duration from the time the job is submitted to the time the job starts to run. Unit: seconds (s).
     *
     * @example 20
     *
     * @var int
     */
    public $waitingTime;
    protected $_name = [
        'cpuRequest' => 'cpuRequest',
        'cpuUsage' => 'cpuUsage',
        'cpuUsageToRequestRatio' => 'cpuUsageToRequestRatio',
        'extNodeId' => 'extNodeId',
        'extNodeOnDuty' => 'extNodeOnDuty',
        'extPlantFrom' => 'extPlantFrom',
        'instanceId' => 'instanceId',
        'jobOwner' => 'jobOwner',
        'jobType' => 'jobType',
        'maxCpuPct' => 'maxCpuPct',
        'maxMemoryPct' => 'maxMemoryPct',
        'memoryRequest' => 'memoryRequest',
        'memoryUsage' => 'memoryUsage',
        'memoryUsageToRequestRatio' => 'memoryUsageToRequestRatio',
        'minCpuPct' => 'minCpuPct',
        'minMemoryPct' => 'minMemoryPct',
        'priority' => 'priority',
        'project' => 'project',
        'quotaNickname' => 'quotaNickname',
        'quotaType' => 'quotaType',
        'region' => 'region',
        'runningAtTime' => 'runningAtTime',
        'runningTime' => 'runningTime',
        'signature' => 'signature',
        'snapshotTime' => 'snapshotTime',
        'status' => 'status',
        'submittedAtTime' => 'submittedAtTime',
        'tenantId' => 'tenantId',
        'totalTime' => 'totalTime',
        'waitingTime' => 'waitingTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->cpuRequest) {
            $res['cpuRequest'] = $this->cpuRequest;
        }
        if (null !== $this->cpuUsage) {
            $res['cpuUsage'] = $this->cpuUsage;
        }
        if (null !== $this->cpuUsageToRequestRatio) {
            $res['cpuUsageToRequestRatio'] = $this->cpuUsageToRequestRatio;
        }
        if (null !== $this->extNodeId) {
            $res['extNodeId'] = $this->extNodeId;
        }
        if (null !== $this->extNodeOnDuty) {
            $res['extNodeOnDuty'] = $this->extNodeOnDuty;
        }
        if (null !== $this->extPlantFrom) {
            $res['extPlantFrom'] = $this->extPlantFrom;
        }
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }
        if (null !== $this->jobOwner) {
            $res['jobOwner'] = $this->jobOwner;
        }
        if (null !== $this->jobType) {
            $res['jobType'] = $this->jobType;
        }
        if (null !== $this->maxCpuPct) {
            $res['maxCpuPct'] = $this->maxCpuPct;
        }
        if (null !== $this->maxMemoryPct) {
            $res['maxMemoryPct'] = $this->maxMemoryPct;
        }
        if (null !== $this->memoryRequest) {
            $res['memoryRequest'] = $this->memoryRequest;
        }
        if (null !== $this->memoryUsage) {
            $res['memoryUsage'] = $this->memoryUsage;
        }
        if (null !== $this->memoryUsageToRequestRatio) {
            $res['memoryUsageToRequestRatio'] = $this->memoryUsageToRequestRatio;
        }
        if (null !== $this->minCpuPct) {
            $res['minCpuPct'] = $this->minCpuPct;
        }
        if (null !== $this->minMemoryPct) {
            $res['minMemoryPct'] = $this->minMemoryPct;
        }
        if (null !== $this->priority) {
            $res['priority'] = $this->priority;
        }
        if (null !== $this->project) {
            $res['project'] = $this->project;
        }
        if (null !== $this->quotaNickname) {
            $res['quotaNickname'] = $this->quotaNickname;
        }
        if (null !== $this->quotaType) {
            $res['quotaType'] = $this->quotaType;
        }
        if (null !== $this->region) {
            $res['region'] = $this->region;
        }
        if (null !== $this->runningAtTime) {
            $res['runningAtTime'] = $this->runningAtTime;
        }
        if (null !== $this->runningTime) {
            $res['runningTime'] = $this->runningTime;
        }
        if (null !== $this->signature) {
            $res['signature'] = $this->signature;
        }
        if (null !== $this->snapshotTime) {
            $res['snapshotTime'] = $this->snapshotTime;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->submittedAtTime) {
            $res['submittedAtTime'] = $this->submittedAtTime;
        }
        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
        }
        if (null !== $this->totalTime) {
            $res['totalTime'] = $this->totalTime;
        }
        if (null !== $this->waitingTime) {
            $res['waitingTime'] = $this->waitingTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return jobInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cpuRequest'])) {
            $model->cpuRequest = $map['cpuRequest'];
        }
        if (isset($map['cpuUsage'])) {
            $model->cpuUsage = $map['cpuUsage'];
        }
        if (isset($map['cpuUsageToRequestRatio'])) {
            $model->cpuUsageToRequestRatio = $map['cpuUsageToRequestRatio'];
        }
        if (isset($map['extNodeId'])) {
            $model->extNodeId = $map['extNodeId'];
        }
        if (isset($map['extNodeOnDuty'])) {
            $model->extNodeOnDuty = $map['extNodeOnDuty'];
        }
        if (isset($map['extPlantFrom'])) {
            $model->extPlantFrom = $map['extPlantFrom'];
        }
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }
        if (isset($map['jobOwner'])) {
            $model->jobOwner = $map['jobOwner'];
        }
        if (isset($map['jobType'])) {
            $model->jobType = $map['jobType'];
        }
        if (isset($map['maxCpuPct'])) {
            $model->maxCpuPct = $map['maxCpuPct'];
        }
        if (isset($map['maxMemoryPct'])) {
            $model->maxMemoryPct = $map['maxMemoryPct'];
        }
        if (isset($map['memoryRequest'])) {
            $model->memoryRequest = $map['memoryRequest'];
        }
        if (isset($map['memoryUsage'])) {
            $model->memoryUsage = $map['memoryUsage'];
        }
        if (isset($map['memoryUsageToRequestRatio'])) {
            $model->memoryUsageToRequestRatio = $map['memoryUsageToRequestRatio'];
        }
        if (isset($map['minCpuPct'])) {
            $model->minCpuPct = $map['minCpuPct'];
        }
        if (isset($map['minMemoryPct'])) {
            $model->minMemoryPct = $map['minMemoryPct'];
        }
        if (isset($map['priority'])) {
            $model->priority = $map['priority'];
        }
        if (isset($map['project'])) {
            $model->project = $map['project'];
        }
        if (isset($map['quotaNickname'])) {
            $model->quotaNickname = $map['quotaNickname'];
        }
        if (isset($map['quotaType'])) {
            $model->quotaType = $map['quotaType'];
        }
        if (isset($map['region'])) {
            $model->region = $map['region'];
        }
        if (isset($map['runningAtTime'])) {
            $model->runningAtTime = $map['runningAtTime'];
        }
        if (isset($map['runningTime'])) {
            $model->runningTime = $map['runningTime'];
        }
        if (isset($map['signature'])) {
            $model->signature = $map['signature'];
        }
        if (isset($map['snapshotTime'])) {
            $model->snapshotTime = $map['snapshotTime'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['submittedAtTime'])) {
            $model->submittedAtTime = $map['submittedAtTime'];
        }
        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }
        if (isset($map['totalTime'])) {
            $model->totalTime = $map['totalTime'];
        }
        if (isset($map['waitingTime'])) {
            $model->waitingTime = $map['waitingTime'];
        }

        return $model;
    }
}
