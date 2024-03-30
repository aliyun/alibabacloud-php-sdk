<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribePriceResponseBody\subOrders\subOrder\promDetailList;

use AlibabaCloud\Tea\Model;

class promDetail extends Model
{
    /**
     * @var mixed[]
     */
    public $activityExtInfo;

    /**
     * @var string
     */
    public $derivedPromType;

    /**
     * @var float
     */
    public $finalPromFee;

    /**
     * @var string
     */
    public $optionCode;

    /**
     * @var string
     */
    public $promType;

    /**
     * @var string
     */
    public $promotionCode;

    /**
     * @var int
     */
    public $promotionId;

    /**
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
