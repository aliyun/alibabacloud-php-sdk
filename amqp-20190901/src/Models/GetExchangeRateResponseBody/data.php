<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqp\V20190901\Models\GetExchangeRateResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Amqp\V20190901\Models\GetExchangeRateResponseBody\data\exchangeQuotaVO;

class data extends Model
{
    /**
     * @var exchangeQuotaVO[]
     */
    public $exchangeQuotaVO;
    protected $_name = [
        'exchangeQuotaVO' => 'ExchangeQuotaVO',
    ];

    public function validate()
    {
        if (\is_array($this->exchangeQuotaVO)) {
            Model::validateArray($this->exchangeQuotaVO);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->exchangeQuotaVO) {
            if (\is_array($this->exchangeQuotaVO)) {
                $res['ExchangeQuotaVO'] = [];
                $n1 = 0;
                foreach ($this->exchangeQuotaVO as $item1) {
                    $res['ExchangeQuotaVO'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ExchangeQuotaVO'])) {
            if (!empty($map['ExchangeQuotaVO'])) {
                $model->exchangeQuotaVO = [];
                $n1 = 0;
                foreach ($map['ExchangeQuotaVO'] as $item1) {
                    $model->exchangeQuotaVO[$n1] = exchangeQuotaVO::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
