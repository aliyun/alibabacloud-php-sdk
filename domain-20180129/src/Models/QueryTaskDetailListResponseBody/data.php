<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models\QueryTaskDetailListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Domain\V20180129\Models\QueryTaskDetailListResponseBody\data\taskDetail;

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
        if (\is_array($this->taskDetail)) {
            Model::validateArray($this->taskDetail);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->taskDetail) {
            if (\is_array($this->taskDetail)) {
                $res['TaskDetail'] = [];
                $n1 = 0;
                foreach ($this->taskDetail as $item1) {
                    $res['TaskDetail'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['TaskDetail'])) {
            if (!empty($map['TaskDetail'])) {
                $model->taskDetail = [];
                $n1 = 0;
                foreach ($map['TaskDetail'] as $item1) {
                    $model->taskDetail[$n1] = taskDetail::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
