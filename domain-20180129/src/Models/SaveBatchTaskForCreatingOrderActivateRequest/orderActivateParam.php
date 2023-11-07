<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models\SaveBatchTaskForCreatingOrderActivateRequest;

use AlibabaCloud\Tea\Model;

class orderActivateParam extends Model
{
    /**
     * @example chao yan qu *** dasha *** hao
     *
     * @var string
     */
    public $address;

    /**
     * @example true
     *
     * @var bool
     */
    public $aliyunDns;

    /**
     * @example bei jing shi
     *
     * @var string
     */
    public $city;

    /**
     * @example CN
     *
     * @var string
     */
    public $country;

    /**
     * @example ns2.aliyun.com
     *
     * @var string
     */
    public $dns1;

    /**
     * @example ns1.aliyun.com
     *
     * @var string
     */
    public $dns2;

    /**
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @example username@example.com
     *
     * @var string
     */
    public $email;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableDomainProxy;

    /**
     * @example true
     *
     * @var bool
     */
    public $permitPremiumActivation;

    /**
     * @example 102629
     *
     * @var string
     */
    public $postalCode;

    /**
     * @example bei jing
     *
     * @var string
     */
    public $province;

    /**
     * @example zhang san
     *
     * @var string
     */
    public $registrantName;

    /**
     * @example zhang san
     *
     * @var string
     */
    public $registrantOrganization;

    /**
     * @example 000000
     *
     * @var int
     */
    public $registrantProfileId;

    /**
     * @example 1
     *
     * @var string
     */
    public $registrantType;

    /**
     * @example rg-XX
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @example 1
     *
     * @var int
     */
    public $subscriptionDuration;

    /**
     * @example 86
     *
     * @var string
     */
    public $telArea;

    /**
     * @example 1234
     *
     * @var string
     */
    public $telExt;

    /**
     * @example 1820000****
     *
     * @var string
     */
    public $telephone;

    /**
     * @example false
     *
     * @var bool
     */
    public $trademarkDomainActivation;

    /**
     * @var string
     */
    public $zhAddress;

    /**
     * @var string
     */
    public $zhCity;

    /**
     * @var string
     */
    public $zhProvince;

    /**
     * @var string
     */
    public $zhRegistrantName;

    /**
     * @var string
     */
    public $zhRegistrantOrganization;
    protected $_name = [
        'address'                   => 'Address',
        'aliyunDns'                 => 'AliyunDns',
        'city'                      => 'City',
        'country'                   => 'Country',
        'dns1'                      => 'Dns1',
        'dns2'                      => 'Dns2',
        'domainName'                => 'DomainName',
        'email'                     => 'Email',
        'enableDomainProxy'         => 'EnableDomainProxy',
        'permitPremiumActivation'   => 'PermitPremiumActivation',
        'postalCode'                => 'PostalCode',
        'province'                  => 'Province',
        'registrantName'            => 'RegistrantName',
        'registrantOrganization'    => 'RegistrantOrganization',
        'registrantProfileId'       => 'RegistrantProfileId',
        'registrantType'            => 'RegistrantType',
        'resourceGroupId'           => 'ResourceGroupId',
        'subscriptionDuration'      => 'SubscriptionDuration',
        'telArea'                   => 'TelArea',
        'telExt'                    => 'TelExt',
        'telephone'                 => 'Telephone',
        'trademarkDomainActivation' => 'TrademarkDomainActivation',
        'zhAddress'                 => 'ZhAddress',
        'zhCity'                    => 'ZhCity',
        'zhProvince'                => 'ZhProvince',
        'zhRegistrantName'          => 'ZhRegistrantName',
        'zhRegistrantOrganization'  => 'ZhRegistrantOrganization',
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
        if (null !== $this->permitPremiumActivation) {
            $res['PermitPremiumActivation'] = $this->permitPremiumActivation;
        }
        if (null !== $this->postalCode) {
            $res['PostalCode'] = $this->postalCode;
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
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
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
        if (null !== $this->zhAddress) {
            $res['ZhAddress'] = $this->zhAddress;
        }
        if (null !== $this->zhCity) {
            $res['ZhCity'] = $this->zhCity;
        }
        if (null !== $this->zhProvince) {
            $res['ZhProvince'] = $this->zhProvince;
        }
        if (null !== $this->zhRegistrantName) {
            $res['ZhRegistrantName'] = $this->zhRegistrantName;
        }
        if (null !== $this->zhRegistrantOrganization) {
            $res['ZhRegistrantOrganization'] = $this->zhRegistrantOrganization;
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
        if (isset($map['PermitPremiumActivation'])) {
            $model->permitPremiumActivation = $map['PermitPremiumActivation'];
        }
        if (isset($map['PostalCode'])) {
            $model->postalCode = $map['PostalCode'];
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
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
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
        if (isset($map['ZhAddress'])) {
            $model->zhAddress = $map['ZhAddress'];
        }
        if (isset($map['ZhCity'])) {
            $model->zhCity = $map['ZhCity'];
        }
        if (isset($map['ZhProvince'])) {
            $model->zhProvince = $map['ZhProvince'];
        }
        if (isset($map['ZhRegistrantName'])) {
            $model->zhRegistrantName = $map['ZhRegistrantName'];
        }
        if (isset($map['ZhRegistrantOrganization'])) {
            $model->zhRegistrantOrganization = $map['ZhRegistrantOrganization'];
        }

        return $model;
    }
}
