<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Tea\Model;

class QueryContactInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $zhProvince;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $telephone;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $postalCode;

    /**
     * @var string
     */
    public $zhRegistrantName;

    /**
     * @var string
     */
    public $city;

    /**
     * @var string
     */
    public $createDate;

    /**
     * @var string
     */
    public $province;

    /**
     * @var string
     */
    public $zhCity;

    /**
     * @var string
     */
    public $registrantName;

    /**
     * @var string
     */
    public $zhRegistrantOrganization;

    /**
     * @var string
     */
    public $country;

    /**
     * @var string
     */
    public $registrantOrganization;

    /**
     * @var string
     */
    public $telExt;

    /**
     * @var string
     */
    public $telArea;

    /**
     * @var string
     */
    public $zhAddress;
    protected $_name = [
        'zhProvince'               => 'ZhProvince',
        'email'                    => 'Email',
        'telephone'                => 'Telephone',
        'requestId'                => 'RequestId',
        'address'                  => 'Address',
        'postalCode'               => 'PostalCode',
        'zhRegistrantName'         => 'ZhRegistrantName',
        'city'                     => 'City',
        'createDate'               => 'CreateDate',
        'province'                 => 'Province',
        'zhCity'                   => 'ZhCity',
        'registrantName'           => 'RegistrantName',
        'zhRegistrantOrganization' => 'ZhRegistrantOrganization',
        'country'                  => 'Country',
        'registrantOrganization'   => 'RegistrantOrganization',
        'telExt'                   => 'TelExt',
        'telArea'                  => 'TelArea',
        'zhAddress'                => 'ZhAddress',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->zhProvince) {
            $res['ZhProvince'] = $this->zhProvince;
        }
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->telephone) {
            $res['Telephone'] = $this->telephone;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }
        if (null !== $this->postalCode) {
            $res['PostalCode'] = $this->postalCode;
        }
        if (null !== $this->zhRegistrantName) {
            $res['ZhRegistrantName'] = $this->zhRegistrantName;
        }
        if (null !== $this->city) {
            $res['City'] = $this->city;
        }
        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
        }
        if (null !== $this->province) {
            $res['Province'] = $this->province;
        }
        if (null !== $this->zhCity) {
            $res['ZhCity'] = $this->zhCity;
        }
        if (null !== $this->registrantName) {
            $res['RegistrantName'] = $this->registrantName;
        }
        if (null !== $this->zhRegistrantOrganization) {
            $res['ZhRegistrantOrganization'] = $this->zhRegistrantOrganization;
        }
        if (null !== $this->country) {
            $res['Country'] = $this->country;
        }
        if (null !== $this->registrantOrganization) {
            $res['RegistrantOrganization'] = $this->registrantOrganization;
        }
        if (null !== $this->telExt) {
            $res['TelExt'] = $this->telExt;
        }
        if (null !== $this->telArea) {
            $res['TelArea'] = $this->telArea;
        }
        if (null !== $this->zhAddress) {
            $res['ZhAddress'] = $this->zhAddress;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryContactInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ZhProvince'])) {
            $model->zhProvince = $map['ZhProvince'];
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['Telephone'])) {
            $model->telephone = $map['Telephone'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['PostalCode'])) {
            $model->postalCode = $map['PostalCode'];
        }
        if (isset($map['ZhRegistrantName'])) {
            $model->zhRegistrantName = $map['ZhRegistrantName'];
        }
        if (isset($map['City'])) {
            $model->city = $map['City'];
        }
        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }
        if (isset($map['Province'])) {
            $model->province = $map['Province'];
        }
        if (isset($map['ZhCity'])) {
            $model->zhCity = $map['ZhCity'];
        }
        if (isset($map['RegistrantName'])) {
            $model->registrantName = $map['RegistrantName'];
        }
        if (isset($map['ZhRegistrantOrganization'])) {
            $model->zhRegistrantOrganization = $map['ZhRegistrantOrganization'];
        }
        if (isset($map['Country'])) {
            $model->country = $map['Country'];
        }
        if (isset($map['RegistrantOrganization'])) {
            $model->registrantOrganization = $map['RegistrantOrganization'];
        }
        if (isset($map['TelExt'])) {
            $model->telExt = $map['TelExt'];
        }
        if (isset($map['TelArea'])) {
            $model->telArea = $map['TelArea'];
        }
        if (isset($map['ZhAddress'])) {
            $model->zhAddress = $map['ZhAddress'];
        }

        return $model;
    }
}
