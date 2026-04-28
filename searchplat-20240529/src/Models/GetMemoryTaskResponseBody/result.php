<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240529\Models\GetMemoryTaskResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var string[]
     */
    public $memoryIds;

    /**
     * @var string[]
     */
    public $skillIds;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'errorMessage' => 'error_message',
        'memoryIds' => 'memory_ids',
        'skillIds' => 'skill_ids',
        'status' => 'status',
        'taskId' => 'task_id',
    ];

    public function validate()
    {
        if (\is_array($this->memoryIds)) {
            Model::validateArray($this->memoryIds);
        }
        if (\is_array($this->skillIds)) {
            Model::validateArray($this->skillIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->errorMessage) {
            $res['error_message'] = $this->errorMessage;
        }

        if (null !== $this->memoryIds) {
            if (\is_array($this->memoryIds)) {
                $res['memory_ids'] = [];
                $n1 = 0;
                foreach ($this->memoryIds as $item1) {
                    $res['memory_ids'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->skillIds) {
            if (\is_array($this->skillIds)) {
                $res['skill_ids'] = [];
                $n1 = 0;
                foreach ($this->skillIds as $item1) {
                    $res['skill_ids'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->taskId) {
            $res['task_id'] = $this->taskId;
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
        if (isset($map['error_message'])) {
            $model->errorMessage = $map['error_message'];
        }

        if (isset($map['memory_ids'])) {
            if (!empty($map['memory_ids'])) {
                $model->memoryIds = [];
                $n1 = 0;
                foreach ($map['memory_ids'] as $item1) {
                    $model->memoryIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['skill_ids'])) {
            if (!empty($map['skill_ids'])) {
                $model->skillIds = [];
                $n1 = 0;
                foreach ($map['skill_ids'] as $item1) {
                    $model->skillIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['task_id'])) {
            $model->taskId = $map['task_id'];
        }

        return $model;
    }
}
