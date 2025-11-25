<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListJobSnapshotInfosResponseBody\data;

use AlibabaCloud\Dara\Model;

class jobInfoList extends Model
{
    /**
     * @var int
     */
    public $cpuRequest;

    /**
     * @var int
     */
    public $cpuUsage;

    /**
     * @var float
     */
    public $cpuUsageToRequestRatio;

    /**
     * @var string
     */
    public $extNodeId;

    /**
     * @var string
     */
    public $extNodeOnDuty;

    /**
     * @var string
     */
    public $extPlantFrom;

    /**
     * @var string
     */
    public $extPlatformId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $jobOwner;

    /**
     * @var string
     */
    public $jobType;

    /**
     * @var float
     */
    public $maxCpuPct;

    /**
     * @var float
     */
    public $maxMemoryPct;

    /**
     * @var int
     */
    public $memoryRequest;

    /**
     * @var int
     */
    public $memoryUsage;

    /**
     * @var float
     */
    public $memoryUsageToRequestRatio;

    /**
     * @var float
     */
    public $minCpuPct;

    /**
     * @var float
     */
    public $minMemoryPct;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var string
     */
    public $project;

    /**
     * @var string
     */
    public $quotaNickname;

    /**
     * @var string
     */
    public $quotaType;

    /**
     * @var string
     */
    public $region;

    /**
     * @var int
     */
    public $runningAtTime;

    /**
     * @var int
     */
    public $runningTime;

    /**
     * @var string
     */
    public $signature;

    /**
     * @var int
     */
    public $snapshotTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $submittedAtTime;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var int
     */
    public $totalTime;

    /**
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
        'extPlatformId' => 'extPlatformId',
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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->extPlatformId) {
            $res['extPlatformId'] = $this->extPlatformId;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['extPlatformId'])) {
            $model->extPlatformId = $map['extPlatformId'];
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
