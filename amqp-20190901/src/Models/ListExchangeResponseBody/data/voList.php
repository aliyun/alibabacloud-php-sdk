<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqp\V20190901\Models\ListExchangeResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Amqp\V20190901\Models\ListExchangeResponseBody\data\voList\exchangVO;

class voList extends Model
{
    /**
     * @var exchangVO[]
     */
    public $exchangVO;
    protected $_name = [
        'exchangVO' => 'ExchangVO',
    ];

    public function validate()
    {
        if (\is_array($this->exchangVO)) {
            Model::validateArray($this->exchangVO);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->exchangVO) {
            if (\is_array($this->exchangVO)) {
                $res['ExchangVO'] = [];
                $n1 = 0;
                foreach ($this->exchangVO as $item1) {
                    $res['ExchangVO'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ExchangVO'])) {
            if (!empty($map['ExchangVO'])) {
                $model->exchangVO = [];
                $n1 = 0;
                foreach ($map['ExchangVO'] as $item1) {
                    $model->exchangVO[$n1] = exchangVO::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
