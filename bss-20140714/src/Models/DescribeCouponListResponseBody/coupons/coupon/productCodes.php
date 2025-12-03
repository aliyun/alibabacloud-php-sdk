<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bss\V20140714\Models\DescribeCouponListResponseBody\coupons\coupon;

use AlibabaCloud\Dara\Model;

class productCodes extends Model
{
    /**
     * @var string[]
     */
    public $productCode;
    protected $_name = [
        'productCode' => 'ProductCode',
    ];

    public function validate()
    {
        if (\is_array($this->productCode)) {
            Model::validateArray($this->productCode);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->productCode) {
            if (\is_array($this->productCode)) {
                $res['ProductCode'] = [];
                $n1 = 0;
                foreach ($this->productCode as $item1) {
                    $res['ProductCode'][$n1] = $item1;
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
        if (isset($map['ProductCode'])) {
            if (!empty($map['ProductCode'])) {
                $model->productCode = [];
                $n1 = 0;
                foreach ($map['ProductCode'] as $item1) {
                    $model->productCode[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
