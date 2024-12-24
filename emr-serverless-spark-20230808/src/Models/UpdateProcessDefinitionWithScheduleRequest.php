<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models;

use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\UpdateProcessDefinitionWithScheduleRequest\schedule;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\UpdateProcessDefinitionWithScheduleRequest\taskDefinitionJson;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\UpdateProcessDefinitionWithScheduleRequest\taskRelationJson;
use AlibabaCloud\Tea\Model;

class UpdateProcessDefinitionWithScheduleRequest extends Model
{
    /**
     * @example foo_bar@spark.alert.invalid.com
     *
     * @var string
     */
    public $alertEmailAddress;

    /**
     * @example ods batch workflow
     *
     * @var string
     */
    public $description;

    /**
     * @description This parameter is required.
     *
     * @example PARALLEL
     *
     * @var string
     */
    public $executionType;

    /**
     * @description This parameter is required.
     *
     * @example ods_batch_workflow
     *
     * @var string
     */
    public $name;

    /**
     * @description This parameter is required.
     *
     * @example SS
     *
     * @var string
     */
    public $productNamespace;

    /**
     * @example true
     *
     * @var bool
     */
    public $publish;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example ONLINE
     *
     * @var string
     */
    public $releaseState;

    /**
     * @example root_queue
     *
     * @var string
     */
    public $resourceQueue;

    /**
     * @example 1
     *
     * @var int
     */
    public $retryTimes;

    /**
     * @example 113***************
     *
     * @var string
     */
    public $runAs;

    /**
     * @var schedule
     */
    public $schedule;

    /**
     * @var string[]
     */
    public $tags;

    /**
     * @description This parameter is required.
     *
     * @var taskDefinitionJson[]
     */
    public $taskDefinitionJson;

    /**
     * @example 1
     *
     * @var int
     */
    public $taskParallelism;

    /**
     * @description This parameter is required.
     *
     * @var taskRelationJson[]
     */
    public $taskRelationJson;

    /**
     * @example 300
     *
     * @var int
     */
    public $timeout;
    protected $_name = [
        'alertEmailAddress'  => 'alertEmailAddress',
        'description'        => 'description',
        'executionType'      => 'executionType',
        'name'               => 'name',
        'productNamespace'   => 'productNamespace',
        'publish'            => 'publish',
        'regionId'           => 'regionId',
        'releaseState'       => 'releaseState',
        'resourceQueue'      => 'resourceQueue',
        'retryTimes'         => 'retryTimes',
        'runAs'              => 'runAs',
        'schedule'           => 'schedule',
        'tags'               => 'tags',
        'taskDefinitionJson' => 'taskDefinitionJson',
        'taskParallelism'    => 'taskParallelism',
        'taskRelationJson'   => 'taskRelationJson',
        'timeout'            => 'timeout',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertEmailAddress) {
            $res['alertEmailAddress'] = $this->alertEmailAddress;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->executionType) {
            $res['executionType'] = $this->executionType;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->productNamespace) {
            $res['productNamespace'] = $this->productNamespace;
        }
        if (null !== $this->publish) {
            $res['publish'] = $this->publish;
        }
        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }
        if (null !== $this->releaseState) {
            $res['releaseState'] = $this->releaseState;
        }
        if (null !== $this->resourceQueue) {
            $res['resourceQueue'] = $this->resourceQueue;
        }
        if (null !== $this->retryTimes) {
            $res['retryTimes'] = $this->retryTimes;
        }
        if (null !== $this->runAs) {
            $res['runAs'] = $this->runAs;
        }
        if (null !== $this->schedule) {
            $res['schedule'] = null !== $this->schedule ? $this->schedule->toMap() : null;
        }
        if (null !== $this->tags) {
            $res['tags'] = $this->tags;
        }
        if (null !== $this->taskDefinitionJson) {
            $res['taskDefinitionJson'] = [];
            if (null !== $this->taskDefinitionJson && \is_array($this->taskDefinitionJson)) {
                $n = 0;
                foreach ($this->taskDefinitionJson as $item) {
                    $res['taskDefinitionJson'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->taskParallelism) {
            $res['taskParallelism'] = $this->taskParallelism;
        }
        if (null !== $this->taskRelationJson) {
            $res['taskRelationJson'] = [];
            if (null !== $this->taskRelationJson && \is_array($this->taskRelationJson)) {
                $n = 0;
                foreach ($this->taskRelationJson as $item) {
                    $res['taskRelationJson'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->timeout) {
            $res['timeout'] = $this->timeout;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateProcessDefinitionWithScheduleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['alertEmailAddress'])) {
            $model->alertEmailAddress = $map['alertEmailAddress'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['executionType'])) {
            $model->executionType = $map['executionType'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['productNamespace'])) {
            $model->productNamespace = $map['productNamespace'];
        }
        if (isset($map['publish'])) {
            $model->publish = $map['publish'];
        }
        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }
        if (isset($map['releaseState'])) {
            $model->releaseState = $map['releaseState'];
        }
        if (isset($map['resourceQueue'])) {
            $model->resourceQueue = $map['resourceQueue'];
        }
        if (isset($map['retryTimes'])) {
            $model->retryTimes = $map['retryTimes'];
        }
        if (isset($map['runAs'])) {
            $model->runAs = $map['runAs'];
        }
        if (isset($map['schedule'])) {
            $model->schedule = schedule::fromMap($map['schedule']);
        }
        if (isset($map['tags'])) {
            $model->tags = $map['tags'];
        }
        if (isset($map['taskDefinitionJson'])) {
            if (!empty($map['taskDefinitionJson'])) {
                $model->taskDefinitionJson = [];
                $n                         = 0;
                foreach ($map['taskDefinitionJson'] as $item) {
                    $model->taskDefinitionJson[$n++] = null !== $item ? taskDefinitionJson::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['taskParallelism'])) {
            $model->taskParallelism = $map['taskParallelism'];
        }
        if (isset($map['taskRelationJson'])) {
            if (!empty($map['taskRelationJson'])) {
                $model->taskRelationJson = [];
                $n                       = 0;
                foreach ($map['taskRelationJson'] as $item) {
                    $model->taskRelationJson[$n++] = null !== $item ? taskRelationJson::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['timeout'])) {
            $model->timeout = $map['timeout'];
        }

        return $model;
    }
}
