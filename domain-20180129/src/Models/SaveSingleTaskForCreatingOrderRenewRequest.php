<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Tea\Model;

class SaveSingleTaskForCreatingOrderRenewRequest extends Model
{
    /**
     * @example 123123
     *
     * @var string
     */
    public $couponNo;

    /**
     * @example 0000
     *
     * @var int
     */
    public $currentExpirationDate;

    /**
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @example 123132
     *
     * @var string
     */
    public $promotionNo;

    /**
     * @example 1
     *
     * @var int
     */
    public $subscriptionDuration;

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
        'couponNo'              => 'CouponNo',
        'currentExpirationDate' => 'CurrentExpirationDate',
        'domainName'            => 'DomainName',
        'lang'                  => 'Lang',
        'promotionNo'           => 'PromotionNo',
        'subscriptionDuration'  => 'SubscriptionDuration',
        'useCoupon'             => 'UseCoupon',
        'usePromotion'          => 'UsePromotion',
        'userClientIp'          => 'UserClientIp',
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
        if (null !== $this->currentExpirationDate) {
            $res['CurrentExpirationDate'] = $this->currentExpirationDate;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->promotionNo) {
            $res['PromotionNo'] = $this->promotionNo;
        }
        if (null !== $this->subscriptionDuration) {
            $res['SubscriptionDuration'] = $this->subscriptionDuration;
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
     * @return SaveSingleTaskForCreatingOrderRenewRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CouponNo'])) {
            $model->couponNo = $map['CouponNo'];
        }
        if (isset($map['CurrentExpirationDate'])) {
            $model->currentExpirationDate = $map['CurrentExpirationDate'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['PromotionNo'])) {
            $model->promotionNo = $map['PromotionNo'];
        }
        if (isset($map['SubscriptionDuration'])) {
            $model->subscriptionDuration = $map['SubscriptionDuration'];
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
