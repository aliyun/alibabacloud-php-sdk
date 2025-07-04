<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SchedulerX3\V20240624\Models\GetJobExecutionProgressResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\GetJobExecutionProgressResponseBody\data\rootProgress;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\GetJobExecutionProgressResponseBody\data\shardingProgress;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\GetJobExecutionProgressResponseBody\data\taskProgress;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\GetJobExecutionProgressResponseBody\data\totalProgress;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\GetJobExecutionProgressResponseBody\data\workerProgress;

class data extends Model
{
    /**
     * @var string
     */
    public $jobDescription;

    /**
     * @var rootProgress
     */
    public $rootProgress;

    /**
     * @var shardingProgress[]
     */
    public $shardingProgress;

    /**
     * @var taskProgress[]
     */
    public $taskProgress;

    /**
     * @var totalProgress
     */
    public $totalProgress;

    /**
     * @var workerProgress[]
     */
    public $workerProgress;
    protected $_name = [
        'jobDescription' => 'JobDescription',
        'rootProgress' => 'RootProgress',
        'shardingProgress' => 'ShardingProgress',
        'taskProgress' => 'TaskProgress',
        'totalProgress' => 'TotalProgress',
        'workerProgress' => 'WorkerProgress',
    ];

    public function validate()
    {
        if (null !== $this->rootProgress) {
            $this->rootProgress->validate();
        }
        if (\is_array($this->shardingProgress)) {
            Model::validateArray($this->shardingProgress);
        }
        if (\is_array($this->taskProgress)) {
            Model::validateArray($this->taskProgress);
        }
        if (null !== $this->totalProgress) {
            $this->totalProgress->validate();
        }
        if (\is_array($this->workerProgress)) {
            Model::validateArray($this->workerProgress);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->jobDescription) {
            $res['JobDescription'] = $this->jobDescription;
        }

        if (null !== $this->rootProgress) {
            $res['RootProgress'] = null !== $this->rootProgress ? $this->rootProgress->toArray($noStream) : $this->rootProgress;
        }

        if (null !== $this->shardingProgress) {
            if (\is_array($this->shardingProgress)) {
                $res['ShardingProgress'] = [];
                $n1 = 0;
                foreach ($this->shardingProgress as $item1) {
                    $res['ShardingProgress'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->taskProgress) {
            if (\is_array($this->taskProgress)) {
                $res['TaskProgress'] = [];
                $n1 = 0;
                foreach ($this->taskProgress as $item1) {
                    $res['TaskProgress'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->totalProgress) {
            $res['TotalProgress'] = null !== $this->totalProgress ? $this->totalProgress->toArray($noStream) : $this->totalProgress;
        }

        if (null !== $this->workerProgress) {
            if (\is_array($this->workerProgress)) {
                $res['WorkerProgress'] = [];
                $n1 = 0;
                foreach ($this->workerProgress as $item1) {
                    $res['WorkerProgress'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['JobDescription'])) {
            $model->jobDescription = $map['JobDescription'];
        }

        if (isset($map['RootProgress'])) {
            $model->rootProgress = rootProgress::fromMap($map['RootProgress']);
        }

        if (isset($map['ShardingProgress'])) {
            if (!empty($map['ShardingProgress'])) {
                $model->shardingProgress = [];
                $n1 = 0;
                foreach ($map['ShardingProgress'] as $item1) {
                    $model->shardingProgress[$n1] = shardingProgress::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TaskProgress'])) {
            if (!empty($map['TaskProgress'])) {
                $model->taskProgress = [];
                $n1 = 0;
                foreach ($map['TaskProgress'] as $item1) {
                    $model->taskProgress[$n1] = taskProgress::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TotalProgress'])) {
            $model->totalProgress = totalProgress::fromMap($map['TotalProgress']);
        }

        if (isset($map['WorkerProgress'])) {
            if (!empty($map['WorkerProgress'])) {
                $model->workerProgress = [];
                $n1 = 0;
                foreach ($map['WorkerProgress'] as $item1) {
                    $model->workerProgress[$n1] = workerProgress::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
