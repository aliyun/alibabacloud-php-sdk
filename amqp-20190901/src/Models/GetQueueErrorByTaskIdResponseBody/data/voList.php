<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqp\V20190901\Models\GetQueueErrorByTaskIdResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Amqp\V20190901\Models\GetQueueErrorByTaskIdResponseBody\data\voList\queueErrorDO;

class voList extends Model
{
    /**
     * @var queueErrorDO[]
     */
    public $queueErrorDO;
    protected $_name = [
        'queueErrorDO' => 'QueueErrorDO',
    ];

    public function validate()
    {
        if (\is_array($this->queueErrorDO)) {
            Model::validateArray($this->queueErrorDO);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->queueErrorDO) {
            if (\is_array($this->queueErrorDO)) {
                $res['QueueErrorDO'] = [];
                $n1 = 0;
                foreach ($this->queueErrorDO as $item1) {
                    $res['QueueErrorDO'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['QueueErrorDO'])) {
            if (!empty($map['QueueErrorDO'])) {
                $model->queueErrorDO = [];
                $n1 = 0;
                foreach ($map['QueueErrorDO'] as $item1) {
                    $model->queueErrorDO[$n1] = queueErrorDO::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
