<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListJobInfosResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListJobInfosResponseBody\data\jobInfoList\sceneResults;

class jobInfoList extends Model
{
    /**
     * @var string
     */
    public $cluster;

    /**
     * @var float
     */
    public $cuSnapshot;

    /**
     * @var int
     */
    public $cuUsage;

    /**
     * @var int
     */
    public $endAtTime;

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
     * @var float
     */
    public $inputBytes;

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
    public $memorySnapshot;

    /**
     * @var int
     */
    public $memoryUsage;

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
     * @var sceneResults[]
     */
    public $sceneResults;

    /**
     * @var string
     */
    public $signature;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $statusSnapshot;

    /**
     * @var int
     */
    public $submittedAtTime;

    /**
     * @var string
     */
    public $tags;

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
        'cluster' => 'cluster',
        'cuSnapshot' => 'cuSnapshot',
        'cuUsage' => 'cuUsage',
        'endAtTime' => 'endAtTime',
        'extNodeId' => 'extNodeId',
        'extNodeOnDuty' => 'extNodeOnDuty',
        'extPlantFrom' => 'extPlantFrom',
        'inputBytes' => 'inputBytes',
        'instanceId' => 'instanceId',
        'jobOwner' => 'jobOwner',
        'jobType' => 'jobType',
        'memorySnapshot' => 'memorySnapshot',
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
        'statusSnapshot' => 'statusSnapshot',
        'submittedAtTime' => 'submittedAtTime',
        'tags' => 'tags',
        'tenantId' => 'tenantId',
        'totalTime' => 'totalTime',
        'waitingTime' => 'waitingTime',
    ];

    public function validate()
    {
        if (\is_array($this->sceneResults)) {
            Model::validateArray($this->sceneResults);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cluster) {
            $res['cluster'] = $this->cluster;
        }

        if (null !== $this->cuSnapshot) {
            $res['cuSnapshot'] = $this->cuSnapshot;
        }

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

        if (null !== $this->jobType) {
            $res['jobType'] = $this->jobType;
        }

        if (null !== $this->memorySnapshot) {
            $res['memorySnapshot'] = $this->memorySnapshot;
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
            if (\is_array($this->sceneResults)) {
                $res['sceneResults'] = [];
                $n1 = 0;
                foreach ($this->sceneResults as $item1) {
                    $res['sceneResults'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->signature) {
            $res['signature'] = $this->signature;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->statusSnapshot) {
            $res['statusSnapshot'] = $this->statusSnapshot;
        }

        if (null !== $this->submittedAtTime) {
            $res['submittedAtTime'] = $this->submittedAtTime;
        }

        if (null !== $this->tags) {
            $res['tags'] = $this->tags;
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
        if (isset($map['cluster'])) {
            $model->cluster = $map['cluster'];
        }

        if (isset($map['cuSnapshot'])) {
            $model->cuSnapshot = $map['cuSnapshot'];
        }

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

        if (isset($map['jobType'])) {
            $model->jobType = $map['jobType'];
        }

        if (isset($map['memorySnapshot'])) {
            $model->memorySnapshot = $map['memorySnapshot'];
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
                $n1 = 0;
                foreach ($map['sceneResults'] as $item1) {
                    $model->sceneResults[$n1++] = sceneResults::fromMap($item1);
                }
            }
        }

        if (isset($map['signature'])) {
            $model->signature = $map['signature'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['statusSnapshot'])) {
            $model->statusSnapshot = $map['statusSnapshot'];
        }

        if (isset($map['submittedAtTime'])) {
            $model->submittedAtTime = $map['submittedAtTime'];
        }

        if (isset($map['tags'])) {
            $model->tags = $map['tags'];
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
