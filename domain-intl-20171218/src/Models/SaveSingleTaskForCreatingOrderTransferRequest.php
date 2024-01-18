<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domainintl\V20171218\Models;

use AlibabaCloud\Tea\Model;

class SaveSingleTaskForCreatingOrderTransferRequest extends Model
{
    /**
     * @var string
     */
    public $authorizationCode;

    /**
     * @var string
     */
    public $couponNo;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var bool
     */
    public $permitPremiumTransfer;

    /**
     * @var string
     */
    public $promotionNo;

    /**
     * @var int
     */
    public $registrantProfileId;

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
