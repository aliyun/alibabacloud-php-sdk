<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class PromotionInfo extends Model
{
    /**
     * @var string
     */
    public $canPromFee;

    /**
     * @var string
     */
    public $isSelected;

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
    public $promotionOptionCode;

    /**
     * @var string
     */
    public $promotionOptionNo;
    protected $_name = [
        'canPromFee'          => 'CanPromFee',
        'isSelected'          => 'IsSelected',
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
        if (null !== $this->canPromFee) {
            $res['CanPromFee'] = $this->canPromFee;
        }
        if (null !== $this->isSelected) {
            $res['IsSelected'] = $this->isSelected;
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
     * @return PromotionInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CanPromFee'])) {
            $model->canPromFee = $map['CanPromFee'];
        }
        if (isset($map['IsSelected'])) {
            $model->isSelected = $map['IsSelected'];
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
