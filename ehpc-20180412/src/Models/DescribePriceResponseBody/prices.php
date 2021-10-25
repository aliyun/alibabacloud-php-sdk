<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\DescribePriceResponseBody;

use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribePriceResponseBody\prices\priceInfo;
use AlibabaCloud\Tea\Model;

class prices extends Model
{
    /**
     * @var priceInfo[]
     */
    public $priceInfo;
    protected $_name = [
        'priceInfo' => 'PriceInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->priceInfo) {
            $res['PriceInfo'] = [];
            if (null !== $this->priceInfo && \is_array($this->priceInfo)) {
                $n = 0;
                foreach ($this->priceInfo as $item) {
                    $res['PriceInfo'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['PriceInfo'])) {
            if (!empty($map['PriceInfo'])) {
                $model->priceInfo = [];
                $n                = 0;
                foreach ($map['PriceInfo'] as $item) {
                    $model->priceInfo[$n++] = null !== $item ? priceInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
