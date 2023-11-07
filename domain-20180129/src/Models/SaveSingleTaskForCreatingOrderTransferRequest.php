<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Tea\Model;

class SaveSingleTaskForCreatingOrderTransferRequest extends Model
{
    /**
     * @example testCode
     *
     * @var string
     */
    public $authorizationCode;

    /**
     * @example 123456
     *
     * @var string
     */
    public $couponNo;

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
     * @example false
     *
     * @var bool
     */
    public $permitPremiumTransfer;

    /**
     * @example 123456
     *
     * @var string
     */
    public $promotionNo;

    /**
     * @example 123456
     *
     * @var int
     */
    public $registrantProfileId;

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
        'authorizationCode'     => 'AuthorizationCode',
        'couponNo'              => 'CouponNo',
        'domainName'            => 'DomainName',
        'lang'                  => 'Lang',
        'permitPremiumTransfer' => 'PermitPremiumTransfer',
        'promotionNo'           => 'PromotionNo',
        'registrantProfileId'   => 'RegistrantProfileId',
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
        if (null !== $this->authorizationCode) {
            $res['AuthorizationCode'] = $this->authorizationCode;
        }
        if (null !== $this->couponNo) {
            $res['CouponNo'] = $this->couponNo;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->permitPremiumTransfer) {
            $res['PermitPremiumTransfer'] = $this->permitPremiumTransfer;
        }
        if (null !== $this->promotionNo) {
            $res['PromotionNo'] = $this->promotionNo;
        }
        if (null !== $this->registrantProfileId) {
            $res['RegistrantProfileId'] = $this->registrantProfileId;
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
     * @return SaveSingleTaskForCreatingOrderTransferRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthorizationCode'])) {
            $model->authorizationCode = $map['AuthorizationCode'];
        }
        if (isset($map['CouponNo'])) {
            $model->couponNo = $map['CouponNo'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['PermitPremiumTransfer'])) {
            $model->permitPremiumTransfer = $map['PermitPremiumTransfer'];
        }
        if (isset($map['PromotionNo'])) {
            $model->promotionNo = $map['PromotionNo'];
        }
        if (isset($map['RegistrantProfileId'])) {
            $model->registrantProfileId = $map['RegistrantProfileId'];
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
