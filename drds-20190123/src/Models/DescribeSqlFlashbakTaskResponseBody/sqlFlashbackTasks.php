<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeSqlFlashbakTaskResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeSqlFlashbakTaskResponseBody\sqlFlashbackTasks\sqlFlashbackTask;

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
        if (\is_array($this->sqlFlashbackTask)) {
            Model::validateArray($this->sqlFlashbackTask);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sqlFlashbackTask) {
            if (\is_array($this->sqlFlashbackTask)) {
                $res['SqlFlashbackTask'] = [];
                $n1 = 0;
                foreach ($this->sqlFlashbackTask as $item1) {
                    $res['SqlFlashbackTask'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SqlFlashbackTask'])) {
            if (!empty($map['SqlFlashbackTask'])) {
                $model->sqlFlashbackTask = [];
                $n1 = 0;
                foreach ($map['SqlFlashbackTask'] as $item1) {
                    $model->sqlFlashbackTask[$n1] = sqlFlashbackTask::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
