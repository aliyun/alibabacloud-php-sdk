<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class Promotion extends Model
{
    /**
     * @description 产品码。
     *
     * @example ecs
     *
     * @var string
     */
    public $productCode;

    /**
     * @description 优惠券描述。
     *
     * @example 5元优惠券（有效期至23年8月11日）
     *
     * @var string
     */
    public $promotionDesc;

    /**
     * @description 优惠券名称。
     *
     * @example 5元优惠券
     *
     * @var string
     */
    public $promotionName;

    /**
     * @description 优惠券码。
     *
     * @example youhui_quan
     *
     * @var string
     */
    public $promotionOptionCode;

    /**
     * @description 优惠券号。
     *
     * @example ABC123
     *
     * @var string
     */
    public $promotionOptionNo;
    protected $_name = [
        'productCode'         => 'ProductCode',
        'promotionDesc'       => 'PromotionDesc',
        'promotionName'       => 'PromotionName',
        'promotionOptionCode' => 'PromotionOptionCode',
        'promotionOptionNo'   => 'PromotionOptionNo',
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
        if (null !== $this->promotionDesc) {
            $res['PromotionDesc'] = $this->promotionDesc;
        }
        if (null !== $this->promotionName) {
            $res['PromotionName'] = $this->promotionName;
        }
        if (null !== $this->promotionOptionCode) {
            $res['PromotionOptionCode'] = $this->promotionOptionCode;
        }
        if (null !== $this->promotionOptionNo) {
            $res['PromotionOptionNo'] = $this->promotionOptionNo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Promotion
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['PromotionDesc'])) {
            $model->promotionDesc = $map['PromotionDesc'];
        }
        if (isset($map['PromotionName'])) {
            $model->promotionName = $map['PromotionName'];
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
