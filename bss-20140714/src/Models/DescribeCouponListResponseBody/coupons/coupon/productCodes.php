<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bss\V20140714\Models\DescribeCouponListResponseBody\coupons\coupon;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return productCodes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProductCode'])) {
            if (!empty($map['ProductCode'])) {
                $model->productCode = $map['ProductCode'];
            }
        }

        return $model;
    }
}
