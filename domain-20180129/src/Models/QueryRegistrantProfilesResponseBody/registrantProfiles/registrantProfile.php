<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models\QueryRegistrantProfilesResponseBody\registrantProfiles;

use AlibabaCloud\Tea\Model;

class registrantProfile extends Model
{
    /**
     * @example zhe jiang sheng hang zhou shi shi li qu shi li zhen shi li da sha 1001 hao
     *
     * @var string
     */
    public $address;

    /**
     * @example hang zhou shi
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
     * @example 2019-02-18 10:46:47
     *
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $credentialNo;

    /**
     * @var string
     */
    public $credentialType;

    /**
     * @example false
     *
     * @var bool
     */
    public $defaultRegistrantProfile;

    /**
     * @example 82106****@qq.com
     *
     * @var string
     */
    public $email;

    /**
     * @example 1
     *
     * @var int
     */
    public $emailVerificationStatus;

    /**
     * @example 310024
     *
     * @var string
     */
    public $postalCode;

    /**
     * @example zhe jiang
     *
     * @var string
     */
    public $province;

    /**
     * @example SUCCEED
     *
     * @var string
     */
    public $realNameStatus;

    /**
     * @example li si
     *
     * @var string
     */
    public $registrantName;

    /**
     * @example li si
     *
     * @var string
     */
    public $registrantOrganization;

    /**
     * @example 1000001
     *
     * @var int
     */
    public $registrantProfileId;

    /**
     * @example common
     *
     * @var string
     */
    public $registrantProfileType;

    /**
     * @example 1
     *
     * @var string
     */
    public $registrantType;

    /**
     * @var string
     */
    public $remark;

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
     * @example 1829756****
     *
     * @var string
     */
    public $telephone;

    /**
     * @example 2019-03-15 15:32:45
     *
     * @var string
     */
    public $updateTime;

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
        'createTime'               => 'CreateTime',
        'credentialNo'             => 'CredentialNo',
        'credentialType'           => 'CredentialType',
        'defaultRegistrantProfile' => 'DefaultRegistrantProfile',
        'email'                    => 'Email',
        'emailVerificationStatus'  => 'EmailVerificationStatus',
        'postalCode'               => 'PostalCode',
        'province'                 => 'Province',
        'realNameStatus'           => 'RealNameStatus',
        'registrantName'           => 'RegistrantName',
        'registrantOrganization'   => 'RegistrantOrganization',
        'registrantProfileId'      => 'RegistrantProfileId',
        'registrantProfileType'    => 'RegistrantProfileType',
        'registrantType'           => 'RegistrantType',
        'remark'                   => 'Remark',
        'telArea'                  => 'TelArea',
        'telExt'                   => 'TelExt',
        'telephone'                => 'Telephone',
        'updateTime'               => 'UpdateTime',
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
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->credentialNo) {
            $res['CredentialNo'] = $this->credentialNo;
        }
        if (null !== $this->credentialType) {
            $res['CredentialType'] = $this->credentialType;
        }
        if (null !== $this->defaultRegistrantProfile) {
            $res['DefaultRegistrantProfile'] = $this->defaultRegistrantProfile;
        }
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->emailVerificationStatus) {
            $res['EmailVerificationStatus'] = $this->emailVerificationStatus;
        }
        if (null !== $this->postalCode) {
            $res['PostalCode'] = $this->postalCode;
        }
        if (null !== $this->province) {
            $res['Province'] = $this->province;
        }
        if (null !== $this->realNameStatus) {
            $res['RealNameStatus'] = $this->realNameStatus;
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
        if (null !== $this->registrantProfileType) {
            $res['RegistrantProfileType'] = $this->registrantProfileType;
        }
        if (null !== $this->registrantType) {
            $res['RegistrantType'] = $this->registrantType;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
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
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
     * @return registrantProfile
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CredentialNo'])) {
            $model->credentialNo = $map['CredentialNo'];
        }
        if (isset($map['CredentialType'])) {
            $model->credentialType = $map['CredentialType'];
        }
        if (isset($map['DefaultRegistrantProfile'])) {
            $model->defaultRegistrantProfile = $map['DefaultRegistrantProfile'];
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['EmailVerificationStatus'])) {
            $model->emailVerificationStatus = $map['EmailVerificationStatus'];
        }
        if (isset($map['PostalCode'])) {
            $model->postalCode = $map['PostalCode'];
        }
        if (isset($map['Province'])) {
            $model->province = $map['Province'];
        }
        if (isset($map['RealNameStatus'])) {
            $model->realNameStatus = $map['RealNameStatus'];
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
        if (isset($map['RegistrantProfileType'])) {
            $model->registrantProfileType = $map['RegistrantProfileType'];
        }
        if (isset($map['RegistrantType'])) {
            $model->registrantType = $map['RegistrantType'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
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
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
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
