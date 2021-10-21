<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTradeProduceListResponseBody;

use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTradeProduceListResponseBody\data\tradeProduces;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var tradeProduces[]
     */
    public $tradeProduces;
    protected $_name = [
        'tradeProduces' => 'TradeProduces',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tradeProduces) {
            $res['TradeProduces'] = [];
            if (null !== $this->tradeProduces && \is_array($this->tradeProduces)) {
                $n = 0;
                foreach ($this->tradeProduces as $item) {
                    $res['TradeProduces'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TradeProduces'])) {
            if (!empty($map['TradeProduces'])) {
                $model->tradeProduces = [];
                $n                    = 0;
                foreach ($map['TradeProduces'] as $item) {
                    $model->tradeProduces[$n++] = null !== $item ? tradeProduces::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
