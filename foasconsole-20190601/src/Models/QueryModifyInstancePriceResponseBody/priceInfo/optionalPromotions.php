<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20190601\Models\QueryModifyInstancePriceResponseBody\priceInfo;

use AlibabaCloud\Tea\Model;

class optionalPromotions extends Model
{
    /**
     * @example ￥1,391.5 优惠券 (有效期至 03/23/2022)
     *
     * @var string
     */
    public $promotionDesc;

    /**
     * @example ￥1,391.5 优惠券
     *
     * @var string
     */
    public $promotionName;

    /**
     * @example 500011220010099
     *
     * @var string
     */
    public $promotionOptionNo;

    /**
     * @example true
     *
     * @var bool
     */
    public $selected;
    protected $_name = [
        'promotionDesc'     => 'PromotionDesc',
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
        if (null !== $this->promotionDesc) {
            $res['PromotionDesc'] = $this->promotionDesc;
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
     * @return optionalPromotions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PromotionDesc'])) {
            $model->promotionDesc = $map['PromotionDesc'];
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
