<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetTaskResponseBody\task;

use AlibabaCloud\Tea\Model;

class subTasks extends Model
{
    /**
     * @description The subtasks.
     *
     * @var subTasks\subTasks[]
     */
    public $subTasks;

    /**
     * @description The type of the subtask. Valid values:
     *
     *   DoWhile: do-while node
     *   Combined: node group
     *   ForEach: for-each node
     *
     * @example Combined
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'subTasks' => 'SubTasks',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->subTasks) {
            $res['SubTasks'] = [];
            if (null !== $this->subTasks && \is_array($this->subTasks)) {
                $n = 0;
                foreach ($this->subTasks as $item) {
                    $res['SubTasks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subTasks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SubTasks'])) {
            if (!empty($map['SubTasks'])) {
                $model->subTasks = [];
                $n = 0;
                foreach ($map['SubTasks'] as $item) {
                    $model->subTasks[$n++] = null !== $item ? subTasks\subTasks::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
