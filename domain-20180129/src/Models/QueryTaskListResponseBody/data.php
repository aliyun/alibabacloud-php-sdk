<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models\QueryTaskListResponseBody;

use AlibabaCloud\SDK\Domain\V20180129\Models\QueryTaskListResponseBody\data\taskInfo;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var taskInfo[]
     */
    public $taskInfo;
    protected $_name = [
        'taskInfo' => 'TaskInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->taskInfo) {
            $res['TaskInfo'] = [];
            if (null !== $this->taskInfo && \is_array($this->taskInfo)) {
                $n = 0;
                foreach ($this->taskInfo as $item) {
                    $res['TaskInfo'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['TaskInfo'])) {
            if (!empty($map['TaskInfo'])) {
                $model->taskInfo = [];
                $n               = 0;
                foreach ($map['TaskInfo'] as $item) {
                    $model->taskInfo[$n++] = null !== $item ? taskInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
