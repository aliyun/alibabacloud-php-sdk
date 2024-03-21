<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20190902\Models;

use AlibabaCloud\Tea\Model;

class SaveTemporaryApplicantRequest extends Model
{
    /**
     * @var string
     */
    public $address;

    /**
     * @var int
     */
    public $applicantId;

    /**
     * @var string
     */
    public $businessLicenceOssKey;

    /**
     * @var string
     */
    public $cardNumber;

    /**
     * @var string
     */
    public $city;

    /**
     * @var bool
     */
    public $completeApplicant;

    /**
     * @var string
     */
    public $contactAddress;

    /**
     * @var string
     */
    public $contactCity;

    /**
     * @var string
     */
    public $contactCounty;

    /**
     * @var string
     */
    public $contactDistrict;

    /**
     * @var string
     */
    public $contactEmail;

    /**
     * @var string
     */
    public $contactName;

    /**
     * @var string
     */
    public $contactNumber;

    /**
     * @var string
     */
    public $contactProvince;

    /**
     * @var string
     */
    public $contactZipCode;

    /**
     * @var string
     */
    public $country;

    /**
     * @var string
     */
    public $EAddress;

    /**
     * @var string
     */
    public $EName;

    /**
     * @var string
     */
    public $idCardOssKey;

    /**
     * @var string
     */
    public $legalNoticeOssKey;

    /**
     * @var string
     */
    public $loaOssKey;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $passportOssKey;

    /**
     * @var int
     */
    public $principalName;

    /**
     * @var string
     */
    public $province;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $town;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'address'               => 'Address',
        'applicantId'           => 'ApplicantId',
        'businessLicenceOssKey' => 'BusinessLicenceOssKey',
        'cardNumber'            => 'CardNumber',
        'city'                  => 'City',
        'completeApplicant'     => 'CompleteApplicant',
        'contactAddress'        => 'ContactAddress',
        'contactCity'           => 'ContactCity',
        'contactCounty'         => 'ContactCounty',
        'contactDistrict'       => 'ContactDistrict',
        'contactEmail'          => 'ContactEmail',
        'contactName'           => 'ContactName',
        'contactNumber'         => 'ContactNumber',
        'contactProvince'       => 'ContactProvince',
        'contactZipCode'        => 'ContactZipCode',
        'country'               => 'Country',
        'EAddress'              => 'EAddress',
        'EName'                 => 'EName',
        'idCardOssKey'          => 'IdCardOssKey',
        'legalNoticeOssKey'     => 'LegalNoticeOssKey',
        'loaOssKey'             => 'LoaOssKey',
        'name'                  => 'Name',
        'passportOssKey'        => 'PassportOssKey',
        'principalName'         => 'PrincipalName',
        'province'              => 'Province',
        'region'                => 'Region',
        'town'                  => 'Town',
        'type'                  => 'Type',
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
        if (null !== $this->applicantId) {
            $res['ApplicantId'] = $this->applicantId;
        }
        if (null !== $this->businessLicenceOssKey) {
            $res['BusinessLicenceOssKey'] = $this->businessLicenceOssKey;
        }
        if (null !== $this->cardNumber) {
            $res['CardNumber'] = $this->cardNumber;
        }
        if (null !== $this->city) {
            $res['City'] = $this->city;
        }
        if (null !== $this->completeApplicant) {
            $res['CompleteApplicant'] = $this->completeApplicant;
        }
        if (null !== $this->contactAddress) {
            $res['ContactAddress'] = $this->contactAddress;
        }
        if (null !== $this->contactCity) {
            $res['ContactCity'] = $this->contactCity;
        }
        if (null !== $this->contactCounty) {
            $res['ContactCounty'] = $this->contactCounty;
        }
        if (null !== $this->contactDistrict) {
            $res['ContactDistrict'] = $this->contactDistrict;
        }
        if (null !== $this->contactEmail) {
            $res['ContactEmail'] = $this->contactEmail;
        }
        if (null !== $this->contactName) {
            $res['ContactName'] = $this->contactName;
        }
        if (null !== $this->contactNumber) {
            $res['ContactNumber'] = $this->contactNumber;
        }
        if (null !== $this->contactProvince) {
            $res['ContactProvince'] = $this->contactProvince;
        }
        if (null !== $this->contactZipCode) {
            $res['ContactZipCode'] = $this->contactZipCode;
        }
        if (null !== $this->country) {
            $res['Country'] = $this->country;
        }
        if (null !== $this->EAddress) {
            $res['EAddress'] = $this->EAddress;
        }
        if (null !== $this->EName) {
            $res['EName'] = $this->EName;
        }
        if (null !== $this->idCardOssKey) {
            $res['IdCardOssKey'] = $this->idCardOssKey;
        }
        if (null !== $this->legalNoticeOssKey) {
            $res['LegalNoticeOssKey'] = $this->legalNoticeOssKey;
        }
        if (null !== $this->loaOssKey) {
            $res['LoaOssKey'] = $this->loaOssKey;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->passportOssKey) {
            $res['PassportOssKey'] = $this->passportOssKey;
        }
        if (null !== $this->principalName) {
            $res['PrincipalName'] = $this->principalName;
        }
        if (null !== $this->province) {
            $res['Province'] = $this->province;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->town) {
            $res['Town'] = $this->town;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SaveTemporaryApplicantRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['ApplicantId'])) {
            $model->applicantId = $map['ApplicantId'];
        }
        if (isset($map['BusinessLicenceOssKey'])) {
            $model->businessLicenceOssKey = $map['BusinessLicenceOssKey'];
        }
        if (isset($map['CardNumber'])) {
            $model->cardNumber = $map['CardNumber'];
        }
        if (isset($map['City'])) {
            $model->city = $map['City'];
        }
        if (isset($map['CompleteApplicant'])) {
            $model->completeApplicant = $map['CompleteApplicant'];
        }
        if (isset($map['ContactAddress'])) {
            $model->contactAddress = $map['ContactAddress'];
        }
        if (isset($map['ContactCity'])) {
            $model->contactCity = $map['ContactCity'];
        }
        if (isset($map['ContactCounty'])) {
            $model->contactCounty = $map['ContactCounty'];
        }
        if (isset($map['ContactDistrict'])) {
            $model->contactDistrict = $map['ContactDistrict'];
        }
        if (isset($map['ContactEmail'])) {
            $model->contactEmail = $map['ContactEmail'];
        }
        if (isset($map['ContactName'])) {
            $model->contactName = $map['ContactName'];
        }
        if (isset($map['ContactNumber'])) {
            $model->contactNumber = $map['ContactNumber'];
        }
        if (isset($map['ContactProvince'])) {
            $model->contactProvince = $map['ContactProvince'];
        }
        if (isset($map['ContactZipCode'])) {
            $model->contactZipCode = $map['ContactZipCode'];
        }
        if (isset($map['Country'])) {
            $model->country = $map['Country'];
        }
        if (isset($map['EAddress'])) {
            $model->EAddress = $map['EAddress'];
        }
        if (isset($map['EName'])) {
            $model->EName = $map['EName'];
        }
        if (isset($map['IdCardOssKey'])) {
            $model->idCardOssKey = $map['IdCardOssKey'];
        }
        if (isset($map['LegalNoticeOssKey'])) {
            $model->legalNoticeOssKey = $map['LegalNoticeOssKey'];
        }
        if (isset($map['LoaOssKey'])) {
            $model->loaOssKey = $map['LoaOssKey'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PassportOssKey'])) {
            $model->passportOssKey = $map['PassportOssKey'];
        }
        if (isset($map['PrincipalName'])) {
            $model->principalName = $map['PrincipalName'];
        }
        if (isset($map['Province'])) {
            $model->province = $map['Province'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Town'])) {
            $model->town = $map['Town'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
