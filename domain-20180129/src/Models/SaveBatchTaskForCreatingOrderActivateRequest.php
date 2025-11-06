<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Domain\V20180129\Models\SaveBatchTaskForCreatingOrderActivateRequest\orderActivateParam;

class SaveBatchTaskForCreatingOrderActivateRequest extends Model
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
     * @var orderActivateParam[]
     */
    public $orderActivateParam;

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
        'couponNo' => 'CouponNo',
        'lang' => 'Lang',
        'orderActivateParam' => 'OrderActivateParam',
        'promotionNo' => 'PromotionNo',
        'useCoupon' => 'UseCoupon',
        'usePromotion' => 'UsePromotion',
        'userClientIp' => 'UserClientIp',
    ];

    public function validate()
    {
        if (\is_array($this->orderActivateParam)) {
            Model::validateArray($this->orderActivateParam);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->couponNo) {
            $res['CouponNo'] = $this->couponNo;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->orderActivateParam) {
            if (\is_array($this->orderActivateParam)) {
                $res['OrderActivateParam'] = [];
                $n1 = 0;
                foreach ($this->orderActivateParam as $item1) {
                    $res['OrderActivateParam'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CouponNo'])) {
            $model->couponNo = $map['CouponNo'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['OrderActivateParam'])) {
            if (!empty($map['OrderActivateParam'])) {
                $model->orderActivateParam = [];
                $n1 = 0;
                foreach ($map['OrderActivateParam'] as $item1) {
                    $model->orderActivateParam[$n1] = orderActivateParam::fromMap($item1);
                    ++$n1;
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
