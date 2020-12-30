<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\SDK\Domain\V20180129\Models\SaveBatchTaskForCreatingOrderRenewRequest\orderRenewParam;
use AlibabaCloud\Tea\Model;

class SaveBatchTaskForCreatingOrderRenewRequest extends Model
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
     * @var orderRenewParam[]
     */
    public $orderRenewParam;
    protected $_name = [
        'userClientIp'    => 'UserClientIp',
        'lang'            => 'Lang',
        'couponNo'        => 'CouponNo',
        'useCoupon'       => 'UseCoupon',
        'promotionNo'     => 'PromotionNo',
        'usePromotion'    => 'UsePromotion',
        'orderRenewParam' => 'OrderRenewParam',
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
        if (null !== $this->orderRenewParam) {
            $res['OrderRenewParam'] = [];
            if (null !== $this->orderRenewParam && \is_array($this->orderRenewParam)) {
                $n = 0;
                foreach ($this->orderRenewParam as $item) {
                    $res['OrderRenewParam'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['OrderRenewParam'])) {
            if (!empty($map['OrderRenewParam'])) {
                $model->orderRenewParam = [];
                $n                      = 0;
                foreach ($map['OrderRenewParam'] as $item) {
                    $model->orderRenewParam[$n++] = null !== $item ? orderRenewParam::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
