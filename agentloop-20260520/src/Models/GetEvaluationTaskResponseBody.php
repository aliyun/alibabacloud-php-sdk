<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models;

use AlibabaCloud\Dara\Model;

class GetEvaluationTaskResponseBody extends Model
{
    /**
     * @var string
     */
    public $agentSpace;

    /**
     * @var string
     */
    public $channel;

    /**
     * @var string[]
     */
    public $config;

    /**
     * @var int
     */
    public $createdAt;

    /**
     * @var string
     */
    public $dataFilter;

    /**
     * @var string
     */
    public $dataType;

    /**
     * @var string
     */
    public $description;

    /**
     * @var Evaluator[]
     */
    public $evaluators;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var RunStrategies
     */
    public $runStrategyConfig;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string[]
     */
    public $tags;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskMode;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @var int
     */
    public $updatedAt;
    protected $_name = [
        'agentSpace' => 'agentSpace',
        'channel' => 'channel',
        'config' => 'config',
        'createdAt' => 'createdAt',
        'dataFilter' => 'dataFilter',
        'dataType' => 'dataType',
        'description' => 'description',
        'evaluators' => 'evaluators',
        'regionId' => 'regionId',
        'requestId' => 'requestId',
        'runStrategyConfig' => 'runStrategyConfig',
        'status' => 'status',
        'tags' => 'tags',
        'taskId' => 'taskId',
        'taskMode' => 'taskMode',
        'taskName' => 'taskName',
        'updatedAt' => 'updatedAt',
    ];

    public function validate()
    {
        if (\is_array($this->config)) {
            Model::validateArray($this->config);
        }
        if (\is_array($this->evaluators)) {
            Model::validateArray($this->evaluators);
        }
        if (null !== $this->runStrategyConfig) {
            $this->runStrategyConfig->validate();
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentSpace) {
            $res['agentSpace'] = $this->agentSpace;
        }

        if (null !== $this->channel) {
            $res['channel'] = $this->channel;
        }

        if (null !== $this->config) {
            if (\is_array($this->config)) {
                $res['config'] = [];
                foreach ($this->config as $key1 => $value1) {
                    $res['config'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }

        if (null !== $this->dataFilter) {
            $res['dataFilter'] = $this->dataFilter;
        }

        if (null !== $this->dataType) {
            $res['dataType'] = $this->dataType;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->evaluators) {
            if (\is_array($this->evaluators)) {
                $res['evaluators'] = [];
                $n1 = 0;
                foreach ($this->evaluators as $item1) {
                    $res['evaluators'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->runStrategyConfig) {
            $res['runStrategyConfig'] = null !== $this->runStrategyConfig ? $this->runStrategyConfig->toArray($noStream) : $this->runStrategyConfig;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['tags'] = [];
                foreach ($this->tags as $key1 => $value1) {
                    $res['tags'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
        }

        if (null !== $this->taskMode) {
            $res['taskMode'] = $this->taskMode;
        }

        if (null !== $this->taskName) {
            $res['taskName'] = $this->taskName;
        }

        if (null !== $this->updatedAt) {
            $res['updatedAt'] = $this->updatedAt;
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
        if (isset($map['agentSpace'])) {
            $model->agentSpace = $map['agentSpace'];
        }

        if (isset($map['channel'])) {
            $model->channel = $map['channel'];
        }

        if (isset($map['config'])) {
            if (!empty($map['config'])) {
                $model->config = [];
                foreach ($map['config'] as $key1 => $value1) {
                    $model->config[$key1] = $value1;
                }
            }
        }

        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }

        if (isset($map['dataFilter'])) {
            $model->dataFilter = $map['dataFilter'];
        }

        if (isset($map['dataType'])) {
            $model->dataType = $map['dataType'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['evaluators'])) {
            if (!empty($map['evaluators'])) {
                $model->evaluators = [];
                $n1 = 0;
                foreach ($map['evaluators'] as $item1) {
                    $model->evaluators[$n1] = Evaluator::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['runStrategyConfig'])) {
            $model->runStrategyConfig = RunStrategies::fromMap($map['runStrategyConfig']);
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['tags'])) {
            if (!empty($map['tags'])) {
                $model->tags = [];
                foreach ($map['tags'] as $key1 => $value1) {
                    $model->tags[$key1] = $value1;
                }
            }
        }

        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        if (isset($map['taskMode'])) {
            $model->taskMode = $map['taskMode'];
        }

        if (isset($map['taskName'])) {
            $model->taskName = $map['taskName'];
        }

        if (isset($map['updatedAt'])) {
            $model->updatedAt = $map['updatedAt'];
        }

        return $model;
    }
}
