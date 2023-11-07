<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\SDK\Domain\V20180129\Models\SaveBatchTaskForCreatingOrderTransferRequest\orderTransferParam;
use AlibabaCloud\Tea\Model;

class SaveBatchTaskForCreatingOrderTransferRequest extends Model
{
    /**
     * @example 123123
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
     * @var orderTransferParam[]
     */
    public $orderTransferParam;

    /**
     * @example 123123
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
        'couponNo'           => 'CouponNo',
        'lang'               => 'Lang',
        'orderTransferParam' => 'OrderTransferParam',
        'promotionNo'        => 'PromotionNo',
        'useCoupon'          => 'UseCoupon',
        'usePromotion'       => 'UsePromotion',
        'userClientIp'       => 'UserClientIp',
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
        if (null !== $this->orderTransferParam) {
            $res['OrderTransferParam'] = [];
            if (null !== $this->orderTransferParam && \is_array($this->orderTransferParam)) {
                $n = 0;
                foreach ($this->orderTransferParam as $item) {
                    $res['OrderTransferParam'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return SaveBatchTaskForCreatingOrderTransferRequest
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
        if (isset($map['OrderTransferParam'])) {
            if (!empty($map['OrderTransferParam'])) {
                $model->orderTransferParam = [];
                $n                         = 0;
                foreach ($map['OrderTransferParam'] as $item) {
                    $model->orderTransferParam[$n++] = null !== $item ? orderTransferParam::fromMap($item) : $item;
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
