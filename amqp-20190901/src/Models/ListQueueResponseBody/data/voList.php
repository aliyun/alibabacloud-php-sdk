<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqp\V20190901\Models\ListQueueResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Amqp\V20190901\Models\ListQueueResponseBody\data\voList\queueVO;

class voList extends Model
{
    /**
     * @var queueVO[]
     */
    public $queueVO;
    protected $_name = [
        'queueVO' => 'QueueVO',
    ];

    public function validate()
    {
        if (\is_array($this->queueVO)) {
            Model::validateArray($this->queueVO);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->queueVO) {
            if (\is_array($this->queueVO)) {
                $res['QueueVO'] = [];
                $n1 = 0;
                foreach ($this->queueVO as $item1) {
                    $res['QueueVO'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['QueueVO'])) {
            if (!empty($map['QueueVO'])) {
                $model->queueVO = [];
                $n1 = 0;
                foreach ($map['QueueVO'] as $item1) {
                    $model->queueVO[$n1] = queueVO::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
