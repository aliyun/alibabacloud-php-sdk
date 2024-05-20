<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EmrStudio\V20240430\Models;

use AlibabaCloud\SDK\EmrStudio\V20240430\Models\DescribeWorkflowResponseBody\schedule;
use AlibabaCloud\SDK\EmrStudio\V20240430\Models\DescribeWorkflowResponseBody\taskRelations;
use AlibabaCloud\SDK\EmrStudio\V20240430\Models\DescribeWorkflowResponseBody\tasks;
use AlibabaCloud\SDK\EmrStudio\V20240430\Models\DescribeWorkflowResponseBody\workflow;
use AlibabaCloud\Tea\Model;

class DescribeWorkflowResponseBody extends Model
{
    /**
     * @example 611AD6E6-BFE3-5897-AA12-569F79DBAF9B
     *
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
        'requestId'     => 'requestId',
        'schedule'      => 'schedule',
        'taskRelations' => 'taskRelations',
        'tasks'         => 'tasks',
        'workflow'      => 'workflow',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->schedule) {
            $res['schedule'] = null !== $this->schedule ? $this->schedule->toMap() : null;
        }
        if (null !== $this->taskRelations) {
            $res['taskRelations'] = [];
            if (null !== $this->taskRelations && \is_array($this->taskRelations)) {
                $n = 0;
                foreach ($this->taskRelations as $item) {
                    $res['taskRelations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->tasks) {
            $res['tasks'] = [];
            if (null !== $this->tasks && \is_array($this->tasks)) {
                $n = 0;
                foreach ($this->tasks as $item) {
                    $res['tasks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->workflow) {
            $res['workflow'] = null !== $this->workflow ? $this->workflow->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeWorkflowResponseBody
     */
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
                $n                    = 0;
                foreach ($map['taskRelations'] as $item) {
                    $model->taskRelations[$n++] = null !== $item ? taskRelations::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['tasks'])) {
            if (!empty($map['tasks'])) {
                $model->tasks = [];
                $n            = 0;
                foreach ($map['tasks'] as $item) {
                    $model->tasks[$n++] = null !== $item ? tasks::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['workflow'])) {
            $model->workflow = workflow::fromMap($map['workflow']);
        }

        return $model;
    }
}
