<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wss\V20211221\Models\DescribeMultiPriceResponseBody\priceInfo\price;

use AlibabaCloud\Dara\Model;

class promotions extends Model
{
    /**
     * @var string
     */
    public $activityId;

    /**
     * @var bool
     */
    public $effective;

    /**
     * @var string
     */
    public $endTimestamp;

    /**
     * @var string
     */
    public $optionCode;

    /**
     * @var string
     */
    public $priceBreakReduceValue;

    /**
     * @var string
     */
    public $priceBreakThreshold;

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

    /**
     * @var string
     */
    public $startTimestamp;
    protected $_name = [
        'activityId' => 'ActivityId',
        'effective' => 'Effective',
        'endTimestamp' => 'EndTimestamp',
        'optionCode' => 'OptionCode',
        'priceBreakReduceValue' => 'PriceBreakReduceValue',
        'priceBreakThreshold' => 'PriceBreakThreshold',
        'promotionDesc' => 'PromotionDesc',
        'promotionId' => 'PromotionId',
        'promotionName' => 'PromotionName',
        'selected' => 'Selected',
        'startTimestamp' => 'StartTimestamp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->activityId) {
            $res['ActivityId'] = $this->activityId;
        }

        if (null !== $this->effective) {
            $res['Effective'] = $this->effective;
        }

        if (null !== $this->endTimestamp) {
            $res['EndTimestamp'] = $this->endTimestamp;
        }

        if (null !== $this->optionCode) {
            $res['OptionCode'] = $this->optionCode;
        }

        if (null !== $this->priceBreakReduceValue) {
            $res['PriceBreakReduceValue'] = $this->priceBreakReduceValue;
        }

        if (null !== $this->priceBreakThreshold) {
            $res['PriceBreakThreshold'] = $this->priceBreakThreshold;
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

        if (null !== $this->startTimestamp) {
            $res['StartTimestamp'] = $this->startTimestamp;
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
        if (isset($map['ActivityId'])) {
            $model->activityId = $map['ActivityId'];
        }

        if (isset($map['Effective'])) {
            $model->effective = $map['Effective'];
        }

        if (isset($map['EndTimestamp'])) {
            $model->endTimestamp = $map['EndTimestamp'];
        }

        if (isset($map['OptionCode'])) {
            $model->optionCode = $map['OptionCode'];
        }

        if (isset($map['PriceBreakReduceValue'])) {
            $model->priceBreakReduceValue = $map['PriceBreakReduceValue'];
        }

        if (isset($map['PriceBreakThreshold'])) {
            $model->priceBreakThreshold = $map['PriceBreakThreshold'];
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

        if (isset($map['StartTimestamp'])) {
            $model->startTimestamp = $map['StartTimestamp'];
        }

        return $model;
    }
}
