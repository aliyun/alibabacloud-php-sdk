<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bss\V20140714\Models\DescribeCouponListResponseBody\coupons\coupon;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tradeType) {
            $res['TradeType'] = $this->tradeType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tradeTypes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TradeType'])) {
            if (!empty($map['TradeType'])) {
                $model->tradeType = $map['TradeType'];
            }
        }

        return $model;
    }
}
