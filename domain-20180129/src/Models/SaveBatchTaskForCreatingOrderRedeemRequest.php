<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\SDK\Domain\V20180129\Models\SaveBatchTaskForCreatingOrderRedeemRequest\orderRedeemParam;
use AlibabaCloud\Tea\Model;

class SaveBatchTaskForCreatingOrderRedeemRequest extends Model
{
    /**
     * @var string
     */
    public $userClientIp;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $couponNo;

    /**
     * @var bool
     */
    public $useCoupon;

    /**
     * @var string
     */
    public $promotionNo;

    /**
     * @var bool
     */
    public $usePromotion;

    /**
     * @var orderRedeemParam[]
     */
    public $orderRedeemParam;
    protected $_name = [
        'userClientIp'     => 'UserClientIp',
        'lang'             => 'Lang',
        'couponNo'         => 'CouponNo',
        'useCoupon'        => 'UseCoupon',
        'promotionNo'      => 'PromotionNo',
        'usePromotion'     => 'UsePromotion',
        'orderRedeemParam' => 'OrderRedeemParam',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userClientIp) {
            $res['UserClientIp'] = $this->userClientIp;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->couponNo) {
            $res['CouponNo'] = $this->couponNo;
        }
        if (null !== $this->useCoupon) {
            $res['UseCoupon'] = $this->useCoupon;
        }
        if (null !== $this->promotionNo) {
            $res['PromotionNo'] = $this->promotionNo;
        }
        if (null !== $this->usePromotion) {
            $res['UsePromotion'] = $this->usePromotion;
        }
        if (null !== $this->orderRedeemParam) {
            $res['OrderRedeemParam'] = [];
            if (null !== $this->orderRedeemParam && \is_array($this->orderRedeemParam)) {
                $n = 0;
                foreach ($this->orderRedeemParam as $item) {
                    $res['OrderRedeemParam'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SaveBatchTaskForCreatingOrderRedeemRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserClientIp'])) {
            $model->userClientIp = $map['UserClientIp'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['CouponNo'])) {
            $model->couponNo = $map['CouponNo'];
        }
        if (isset($map['UseCoupon'])) {
            $model->useCoupon = $map['UseCoupon'];
        }
        if (isset($map['PromotionNo'])) {
            $model->promotionNo = $map['PromotionNo'];
        }
        if (isset($map['UsePromotion'])) {
            $model->usePromotion = $map['UsePromotion'];
        }
        if (isset($map['OrderRedeemParam'])) {
            if (!empty($map['OrderRedeemParam'])) {
                $model->orderRedeemParam = [];
                $n                       = 0;
                foreach ($map['OrderRedeemParam'] as $item) {
                    $model->orderRedeemParam[$n++] = null !== $item ? orderRedeemParam::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
