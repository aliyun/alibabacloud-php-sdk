<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqp\V20190901\Models\QueryMessageByQueueNameResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Amqp\V20190901\Models\QueryMessageByQueueNameResponseBody\data\voList\amqpMessageVO;

class voList extends Model
{
    /**
     * @var amqpMessageVO[]
     */
    public $amqpMessageVO;
    protected $_name = [
        'amqpMessageVO' => 'AmqpMessageVO',
    ];

    public function validate()
    {
        if (\is_array($this->amqpMessageVO)) {
            Model::validateArray($this->amqpMessageVO);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->amqpMessageVO) {
            if (\is_array($this->amqpMessageVO)) {
                $res['AmqpMessageVO'] = [];
                $n1 = 0;
                foreach ($this->amqpMessageVO as $item1) {
                    $res['AmqpMessageVO'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AmqpMessageVO'])) {
            if (!empty($map['AmqpMessageVO'])) {
                $model->amqpMessageVO = [];
                $n1 = 0;
                foreach ($map['AmqpMessageVO'] as $item1) {
                    $model->amqpMessageVO[$n1] = amqpMessageVO::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
