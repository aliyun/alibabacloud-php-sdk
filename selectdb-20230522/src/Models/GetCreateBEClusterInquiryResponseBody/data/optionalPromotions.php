<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Selectdb\V20230522\Models\GetCreateBEClusterInquiryResponseBody\data;

use AlibabaCloud\Dara\Model;

class optionalPromotions extends Model
{
    /**
     * @var string
     */
    public $canPromFee;

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
    public $promotionName;

    /**
     * @var string
     */
    public $promotionOptionNo;
    protected $_name = [
        'canPromFee' => 'CanPromFee',
        'optionCode' => 'OptionCode',
        'promotionDesc' => 'PromotionDesc',
        'promotionName' => 'PromotionName',
        'promotionOptionNo' => 'PromotionOptionNo',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->canPromFee) {
            $res['CanPromFee'] = $this->canPromFee;
        }

        if (null !== $this->optionCode) {
            $res['OptionCode'] = $this->optionCode;
        }

        if (null !== $this->promotionDesc) {
            $res['PromotionDesc'] = $this->promotionDesc;
        }

        if (null !== $this->promotionName) {
            $res['PromotionName'] = $this->promotionName;
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
        if (isset($map['CanPromFee'])) {
            $model->canPromFee = $map['CanPromFee'];
        }

        if (isset($map['OptionCode'])) {
            $model->optionCode = $map['OptionCode'];
        }

        if (isset($map['PromotionDesc'])) {
            $model->promotionDesc = $map['PromotionDesc'];
        }

        if (isset($map['PromotionName'])) {
            $model->promotionName = $map['PromotionName'];
        }

        if (isset($map['PromotionOptionNo'])) {
            $model->promotionOptionNo = $map['PromotionOptionNo'];
        }

        return $model;
    }
}
