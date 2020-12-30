<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models\QueryTaskDetailListResponseBody;

use AlibabaCloud\SDK\Domain\V20180129\Models\QueryTaskDetailListResponseBody\data\taskDetail;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var taskDetail[]
     */
    public $taskDetail;
    protected $_name = [
        'taskDetail' => 'TaskDetail',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->taskDetail) {
            $res['TaskDetail'] = [];
            if (null !== $this->taskDetail && \is_array($this->taskDetail)) {
                $n = 0;
                foreach ($this->taskDetail as $item) {
                    $res['TaskDetail'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['TaskDetail'])) {
            if (!empty($map['TaskDetail'])) {
                $model->taskDetail = [];
                $n                 = 0;
                foreach ($map['TaskDetail'] as $item) {
                    $model->taskDetail[$n++] = null !== $item ? taskDetail::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
