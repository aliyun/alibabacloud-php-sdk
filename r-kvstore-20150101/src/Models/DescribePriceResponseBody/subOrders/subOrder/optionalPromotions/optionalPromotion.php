<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribePriceResponseBody\subOrders\subOrder\optionalPromotions;

use AlibabaCloud\Dara\Model;

class optionalPromotion extends Model
{
    /**
     * @var mixed[]
     */
    public $activityExtInfo;

    /**
     * @var string
     */
    public $canPromFee;

    /**
     * @var string
     */
    public $couponNo;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $optionCode;

    /**
     * @var string
     */
    public $promotionName;

    /**
     * @var string
     */
    public $promotionOptionNo;

    /**
     * @var bool
     */
    public $selected;

    /**
     * @var bool
     */
    public $show;
    protected $_name = [
        'activityExtInfo' => 'ActivityExtInfo',
        'canPromFee' => 'CanPromFee',
        'couponNo' => 'CouponNo',
        'description' => 'Description',
        'name' => 'Name',
        'optionCode' => 'OptionCode',
        'promotionName' => 'PromotionName',
        'promotionOptionNo' => 'PromotionOptionNo',
        'selected' => 'Selected',
        'show' => 'Show',
    ];

    public function validate()
    {
        if (\is_array($this->activityExtInfo)) {
            Model::validateArray($this->activityExtInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->activityExtInfo) {
            if (\is_array($this->activityExtInfo)) {
                $res['ActivityExtInfo'] = [];
                foreach ($this->activityExtInfo as $key1 => $value1) {
                    $res['ActivityExtInfo'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->canPromFee) {
            $res['CanPromFee'] = $this->canPromFee;
        }

        if (null !== $this->couponNo) {
            $res['CouponNo'] = $this->couponNo;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
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

        if (null !== $this->show) {
            $res['Show'] = $this->show;
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
        if (isset($map['ActivityExtInfo'])) {
            if (!empty($map['ActivityExtInfo'])) {
                $model->activityExtInfo = [];
                foreach ($map['ActivityExtInfo'] as $key1 => $value1) {
                    $model->activityExtInfo[$key1] = $value1;
                }
            }
        }

        if (isset($map['CanPromFee'])) {
            $model->canPromFee = $map['CanPromFee'];
        }

        if (isset($map['CouponNo'])) {
            $model->couponNo = $map['CouponNo'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
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

        if (isset($map['Show'])) {
            $model->show = $map['Show'];
        }

        return $model;
    }
}
