<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models\QueryRegistrantProfilesResponseBody\registrantProfiles;

use AlibabaCloud\Tea\Model;

class registrantProfile extends Model
{
    /**
     * @var string
     */
    public $telExt;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var string
     */
    public $zhProvince;

    /**
     * @var string
     */
    public $createTime;

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
    public $zhCity;

    /**
     * @var string
     */
    public $telArea;

    /**
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $realNameStatus;

    /**
     * @var string
     */
    public $postalCode;

    /**
     * @var string
     */
    public $registrantProfileType;

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
    public $defaultRegistrantProfile;

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
    public $emailVerificationStatus;

    /**
     * @var string
     */
    public $zhAddress;

    /**
     * @var string
     */
    public $province;
    protected $_name = [
        'telExt'                   => 'TelExt',
        'updateTime'               => 'UpdateTime',
        'zhProvince'               => 'ZhProvince',
        'createTime'               => 'CreateTime',
        'telephone'                => 'Telephone',
        'registrantOrganization'   => 'RegistrantOrganization',
        'city'                     => 'City',
        'zhCity'                   => 'ZhCity',
        'telArea'                  => 'TelArea',
        'address'                  => 'Address',
        'realNameStatus'           => 'RealNameStatus',
        'postalCode'               => 'PostalCode',
        'registrantProfileType'    => 'RegistrantProfileType',
        'registrantProfileId'      => 'RegistrantProfileId',
        'zhRegistrantOrganization' => 'ZhRegistrantOrganization',
        'defaultRegistrantProfile' => 'DefaultRegistrantProfile',
        'zhRegistrantName'         => 'ZhRegistrantName',
        'email'                    => 'Email',
        'registrantType'           => 'RegistrantType',
        'country'                  => 'Country',
        'registrantName'           => 'RegistrantName',
        'emailVerificationStatus'  => 'EmailVerificationStatus',
        'zhAddress'                => 'ZhAddress',
        'province'                 => 'Province',
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
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->zhProvince) {
            $res['ZhProvince'] = $this->zhProvince;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
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
        if (null !== $this->zhCity) {
            $res['ZhCity'] = $this->zhCity;
        }
        if (null !== $this->telArea) {
            $res['TelArea'] = $this->telArea;
        }
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }
        if (null !== $this->realNameStatus) {
            $res['RealNameStatus'] = $this->realNameStatus;
        }
        if (null !== $this->postalCode) {
            $res['PostalCode'] = $this->postalCode;
        }
        if (null !== $this->registrantProfileType) {
            $res['RegistrantProfileType'] = $this->registrantProfileType;
        }
        if (null !== $this->registrantProfileId) {
            $res['RegistrantProfileId'] = $this->registrantProfileId;
        }
        if (null !== $this->zhRegistrantOrganization) {
            $res['ZhRegistrantOrganization'] = $this->zhRegistrantOrganization;
        }
        if (null !== $this->defaultRegistrantProfile) {
            $res['DefaultRegistrantProfile'] = $this->defaultRegistrantProfile;
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
        if (null !== $this->emailVerificationStatus) {
            $res['EmailVerificationStatus'] = $this->emailVerificationStatus;
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
     * @return registrantProfile
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TelExt'])) {
            $model->telExt = $map['TelExt'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['ZhProvince'])) {
            $model->zhProvince = $map['ZhProvince'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
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
        if (isset($map['ZhCity'])) {
            $model->zhCity = $map['ZhCity'];
        }
        if (isset($map['TelArea'])) {
            $model->telArea = $map['TelArea'];
        }
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['RealNameStatus'])) {
            $model->realNameStatus = $map['RealNameStatus'];
        }
        if (isset($map['PostalCode'])) {
            $model->postalCode = $map['PostalCode'];
        }
        if (isset($map['RegistrantProfileType'])) {
            $model->registrantProfileType = $map['RegistrantProfileType'];
        }
        if (isset($map['RegistrantProfileId'])) {
            $model->registrantProfileId = $map['RegistrantProfileId'];
        }
        if (isset($map['ZhRegistrantOrganization'])) {
            $model->zhRegistrantOrganization = $map['ZhRegistrantOrganization'];
        }
        if (isset($map['DefaultRegistrantProfile'])) {
            $model->defaultRegistrantProfile = $map['DefaultRegistrantProfile'];
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
        if (isset($map['EmailVerificationStatus'])) {
            $model->emailVerificationStatus = $map['EmailVerificationStatus'];
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
