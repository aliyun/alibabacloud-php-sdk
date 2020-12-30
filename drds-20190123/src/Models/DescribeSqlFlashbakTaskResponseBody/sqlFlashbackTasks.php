<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeSqlFlashbakTaskResponseBody;

use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeSqlFlashbakTaskResponseBody\sqlFlashbackTasks\sqlFlashbackTask;
use AlibabaCloud\Tea\Model;

class sqlFlashbackTasks extends Model
{
    /**
     * @var sqlFlashbackTask[]
     */
    public $sqlFlashbackTask;
    protected $_name = [
        'sqlFlashbackTask' => 'SqlFlashbackTask',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sqlFlashbackTask) {
            $res['SqlFlashbackTask'] = [];
            if (null !== $this->sqlFlashbackTask && \is_array($this->sqlFlashbackTask)) {
                $n = 0;
                foreach ($this->sqlFlashbackTask as $item) {
                    $res['SqlFlashbackTask'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sqlFlashbackTasks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SqlFlashbackTask'])) {
            if (!empty($map['SqlFlashbackTask'])) {
                $model->sqlFlashbackTask = [];
                $n                       = 0;
                foreach ($map['SqlFlashbackTask'] as $item) {
                    $model->sqlFlashbackTask[$n++] = null !== $item ? sqlFlashbackTask::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
