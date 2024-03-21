<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20190902\Models;

use AlibabaCloud\Tea\Model;

class DescribeApplicantResponseBody extends Model
{
    /**
     * @var string
     */
    public $address;

    /**
     * @example 191248
     *
     * @var int
     */
    public $applicantId;

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
     * @var string
     */
    public $applicantVersion;

    /**
     * @example 2
     *
     * @var int
     */
    public $auditStatus;

    /**
     * @example 1
     *
     * @var int
     */
    public $authorizationAuditStatus;

    /**
     * @example https://trade-mark-user-upload.oss-cn-beijing.aliyuncs.com/1219541161213057/attorney/gy378w6btam.jpg?Expires=1570697609&OSSAccessKeyId=hObpgEXoca42qH3V&Signature=bG50RI3XsQDML2%2BmEODR%2BERDJvk%3D
     *
     * @var string
     */
    public $authorizationUrl;

    /**
     * @example https://trade-mark-user-upload.oss-cn-beijing.aliyuncs.com/1219541161213057/business_license/gmzl6cvbk48.png?Expires=1568634805&OSSAccessKeyId=hObpgEXoca42qH3V&Signature=fwg73e9bVEN1y6S5%2B0eoFj%2F0Ic4%3D
     *
     * @var string
     */
    public $businessLicenceUrl;

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
     * @example abcd@alibaba-inc.com
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
     * @example https://trade-mark-user-upload.oss-cn-beijing.aliyuncs.com/1219541161213057/card/ujd8hthwfdk.png?Expires=1568634805&OSSAccessKeyId=hObpgEXoca42qH3V&Signature=Q%2FyEfWRJ4KPskGHKmWYYTmsxwmg%3D
     *
     * @var string
     */
    public $idCardUrl;

    /**
     * @example https://trade-mark-user-upload.oss-cn-beijing.aliyuncs.com//1219541161213057/legal_notice/mlnpsjmaed.jpg?Expires=1568634805&OSSAccessKeyId=hObpgEXoca42qH3V&Signature=XZAadmnTa7iixE02uKCK2DaLryU%3D
     *
     * @var string
     */
    public $legalNoticeUrl;

    /**
     * @var string
     */
    public $note;

    /**
     * @example https://trade-mark-user-upload.oss-cn-beijing.aliyuncs.com/1219541161213057/attorney/gy378w6btam.jpg?Expires=1568634805&OSSAccessKeyId=hObpgEXoca42qH3V&Signature=RFN730Owt3a7XJ6W%2BBsAJNHqFeE%3D
     *
     * @var string
     */
    public $passportUrl;

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

    /**
     * @example 95BB34D6-4A1D-4C55-876F-4B66044BD75B
     *
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $validDate;
    protected $_name = [
        'address'                  => 'Address',
        'applicantId'              => 'ApplicantId',
        'applicantName'            => 'ApplicantName',
        'applicantRegion'          => 'ApplicantRegion',
        'applicantType'            => 'ApplicantType',
        'applicantVersion'         => 'ApplicantVersion',
        'auditStatus'              => 'AuditStatus',
        'authorizationAuditStatus' => 'AuthorizationAuditStatus',
        'authorizationUrl'         => 'AuthorizationUrl',
        'businessLicenceUrl'       => 'BusinessLicenceUrl',
        'cardNumber'               => 'CardNumber',
        'contactAddress'           => 'ContactAddress',
        'contactCity'              => 'ContactCity',
        'contactCounty'            => 'ContactCounty',
        'contactDistrict'          => 'ContactDistrict',
        'contactEmail'             => 'ContactEmail',
        'contactName'              => 'ContactName',
        'contactNumber'            => 'ContactNumber',
        'contactProvince'          => 'ContactProvince',
        'contactZipcode'           => 'ContactZipcode',
        'country'                  => 'Country',
        'EAddress'                 => 'EAddress',
        'EName'                    => 'EName',
        'idCardName'               => 'IdCardName',
        'idCardNumber'             => 'IdCardNumber',
        'idCardUrl'                => 'IdCardUrl',
        'legalNoticeUrl'           => 'LegalNoticeUrl',
        'note'                     => 'Note',
        'passportUrl'              => 'PassportUrl',
        'personalType'             => 'PersonalType',
        'principalName'            => 'PrincipalName',
        'province'                 => 'Province',
        'requestId'                => 'RequestId',
        'validDate'                => 'ValidDate',
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
        if (null !== $this->applicantName) {
            $res['ApplicantName'] = $this->applicantName;
        }
        if (null !== $this->applicantRegion) {
            $res['ApplicantRegion'] = $this->applicantRegion;
        }
        if (null !== $this->applicantType) {
            $res['ApplicantType'] = $this->applicantType;
        }
        if (null !== $this->applicantVersion) {
            $res['ApplicantVersion'] = $this->applicantVersion;
        }
        if (null !== $this->auditStatus) {
            $res['AuditStatus'] = $this->auditStatus;
        }
        if (null !== $this->authorizationAuditStatus) {
            $res['AuthorizationAuditStatus'] = $this->authorizationAuditStatus;
        }
        if (null !== $this->authorizationUrl) {
            $res['AuthorizationUrl'] = $this->authorizationUrl;
        }
        if (null !== $this->businessLicenceUrl) {
            $res['BusinessLicenceUrl'] = $this->businessLicenceUrl;
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
        if (null !== $this->idCardUrl) {
            $res['IdCardUrl'] = $this->idCardUrl;
        }
        if (null !== $this->legalNoticeUrl) {
            $res['LegalNoticeUrl'] = $this->legalNoticeUrl;
        }
        if (null !== $this->note) {
            $res['Note'] = $this->note;
        }
        if (null !== $this->passportUrl) {
            $res['PassportUrl'] = $this->passportUrl;
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->validDate) {
            $res['ValidDate'] = $this->validDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeApplicantResponseBody
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
        if (isset($map['ApplicantName'])) {
            $model->applicantName = $map['ApplicantName'];
        }
        if (isset($map['ApplicantRegion'])) {
            $model->applicantRegion = $map['ApplicantRegion'];
        }
        if (isset($map['ApplicantType'])) {
            $model->applicantType = $map['ApplicantType'];
        }
        if (isset($map['ApplicantVersion'])) {
            $model->applicantVersion = $map['ApplicantVersion'];
        }
        if (isset($map['AuditStatus'])) {
            $model->auditStatus = $map['AuditStatus'];
        }
        if (isset($map['AuthorizationAuditStatus'])) {
            $model->authorizationAuditStatus = $map['AuthorizationAuditStatus'];
        }
        if (isset($map['AuthorizationUrl'])) {
            $model->authorizationUrl = $map['AuthorizationUrl'];
        }
        if (isset($map['BusinessLicenceUrl'])) {
            $model->businessLicenceUrl = $map['BusinessLicenceUrl'];
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
        if (isset($map['IdCardUrl'])) {
            $model->idCardUrl = $map['IdCardUrl'];
        }
        if (isset($map['LegalNoticeUrl'])) {
            $model->legalNoticeUrl = $map['LegalNoticeUrl'];
        }
        if (isset($map['Note'])) {
            $model->note = $map['Note'];
        }
        if (isset($map['PassportUrl'])) {
            $model->passportUrl = $map['PassportUrl'];
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ValidDate'])) {
            $model->validDate = $map['ValidDate'];
        }

        return $model;
    }
}
