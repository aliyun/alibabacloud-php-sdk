<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domainintl\V20171218\Models;

use AlibabaCloud\Tea\Model;

class SaveRegistrantProfileRequest extends Model
{
    /**
     * @example *****************************************************
     *
     * @var string
     */
    public $address;

    /**
     * @example long yan shi
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
     * @example false
     *
     * @var bool
     */
    public $defaultRegistrantProfile;

    /**
     * @example username@example.com
     *
     * @var string
     */
    public $email;

    /**
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @example 236300
     *
     * @var string
     */
    public $postalCode;

    /**
     * @example fu jian
     *
     * @var string
     */
    public $province;

    /**
     * @example chen zi chen
     *
     * @var string
     */
    public $registrantName;

    /**
     * @example liu yang
     *
     * @var string
     */
    public $registrantOrganization;

    /**
     * @example 12659727
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
     * @example 86
     *
     * @var string
     */
    public $telArea;

    /**
     * @example 7381
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
     * @example 127.0.0.1
     *
     * @var string
     */
    public $userClientIp;
    protected $_name = [
        'address'                  => 'Address',
        'city'                     => 'City',
        'country'                  => 'Country',
        'defaultRegistrantProfile' => 'DefaultRegistrantProfile',
        'email'                    => 'Email',
        'lang'                     => 'Lang',
        'postalCode'               => 'PostalCode',
        'province'                 => 'Province',
        'registrantName'           => 'RegistrantName',
        'registrantOrganization'   => 'RegistrantOrganization',
        'registrantProfileId'      => 'RegistrantProfileId',
        'registrantProfileType'    => 'RegistrantProfileType',
        'registrantType'           => 'RegistrantType',
        'telArea'                  => 'TelArea',
        'telExt'                   => 'TelExt',
        'telephone'                => 'Telephone',
        'userClientIp'             => 'UserClientIp',
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
        if (null !== $this->defaultRegistrantProfile) {
            $res['DefaultRegistrantProfile'] = $this->defaultRegistrantProfile;
        }
        if (null !== $this->email) {
            $res['Email'] = $this->email;
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
        if (null !== $this->userClientIp) {
            $res['UserClientIp'] = $this->userClientIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SaveRegistrantProfileRequest
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
        if (isset($map['DefaultRegistrantProfile'])) {
            $model->defaultRegistrantProfile = $map['DefaultRegistrantProfile'];
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
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
        if (isset($map['UserClientIp'])) {
            $model->userClientIp = $map['UserClientIp'];
        }

        return $model;
    }
}
