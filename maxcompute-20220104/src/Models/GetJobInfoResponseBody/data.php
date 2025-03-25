<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetJobInfoResponseBody;

use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetJobInfoResponseBody\data\jobSubStatusList;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetJobInfoResponseBody\data\sceneResults;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description CPU usage of the job at the snapshot time. Unit: Core.
     *
     * @example 10
     *
     * @var int
     */
    public $cuUsage;

    /**
     * @description The time when the job was finished.
     *
     * @example 1672112913
     *
     * @var int
     */
    public $endAtTime;

    /**
     * @description The ID of the upstream node.
     *
     * @example node_4
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
     * @example platform_3
     *
     * @var string
     */
    public $extPlantFrom;

    /**
     * @description The amount of scanned data for the job. Unit: byte.
     *
     * @example 1234
     *
     * @var float
     */
    public $inputBytes;

    /**
     * @description The instance ID.
     *
     * @example 20230410****60gg
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
     * @description The list of sub-status of the job.
     *
     * @var jobSubStatusList[]
     */
    public $jobSubStatusList;

    /**
     * @description The type of the job.
     *
     * @example SQL
     *
     * @var string
     */
    public $jobType;

    /**
     * @description Memory usage of the job at the snapshot time. Unit: MB.
     *
     * @example 40
     *
     * @var int
     */
    public $memoryUsage;

    /**
     * @description The priority of the job.
     *
     * @example 1
     *
     * @var int
     */
    public $priority;

    /**
     * @description The name of the project.
     *
     * @example dp_cdm_prod
     *
     * @var string
     */
    public $project;

    /**
     * @description The nickname of the computing Quota used by the job.
     *
     * @example os_bigdata
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
     * @example cn-shanghai
     *
     * @var string
     */
    public $region;

    /**
     * @description The start time of the job.
     * > The time when the job received the first batch of computing resources.
     *
     * @example 1672112113
     *
     * @var int
     */
    public $runningAtTime;

    /**
     * @description The running duration, which is the duration from the runningAtTime to the snapshotTime of the job. Unit: seconds (s).
     *
     * @example 800
     *
     * @var int
     */
    public $runningTime;

    /**
     * @description The intelligent diagnostics results.
     *
     * @var sceneResults[]
     */
    public $sceneResults;

    /**
     * @description The signature of the SQL job.
     *
     * @example 20c1efb4a7caca1865f4aa784bb500efae74af04
     *
     * @var string
     */
    public $signature;

    /**
     * @description The status of the job.
     *
     * @example running
     *
     * @var string
     */
    public $status;

    /**
     * @description The time when the job was committed.
     *
     * @example 1672112013
     *
     * @var int
     */
    public $submittedAtTime;

    /**
     * @description The tenant ID.
     *
     * @example 4784****5249
     *
     * @var string
     */
    public $tenantId;

    /**
     * @description The interval from the time when the job was submitted to the snapshotTime .Unit: seconds (s).
     *
     * @example 900
     *
     * @var int
     */
    public $totalTime;

    /**
     * @description The duration from the time the job is submitted to the time the job starts to run. Unit: seconds (s).
     *
     * @example 100
     *
     * @var int
     */
    public $waitingTime;
    protected $_name = [
        'cuUsage' => 'cuUsage',
        'endAtTime' => 'endAtTime',
        'extNodeId' => 'extNodeId',
        'extNodeOnDuty' => 'extNodeOnDuty',
        'extPlantFrom' => 'extPlantFrom',
        'inputBytes' => 'inputBytes',
        'instanceId' => 'instanceId',
        'jobOwner' => 'jobOwner',
        'jobSubStatusList' => 'jobSubStatusList',
        'jobType' => 'jobType',
        'memoryUsage' => 'memoryUsage',
        'priority' => 'priority',
        'project' => 'project',
        'quotaNickname' => 'quotaNickname',
        'quotaType' => 'quotaType',
        'region' => 'region',
        'runningAtTime' => 'runningAtTime',
        'runningTime' => 'runningTime',
        'sceneResults' => 'sceneResults',
        'signature' => 'signature',
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
        if (null !== $this->cuUsage) {
            $res['cuUsage'] = $this->cuUsage;
        }
        if (null !== $this->endAtTime) {
            $res['endAtTime'] = $this->endAtTime;
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
        if (null !== $this->inputBytes) {
            $res['inputBytes'] = $this->inputBytes;
        }
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }
        if (null !== $this->jobOwner) {
            $res['jobOwner'] = $this->jobOwner;
        }
        if (null !== $this->jobSubStatusList) {
            $res['jobSubStatusList'] = [];
            if (null !== $this->jobSubStatusList && \is_array($this->jobSubStatusList)) {
                $n = 0;
                foreach ($this->jobSubStatusList as $item) {
                    $res['jobSubStatusList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->jobType) {
            $res['jobType'] = $this->jobType;
        }
        if (null !== $this->memoryUsage) {
            $res['memoryUsage'] = $this->memoryUsage;
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
        if (null !== $this->sceneResults) {
            $res['sceneResults'] = [];
            if (null !== $this->sceneResults && \is_array($this->sceneResults)) {
                $n = 0;
                foreach ($this->sceneResults as $item) {
                    $res['sceneResults'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->signature) {
            $res['signature'] = $this->signature;
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
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cuUsage'])) {
            $model->cuUsage = $map['cuUsage'];
        }
        if (isset($map['endAtTime'])) {
            $model->endAtTime = $map['endAtTime'];
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
        if (isset($map['inputBytes'])) {
            $model->inputBytes = $map['inputBytes'];
        }
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }
        if (isset($map['jobOwner'])) {
            $model->jobOwner = $map['jobOwner'];
        }
        if (isset($map['jobSubStatusList'])) {
            if (!empty($map['jobSubStatusList'])) {
                $model->jobSubStatusList = [];
                $n = 0;
                foreach ($map['jobSubStatusList'] as $item) {
                    $model->jobSubStatusList[$n++] = null !== $item ? jobSubStatusList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['jobType'])) {
            $model->jobType = $map['jobType'];
        }
        if (isset($map['memoryUsage'])) {
            $model->memoryUsage = $map['memoryUsage'];
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
        if (isset($map['sceneResults'])) {
            if (!empty($map['sceneResults'])) {
                $model->sceneResults = [];
                $n = 0;
                foreach ($map['sceneResults'] as $item) {
                    $model->sceneResults[$n++] = null !== $item ? sceneResults::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['signature'])) {
            $model->signature = $map['signature'];
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
