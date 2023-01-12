<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\GrantPromotionToUserResponseBody;

use AlibabaCloud\Tea\Model;

class model_ extends Model
{
    /**
     * @example 12322333232
     *
     * @var int
     */
    public $effectiveEndTime;

    /**
     * @example 123243444
     *
     * @var int
     */
    public $effectiveStartTime;

    /**
     * @example 123456
     *
     * @var string
     */
    public $promotionInstanceId;

    /**
     * @example ef2b8********f824830b7e55a0dc5
     *
     * @var string
     */
    public $subBizCode;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'effectiveEndTime'    => 'EffectiveEndTime',
        'effectiveStartTime'  => 'EffectiveStartTime',
        'promotionInstanceId' => 'PromotionInstanceId',
        'subBizCode'          => 'SubBizCode',
        'success'             => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->effectiveEndTime) {
            $res['EffectiveEndTime'] = $this->effectiveEndTime;
        }
        if (null !== $this->effectiveStartTime) {
            $res['EffectiveStartTime'] = $this->effectiveStartTime;
        }
        if (null !== $this->promotionInstanceId) {
            $res['PromotionInstanceId'] = $this->promotionInstanceId;
        }
        if (null !== $this->subBizCode) {
            $res['SubBizCode'] = $this->subBizCode;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return model_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EffectiveEndTime'])) {
            $model->effectiveEndTime = $map['EffectiveEndTime'];
        }
        if (isset($map['EffectiveStartTime'])) {
            $model->effectiveStartTime = $map['EffectiveStartTime'];
        }
        if (isset($map['PromotionInstanceId'])) {
            $model->promotionInstanceId = $map['PromotionInstanceId'];
        }
        if (isset($map['SubBizCode'])) {
            $model->subBizCode = $map['SubBizCode'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
