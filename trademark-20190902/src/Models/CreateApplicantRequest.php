<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20190902\Models;

use AlibabaCloud\Tea\Model;

class CreateApplicantRequest extends Model
{
    /**
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $applicantName;

    /**
     * @example 1
     *
     * @var int
     */
    public $applicantRegion;

    /**
     * @example 1
     *
     * @var int
     */
    public $applicantType;

    /**
     * @example 1219541161213057/attorney/gy378w6btam.jpg
     *
     * @var string
     */
    public $authorizationOssKey;

    /**
     * @example 1219541161213057/business_license/gmzl6cvbk48.png
     *
     * @var string
     */
    public $businessLicenceOssKey;

    /**
     * @example 123456
     *
     * @var string
     */
    public $cardNumber;

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
     * @example test@alibaba.com
     *
     * @var string
     */
    public $contactEmail;

    /**
     * @var string
     */
    public $contactName;

    /**
     * @example 18611112222
     *
     * @var string
     */
    public $contactNumber;

    /**
     * @var string
     */
    public $contactProvince;

    /**
     * @example 100000
     *
     * @var string
     */
    public $contactZipcode;

    /**
     * @example 2096
     *
     * @var string
     */
    public $country;

    /**
     * @example bei jing shi
     *
     * @var string
     */
    public $EAddress;

    /**
     * @example zhang san
     *
     * @var string
     */
    public $EName;

    /**
     * @var string
     */
    public $idCardName;

    /**
     * @var string
     */
    public $idCardNumber;

    /**
     * @example 1219541161213057/card/ujd8hthwfdk.png
     *
     * @var string
     */
    public $idCardOssKey;

    /**
     * @example 1219541161213057/legal_notice/mlnpsjmaed.jpg
     *
     * @var string
     */
    public $legalNoticeOssKey;

    /**
     * @example 1219541161213057/pass_port/gmzl16cvbk48.png
     *
     * @var string
     */
    public $passportOssKey;

    /**
     * @var int
     */
    public $personalType;

    /**
     * @var int
     */
    public $principalName;

    /**
     * @var string
     */
    public $province;
    protected $_name = [
        'address'               => 'Address',
        'applicantName'         => 'ApplicantName',
        'applicantRegion'       => 'ApplicantRegion',
        'applicantType'         => 'ApplicantType',
        'authorizationOssKey'   => 'AuthorizationOssKey',
        'businessLicenceOssKey' => 'BusinessLicenceOssKey',
        'cardNumber'            => 'CardNumber',
        'contactAddress'        => 'ContactAddress',
        'contactCity'           => 'ContactCity',
        'contactCounty'         => 'ContactCounty',
        'contactDistrict'       => 'ContactDistrict',
        'contactEmail'          => 'ContactEmail',
        'contactName'           => 'ContactName',
        'contactNumber'         => 'ContactNumber',
        'contactProvince'       => 'ContactProvince',
        'contactZipcode'        => 'ContactZipcode',
        'country'               => 'Country',
        'EAddress'              => 'EAddress',
        'EName'                 => 'EName',
        'idCardName'            => 'IdCardName',
        'idCardNumber'          => 'IdCardNumber',
        'idCardOssKey'          => 'IdCardOssKey',
        'legalNoticeOssKey'     => 'LegalNoticeOssKey',
        'passportOssKey'        => 'PassportOssKey',
        'personalType'          => 'PersonalType',
        'principalName'         => 'PrincipalName',
        'province'              => 'Province',
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
        if (null !== $this->applicantName) {
            $res['ApplicantName'] = $this->applicantName;
        }
        if (null !== $this->applicantRegion) {
            $res['ApplicantRegion'] = $this->applicantRegion;
        }
        if (null !== $this->applicantType) {
            $res['ApplicantType'] = $this->applicantType;
        }
        if (null !== $this->authorizationOssKey) {
            $res['AuthorizationOssKey'] = $this->authorizationOssKey;
        }
        if (null !== $this->businessLicenceOssKey) {
            $res['BusinessLicenceOssKey'] = $this->businessLicenceOssKey;
        }
        if (null !== $this->cardNumber) {
            $res['CardNumber'] = $this->cardNumber;
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
        if (null !== $this->contactZipcode) {
            $res['ContactZipcode'] = $this->contactZipcode;
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
        if (null !== $this->idCardName) {
            $res['IdCardName'] = $this->idCardName;
        }
        if (null !== $this->idCardNumber) {
            $res['IdCardNumber'] = $this->idCardNumber;
        }
        if (null !== $this->idCardOssKey) {
            $res['IdCardOssKey'] = $this->idCardOssKey;
        }
        if (null !== $this->legalNoticeOssKey) {
            $res['LegalNoticeOssKey'] = $this->legalNoticeOssKey;
        }
        if (null !== $this->passportOssKey) {
            $res['PassportOssKey'] = $this->passportOssKey;
        }
        if (null !== $this->personalType) {
            $res['PersonalType'] = $this->personalType;
        }
        if (null !== $this->principalName) {
            $res['PrincipalName'] = $this->principalName;
        }
        if (null !== $this->province) {
            $res['Province'] = $this->province;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateApplicantRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['ApplicantName'])) {
            $model->applicantName = $map['ApplicantName'];
        }
        if (isset($map['ApplicantRegion'])) {
            $model->applicantRegion = $map['ApplicantRegion'];
        }
        if (isset($map['ApplicantType'])) {
            $model->applicantType = $map['ApplicantType'];
        }
        if (isset($map['AuthorizationOssKey'])) {
            $model->authorizationOssKey = $map['AuthorizationOssKey'];
        }
        if (isset($map['BusinessLicenceOssKey'])) {
            $model->businessLicenceOssKey = $map['BusinessLicenceOssKey'];
        }
        if (isset($map['CardNumber'])) {
            $model->cardNumber = $map['CardNumber'];
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
        if (isset($map['ContactZipcode'])) {
            $model->contactZipcode = $map['ContactZipcode'];
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
        if (isset($map['IdCardName'])) {
            $model->idCardName = $map['IdCardName'];
        }
        if (isset($map['IdCardNumber'])) {
            $model->idCardNumber = $map['IdCardNumber'];
        }
        if (isset($map['IdCardOssKey'])) {
            $model->idCardOssKey = $map['IdCardOssKey'];
        }
        if (isset($map['LegalNoticeOssKey'])) {
            $model->legalNoticeOssKey = $map['LegalNoticeOssKey'];
        }
        if (isset($map['PassportOssKey'])) {
            $model->passportOssKey = $map['PassportOssKey'];
        }
        if (isset($map['PersonalType'])) {
            $model->personalType = $map['PersonalType'];
        }
        if (isset($map['PrincipalName'])) {
            $model->principalName = $map['PrincipalName'];
        }
        if (isset($map['Province'])) {
            $model->province = $map['Province'];
        }

        return $model;
    }
}
