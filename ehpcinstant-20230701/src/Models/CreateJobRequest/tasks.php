<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models\CreateJobRequest;

use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\CreateJobRequest\tasks\executorPolicy;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\CreateJobRequest\tasks\taskSpec;
use AlibabaCloud\Tea\Model;

class tasks extends Model
{
    /**
     * @var executorPolicy
     */
    public $executorPolicy;

    /**
     * @example task0
     *
     * @var string
     */
    public $taskName;

    /**
     * @var taskSpec
     */
    public $taskSpec;

    /**
     * @example true
     *
     * @var bool
     */
    public $taskSustainable;
    protected $_name = [
        'executorPolicy'  => 'ExecutorPolicy',
        'taskName'        => 'TaskName',
        'taskSpec'        => 'TaskSpec',
        'taskSustainable' => 'TaskSustainable',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->executorPolicy) {
            $res['ExecutorPolicy'] = null !== $this->executorPolicy ? $this->executorPolicy->toMap() : null;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }
        if (null !== $this->taskSpec) {
            $res['TaskSpec'] = null !== $this->taskSpec ? $this->taskSpec->toMap() : null;
        }
        if (null !== $this->taskSustainable) {
            $res['TaskSustainable'] = $this->taskSustainable;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tasks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExecutorPolicy'])) {
            $model->executorPolicy = executorPolicy::fromMap($map['ExecutorPolicy']);
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }
        if (isset($map['TaskSpec'])) {
            $model->taskSpec = taskSpec::fromMap($map['TaskSpec']);
        }
        if (isset($map['TaskSustainable'])) {
            $model->taskSustainable = $map['TaskSustainable'];
        }

        return $model;
    }
}
