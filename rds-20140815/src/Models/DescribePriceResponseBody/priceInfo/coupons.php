<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribePriceResponseBody\priceInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribePriceResponseBody\priceInfo\coupons\coupon;

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
        if (\is_array($this->coupon)) {
            Model::validateArray($this->coupon);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->coupon) {
            if (\is_array($this->coupon)) {
                $res['Coupon'] = [];
                $n1 = 0;
                foreach ($this->coupon as $item1) {
                    $res['Coupon'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Coupon'])) {
            if (!empty($map['Coupon'])) {
                $model->coupon = [];
                $n1 = 0;
                foreach ($map['Coupon'] as $item1) {
                    $model->coupon[$n1++] = coupon::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
