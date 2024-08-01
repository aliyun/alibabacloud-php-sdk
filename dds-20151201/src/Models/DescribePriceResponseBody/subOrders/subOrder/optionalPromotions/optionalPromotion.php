<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribePriceResponseBody\subOrders\subOrder\optionalPromotions;

use AlibabaCloud\SDK\Dds\V20151201\Models\DescribePriceResponseBody\subOrders\subOrder\optionalPromotions\optionalPromotion\promotionRuleIdList;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribePriceResponseBody\subOrders\subOrder\optionalPromotions\optionalPromotion\targetArticleItemCodes;
use AlibabaCloud\Tea\Model;

class optionalPromotion extends Model
{
    /**
     * @description The activity type.
     *
     * @example discount
     *
     * @var string
     */
    public $activityCategory;

    /**
     * @description The additional activity information.
     *
     * @example {
     * }
     * @var mixed[]
     */
    public $activityExtInfo;

    /**
     * @description The amount that can be deducted by using the coupon.
     *
     * @example 4560789
     *
     * @var float
     */
    public $canPromFee;

    /**
     * @description The promotion type.
     *
     * @example wanhua_activity
     *
     * @var string
     */
    public $optionCode;

    /**
     * @description The promotion name.
     *
     * @example [Item with price reduction in xxx] ApsaraDB for MongoDB instances of a full range of specifications - xxx
     *
     * @var string
     */
    public $promotionName;

    /**
     * @description The promotion ID.
     *
     * @example 1512010241xxxxx
     *
     * @var string
     */
    public $promotionOptionNo;

    /**
     * @description The IDs of the rules that correspond to the coupon.
     *
     * @var promotionRuleIdList
     */
    public $promotionRuleIdList;

    /**
     * @description Indicates whether
     *
     * @example false
     *
     * @var bool
     */
    public $selected;

    /**
     * @description Indicates whether the discount is displayed.
     *
     * @example true
     *
     * @var bool
     */
    public $show;

    /**
     * @description The specification codes of the product.
     *
     * @var targetArticleItemCodes
     */
    public $targetArticleItemCodes;
    protected $_name = [
        'activityCategory'       => 'ActivityCategory',
        'activityExtInfo'        => 'ActivityExtInfo',
        'canPromFee'             => 'CanPromFee',
        'optionCode'             => 'OptionCode',
        'promotionName'          => 'PromotionName',
        'promotionOptionNo'      => 'PromotionOptionNo',
        'promotionRuleIdList'    => 'PromotionRuleIdList',
        'selected'               => 'Selected',
        'show'                   => 'Show',
        'targetArticleItemCodes' => 'TargetArticleItemCodes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activityCategory) {
            $res['ActivityCategory'] = $this->activityCategory;
        }
        if (null !== $this->activityExtInfo) {
            $res['ActivityExtInfo'] = $this->activityExtInfo;
        }
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
        if (null !== $this->promotionRuleIdList) {
            $res['PromotionRuleIdList'] = null !== $this->promotionRuleIdList ? $this->promotionRuleIdList->toMap() : null;
        }
        if (null !== $this->selected) {
            $res['Selected'] = $this->selected;
        }
        if (null !== $this->show) {
            $res['Show'] = $this->show;
        }
        if (null !== $this->targetArticleItemCodes) {
            $res['TargetArticleItemCodes'] = null !== $this->targetArticleItemCodes ? $this->targetArticleItemCodes->toMap() : null;
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
        if (isset($map['ActivityCategory'])) {
            $model->activityCategory = $map['ActivityCategory'];
        }
        if (isset($map['ActivityExtInfo'])) {
            $model->activityExtInfo = $map['ActivityExtInfo'];
        }
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
        if (isset($map['PromotionRuleIdList'])) {
            $model->promotionRuleIdList = promotionRuleIdList::fromMap($map['PromotionRuleIdList']);
        }
        if (isset($map['Selected'])) {
            $model->selected = $map['Selected'];
        }
        if (isset($map['Show'])) {
            $model->show = $map['Show'];
        }
        if (isset($map['TargetArticleItemCodes'])) {
            $model->targetArticleItemCodes = targetArticleItemCodes::fromMap($map['TargetArticleItemCodes']);
        }

        return $model;
    }
}
