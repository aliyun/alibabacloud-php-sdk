<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DescribePriceRequest;

use AlibabaCloud\Dara\Model;

class promotionOptions extends Model
{
    /**
     * @var string
     */
    public $activityId;

    /**
     * @var string
     */
    public $couponNo;
    protected $_name = [
        'activityId' => 'ActivityId',
        'couponNo' => 'CouponNo',
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

        if (null !== $this->couponNo) {
            $res['CouponNo'] = $this->couponNo;
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

        if (isset($map['CouponNo'])) {
            $model->couponNo = $map['CouponNo'];
        }

        return $model;
    }
}
