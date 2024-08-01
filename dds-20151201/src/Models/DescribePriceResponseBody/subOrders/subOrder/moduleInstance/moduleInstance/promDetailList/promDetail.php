<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribePriceResponseBody\subOrders\subOrder\moduleInstance\moduleInstance\promDetailList;

use AlibabaCloud\Tea\Model;

class promDetail extends Model
{
    /**
     * @description The additional promotion information.
     *
     * @example {
     * }
     * @var mixed[]
     */
    public $activityExtInfo;

    /**
     * @description The sub-type of the promotion.
     *
     * @example subPrice
     *
     * @var string
     */
    public $derivedPromType;

    /**
     * @description The discount amount.
     *
     * @example 0.0
     *
     * @var float
     */
    public $finalPromFee;

    /**
     * @description The code of the commodity to which the coupon can be applied.
     *
     * @example wanhua_activity
     *
     * @var string
     */
    public $optionCode;

    /**
     * @description The sub-type of the promotion.
     *
     * @example discount
     *
     * @var string
     */
    public $promType;

    /**
     * @description The coupon code.
     *
     * @example aliwood-xxx
     *
     * @var string
     */
    public $promotionCode;

    /**
     * @description The ID of the promotional activity.
     *
     * @example 8105187xxxx
     *
     * @var int
     */
    public $promotionId;

    /**
     * @description The promotional activity name.
     *
     * @example [Item with price reduction in x xxxx] ApsaraDB for MongoDB instances of a full range of specifications - xxxxx
     *
     * @var string
     */
    public $promotionName;
    protected $_name = [
        'activityExtInfo' => 'ActivityExtInfo',
        'derivedPromType' => 'DerivedPromType',
        'finalPromFee'    => 'FinalPromFee',
        'optionCode'      => 'OptionCode',
        'promType'        => 'PromType',
        'promotionCode'   => 'PromotionCode',
        'promotionId'     => 'PromotionId',
        'promotionName'   => 'PromotionName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activityExtInfo) {
            $res['ActivityExtInfo'] = $this->activityExtInfo;
        }
        if (null !== $this->derivedPromType) {
            $res['DerivedPromType'] = $this->derivedPromType;
        }
        if (null !== $this->finalPromFee) {
            $res['FinalPromFee'] = $this->finalPromFee;
        }
        if (null !== $this->optionCode) {
            $res['OptionCode'] = $this->optionCode;
        }
        if (null !== $this->promType) {
            $res['PromType'] = $this->promType;
        }
        if (null !== $this->promotionCode) {
            $res['PromotionCode'] = $this->promotionCode;
        }
        if (null !== $this->promotionId) {
            $res['PromotionId'] = $this->promotionId;
        }
        if (null !== $this->promotionName) {
            $res['PromotionName'] = $this->promotionName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return promDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActivityExtInfo'])) {
            $model->activityExtInfo = $map['ActivityExtInfo'];
        }
        if (isset($map['DerivedPromType'])) {
            $model->derivedPromType = $map['DerivedPromType'];
        }
        if (isset($map['FinalPromFee'])) {
            $model->finalPromFee = $map['FinalPromFee'];
        }
        if (isset($map['OptionCode'])) {
            $model->optionCode = $map['OptionCode'];
        }
        if (isset($map['PromType'])) {
            $model->promType = $map['PromType'];
        }
        if (isset($map['PromotionCode'])) {
            $model->promotionCode = $map['PromotionCode'];
        }
        if (isset($map['PromotionId'])) {
            $model->promotionId = $map['PromotionId'];
        }
        if (isset($map['PromotionName'])) {
            $model->promotionName = $map['PromotionName'];
        }

        return $model;
    }
}
