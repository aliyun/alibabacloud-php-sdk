<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Milvus\V20231012\Models;

use AlibabaCloud\Dara\Model;

class PromotionInfo extends Model
{
    /**
     * @var string
     */
    public $canPromFee;

    /**
     * @var bool
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

    /**
     * @var bool
     */
    public $selected;
    protected $_name = [
        'canPromFee' => 'canPromFee',
        'isSelected' => 'isSelected',
        'promotionDesc' => 'promotionDesc',
        'promotionName' => 'promotionName',
        'promotionOptionCode' => 'promotionOptionCode',
        'promotionOptionNo' => 'promotionOptionNo',
        'selected' => 'selected',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->canPromFee) {
            $res['canPromFee'] = $this->canPromFee;
        }

        if (null !== $this->isSelected) {
            $res['isSelected'] = $this->isSelected;
        }

        if (null !== $this->promotionDesc) {
            $res['promotionDesc'] = $this->promotionDesc;
        }

        if (null !== $this->promotionName) {
            $res['promotionName'] = $this->promotionName;
        }

        if (null !== $this->promotionOptionCode) {
            $res['promotionOptionCode'] = $this->promotionOptionCode;
        }

        if (null !== $this->promotionOptionNo) {
            $res['promotionOptionNo'] = $this->promotionOptionNo;
        }

        if (null !== $this->selected) {
            $res['selected'] = $this->selected;
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
        if (isset($map['canPromFee'])) {
            $model->canPromFee = $map['canPromFee'];
        }

        if (isset($map['isSelected'])) {
            $model->isSelected = $map['isSelected'];
        }

        if (isset($map['promotionDesc'])) {
            $model->promotionDesc = $map['promotionDesc'];
        }

        if (isset($map['promotionName'])) {
            $model->promotionName = $map['promotionName'];
        }

        if (isset($map['promotionOptionCode'])) {
            $model->promotionOptionCode = $map['promotionOptionCode'];
        }

        if (isset($map['promotionOptionNo'])) {
            $model->promotionOptionNo = $map['promotionOptionNo'];
        }

        if (isset($map['selected'])) {
            $model->selected = $map['selected'];
        }

        return $model;
    }
}
