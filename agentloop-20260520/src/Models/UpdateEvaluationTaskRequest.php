<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models;

use AlibabaCloud\Dara\Model;

class UpdateEvaluationTaskRequest extends Model
{
    /**
     * @var string[]
     */
    public $config;

    /**
     * @var string
     */
    public $dataFilter;

    /**
     * @var string
     */
    public $description;

    /**
     * @var Evaluator[]
     */
    public $evaluators;

    /**
     * @var RunStrategies
     */
    public $runStrategies;

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
    public $clientToken;
    protected $_name = [
        'config' => 'config',
        'dataFilter' => 'dataFilter',
        'description' => 'description',
        'evaluators' => 'evaluators',
        'runStrategies' => 'runStrategies',
        'status' => 'status',
        'tags' => 'tags',
        'clientToken' => 'clientToken',
    ];

    public function validate()
    {
        if (\is_array($this->config)) {
            Model::validateArray($this->config);
        }
        if (\is_array($this->evaluators)) {
            Model::validateArray($this->evaluators);
        }
        if (null !== $this->runStrategies) {
            $this->runStrategies->validate();
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->config) {
            if (\is_array($this->config)) {
                $res['config'] = [];
                foreach ($this->config as $key1 => $value1) {
                    $res['config'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->dataFilter) {
            $res['dataFilter'] = $this->dataFilter;
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

        if (null !== $this->runStrategies) {
            $res['runStrategies'] = null !== $this->runStrategies ? $this->runStrategies->toArray($noStream) : $this->runStrategies;
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

        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
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
        if (isset($map['config'])) {
            if (!empty($map['config'])) {
                $model->config = [];
                foreach ($map['config'] as $key1 => $value1) {
                    $model->config[$key1] = $value1;
                }
            }
        }

        if (isset($map['dataFilter'])) {
            $model->dataFilter = $map['dataFilter'];
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

        if (isset($map['runStrategies'])) {
            $model->runStrategies = RunStrategies::fromMap($map['runStrategies']);
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

        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }

        return $model;
    }
}
