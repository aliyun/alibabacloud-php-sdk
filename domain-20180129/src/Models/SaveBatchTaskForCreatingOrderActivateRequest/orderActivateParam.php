<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models\SaveBatchTaskForCreatingOrderActivateRequest;

use AlibabaCloud\Tea\Model;

class orderActivateParam extends Model
{
    /**
     * @var string
     */
    public $telExt;

    /**
     * @var bool
     */
    public $aliyunDns;

    /**
     * @var bool
     */
    public $permitPremiumActivation;

    /**
     * @var string
     */
    public $zhProvince;

    /**
     * @var string
     */
    public $telephone;

    /**
     * @var string
     */
    public $registrantOrganization;

    /**
     * @var string
     */
    public $city;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $zhCity;

    /**
     * @var string
     */
    public $dns1;

    /**
     * @var string
     */
    public $telArea;

    /**
     * @var string
     */
    public $address;

    /**
     * @var bool
     */
    public $enableDomainProxy;

    /**
     * @var string
     */
    public $postalCode;

    /**
     * @var int
     */
    public $registrantProfileId;

    /**
     * @var string
     */
    public $zhRegistrantOrganization;

    /**
     * @var bool
     */
    public $trademarkDomainActivation;

    /**
     * @var string
     */
    public $dns2;

    /**
     * @var string
     */
    public $zhRegistrantName;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $registrantType;

    /**
     * @var string
     */
    public $country;

    /**
     * @var string
     */
    public $registrantName;

    /**
     * @var int
     */
    public $subscriptionDuration;

    /**
     * @var string
     */
    public $zhAddress;

    /**
     * @var string
     */
    public $province;
    protected $_name = [
        'telExt'                    => 'TelExt',
        'aliyunDns'                 => 'AliyunDns',
        'permitPremiumActivation'   => 'PermitPremiumActivation',
        'zhProvince'                => 'ZhProvince',
        'telephone'                 => 'Telephone',
        'registrantOrganization'    => 'RegistrantOrganization',
        'city'                      => 'City',
        'domainName'                => 'DomainName',
        'zhCity'                    => 'ZhCity',
        'dns1'                      => 'Dns1',
        'telArea'                   => 'TelArea',
        'address'                   => 'Address',
        'enableDomainProxy'         => 'EnableDomainProxy',
        'postalCode'                => 'PostalCode',
        'registrantProfileId'       => 'RegistrantProfileId',
        'zhRegistrantOrganization'  => 'ZhRegistrantOrganization',
        'trademarkDomainActivation' => 'TrademarkDomainActivation',
        'dns2'                      => 'Dns2',
        'zhRegistrantName'          => 'ZhRegistrantName',
        'email'                     => 'Email',
        'registrantType'            => 'RegistrantType',
        'country'                   => 'Country',
        'registrantName'            => 'RegistrantName',
        'subscriptionDuration'      => 'SubscriptionDuration',
        'zhAddress'                 => 'ZhAddress',
        'province'                  => 'Province',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->telExt) {
            $res['TelExt'] = $this->telExt;
        }
        if (null !== $this->aliyunDns) {
            $res['AliyunDns'] = $this->aliyunDns;
        }
        if (null !== $this->permitPremiumActivation) {
            $res['PermitPremiumActivation'] = $this->permitPremiumActivation;
        }
        if (null !== $this->zhProvince) {
            $res['ZhProvince'] = $this->zhProvince;
        }
        if (null !== $this->telephone) {
            $res['Telephone'] = $this->telephone;
        }
        if (null !== $this->registrantOrganization) {
            $res['RegistrantOrganization'] = $this->registrantOrganization;
        }
        if (null !== $this->city) {
            $res['City'] = $this->city;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->zhCity) {
            $res['ZhCity'] = $this->zhCity;
        }
        if (null !== $this->dns1) {
            $res['Dns1'] = $this->dns1;
        }
        if (null !== $this->telArea) {
            $res['TelArea'] = $this->telArea;
        }
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }
        if (null !== $this->enableDomainProxy) {
            $res['EnableDomainProxy'] = $this->enableDomainProxy;
        }
        if (null !== $this->postalCode) {
            $res['PostalCode'] = $this->postalCode;
        }
        if (null !== $this->registrantProfileId) {
            $res['RegistrantProfileId'] = $this->registrantProfileId;
        }
        if (null !== $this->zhRegistrantOrganization) {
            $res['ZhRegistrantOrganization'] = $this->zhRegistrantOrganization;
        }
        if (null !== $this->trademarkDomainActivation) {
            $res['TrademarkDomainActivation'] = $this->trademarkDomainActivation;
        }
        if (null !== $this->dns2) {
            $res['Dns2'] = $this->dns2;
        }
        if (null !== $this->zhRegistrantName) {
            $res['ZhRegistrantName'] = $this->zhRegistrantName;
        }
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->registrantType) {
            $res['RegistrantType'] = $this->registrantType;
        }
        if (null !== $this->country) {
            $res['Country'] = $this->country;
        }
        if (null !== $this->registrantName) {
            $res['RegistrantName'] = $this->registrantName;
        }
        if (null !== $this->subscriptionDuration) {
            $res['SubscriptionDuration'] = $this->subscriptionDuration;
        }
        if (null !== $this->zhAddress) {
            $res['ZhAddress'] = $this->zhAddress;
        }
        if (null !== $this->province) {
            $res['Province'] = $this->province;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return orderActivateParam
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TelExt'])) {
            $model->telExt = $map['TelExt'];
        }
        if (isset($map['AliyunDns'])) {
            $model->aliyunDns = $map['AliyunDns'];
        }
        if (isset($map['PermitPremiumActivation'])) {
            $model->permitPremiumActivation = $map['PermitPremiumActivation'];
        }
        if (isset($map['ZhProvince'])) {
            $model->zhProvince = $map['ZhProvince'];
        }
        if (isset($map['Telephone'])) {
            $model->telephone = $map['Telephone'];
        }
        if (isset($map['RegistrantOrganization'])) {
            $model->registrantOrganization = $map['RegistrantOrganization'];
        }
        if (isset($map['City'])) {
            $model->city = $map['City'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['ZhCity'])) {
            $model->zhCity = $map['ZhCity'];
        }
        if (isset($map['Dns1'])) {
            $model->dns1 = $map['Dns1'];
        }
        if (isset($map['TelArea'])) {
            $model->telArea = $map['TelArea'];
        }
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['EnableDomainProxy'])) {
            $model->enableDomainProxy = $map['EnableDomainProxy'];
        }
        if (isset($map['PostalCode'])) {
            $model->postalCode = $map['PostalCode'];
        }
        if (isset($map['RegistrantProfileId'])) {
            $model->registrantProfileId = $map['RegistrantProfileId'];
        }
        if (isset($map['ZhRegistrantOrganization'])) {
            $model->zhRegistrantOrganization = $map['ZhRegistrantOrganization'];
        }
        if (isset($map['TrademarkDomainActivation'])) {
            $model->trademarkDomainActivation = $map['TrademarkDomainActivation'];
        }
        if (isset($map['Dns2'])) {
            $model->dns2 = $map['Dns2'];
        }
        if (isset($map['ZhRegistrantName'])) {
            $model->zhRegistrantName = $map['ZhRegistrantName'];
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['RegistrantType'])) {
            $model->registrantType = $map['RegistrantType'];
        }
        if (isset($map['Country'])) {
            $model->country = $map['Country'];
        }
        if (isset($map['RegistrantName'])) {
            $model->registrantName = $map['RegistrantName'];
        }
        if (isset($map['SubscriptionDuration'])) {
            $model->subscriptionDuration = $map['SubscriptionDuration'];
        }
        if (isset($map['ZhAddress'])) {
            $model->zhAddress = $map['ZhAddress'];
        }
        if (isset($map['Province'])) {
            $model->province = $map['Province'];
        }

        return $model;
    }
}
