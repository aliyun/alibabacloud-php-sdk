<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\DescribeCommodityPriceResponseBody;

use AlibabaCloud\Tea\Model;

class promotions extends Model
{
    /**
     * @example 0
     *
     * @var float
     */
    public $canPromFee;

    /**
     * @example youhui_quan
     *
     * @var string
     */
    public $optionCode;

    /**
     * @example youhuiquan_promotion_option_id_for_blank
     *
     * @var string
     */
    public $promotionName;

    /**
     * @example 50003298014****
     *
     * @var string
     */
    public $promotionOptionNo;

    /**
     * @example false
     *
     * @var bool
     */
    public $selected;
    protected $_name = [
        'canPromFee'        => 'CanPromFee',
        'optionCode'        => 'OptionCode',
        'promotionName'     => 'PromotionName',
        'promotionOptionNo' => 'PromotionOptionNo',
        'selected'          => 'Selected',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->canPromFee) {
            $res['CanPromFee'] = $this->canPromFee;
        }
        if (null !== $this->optionCode) {
            $res['OptionCode'] = $this->optionCode;
        }
        if (null !== $this->promotionName) {
            $res['PromotionName'] = $this->promotionName;
        }
        if (null !== $this->promotionOptionNo) {
            $res['PromotionOptionNo'] = $this->promotionOptionNo;
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
        if (isset($map['CanPromFee'])) {
            $model->canPromFee = $map['CanPromFee'];
        }
        if (isset($map['OptionCode'])) {
            $model->optionCode = $map['OptionCode'];
        }
        if (isset($map['PromotionName'])) {
            $model->promotionName = $map['PromotionName'];
        }
        if (isset($map['PromotionOptionNo'])) {
            $model->promotionOptionNo = $map['PromotionOptionNo'];
        }
        if (isset($map['Selected'])) {
            $model->selected = $map['Selected'];
        }

        return $model;
    }
}
