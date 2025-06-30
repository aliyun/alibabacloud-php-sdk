<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TripTaskQueryResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TripTaskQueryResponseBody\module\recordTasks;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TripTaskQueryResponseBody\module\runningTasks;

class module extends Model
{
    /**
     * @var bool
     */
    public $needRefresh;

    /**
     * @var recordTasks[]
     */
    public $recordTasks;

    /**
     * @var runningTasks[]
     */
    public $runningTasks;
    protected $_name = [
        'needRefresh' => 'needRefresh',
        'recordTasks' => 'record_tasks',
        'runningTasks' => 'running_tasks',
    ];

    public function validate()
    {
        if (\is_array($this->recordTasks)) {
            Model::validateArray($this->recordTasks);
        }
        if (\is_array($this->runningTasks)) {
            Model::validateArray($this->runningTasks);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->needRefresh) {
            $res['needRefresh'] = $this->needRefresh;
        }

        if (null !== $this->recordTasks) {
            if (\is_array($this->recordTasks)) {
                $res['record_tasks'] = [];
                $n1 = 0;
                foreach ($this->recordTasks as $item1) {
                    $res['record_tasks'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->runningTasks) {
            if (\is_array($this->runningTasks)) {
                $res['running_tasks'] = [];
                $n1 = 0;
                foreach ($this->runningTasks as $item1) {
                    $res['running_tasks'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['needRefresh'])) {
            $model->needRefresh = $map['needRefresh'];
        }

        if (isset($map['record_tasks'])) {
            if (!empty($map['record_tasks'])) {
                $model->recordTasks = [];
                $n1 = 0;
                foreach ($map['record_tasks'] as $item1) {
                    $model->recordTasks[$n1] = recordTasks::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['running_tasks'])) {
            if (!empty($map['running_tasks'])) {
                $model->runningTasks = [];
                $n1 = 0;
                foreach ($map['running_tasks'] as $item1) {
                    $model->runningTasks[$n1] = runningTasks::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
