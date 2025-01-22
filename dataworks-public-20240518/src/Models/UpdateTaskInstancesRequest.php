<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateTaskInstancesRequest\taskInstances;

class UpdateTaskInstancesRequest extends Model
{
    /**
     * @var string
     */
    public $comment;
    /**
     * @var taskInstances[]
     */
    public $taskInstances;
    protected $_name = [
        'comment'       => 'Comment',
        'taskInstances' => 'TaskInstances',
    ];

    public function validate()
    {
        if (\is_array($this->taskInstances)) {
            Model::validateArray($this->taskInstances);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }

        if (null !== $this->taskInstances) {
            if (\is_array($this->taskInstances)) {
                $res['TaskInstances'] = [];
                $n1                   = 0;
                foreach ($this->taskInstances as $item1) {
                    $res['TaskInstances'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }

        if (isset($map['TaskInstances'])) {
            if (!empty($map['TaskInstances'])) {
                $model->taskInstances = [];
                $n1                   = 0;
                foreach ($map['TaskInstances'] as $item1) {
                    $model->taskInstances[$n1++] = taskInstances::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
