<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListJobInfosResponseBody\data;

use AlibabaCloud\Tea\Model;

class jobInfoList extends Model
{
    /**
     * @example AY20A
     *
     * @var string
     */
    public $cluster;

    /**
     * @example 0.48
     *
     * @var float
     */
    public $cuSnapshot;

    /**
     * @example 10
     *
     * @var int
     */
    public $cuUsage;

    /**
     * @example 0
     *
     * @var int
     */
    public $endAtTime;

    /**
     * @example node_4
     *
     * @var string
     */
    public $extNodeId;

    /**
     * @example duty_2
     *
     * @var string
     */
    public $extNodeOnDuty;

    /**
     * @example platform_3
     *
     * @var string
     */
    public $extPlantFrom;

    /**
     * @example 20230410050036549gfmsdwf60gg
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example ALIYUN$xxx@test.aliyunid.com
     *
     * @var string
     */
    public $jobOwner;

    /**
     * @example SQL
     *
     * @var string
     */
    public $jobType;

    /**
     * @example 0.42
     *
     * @var float
     */
    public $memorySnapshot;

    /**
     * @example 40
     *
     * @var int
     */
    public $memoryUsage;

    /**
     * @example 1
     *
     * @var int
     */
    public $priority;

    /**
     * @example openrec_new
     *
     * @var string
     */
    public $project;

    /**
     * @example my_quota
     *
     * @var string
     */
    public $quotaNickname;

    /**
     * @example subscription
     *
     * @var string
     */
    public $quotaType;

    /**
     * @example cn-shanghai
     *
     * @var string
     */
    public $region;

    /**
     * @example 1672112113
     *
     * @var int
     */
    public $runningAtTime;

    /**
     * @example 800
     *
     * @var int
     */
    public $runningTime;

    /**
     * @example i094KijGrN3kOXZ74kbexB77XQY=
     *
     * @var string
     */
    public $signature;

    /**
     * @example running
     *
     * @var string
     */
    public $status;

    /**
     * @example running
     *
     * @var string
     */
    public $statusSnapshot;

    /**
     * @example 1672112013
     *
     * @var int
     */
    public $submittedAtTime;

    /**
     * @example []
     *
     * @var string
     */
    public $tags;

    /**
     * @example 213065738244354
     *
     * @var string
     */
    public $tenantId;

    /**
     * @example 900
     *
     * @var int
     */
    public $totalTime;

    /**
     * @example 100
     *
     * @var int
     */
    public $waitingTime;
    protected $_name = [
        'cluster'         => 'cluster',
        'cuSnapshot'      => 'cuSnapshot',
        'cuUsage'         => 'cuUsage',
        'endAtTime'       => 'endAtTime',
        'extNodeId'       => 'extNodeId',
        'extNodeOnDuty'   => 'extNodeOnDuty',
        'extPlantFrom'    => 'extPlantFrom',
        'instanceId'      => 'instanceId',
        'jobOwner'        => 'jobOwner',
        'jobType'         => 'jobType',
        'memorySnapshot'  => 'memorySnapshot',
        'memoryUsage'     => 'memoryUsage',
        'priority'        => 'priority',
        'project'         => 'project',
        'quotaNickname'   => 'quotaNickname',
        'quotaType'       => 'quotaType',
        'region'          => 'region',
        'runningAtTime'   => 'runningAtTime',
        'runningTime'     => 'runningTime',
        'signature'       => 'signature',
        'status'          => 'status',
        'statusSnapshot'  => 'statusSnapshot',
        'submittedAtTime' => 'submittedAtTime',
        'tags'            => 'tags',
        'tenantId'        => 'tenantId',
        'totalTime'       => 'totalTime',
        'waitingTime'     => 'waitingTime',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return jobInfoList
     */
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
