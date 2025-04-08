<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\UpdateProcessDefinitionWithScheduleRequest\globalParams;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\UpdateProcessDefinitionWithScheduleRequest\schedule;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\UpdateProcessDefinitionWithScheduleRequest\taskDefinitionJson;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\UpdateProcessDefinitionWithScheduleRequest\taskRelationJson;

class UpdateProcessDefinitionWithScheduleRequest extends Model
{
    /**
     * @var string
     */
    public $alertEmailAddress;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $executionType;

    /**
     * @var globalParams[]
     */
    public $globalParams;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $productNamespace;

    /**
     * @var bool
     */
    public $publish;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $releaseState;

    /**
     * @var string
     */
    public $resourceQueue;

    /**
     * @var int
     */
    public $retryTimes;

    /**
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
     * @var taskDefinitionJson[]
     */
    public $taskDefinitionJson;

    /**
     * @var int
     */
    public $taskParallelism;

    /**
     * @var taskRelationJson[]
     */
    public $taskRelationJson;

    /**
     * @var int
     */
    public $timeout;
    protected $_name = [
        'alertEmailAddress' => 'alertEmailAddress',
        'description' => 'description',
        'executionType' => 'executionType',
        'globalParams' => 'globalParams',
        'name' => 'name',
        'productNamespace' => 'productNamespace',
        'publish' => 'publish',
        'regionId' => 'regionId',
        'releaseState' => 'releaseState',
        'resourceQueue' => 'resourceQueue',
        'retryTimes' => 'retryTimes',
        'runAs' => 'runAs',
        'schedule' => 'schedule',
        'tags' => 'tags',
        'taskDefinitionJson' => 'taskDefinitionJson',
        'taskParallelism' => 'taskParallelism',
        'taskRelationJson' => 'taskRelationJson',
        'timeout' => 'timeout',
    ];

    public function validate()
    {
        if (\is_array($this->globalParams)) {
            Model::validateArray($this->globalParams);
        }
        if (null !== $this->schedule) {
            $this->schedule->validate();
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        if (\is_array($this->taskDefinitionJson)) {
            Model::validateArray($this->taskDefinitionJson);
        }
        if (\is_array($this->taskRelationJson)) {
            Model::validateArray($this->taskRelationJson);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->globalParams) {
            if (\is_array($this->globalParams)) {
                $res['globalParams'] = [];
                $n1 = 0;
                foreach ($this->globalParams as $item1) {
                    $res['globalParams'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
            $res['schedule'] = null !== $this->schedule ? $this->schedule->toArray($noStream) : $this->schedule;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['tags'] = [];
                foreach ($this->tags as $key1 => $value1) {
                    $res['tags'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->taskDefinitionJson) {
            if (\is_array($this->taskDefinitionJson)) {
                $res['taskDefinitionJson'] = [];
                $n1 = 0;
                foreach ($this->taskDefinitionJson as $item1) {
                    $res['taskDefinitionJson'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->taskParallelism) {
            $res['taskParallelism'] = $this->taskParallelism;
        }

        if (null !== $this->taskRelationJson) {
            if (\is_array($this->taskRelationJson)) {
                $res['taskRelationJson'] = [];
                $n1 = 0;
                foreach ($this->taskRelationJson as $item1) {
                    $res['taskRelationJson'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->timeout) {
            $res['timeout'] = $this->timeout;
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
        if (isset($map['alertEmailAddress'])) {
            $model->alertEmailAddress = $map['alertEmailAddress'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['executionType'])) {
            $model->executionType = $map['executionType'];
        }

        if (isset($map['globalParams'])) {
            if (!empty($map['globalParams'])) {
                $model->globalParams = [];
                $n1 = 0;
                foreach ($map['globalParams'] as $item1) {
                    $model->globalParams[$n1++] = globalParams::fromMap($item1);
                }
            }
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
            if (!empty($map['tags'])) {
                $model->tags = [];
                foreach ($map['tags'] as $key1 => $value1) {
                    $model->tags[$key1] = $value1;
                }
            }
        }

        if (isset($map['taskDefinitionJson'])) {
            if (!empty($map['taskDefinitionJson'])) {
                $model->taskDefinitionJson = [];
                $n1 = 0;
                foreach ($map['taskDefinitionJson'] as $item1) {
                    $model->taskDefinitionJson[$n1++] = taskDefinitionJson::fromMap($item1);
                }
            }
        }

        if (isset($map['taskParallelism'])) {
            $model->taskParallelism = $map['taskParallelism'];
        }

        if (isset($map['taskRelationJson'])) {
            if (!empty($map['taskRelationJson'])) {
                $model->taskRelationJson = [];
                $n1 = 0;
                foreach ($map['taskRelationJson'] as $item1) {
                    $model->taskRelationJson[$n1++] = taskRelationJson::fromMap($item1);
                }
            }
        }

        if (isset($map['timeout'])) {
            $model->timeout = $map['timeout'];
        }

        return $model;
    }
}
