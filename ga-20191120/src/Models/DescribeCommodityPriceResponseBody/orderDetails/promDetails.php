<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\DescribeCommodityPriceResponseBody\orderDetails;

use AlibabaCloud\Tea\Model;

class promDetails extends Model
{
    /**
     * @description The discounted price.
     *
     * >  This parameter does not take effect for accounts registered on the China site (aliyun.com).
     * @example 0.01
     *
     * @var float
     */
    public $finalPromFee;

    /**
     * @description The code of the discount option.
     *
     * >  This parameter does not take effect for accounts registered on the China site (aliyun.com).
     * @example youhui_quan
     *
     * @var string
     */
    public $optionCode;

    /**
     * @description The sub-type of the discount.
     *
     * >  This parameter does not take effect for accounts registered on the China site (aliyun.com).
     * @example deduct
     *
     * @var string
     */
    public $promType;

    /**
     * @description The ID of the discount item.
     *
     * >  This parameter does not take effect for accounts registered on the China site (aliyun.com).
     * @example 50003298014****
     *
     * @var string
     */
    public $promotionId;

    /**
     * @description The name of the discount item.
     *
     * >  This parameter does not take effect for accounts registered on the China site (aliyun.com).
     * @example coupon
     *
     * @var string
     */
    public $promotionName;
    protected $_name = [
        'finalPromFee'  => 'FinalPromFee',
        'optionCode'    => 'OptionCode',
        'promType'      => 'PromType',
        'promotionId'   => 'PromotionId',
        'promotionName' => 'PromotionName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->finalPromFee) {
            $res['FinalPromFee'] = $this->finalPromFee;
        }
        if (null !== $this->optionCode) {
            $res['OptionCode'] = $this->optionCode;
        }
        if (null !== $this->promType) {
            $res['PromType'] = $this->promType;
        }
        if (null !== $this->promotionId) {
            $res['PromotionId'] = $this->promotionId;
        }
        if (null !== $this->promotionName) {
            $res['PromotionName'] = $this->promotionName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return promDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FinalPromFee'])) {
            $model->finalPromFee = $map['FinalPromFee'];
        }
        if (isset($map['OptionCode'])) {
            $model->optionCode = $map['OptionCode'];
        }
        if (isset($map['PromType'])) {
            $model->promType = $map['PromType'];
        }
        if (isset($map['PromotionId'])) {
            $model->promotionId = $map['PromotionId'];
        }
        if (isset($map['PromotionName'])) {
            $model->promotionName = $map['PromotionName'];
        }

        return $model;
    }
}
