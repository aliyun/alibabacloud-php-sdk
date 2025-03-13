<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribePriceResponseBody\priceInfo\price;

use AlibabaCloud\Tea\Model;

class promotions extends Model
{
    /**
     * @description The description of the promotion rule.
     *
     * @example test
     *
     * @var string
     */
    public $optionCode;

    /**
     * @description The description of the promotion.
     *
     * @example Get started with new services with a discount.
     *
     * @var string
     */
    public $promotionDesc;

    /**
     * @description The promotion ID.
     *
     * @example 123456
     *
     * @var string
     */
    public $promotionId;

    /**
     * @description The promotion name.
     *
     * @example Special Offer
     *
     * @var string
     */
    public $promotionName;

    /**
     * @description Indicates whether an item is selected.
     *
     * @example false
     *
     * @var bool
     */
    public $selected;
    protected $_name = [
        'optionCode'    => 'OptionCode',
        'promotionDesc' => 'PromotionDesc',
        'promotionId'   => 'PromotionId',
        'promotionName' => 'PromotionName',
        'selected'      => 'Selected',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->optionCode) {
            $res['OptionCode'] = $this->optionCode;
        }
        if (null !== $this->promotionDesc) {
            $res['PromotionDesc'] = $this->promotionDesc;
        }
        if (null !== $this->promotionId) {
            $res['PromotionId'] = $this->promotionId;
        }
        if (null !== $this->promotionName) {
            $res['PromotionName'] = $this->promotionName;
        }
        if (null !== $this->selected) {
            $res['Selected'] = $this->selected;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return promotions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OptionCode'])) {
            $model->optionCode = $map['OptionCode'];
        }
        if (isset($map['PromotionDesc'])) {
            $model->promotionDesc = $map['PromotionDesc'];
        }
        if (isset($map['PromotionId'])) {
            $model->promotionId = $map['PromotionId'];
        }
        if (isset($map['PromotionName'])) {
            $model->promotionName = $map['PromotionName'];
        }
        if (isset($map['Selected'])) {
            $model->selected = $map['Selected'];
        }

        return $model;
    }
}
