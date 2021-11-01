<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20190601\Models\QueryConvertInstancePriceResponseBody\priceInfo;

use AlibabaCloud\Tea\Model;

class optionalPromotions extends Model
{
    /**
     * @description 优惠券描述
     *
     * @var string
     */
    public $promotionDesc;

    /**
     * @description 优惠券名称
     *
     * @var string
     */
    public $promotionName;

    /**
     * @description 优惠券编号
     *
     * @var string
     */
    public $promotionOptionNo;

    /**
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
