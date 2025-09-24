<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryCashCouponsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryCashCouponsResponseBody\data\cashCoupon;

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
        if (\is_array($this->cashCoupon)) {
            Model::validateArray($this->cashCoupon);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cashCoupon) {
            if (\is_array($this->cashCoupon)) {
                $res['CashCoupon'] = [];
                $n1 = 0;
                foreach ($this->cashCoupon as $item1) {
                    $res['CashCoupon'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['CashCoupon'])) {
            if (!empty($map['CashCoupon'])) {
                $model->cashCoupon = [];
                $n1 = 0;
                foreach ($map['CashCoupon'] as $item1) {
                    $model->cashCoupon[$n1] = cashCoupon::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
