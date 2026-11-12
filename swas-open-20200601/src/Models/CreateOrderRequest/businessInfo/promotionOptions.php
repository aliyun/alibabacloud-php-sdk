<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models\CreateOrderRequest\businessInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\CreateOrderRequest\businessInfo\promotionOptions\promotionFilter;

class promotionOptions extends Model
{
    /**
     * @var string
     */
    public $activityId;

    /**
     * @var promotionFilter
     */
    public $promotionFilter;

    /**
     * @var string
     */
    public $promotionOptionCode;

    /**
     * @var string
     */
    public $promotionOptionNo;
    protected $_name = [
        'activityId' => 'ActivityId',
        'promotionFilter' => 'PromotionFilter',
        'promotionOptionCode' => 'PromotionOptionCode',
        'promotionOptionNo' => 'PromotionOptionNo',
    ];

    public function validate()
    {
        if (null !== $this->promotionFilter) {
            $this->promotionFilter->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->activityId) {
            $res['ActivityId'] = $this->activityId;
        }

        if (null !== $this->promotionFilter) {
            $res['PromotionFilter'] = null !== $this->promotionFilter ? $this->promotionFilter->toArray($noStream) : $this->promotionFilter;
        }

        if (null !== $this->promotionOptionCode) {
            $res['PromotionOptionCode'] = $this->promotionOptionCode;
        }

        if (null !== $this->promotionOptionNo) {
            $res['PromotionOptionNo'] = $this->promotionOptionNo;
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

        if (isset($map['PromotionFilter'])) {
            $model->promotionFilter = promotionFilter::fromMap($map['PromotionFilter']);
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
