<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTrademarkPriceResponseBody;

use AlibabaCloud\Tea\Model;

class prices extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTrademarkPriceResponseBody\prices\prices[]
     */
    public $prices;
    protected $_name = [
        'prices' => 'Prices',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->prices) {
            $res['Prices'] = [];
            if (null !== $this->prices && \is_array($this->prices)) {
                $n = 0;
                foreach ($this->prices as $item) {
                    $res['Prices'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return prices
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Prices'])) {
            if (!empty($map['Prices'])) {
                $model->prices = [];
                $n             = 0;
                foreach ($map['Prices'] as $item) {
                    $model->prices[$n++] = null !== $item ? \AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTrademarkPriceResponseBody\prices\prices::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
