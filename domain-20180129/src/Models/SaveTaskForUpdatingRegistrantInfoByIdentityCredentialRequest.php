<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Tea\Model;

class SaveTaskForUpdatingRegistrantInfoByIdentityCredentialRequest extends Model
{
    /**
     * @example chao yang qu
     *
     * @var string
     */
    public $address;

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
     * @description This parameter is required.
     *
     * @example alibabacloud.com
     *
     * @var string[]
     */
    public $domainName;

    /**
     * @example test@aliyun.com
     *
     * @var string
     */
    public $email;

    /**
     * @description This parameter is required.
     *
     * @example h6UPhXz/ADP/2Q==
     *
     * @var string
     */
    public $identityCredential;

    /**
     * @description This parameter is required.
     *
     * @example 5****************9
     *
     * @var string
     */
    public $identityCredentialNo;

    /**
     * @description This parameter is required.
     *
     * @example SFZ
     *
     * @var string
     */
    public $identityCredentialType;

    /**
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @example 123456
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
     * @example ce shi
     *
     * @var string
     */
    public $registrantName;

    /**
     * @example ce shi
     *
     * @var string
     */
    public $registrantOrganization;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var string
     */
    public $registrantType;

    /**
     * @description This parameter is required.
     *
     * @example 86
     *
     * @var string
     */
    public $telArea;

    /**
     * @example 12345
     *
     * @var string
     */
    public $telExt;

    /**
     * @description This parameter is required.
     *
     * @example 12345678
     *
     * @var string
     */
    public $telephone;

    /**
     * @description This parameter is required.
     *
     * @example false
     *
     * @var bool
     */
    public $transferOutProhibited;

    /**
     * @example 127.0.0.1
     *
     * @var string
     */
    public $userClientIp;

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
        'address'                  => 'Address',
        'city'                     => 'City',
        'country'                  => 'Country',
        'domainName'               => 'DomainName',
        'email'                    => 'Email',
        'identityCredential'       => 'IdentityCredential',
        'identityCredentialNo'     => 'IdentityCredentialNo',
        'identityCredentialType'   => 'IdentityCredentialType',
        'lang'                     => 'Lang',
        'postalCode'               => 'PostalCode',
        'province'                 => 'Province',
        'registrantName'           => 'RegistrantName',
        'registrantOrganization'   => 'RegistrantOrganization',
        'registrantType'           => 'RegistrantType',
        'telArea'                  => 'TelArea',
        'telExt'                   => 'TelExt',
        'telephone'                => 'Telephone',
        'transferOutProhibited'    => 'TransferOutProhibited',
        'userClientIp'             => 'UserClientIp',
        'zhAddress'                => 'ZhAddress',
        'zhCity'                   => 'ZhCity',
        'zhProvince'               => 'ZhProvince',
        'zhRegistrantName'         => 'ZhRegistrantName',
        'zhRegistrantOrganization' => 'ZhRegistrantOrganization',
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
        if (null !== $this->city) {
            $res['City'] = $this->city;
        }
        if (null !== $this->country) {
            $res['Country'] = $this->country;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->identityCredential) {
            $res['IdentityCredential'] = $this->identityCredential;
        }
        if (null !== $this->identityCredentialNo) {
            $res['IdentityCredentialNo'] = $this->identityCredentialNo;
        }
        if (null !== $this->identityCredentialType) {
            $res['IdentityCredentialType'] = $this->identityCredentialType;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
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
        if (null !== $this->registrantType) {
            $res['RegistrantType'] = $this->registrantType;
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
        if (null !== $this->transferOutProhibited) {
            $res['TransferOutProhibited'] = $this->transferOutProhibited;
        }
        if (null !== $this->userClientIp) {
            $res['UserClientIp'] = $this->userClientIp;
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
     * @return SaveTaskForUpdatingRegistrantInfoByIdentityCredentialRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['City'])) {
            $model->city = $map['City'];
        }
        if (isset($map['Country'])) {
            $model->country = $map['Country'];
        }
        if (isset($map['DomainName'])) {
            if (!empty($map['DomainName'])) {
                $model->domainName = $map['DomainName'];
            }
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['IdentityCredential'])) {
            $model->identityCredential = $map['IdentityCredential'];
        }
        if (isset($map['IdentityCredentialNo'])) {
            $model->identityCredentialNo = $map['IdentityCredentialNo'];
        }
        if (isset($map['IdentityCredentialType'])) {
            $model->identityCredentialType = $map['IdentityCredentialType'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
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
        if (isset($map['RegistrantType'])) {
            $model->registrantType = $map['RegistrantType'];
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
        if (isset($map['TransferOutProhibited'])) {
            $model->transferOutProhibited = $map['TransferOutProhibited'];
        }
        if (isset($map['UserClientIp'])) {
            $model->userClientIp = $map['UserClientIp'];
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
