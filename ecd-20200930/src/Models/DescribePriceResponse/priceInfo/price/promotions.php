<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribePriceResponse\priceInfo\price;

use AlibabaCloud\Tea\Model;

class promotions extends Model
{
    /**
     * @var string
     */
    public $optionCode;

    /**
     * @var string
     */
    public $promotionDesc;

    /**
     * @var string
     */
    public $promotionId;

    /**
     * @var string
     */
    public $promotionName;

    /**
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
        Model::validateRequired('optionCode', $this->optionCode, true);
        Model::validateRequired('promotionDesc', $this->promotionDesc, true);
        Model::validateRequired('promotionId', $this->promotionId, true);
        Model::validateRequired('promotionName', $this->promotionName, true);
        Model::validateRequired('selected', $this->selected, true);
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
