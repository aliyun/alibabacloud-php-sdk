<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SchedulerX3\V20240624\Models\GetJobExecutionProgressResponseBody;

use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\GetJobExecutionProgressResponseBody\data\rootProgress;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\GetJobExecutionProgressResponseBody\data\shardingProgress;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\GetJobExecutionProgressResponseBody\data\taskProgress;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\GetJobExecutionProgressResponseBody\data\totalProgress;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\GetJobExecutionProgressResponseBody\data\workerProgress;
use AlibabaCloud\Tea\Model;

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
        'jobDescription'   => 'JobDescription',
        'rootProgress'     => 'RootProgress',
        'shardingProgress' => 'ShardingProgress',
        'taskProgress'     => 'TaskProgress',
        'totalProgress'    => 'TotalProgress',
        'workerProgress'   => 'WorkerProgress',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobDescription) {
            $res['JobDescription'] = $this->jobDescription;
        }
        if (null !== $this->rootProgress) {
            $res['RootProgress'] = null !== $this->rootProgress ? $this->rootProgress->toMap() : null;
        }
        if (null !== $this->shardingProgress) {
            $res['ShardingProgress'] = [];
            if (null !== $this->shardingProgress && \is_array($this->shardingProgress)) {
                $n = 0;
                foreach ($this->shardingProgress as $item) {
                    $res['ShardingProgress'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->taskProgress) {
            $res['TaskProgress'] = [];
            if (null !== $this->taskProgress && \is_array($this->taskProgress)) {
                $n = 0;
                foreach ($this->taskProgress as $item) {
                    $res['TaskProgress'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalProgress) {
            $res['TotalProgress'] = null !== $this->totalProgress ? $this->totalProgress->toMap() : null;
        }
        if (null !== $this->workerProgress) {
            $res['WorkerProgress'] = [];
            if (null !== $this->workerProgress && \is_array($this->workerProgress)) {
                $n = 0;
                foreach ($this->workerProgress as $item) {
                    $res['WorkerProgress'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
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
                $n                       = 0;
                foreach ($map['ShardingProgress'] as $item) {
                    $model->shardingProgress[$n++] = null !== $item ? shardingProgress::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TaskProgress'])) {
            if (!empty($map['TaskProgress'])) {
                $model->taskProgress = [];
                $n                   = 0;
                foreach ($map['TaskProgress'] as $item) {
                    $model->taskProgress[$n++] = null !== $item ? taskProgress::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalProgress'])) {
            $model->totalProgress = totalProgress::fromMap($map['TotalProgress']);
        }
        if (isset($map['WorkerProgress'])) {
            if (!empty($map['WorkerProgress'])) {
                $model->workerProgress = [];
                $n                     = 0;
                foreach ($map['WorkerProgress'] as $item) {
                    $model->workerProgress[$n++] = null !== $item ? workerProgress::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
