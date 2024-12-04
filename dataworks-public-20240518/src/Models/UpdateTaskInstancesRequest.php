<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateTaskInstancesRequest\taskInstances;
use AlibabaCloud\Tea\Model;

class UpdateTaskInstancesRequest extends Model
{
    /**
     * @description The remarks.
     *
     * @example this is a comment
     *
     * @var string
     */
    public $comment;

    /**
     * @description The instances.
     *
     * @var taskInstances[]
     */
    public $taskInstances;
    protected $_name = [
        'comment'       => 'Comment',
        'taskInstances' => 'TaskInstances',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->taskInstances) {
            $res['TaskInstances'] = [];
            if (null !== $this->taskInstances && \is_array($this->taskInstances)) {
                $n = 0;
                foreach ($this->taskInstances as $item) {
                    $res['TaskInstances'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateTaskInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['TaskInstances'])) {
            if (!empty($map['TaskInstances'])) {
                $model->taskInstances = [];
                $n                    = 0;
                foreach ($map['TaskInstances'] as $item) {
                    $model->taskInstances[$n++] = null !== $item ? taskInstances::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
