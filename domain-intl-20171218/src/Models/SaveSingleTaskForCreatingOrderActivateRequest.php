<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domainintl\V20171218\Models;

use AlibabaCloud\Tea\Model;

class SaveSingleTaskForCreatingOrderActivateRequest extends Model
{
    /**
     * @var string
     */
    public $address;

    /**
     * @var bool
     */
    public $aliyunDns;

    /**
     * @var string
     */
    public $city;

    /**
     * @var string
     */
    public $country;

    /**
     * @var string
     */
    public $couponNo;

    /**
     * @var string
     */
    public $dns1;

    /**
     * @var string
     */
    public $dns2;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $email;

    /**
     * @var bool
     */
    public $enableDomainProxy;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var bool
     */
    public $permitPremiumActivation;

    /**
     * @var string
     */
    public $postalCode;

    /**
     * @var string
     */
    public $promotionNo;

    /**
     * @var string
     */
    public $province;

    /**
     * @var string
     */
    public $registrantName;

    /**
     * @var string
     */
    public $registrantOrganization;

    /**
     * @var int
     */
    public $registrantProfileId;

    /**
     * @var string
     */
    public $registrantType;

    /**
     * @var int
     */
    public $subscriptionDuration;

    /**
     * @var string
     */
    public $telArea;

    /**
     * @var string
     */
    public $telExt;

    /**
     * @var string
     */
    public $telephone;

    /**
     * @var bool
     */
    public $trademarkDomainActivation;

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
        'address'                   => 'Address',
        'aliyunDns'                 => 'AliyunDns',
        'city'                      => 'City',
        'country'                   => 'Country',
        'couponNo'                  => 'CouponNo',
        'dns1'                      => 'Dns1',
        'dns2'                      => 'Dns2',
        'domainName'                => 'DomainName',
        'email'                     => 'Email',
        'enableDomainProxy'         => 'EnableDomainProxy',
        'lang'                      => 'Lang',
        'permitPremiumActivation'   => 'PermitPremiumActivation',
        'postalCode'                => 'PostalCode',
        'promotionNo'               => 'PromotionNo',
        'province'                  => 'Province',
        'registrantName'            => 'RegistrantName',
        'registrantOrganization'    => 'RegistrantOrganization',
        'registrantProfileId'       => 'RegistrantProfileId',
        'registrantType'            => 'RegistrantType',
        'subscriptionDuration'      => 'SubscriptionDuration',
        'telArea'                   => 'TelArea',
        'telExt'                    => 'TelExt',
        'telephone'                 => 'Telephone',
        'trademarkDomainActivation' => 'TrademarkDomainActivation',
        'useCoupon'                 => 'UseCoupon',
        'usePromotion'              => 'UsePromotion',
        'userClientIp'              => 'UserClientIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }
        if (null !== $this->aliyunDns) {
            $res['AliyunDns'] = $this->aliyunDns;
        }
        if (null !== $this->city) {
            $res['City'] = $this->city;
        }
        if (null !== $this->country) {
            $res['Country'] = $this->country;
        }
        if (null !== $this->couponNo) {
            $res['CouponNo'] = $this->couponNo;
        }
        if (null !== $this->dns1) {
            $res['Dns1'] = $this->dns1;
        }
        if (null !== $this->dns2) {
            $res['Dns2'] = $this->dns2;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->enableDomainProxy) {
            $res['EnableDomainProxy'] = $this->enableDomainProxy;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->permitPremiumActivation) {
            $res['PermitPremiumActivation'] = $this->permitPremiumActivation;
        }
        if (null !== $this->postalCode) {
            $res['PostalCode'] = $this->postalCode;
        }
        if (null !== $this->promotionNo) {
            $res['PromotionNo'] = $this->promotionNo;
        }
        if (null !== $this->province) {
            $res['Province'] = $this->province;
        }
        if (null !== $this->registrantName) {
            $res['RegistrantName'] = $this->registrantName;
        }
        if (null !== $this->registrantOrganization) {
            $res['RegistrantOrganization'] = $this->registrantOrganization;
        }
        if (null !== $this->registrantProfileId) {
            $res['RegistrantProfileId'] = $this->registrantProfileId;
        }
        if (null !== $this->registrantType) {
            $res['RegistrantType'] = $this->registrantType;
        }
        if (null !== $this->subscriptionDuration) {
            $res['SubscriptionDuration'] = $this->subscriptionDuration;
        }
        if (null !== $this->telArea) {
            $res['TelArea'] = $this->telArea;
        }
        if (null !== $this->telExt) {
            $res['TelExt'] = $this->telExt;
        }
        if (null !== $this->telephone) {
            $res['Telephone'] = $this->telephone;
        }
        if (null !== $this->trademarkDomainActivation) {
            $res['TrademarkDomainActivation'] = $this->trademarkDomainActivation;
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
     * @return SaveSingleTaskForCreatingOrderActivateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['AliyunDns'])) {
            $model->aliyunDns = $map['AliyunDns'];
        }
        if (isset($map['City'])) {
            $model->city = $map['City'];
        }
        if (isset($map['Country'])) {
            $model->country = $map['Country'];
        }
        if (isset($map['CouponNo'])) {
            $model->couponNo = $map['CouponNo'];
        }
        if (isset($map['Dns1'])) {
            $model->dns1 = $map['Dns1'];
        }
        if (isset($map['Dns2'])) {
            $model->dns2 = $map['Dns2'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['EnableDomainProxy'])) {
            $model->enableDomainProxy = $map['EnableDomainProxy'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['PermitPremiumActivation'])) {
            $model->permitPremiumActivation = $map['PermitPremiumActivation'];
        }
        if (isset($map['PostalCode'])) {
            $model->postalCode = $map['PostalCode'];
        }
        if (isset($map['PromotionNo'])) {
            $model->promotionNo = $map['PromotionNo'];
        }
        if (isset($map['Province'])) {
            $model->province = $map['Province'];
        }
        if (isset($map['RegistrantName'])) {
            $model->registrantName = $map['RegistrantName'];
        }
        if (isset($map['RegistrantOrganization'])) {
            $model->registrantOrganization = $map['RegistrantOrganization'];
        }
        if (isset($map['RegistrantProfileId'])) {
            $model->registrantProfileId = $map['RegistrantProfileId'];
        }
        if (isset($map['RegistrantType'])) {
            $model->registrantType = $map['RegistrantType'];
        }
        if (isset($map['SubscriptionDuration'])) {
            $model->subscriptionDuration = $map['SubscriptionDuration'];
        }
        if (isset($map['TelArea'])) {
            $model->telArea = $map['TelArea'];
        }
        if (isset($map['TelExt'])) {
            $model->telExt = $map['TelExt'];
        }
        if (isset($map['Telephone'])) {
            $model->telephone = $map['Telephone'];
        }
        if (isset($map['TrademarkDomainActivation'])) {
            $model->trademarkDomainActivation = $map['TrademarkDomainActivation'];
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
