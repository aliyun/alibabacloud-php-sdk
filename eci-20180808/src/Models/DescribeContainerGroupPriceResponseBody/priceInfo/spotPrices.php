<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupPriceResponseBody\priceInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupPriceResponseBody\priceInfo\spotPrices\spotPrice;

class spotPrices extends Model
{
    /**
     * @var spotPrice[]
     */
    public $spotPrice;
    protected $_name = [
        'spotPrice' => 'SpotPrice',
    ];

    public function validate()
    {
        if (\is_array($this->spotPrice)) {
            Model::validateArray($this->spotPrice);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->spotPrice) {
            if (\is_array($this->spotPrice)) {
                $res['SpotPrice'] = [];
                $n1 = 0;
                foreach ($this->spotPrice as $item1) {
                    $res['SpotPrice'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SpotPrice'])) {
            if (!empty($map['SpotPrice'])) {
                $model->spotPrice = [];
                $n1 = 0;
                foreach ($map['SpotPrice'] as $item1) {
                    $model->spotPrice[$n1++] = spotPrice::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
