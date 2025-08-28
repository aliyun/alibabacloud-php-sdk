<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribePriceResponseBody\subOrders\subOrder\promDetailList;

use AlibabaCloud\Dara\Model;

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
        'finalPromFee' => 'FinalPromFee',
        'optionCode' => 'OptionCode',
        'promType' => 'PromType',
        'promotionCode' => 'PromotionCode',
        'promotionId' => 'PromotionId',
        'promotionName' => 'PromotionName',
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
