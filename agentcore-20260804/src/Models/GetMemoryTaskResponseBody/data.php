<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\GetMemoryTaskResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetMemoryTaskResponseBody\data\changes;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetMemoryTaskResponseBody\data\error;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetMemoryTaskResponseBody\data\input;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetMemoryTaskResponseBody\data\memories;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetMemoryTaskResponseBody\data\strategyConfig;

class data extends Model
{
    /**
     * @var changes[]
     */
    public $changes;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var error
     */
    public $error;

    /**
     * @var string
     */
    public $finishedAt;

    /**
     * @var input
     */
    public $input;

    /**
     * @var int
     */
    public $inputMessageCount;

    /**
     * @var int
     */
    public $inputTokenCount;

    /**
     * @var memories[]
     */
    public $memories;

    /**
     * @var string
     */
    public $startedAt;

    /**
     * @var string
     */
    public $status;

    /**
     * @var strategyConfig
     */
    public $strategyConfig;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $triggerType;
    protected $_name = [
        'changes' => 'changes',
        'createdAt' => 'createdAt',
        'error' => 'error',
        'finishedAt' => 'finishedAt',
        'input' => 'input',
        'inputMessageCount' => 'inputMessageCount',
        'inputTokenCount' => 'inputTokenCount',
        'memories' => 'memories',
        'startedAt' => 'startedAt',
        'status' => 'status',
        'strategyConfig' => 'strategyConfig',
        'taskId' => 'taskId',
        'triggerType' => 'triggerType',
    ];

    public function validate()
    {
        if (\is_array($this->changes)) {
            Model::validateArray($this->changes);
        }
        if (null !== $this->error) {
            $this->error->validate();
        }
        if (null !== $this->input) {
            $this->input->validate();
        }
        if (\is_array($this->memories)) {
            Model::validateArray($this->memories);
        }
        if (null !== $this->strategyConfig) {
            $this->strategyConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->changes) {
            if (\is_array($this->changes)) {
                $res['changes'] = [];
                $n1 = 0;
                foreach ($this->changes as $item1) {
                    $res['changes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }

        if (null !== $this->error) {
            $res['error'] = null !== $this->error ? $this->error->toArray($noStream) : $this->error;
        }

        if (null !== $this->finishedAt) {
            $res['finishedAt'] = $this->finishedAt;
        }

        if (null !== $this->input) {
            $res['input'] = null !== $this->input ? $this->input->toArray($noStream) : $this->input;
        }

        if (null !== $this->inputMessageCount) {
            $res['inputMessageCount'] = $this->inputMessageCount;
        }

        if (null !== $this->inputTokenCount) {
            $res['inputTokenCount'] = $this->inputTokenCount;
        }

        if (null !== $this->memories) {
            if (\is_array($this->memories)) {
                $res['memories'] = [];
                $n1 = 0;
                foreach ($this->memories as $item1) {
                    $res['memories'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->startedAt) {
            $res['startedAt'] = $this->startedAt;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->strategyConfig) {
            $res['strategyConfig'] = null !== $this->strategyConfig ? $this->strategyConfig->toArray($noStream) : $this->strategyConfig;
        }

        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
        }

        if (null !== $this->triggerType) {
            $res['triggerType'] = $this->triggerType;
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
        if (isset($map['changes'])) {
            if (!empty($map['changes'])) {
                $model->changes = [];
                $n1 = 0;
                foreach ($map['changes'] as $item1) {
                    $model->changes[$n1] = changes::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }

        if (isset($map['error'])) {
            $model->error = error::fromMap($map['error']);
        }

        if (isset($map['finishedAt'])) {
            $model->finishedAt = $map['finishedAt'];
        }

        if (isset($map['input'])) {
            $model->input = input::fromMap($map['input']);
        }

        if (isset($map['inputMessageCount'])) {
            $model->inputMessageCount = $map['inputMessageCount'];
        }

        if (isset($map['inputTokenCount'])) {
            $model->inputTokenCount = $map['inputTokenCount'];
        }

        if (isset($map['memories'])) {
            if (!empty($map['memories'])) {
                $model->memories = [];
                $n1 = 0;
                foreach ($map['memories'] as $item1) {
                    $model->memories[$n1] = memories::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['startedAt'])) {
            $model->startedAt = $map['startedAt'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['strategyConfig'])) {
            $model->strategyConfig = strategyConfig::fromMap($map['strategyConfig']);
        }

        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        if (isset($map['triggerType'])) {
            $model->triggerType = $map['triggerType'];
        }

        return $model;
    }
}
