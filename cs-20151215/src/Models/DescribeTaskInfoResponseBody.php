<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeTaskInfoResponseBody\error;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeTaskInfoResponseBody\events;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeTaskInfoResponseBody\stages;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeTaskInfoResponseBody\target;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeTaskInfoResponseBody\taskResult;

class DescribeTaskInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $created;

    /**
     * @var string
     */
    public $currentStage;

    /**
     * @var error
     */
    public $error;

    /**
     * @var events[]
     */
    public $events;

    /**
     * @var mixed[]
     */
    public $parameters;

    /**
     * @var stages[]
     */
    public $stages;

    /**
     * @var string
     */
    public $state;

    /**
     * @var target
     */
    public $target;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var taskResult[]
     */
    public $taskResult;

    /**
     * @var string
     */
    public $taskType;

    /**
     * @var string
     */
    public $updated;
    protected $_name = [
        'clusterId' => 'cluster_id',
        'created' => 'created',
        'currentStage' => 'current_stage',
        'error' => 'error',
        'events' => 'events',
        'parameters' => 'parameters',
        'stages' => 'stages',
        'state' => 'state',
        'target' => 'target',
        'taskId' => 'task_id',
        'taskResult' => 'task_result',
        'taskType' => 'task_type',
        'updated' => 'updated',
    ];

    public function validate()
    {
        if (null !== $this->error) {
            $this->error->validate();
        }
        if (\is_array($this->events)) {
            Model::validateArray($this->events);
        }
        if (\is_array($this->parameters)) {
            Model::validateArray($this->parameters);
        }
        if (\is_array($this->stages)) {
            Model::validateArray($this->stages);
        }
        if (null !== $this->target) {
            $this->target->validate();
        }
        if (\is_array($this->taskResult)) {
            Model::validateArray($this->taskResult);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['cluster_id'] = $this->clusterId;
        }

        if (null !== $this->created) {
            $res['created'] = $this->created;
        }

        if (null !== $this->currentStage) {
            $res['current_stage'] = $this->currentStage;
        }

        if (null !== $this->error) {
            $res['error'] = null !== $this->error ? $this->error->toArray($noStream) : $this->error;
        }

        if (null !== $this->events) {
            if (\is_array($this->events)) {
                $res['events'] = [];
                $n1 = 0;
                foreach ($this->events as $item1) {
                    $res['events'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->parameters) {
            if (\is_array($this->parameters)) {
                $res['parameters'] = [];
                foreach ($this->parameters as $key1 => $value1) {
                    $res['parameters'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->stages) {
            if (\is_array($this->stages)) {
                $res['stages'] = [];
                $n1 = 0;
                foreach ($this->stages as $item1) {
                    $res['stages'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->state) {
            $res['state'] = $this->state;
        }

        if (null !== $this->target) {
            $res['target'] = null !== $this->target ? $this->target->toArray($noStream) : $this->target;
        }

        if (null !== $this->taskId) {
            $res['task_id'] = $this->taskId;
        }

        if (null !== $this->taskResult) {
            if (\is_array($this->taskResult)) {
                $res['task_result'] = [];
                $n1 = 0;
                foreach ($this->taskResult as $item1) {
                    $res['task_result'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->taskType) {
            $res['task_type'] = $this->taskType;
        }

        if (null !== $this->updated) {
            $res['updated'] = $this->updated;
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
        if (isset($map['cluster_id'])) {
            $model->clusterId = $map['cluster_id'];
        }

        if (isset($map['created'])) {
            $model->created = $map['created'];
        }

        if (isset($map['current_stage'])) {
            $model->currentStage = $map['current_stage'];
        }

        if (isset($map['error'])) {
            $model->error = error::fromMap($map['error']);
        }

        if (isset($map['events'])) {
            if (!empty($map['events'])) {
                $model->events = [];
                $n1 = 0;
                foreach ($map['events'] as $item1) {
                    $model->events[$n1] = events::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['parameters'])) {
            if (!empty($map['parameters'])) {
                $model->parameters = [];
                foreach ($map['parameters'] as $key1 => $value1) {
                    $model->parameters[$key1] = $value1;
                }
            }
        }

        if (isset($map['stages'])) {
            if (!empty($map['stages'])) {
                $model->stages = [];
                $n1 = 0;
                foreach ($map['stages'] as $item1) {
                    $model->stages[$n1] = stages::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['state'])) {
            $model->state = $map['state'];
        }

        if (isset($map['target'])) {
            $model->target = target::fromMap($map['target']);
        }

        if (isset($map['task_id'])) {
            $model->taskId = $map['task_id'];
        }

        if (isset($map['task_result'])) {
            if (!empty($map['task_result'])) {
                $model->taskResult = [];
                $n1 = 0;
                foreach ($map['task_result'] as $item1) {
                    $model->taskResult[$n1] = taskResult::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['task_type'])) {
            $model->taskType = $map['task_type'];
        }

        if (isset($map['updated'])) {
            $model->updated = $map['updated'];
        }

        return $model;
    }
}
