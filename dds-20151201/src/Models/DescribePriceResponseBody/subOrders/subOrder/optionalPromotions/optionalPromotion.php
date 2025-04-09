<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribePriceResponseBody\subOrders\subOrder\optionalPromotions;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribePriceResponseBody\subOrders\subOrder\optionalPromotions\optionalPromotion\promotionRuleIdList;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribePriceResponseBody\subOrders\subOrder\optionalPromotions\optionalPromotion\targetArticleItemCodes;

class optionalPromotion extends Model
{
    /**
     * @var string
     */
    public $activityCategory;

    /**
     * @var mixed[]
     */
    public $activityExtInfo;

    /**
     * @var float
     */
    public $canPromFee;

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
     * @var promotionRuleIdList
     */
    public $promotionRuleIdList;

    /**
     * @var bool
     */
    public $selected;

    /**
     * @var bool
     */
    public $show;

    /**
     * @var targetArticleItemCodes
     */
    public $targetArticleItemCodes;
    protected $_name = [
        'activityCategory' => 'ActivityCategory',
        'activityExtInfo' => 'ActivityExtInfo',
        'canPromFee' => 'CanPromFee',
        'optionCode' => 'OptionCode',
        'promotionName' => 'PromotionName',
        'promotionOptionNo' => 'PromotionOptionNo',
        'promotionRuleIdList' => 'PromotionRuleIdList',
        'selected' => 'Selected',
        'show' => 'Show',
        'targetArticleItemCodes' => 'TargetArticleItemCodes',
    ];

    public function validate()
    {
        if (\is_array($this->activityExtInfo)) {
            Model::validateArray($this->activityExtInfo);
        }
        if (null !== $this->promotionRuleIdList) {
            $this->promotionRuleIdList->validate();
        }
        if (null !== $this->targetArticleItemCodes) {
            $this->targetArticleItemCodes->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->activityCategory) {
            $res['ActivityCategory'] = $this->activityCategory;
        }

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
            $res['PromotionRuleIdList'] = null !== $this->promotionRuleIdList ? $this->promotionRuleIdList->toArray($noStream) : $this->promotionRuleIdList;
        }

        if (null !== $this->selected) {
            $res['Selected'] = $this->selected;
        }

        if (null !== $this->show) {
            $res['Show'] = $this->show;
        }

        if (null !== $this->targetArticleItemCodes) {
            $res['TargetArticleItemCodes'] = null !== $this->targetArticleItemCodes ? $this->targetArticleItemCodes->toArray($noStream) : $this->targetArticleItemCodes;
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
        if (isset($map['ActivityCategory'])) {
            $model->activityCategory = $map['ActivityCategory'];
        }

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
