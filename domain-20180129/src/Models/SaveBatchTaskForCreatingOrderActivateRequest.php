<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\SDK\Domain\V20180129\Models\SaveBatchTaskForCreatingOrderActivateRequest\orderActivateParam;
use AlibabaCloud\Tea\Model;

class SaveBatchTaskForCreatingOrderActivateRequest extends Model
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
     * @var orderActivateParam[]
     */
    public $orderActivateParam;
    protected $_name = [
        'userClientIp'       => 'UserClientIp',
        'lang'               => 'Lang',
        'couponNo'           => 'CouponNo',
        'useCoupon'          => 'UseCoupon',
        'promotionNo'        => 'PromotionNo',
        'usePromotion'       => 'UsePromotion',
        'orderActivateParam' => 'OrderActivateParam',
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
        if (null !== $this->orderActivateParam) {
            $res['OrderActivateParam'] = [];
            if (null !== $this->orderActivateParam && \is_array($this->orderActivateParam)) {
                $n = 0;
                foreach ($this->orderActivateParam as $item) {
                    $res['OrderActivateParam'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SaveBatchTaskForCreatingOrderActivateRequest
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
        if (isset($map['OrderActivateParam'])) {
            if (!empty($map['OrderActivateParam'])) {
                $model->orderActivateParam = [];
                $n                         = 0;
                foreach ($map['OrderActivateParam'] as $item) {
                    $model->orderActivateParam[$n++] = null !== $item ? orderActivateParam::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
