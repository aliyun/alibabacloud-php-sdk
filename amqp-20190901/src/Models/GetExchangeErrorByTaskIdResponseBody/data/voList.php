<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqp\V20190901\Models\GetExchangeErrorByTaskIdResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Amqp\V20190901\Models\GetExchangeErrorByTaskIdResponseBody\data\voList\exchangeErrorDO;

class voList extends Model
{
    /**
     * @var exchangeErrorDO[]
     */
    public $exchangeErrorDO;
    protected $_name = [
        'exchangeErrorDO' => 'ExchangeErrorDO',
    ];

    public function validate()
    {
        if (\is_array($this->exchangeErrorDO)) {
            Model::validateArray($this->exchangeErrorDO);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->exchangeErrorDO) {
            if (\is_array($this->exchangeErrorDO)) {
                $res['ExchangeErrorDO'] = [];
                $n1 = 0;
                foreach ($this->exchangeErrorDO as $item1) {
                    $res['ExchangeErrorDO'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ExchangeErrorDO'])) {
            if (!empty($map['ExchangeErrorDO'])) {
                $model->exchangeErrorDO = [];
                $n1 = 0;
                foreach ($map['ExchangeErrorDO'] as $item1) {
                    $model->exchangeErrorDO[$n1] = exchangeErrorDO::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
