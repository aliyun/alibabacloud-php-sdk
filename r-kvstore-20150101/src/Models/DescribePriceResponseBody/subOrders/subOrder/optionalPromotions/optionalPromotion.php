<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribePriceResponseBody\subOrders\subOrder\optionalPromotions;

use AlibabaCloud\Tea\Model;

class optionalPromotion extends Model
{
    /**
     * @description The additional activity information.
     *
     * @example ****
     *
     * @var mixed[]
     */
    public $activityExtInfo;

    /**
     * @description The amount that can be deducted by using the coupon.
     *
     * @example ****
     *
     * @var string
     */
    public $canPromFee;

    /**
     * @description Indicates whether coupons are used. Valid values:
     *
     *   default or null (default): Coupons are used.
     *   youhuiquan_promotion_option_id_for_blank: Coupons are not used.
     *
     * @example default
     *
     * @var string
     */
    public $couponNo;

    /**
     * @description The description of the coupon.
     *
     * @example ****
     *
     * @var string
     */
    public $description;

    /**
     * @description The coupon name.
     *
     * @example ****
     *
     * @var string
     */
    public $name;

    /**
     * @description The promotion code.
     *
     * @example ****
     *
     * @var string
     */
    public $optionCode;

    /**
     * @description The promotion name.
     *
     * @example ****
     *
     * @var string
     */
    public $promotionName;

    /**
     * @description The promotion ID.
     *
     * @example youhuiquan_promotion_option_id_for_blank
     *
     * @var string
     */
    public $promotionOptionNo;

    /**
     * @description Indicates whether the promotion option is selected.
     *
     * @example false
     *
     * @var bool
     */
    public $selected;

    /**
     * @description Indicates whether the discount is displayed.
     *
     * @example False
     *
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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->activityExtInfo) {
            $res['ActivityExtInfo'] = $this->activityExtInfo;
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

    /**
     * @param array $map
     *
     * @return optionalPromotion
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActivityExtInfo'])) {
            $model->activityExtInfo = $map['ActivityExtInfo'];
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
