<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryMcuJobResponseBody\jobResult\job;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMcuJobResponseBody\jobResult\job\subTaskInfo\subTask;
use AlibabaCloud\Tea\Model;

class subTaskInfo extends Model
{
    /**
     * @var subTask[]
     */
    public $subTask;
    protected $_name = [
        'subTask' => 'SubTask',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->subTask) {
            $res['SubTask'] = [];
            if (null !== $this->subTask && \is_array($this->subTask)) {
                $n = 0;
                foreach ($this->subTask as $item) {
                    $res['SubTask'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subTaskInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SubTask'])) {
            if (!empty($map['SubTask'])) {
                $model->subTask = [];
                $n              = 0;
                foreach ($map['SubTask'] as $item) {
                    $model->subTask[$n++] = null !== $item ? subTask::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
