<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribePriceResponseBody\order;

use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribePriceResponseBody\order\coupons\coupon;
use AlibabaCloud\Tea\Model;

class coupons extends Model
{
    /**
     * @var coupon[]
     */
    public $coupon;
    protected $_name = [
        'coupon' => 'Coupon',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->coupon) {
            $res['Coupon'] = [];
            if (null !== $this->coupon && \is_array($this->coupon)) {
                $n = 0;
                foreach ($this->coupon as $item) {
                    $res['Coupon'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return coupons
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Coupon'])) {
            if (!empty($map['Coupon'])) {
                $model->coupon = [];
                $n             = 0;
                foreach ($map['Coupon'] as $item) {
                    $model->coupon[$n++] = null !== $item ? coupon::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
