<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20230701\Models\GetJobResponseBody\jobInfo;

use AlibabaCloud\SDK\EHPC\V20230701\Models\GetJobResponseBody\jobInfo\tasks\executorPolicy;
use AlibabaCloud\SDK\EHPC\V20230701\Models\GetJobResponseBody\jobInfo\tasks\executorStatus;
use AlibabaCloud\SDK\EHPC\V20230701\Models\GetJobResponseBody\jobInfo\tasks\taskSpec;
use AlibabaCloud\Tea\Model;

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
     * @var bool
     */
    public $taskSustainable;
    protected $_name = [
        'executorPolicy'  => 'ExecutorPolicy',
        'executorStatus'  => 'ExecutorStatus',
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
        if (null !== $this->executorStatus) {
            $res['ExecutorStatus'] = [];
            if (null !== $this->executorStatus && \is_array($this->executorStatus)) {
                $n = 0;
                foreach ($this->executorStatus as $item) {
                    $res['ExecutorStatus'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['ExecutorStatus'])) {
            if (!empty($map['ExecutorStatus'])) {
                $model->executorStatus = [];
                $n                     = 0;
                foreach ($map['ExecutorStatus'] as $item) {
                    $model->executorStatus[$n++] = null !== $item ? executorStatus::fromMap($item) : $item;
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
