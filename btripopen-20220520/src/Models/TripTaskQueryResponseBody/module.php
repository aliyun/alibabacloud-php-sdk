<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TripTaskQueryResponseBody;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TripTaskQueryResponseBody\module\recordTasks;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TripTaskQueryResponseBody\module\runningTasks;
use AlibabaCloud\Tea\Model;

class module extends Model
{
    /**
     * @example true
     *
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
        'needRefresh'  => 'needRefresh',
        'recordTasks'  => 'record_tasks',
        'runningTasks' => 'running_tasks',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->needRefresh) {
            $res['needRefresh'] = $this->needRefresh;
        }
        if (null !== $this->recordTasks) {
            $res['record_tasks'] = [];
            if (null !== $this->recordTasks && \is_array($this->recordTasks)) {
                $n = 0;
                foreach ($this->recordTasks as $item) {
                    $res['record_tasks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->runningTasks) {
            $res['running_tasks'] = [];
            if (null !== $this->runningTasks && \is_array($this->runningTasks)) {
                $n = 0;
                foreach ($this->runningTasks as $item) {
                    $res['running_tasks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return module
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['needRefresh'])) {
            $model->needRefresh = $map['needRefresh'];
        }
        if (isset($map['record_tasks'])) {
            if (!empty($map['record_tasks'])) {
                $model->recordTasks = [];
                $n                  = 0;
                foreach ($map['record_tasks'] as $item) {
                    $model->recordTasks[$n++] = null !== $item ? recordTasks::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['running_tasks'])) {
            if (!empty($map['running_tasks'])) {
                $model->runningTasks = [];
                $n                   = 0;
                foreach ($map['running_tasks'] as $item) {
                    $model->runningTasks[$n++] = null !== $item ? runningTasks::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
