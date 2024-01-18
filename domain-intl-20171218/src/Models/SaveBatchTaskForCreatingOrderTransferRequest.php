<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domainintl\V20171218\Models;

use AlibabaCloud\SDK\Domainintl\V20171218\Models\SaveBatchTaskForCreatingOrderTransferRequest\orderTransferParam;
use AlibabaCloud\Tea\Model;

class SaveBatchTaskForCreatingOrderTransferRequest extends Model
{
    /**
     * @var string
     */
    public $couponNo;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var orderTransferParam[]
     */
    public $orderTransferParam;

    /**
     * @var string
     */
    public $promotionNo;

    /**
     * @var bool
     */
    public $useCoupon;

    /**
     * @var bool
     */
    public $usePromotion;

    /**
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
