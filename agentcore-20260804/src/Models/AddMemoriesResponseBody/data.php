<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\AddMemoriesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\AddMemoriesResponseBody\data\memories;

class data extends Model
{
    /**
     * @var memories[]
     */
    public $memories;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string[]
     */
    public $taskIds;
    protected $_name = [
        'memories' => 'memories',
        'taskId' => 'taskId',
        'taskIds' => 'taskIds',
    ];

    public function validate()
    {
        if (\is_array($this->memories)) {
            Model::validateArray($this->memories);
        }
        if (\is_array($this->taskIds)) {
            Model::validateArray($this->taskIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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

        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
        }

        if (null !== $this->taskIds) {
            if (\is_array($this->taskIds)) {
                $res['taskIds'] = [];
                $n1 = 0;
                foreach ($this->taskIds as $item1) {
                    $res['taskIds'][$n1] = $item1;
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

        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        if (isset($map['taskIds'])) {
            if (!empty($map['taskIds'])) {
                $model->taskIds = [];
                $n1 = 0;
                foreach ($map['taskIds'] as $item1) {
                    $model->taskIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
