<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Dara\Model;

class PromotionParam extends Model
{
    /**
     * @var string
     */
    public $productCode;
    /**
     * @var string
     */
    public $promotionOptionCode;
    /**
     * @var string
     */
    public $promotionOptionNo;
    protected $_name = [
        'productCode'         => 'ProductCode',
        'promotionOptionCode' => 'PromotionOptionCode',
        'promotionOptionNo'   => 'PromotionOptionNo',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }

        if (null !== $this->promotionOptionCode) {
            $res['PromotionOptionCode'] = $this->promotionOptionCode;
        }

        if (null !== $this->promotionOptionNo) {
            $res['PromotionOptionNo'] = $this->promotionOptionNo;
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
            $model->productCode = $map['ProductCode'];
        }

        if (isset($map['PromotionOptionCode'])) {
            $model->promotionOptionCode = $map['PromotionOptionCode'];
        }

        if (isset($map['PromotionOptionNo'])) {
            $model->promotionOptionNo = $map['PromotionOptionNo'];
        }

        return $model;
    }
}
