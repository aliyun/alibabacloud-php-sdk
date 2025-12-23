<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EmrStudio\V20240430\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EmrStudio\V20240430\Models\DescribeWorkflowResponseBody\schedule;
use AlibabaCloud\SDK\EmrStudio\V20240430\Models\DescribeWorkflowResponseBody\taskRelations;
use AlibabaCloud\SDK\EmrStudio\V20240430\Models\DescribeWorkflowResponseBody\tasks;
use AlibabaCloud\SDK\EmrStudio\V20240430\Models\DescribeWorkflowResponseBody\workflow;

class DescribeWorkflowResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var schedule
     */
    public $schedule;

    /**
     * @var taskRelations[]
     */
    public $taskRelations;

    /**
     * @var tasks[]
     */
    public $tasks;

    /**
     * @var workflow
     */
    public $workflow;
    protected $_name = [
        'requestId' => 'requestId',
        'schedule' => 'schedule',
        'taskRelations' => 'taskRelations',
        'tasks' => 'tasks',
        'workflow' => 'workflow',
    ];

    public function validate()
    {
        if (null !== $this->schedule) {
            $this->schedule->validate();
        }
        if (\is_array($this->taskRelations)) {
            Model::validateArray($this->taskRelations);
        }
        if (\is_array($this->tasks)) {
            Model::validateArray($this->tasks);
        }
        if (null !== $this->workflow) {
            $this->workflow->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->schedule) {
            $res['schedule'] = null !== $this->schedule ? $this->schedule->toArray($noStream) : $this->schedule;
        }

        if (null !== $this->taskRelations) {
            if (\is_array($this->taskRelations)) {
                $res['taskRelations'] = [];
                $n1 = 0;
                foreach ($this->taskRelations as $item1) {
                    $res['taskRelations'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->tasks) {
            if (\is_array($this->tasks)) {
                $res['tasks'] = [];
                $n1 = 0;
                foreach ($this->tasks as $item1) {
                    $res['tasks'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->workflow) {
            $res['workflow'] = null !== $this->workflow ? $this->workflow->toArray($noStream) : $this->workflow;
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
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['schedule'])) {
            $model->schedule = schedule::fromMap($map['schedule']);
        }

        if (isset($map['taskRelations'])) {
            if (!empty($map['taskRelations'])) {
                $model->taskRelations = [];
                $n1 = 0;
                foreach ($map['taskRelations'] as $item1) {
                    $model->taskRelations[$n1] = taskRelations::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['tasks'])) {
            if (!empty($map['tasks'])) {
                $model->tasks = [];
                $n1 = 0;
                foreach ($map['tasks'] as $item1) {
                    $model->tasks[$n1] = tasks::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['workflow'])) {
            $model->workflow = workflow::fromMap($map['workflow']);
        }

        return $model;
    }
}
