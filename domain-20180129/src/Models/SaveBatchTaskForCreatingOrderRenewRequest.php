<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\SDK\Domain\V20180129\Models\SaveBatchTaskForCreatingOrderRenewRequest\orderRenewParam;
use AlibabaCloud\Tea\Model;

class SaveBatchTaskForCreatingOrderRenewRequest extends Model
{
    /**
     * @example 12312412
     *
     * @var string
     */
    public $couponNo;

    /**
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @description This parameter is required.
     *
     * @var orderRenewParam[]
     */
    public $orderRenewParam;

    /**
     * @example 123123123
     *
     * @var string
     */
    public $promotionNo;

    /**
     * @example false
     *
     * @var bool
     */
    public $useCoupon;

    /**
     * @example false
     *
     * @var bool
     */
    public $usePromotion;

    /**
     * @example 127.0.0.1
     *
     * @var string
     */
    public $userClientIp;
    protected $_name = [
        'couponNo'        => 'CouponNo',
        'lang'            => 'Lang',
        'orderRenewParam' => 'OrderRenewParam',
        'promotionNo'     => 'PromotionNo',
        'useCoupon'       => 'UseCoupon',
        'usePromotion'    => 'UsePromotion',
        'userClientIp'    => 'UserClientIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->couponNo) {
            $res['CouponNo'] = $this->couponNo;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->orderRenewParam) {
            $res['OrderRenewParam'] = [];
            if (null !== $this->orderRenewParam && \is_array($this->orderRenewParam)) {
                $n = 0;
                foreach ($this->orderRenewParam as $item) {
                    $res['OrderRenewParam'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->promotionNo) {
            $res['PromotionNo'] = $this->promotionNo;
        }
        if (null !== $this->useCoupon) {
            $res['UseCoupon'] = $this->useCoupon;
        }
        if (null !== $this->usePromotion) {
            $res['UsePromotion'] = $this->usePromotion;
        }
        if (null !== $this->userClientIp) {
            $res['UserClientIp'] = $this->userClientIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SaveBatchTaskForCreatingOrderRenewRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CouponNo'])) {
            $model->couponNo = $map['CouponNo'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['OrderRenewParam'])) {
            if (!empty($map['OrderRenewParam'])) {
                $model->orderRenewParam = [];
                $n                      = 0;
                foreach ($map['OrderRenewParam'] as $item) {
                    $model->orderRenewParam[$n++] = null !== $item ? orderRenewParam::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PromotionNo'])) {
            $model->promotionNo = $map['PromotionNo'];
        }
        if (isset($map['UseCoupon'])) {
            $model->useCoupon = $map['UseCoupon'];
        }
        if (isset($map['UsePromotion'])) {
            $model->usePromotion = $map['UsePromotion'];
        }
        if (isset($map['UserClientIp'])) {
            $model->userClientIp = $map['UserClientIp'];
        }

        return $model;
    }
}
