<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryCashCouponsResponseBody;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryCashCouponsResponseBody\data\cashCoupon;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var cashCoupon[]
     */
    public $cashCoupon;
    protected $_name = [
        'cashCoupon' => 'CashCoupon',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cashCoupon) {
            $res['CashCoupon'] = [];
            if (null !== $this->cashCoupon && \is_array($this->cashCoupon)) {
                $n = 0;
                foreach ($this->cashCoupon as $item) {
                    $res['CashCoupon'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['CashCoupon'])) {
            if (!empty($map['CashCoupon'])) {
                $model->cashCoupon = [];
                $n                 = 0;
                foreach ($map['CashCoupon'] as $item) {
                    $model->cashCoupon[$n++] = null !== $item ? cashCoupon::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
