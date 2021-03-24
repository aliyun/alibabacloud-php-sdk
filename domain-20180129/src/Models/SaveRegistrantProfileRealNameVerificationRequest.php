<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Tea\Model;

class SaveRegistrantProfileRealNameVerificationRequest extends Model
{
    /**
     * @var string
     */
    public $country;

    /**
     * @var string
     */
    public $userClientIp;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $registrantProfileId;

    /**
     * @var string
     */
    public $city;

    /**
     * @var string
     */
    public $registrantOrganization;

    /**
     * @var string
     */
    public $registrantName;

    /**
     * @var string
     */
    public $province;

    /**
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $postalCode;

    /**
     * @var string
     */
    public $telArea;

    /**
     * @var string
     */
    public $telephone;

    /**
     * @var string
     */
    public $telExt;

    /**
     * @var string
     */
    public $zhRegistrantOrganization;

    /**
     * @var string
     */
    public $zhRegistrantName;

    /**
     * @var string
     */
    public $zhProvince;

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
    public $registrantType;

    /**
     * @var string
     */
    public $registrantProfileType;

    /**
     * @var string
     */
    public $identityCredential;

    /**
     * @var string
     */
    public $identityCredentialNo;

    /**
     * @var string
     */
    public $identityCredentialType;
    protected $_name = [
        'country'                  => 'Country',
        'userClientIp'             => 'UserClientIp',
        'lang'                     => 'Lang',
        'registrantProfileId'      => 'RegistrantProfileId',
        'city'                     => 'City',
        'registrantOrganization'   => 'RegistrantOrganization',
        'registrantName'           => 'RegistrantName',
        'province'                 => 'Province',
        'address'                  => 'Address',
        'email'                    => 'Email',
        'postalCode'               => 'PostalCode',
        'telArea'                  => 'TelArea',
        'telephone'                => 'Telephone',
        'telExt'                   => 'TelExt',
        'zhRegistrantOrganization' => 'ZhRegistrantOrganization',
        'zhRegistrantName'         => 'ZhRegistrantName',
        'zhProvince'               => 'ZhProvince',
        'zhAddress'                => 'ZhAddress',
        'zhCity'                   => 'ZhCity',
        'registrantType'           => 'RegistrantType',
        'registrantProfileType'    => 'RegistrantProfileType',
        'identityCredential'       => 'IdentityCredential',
        'identityCredentialNo'     => 'IdentityCredentialNo',
        'identityCredentialType'   => 'IdentityCredentialType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->country) {
            $res['Country'] = $this->country;
        }
        if (null !== $this->userClientIp) {
            $res['UserClientIp'] = $this->userClientIp;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->registrantProfileId) {
            $res['RegistrantProfileId'] = $this->registrantProfileId;
        }
        if (null !== $this->city) {
            $res['City'] = $this->city;
        }
        if (null !== $this->registrantOrganization) {
            $res['RegistrantOrganization'] = $this->registrantOrganization;
        }
        if (null !== $this->registrantName) {
            $res['RegistrantName'] = $this->registrantName;
        }
        if (null !== $this->province) {
            $res['Province'] = $this->province;
        }
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->postalCode) {
            $res['PostalCode'] = $this->postalCode;
        }
        if (null !== $this->telArea) {
            $res['TelArea'] = $this->telArea;
        }
        if (null !== $this->telephone) {
            $res['Telephone'] = $this->telephone;
        }
        if (null !== $this->telExt) {
            $res['TelExt'] = $this->telExt;
        }
        if (null !== $this->zhRegistrantOrganization) {
            $res['ZhRegistrantOrganization'] = $this->zhRegistrantOrganization;
        }
        if (null !== $this->zhRegistrantName) {
            $res['ZhRegistrantName'] = $this->zhRegistrantName;
        }
        if (null !== $this->zhProvince) {
            $res['ZhProvince'] = $this->zhProvince;
        }
        if (null !== $this->zhAddress) {
            $res['ZhAddress'] = $this->zhAddress;
        }
        if (null !== $this->zhCity) {
            $res['ZhCity'] = $this->zhCity;
        }
        if (null !== $this->registrantType) {
            $res['RegistrantType'] = $this->registrantType;
        }
        if (null !== $this->registrantProfileType) {
            $res['RegistrantProfileType'] = $this->registrantProfileType;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SaveRegistrantProfileRealNameVerificationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Country'])) {
            $model->country = $map['Country'];
        }
        if (isset($map['UserClientIp'])) {
            $model->userClientIp = $map['UserClientIp'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['RegistrantProfileId'])) {
            $model->registrantProfileId = $map['RegistrantProfileId'];
        }
        if (isset($map['City'])) {
            $model->city = $map['City'];
        }
        if (isset($map['RegistrantOrganization'])) {
            $model->registrantOrganization = $map['RegistrantOrganization'];
        }
        if (isset($map['RegistrantName'])) {
            $model->registrantName = $map['RegistrantName'];
        }
        if (isset($map['Province'])) {
            $model->province = $map['Province'];
        }
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['PostalCode'])) {
            $model->postalCode = $map['PostalCode'];
        }
        if (isset($map['TelArea'])) {
            $model->telArea = $map['TelArea'];
        }
        if (isset($map['Telephone'])) {
            $model->telephone = $map['Telephone'];
        }
        if (isset($map['TelExt'])) {
            $model->telExt = $map['TelExt'];
        }
        if (isset($map['ZhRegistrantOrganization'])) {
            $model->zhRegistrantOrganization = $map['ZhRegistrantOrganization'];
        }
        if (isset($map['ZhRegistrantName'])) {
            $model->zhRegistrantName = $map['ZhRegistrantName'];
        }
        if (isset($map['ZhProvince'])) {
            $model->zhProvince = $map['ZhProvince'];
        }
        if (isset($map['ZhAddress'])) {
            $model->zhAddress = $map['ZhAddress'];
        }
        if (isset($map['ZhCity'])) {
            $model->zhCity = $map['ZhCity'];
        }
        if (isset($map['RegistrantType'])) {
            $model->registrantType = $map['RegistrantType'];
        }
        if (isset($map['RegistrantProfileType'])) {
            $model->registrantProfileType = $map['RegistrantProfileType'];
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

        return $model;
    }
}
