<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bss\V20140714\Models\DescribeCouponListResponseBody\coupons\coupon;

use AlibabaCloud\Dara\Model;

class tradeTypes extends Model
{
    /**
     * @var string[]
     */
    public $tradeType;
    protected $_name = [
        'tradeType' => 'TradeType',
    ];

    public function validate()
    {
        if (\is_array($this->tradeType)) {
            Model::validateArray($this->tradeType);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->tradeType) {
            if (\is_array($this->tradeType)) {
                $res['TradeType'] = [];
                $n1 = 0;
                foreach ($this->tradeType as $item1) {
                    $res['TradeType'][$n1] = $item1;
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
        if (isset($map['TradeType'])) {
            if (!empty($map['TradeType'])) {
                $model->tradeType = [];
                $n1 = 0;
                foreach ($map['TradeType'] as $item1) {
                    $model->tradeType[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
