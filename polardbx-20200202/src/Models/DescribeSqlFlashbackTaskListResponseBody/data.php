<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeSqlFlashbackTaskListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeSqlFlashbackTaskListResponseBody\data\sqlFlashbackTasks;

class data extends Model
{
    /**
     * @var sqlFlashbackTasks[]
     */
    public $sqlFlashbackTasks;
    protected $_name = [
        'sqlFlashbackTasks' => 'SqlFlashbackTasks',
    ];

    public function validate()
    {
        if (\is_array($this->sqlFlashbackTasks)) {
            Model::validateArray($this->sqlFlashbackTasks);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sqlFlashbackTasks) {
            if (\is_array($this->sqlFlashbackTasks)) {
                $res['SqlFlashbackTasks'] = [];
                $n1 = 0;
                foreach ($this->sqlFlashbackTasks as $item1) {
                    $res['SqlFlashbackTasks'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SqlFlashbackTasks'])) {
            if (!empty($map['SqlFlashbackTasks'])) {
                $model->sqlFlashbackTasks = [];
                $n1 = 0;
                foreach ($map['SqlFlashbackTasks'] as $item1) {
                    $model->sqlFlashbackTasks[$n1] = sqlFlashbackTasks::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
