<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Tea\Model;

class SaveSingleTaskForCreatingOrderTransferRequest extends Model
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
    public $domainName;

    /**
     * @var string
     */
    public $authorizationCode;

    /**
     * @var int
     */
    public $registrantProfileId;

    /**
     * @var bool
     */
    public $permitPremiumTransfer;

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
    protected $_name = [
        'userClientIp'          => 'UserClientIp',
        'lang'                  => 'Lang',
        'domainName'            => 'DomainName',
        'authorizationCode'     => 'AuthorizationCode',
        'registrantProfileId'   => 'RegistrantProfileId',
        'permitPremiumTransfer' => 'PermitPremiumTransfer',
        'couponNo'              => 'CouponNo',
        'useCoupon'             => 'UseCoupon',
        'promotionNo'           => 'PromotionNo',
        'usePromotion'          => 'UsePromotion',
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
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->authorizationCode) {
            $res['AuthorizationCode'] = $this->authorizationCode;
        }
        if (null !== $this->registrantProfileId) {
            $res['RegistrantProfileId'] = $this->registrantProfileId;
        }
        if (null !== $this->permitPremiumTransfer) {
            $res['PermitPremiumTransfer'] = $this->permitPremiumTransfer;
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
        if (isset($map['UserClientIp'])) {
            $model->userClientIp = $map['UserClientIp'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['AuthorizationCode'])) {
            $model->authorizationCode = $map['AuthorizationCode'];
        }
        if (isset($map['RegistrantProfileId'])) {
            $model->registrantProfileId = $map['RegistrantProfileId'];
        }
        if (isset($map['PermitPremiumTransfer'])) {
            $model->permitPremiumTransfer = $map['PermitPremiumTransfer'];
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

        return $model;
    }
}
