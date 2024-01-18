<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domainintl\V20171218\Models\QueryRegistrantProfilesResponseBody\registrantProfiles;

use AlibabaCloud\Tea\Model;

class registrantProfile extends Model
{
    /**
     * @var string
     */
    public $address;

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
    public $createTime;

    /**
     * @var bool
     */
    public $defaultRegistrantProfile;

    /**
     * @var string
     */
    public $email;

    /**
     * @var int
     */
    public $emailVerificationStatus;

    /**
     * @var string
     */
    public $postalCode;

    /**
     * @var string
     */
    public $province;

    /**
     * @var string
     */
    public $realNameStatus;

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
    public $registrantProfileType;

    /**
     * @var string
     */
    public $registrantType;

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
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'address'                  => 'Address',
        'city'                     => 'City',
        'country'                  => 'Country',
        'createTime'               => 'CreateTime',
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
        'telArea'                  => 'TelArea',
        'telExt'                   => 'TelExt',
        'telephone'                => 'Telephone',
        'updateTime'               => 'UpdateTime',
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

        return $model;
    }
}
