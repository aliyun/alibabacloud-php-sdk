<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models\CreateJobRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\CreateJobRequest\tasks\executorPolicy;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\CreateJobRequest\tasks\taskSpec;

class tasks extends Model
{
    /**
     * @var executorPolicy
     */
    public $executorPolicy;
    /**
     * @var string
     */
    public $taskName;
    /**
     * @var taskSpec
     */
    public $taskSpec;
    /**
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
        if (null !== $this->executorPolicy) {
            $this->executorPolicy->validate();
        }
        if (null !== $this->taskSpec) {
            $this->taskSpec->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->executorPolicy) {
            $res['ExecutorPolicy'] = null !== $this->executorPolicy ? $this->executorPolicy->toArray($noStream) : $this->executorPolicy;
        }

        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }

        if (null !== $this->taskSpec) {
            $res['TaskSpec'] = null !== $this->taskSpec ? $this->taskSpec->toArray($noStream) : $this->taskSpec;
        }

        if (null !== $this->taskSustainable) {
            $res['TaskSustainable'] = $this->taskSustainable;
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
