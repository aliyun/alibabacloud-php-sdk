<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\GetMemoryTaskResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetMemoryTaskResponseBody\data\error;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetMemoryTaskResponseBody\data\memories;

class data extends Model
{
    /**
     * @var error
     */
    public $error;

    /**
     * @var memories[]
     */
    public $memories;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'error' => 'error',
        'memories' => 'memories',
        'status' => 'status',
        'taskId' => 'taskId',
    ];

    public function validate()
    {
        if (null !== $this->error) {
            $this->error->validate();
        }
        if (\is_array($this->memories)) {
            Model::validateArray($this->memories);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->error) {
            $res['error'] = null !== $this->error ? $this->error->toArray($noStream) : $this->error;
        }

        if (null !== $this->memories) {
            if (\is_array($this->memories)) {
                $res['memories'] = [];
                $n1 = 0;
                foreach ($this->memories as $item1) {
                    $res['memories'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
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
        if (isset($map['error'])) {
            $model->error = error::fromMap($map['error']);
        }

        if (isset($map['memories'])) {
            if (!empty($map['memories'])) {
                $model->memories = [];
                $n1 = 0;
                foreach ($map['memories'] as $item1) {
                    $model->memories[$n1] = memories::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        return $model;
    }
}
