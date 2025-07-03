<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models\GetJobResponseBody\jobInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\GetJobResponseBody\jobInfo\tasks\executorPolicy;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\GetJobResponseBody\jobInfo\tasks\executorStatus;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\GetJobResponseBody\jobInfo\tasks\taskSpec;

class tasks extends Model
{
    /**
     * @var executorPolicy
     */
    public $executorPolicy;

    /**
     * @var executorStatus[]
     */
    public $executorStatus;

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
        'executorPolicy' => 'ExecutorPolicy',
        'executorStatus' => 'ExecutorStatus',
        'taskName' => 'TaskName',
        'taskSpec' => 'TaskSpec',
        'taskSustainable' => 'TaskSustainable',
    ];

    public function validate()
    {
        if (null !== $this->executorPolicy) {
            $this->executorPolicy->validate();
        }
        if (\is_array($this->executorStatus)) {
            Model::validateArray($this->executorStatus);
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

        if (null !== $this->executorStatus) {
            if (\is_array($this->executorStatus)) {
                $res['ExecutorStatus'] = [];
                $n1 = 0;
                foreach ($this->executorStatus as $item1) {
                    $res['ExecutorStatus'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['ExecutorStatus'])) {
            if (!empty($map['ExecutorStatus'])) {
                $model->executorStatus = [];
                $n1 = 0;
                foreach ($map['ExecutorStatus'] as $item1) {
                    $model->executorStatus[$n1] = executorStatus::fromMap($item1);
                    ++$n1;
                }
            }
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
