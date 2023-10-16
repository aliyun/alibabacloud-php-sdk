<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models;

use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryMaterialResponseBody\reviewAdditionalFiles;
use AlibabaCloud\Tea\Model;

class QueryMaterialResponseBody extends Model
{
    /**
     * @var string
     */
    public $address;

    /**
     * @example https://trade-mark-user-upload.oss-cn-beijing.aliyuncs.com/1219541161213057/passport/sdixdw73pl.jpg
     *
     * @var string
     */
    public $businessLicenceUrl;

    /**
     * @example 121212
     *
     * @var string
     */
    public $cardNumber;

    /**
     * @var string
     */
    public $city;

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
     * @example aliyun@aliyun.com
     *
     * @var string
     */
    public $contactEmail;

    /**
     * @example aliyun
     *
     * @var string
     */
    public $contactName;

    /**
     * @example 010-1231234
     *
     * @var string
     */
    public $contactNumber;

    /**
     * @var string
     */
    public $contactProvince;

    /**
     * @example 123456
     *
     * @var string
     */
    public $contactZipcode;

    /**
     * @var string
     */
    public $country;

    /**
     * @example beijing
     *
     * @var string
     */
    public $EAddress;

    /**
     * @example aliyun
     *
     * @var string
     */
    public $EName;

    /**
     * @var string
     */
    public $evidenceCatalogPath;

    /**
     * @var string
     */
    public $evidenceOfservicePath;

    /**
     * @var string
     */
    public $evidencePath;

    /**
     * @example 1545804527194
     *
     * @var int
     */
    public $expirationDate;

    /**
     * @var string
     */
    public $factandreasonPdfPath;

    /**
     * @var string
     */
    public $fgsqPath;

    /**
     * @var string
     */
    public $fileBgPath;

    /**
     * @var string
     */
    public $fileFsSqPath;

    /**
     * @var string
     */
    public $fileGtPath;

    /**
     * @var string
     */
    public $fileYgPath;

    /**
     * @description id
     *
     * @example 1
     *
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $idCardName;

    /**
     * @var string
     */
    public $idCardNumber;

    /**
     * @example https://trade-mark-user-upload.oss-cn-beijing.aliyuncs.com/1219541161213057/idcard.jpg
     *
     * @var string
     */
    public $idCardUrl;

    /**
     * @var string
     */
    public $legalNoticeKey;

    /**
     * @example https://trade-mark-user-upload.oss-cn-beijing.aliyuncs.com/1219541161213057/legalnotice.jpg
     *
     * @var string
     */
    public $legalNoticeUrl;

    /**
     * @example 1
     *
     * @var int
     */
    public $loaStatus;

    /**
     * @example https://trade-mark-user-upload.oss-cn-beijing.aliyuncs.com/1219541161213057/loaurl.jpg
     *
     * @var string
     */
    public $loaUrl;

    /**
     * @var string
     */
    public $materialVersion;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $note;

    /**
     * @example https://trade-mark-user-upload.oss-cn-beijing.aliyuncs.com/1219541161213057/passport/sdixdw73pl.jpg
     *
     * @var string
     */
    public $passportUrl;

    /**
     * @var int
     */
    public $personalType;

    /**
     * @var string
     */
    public $principalDescription;

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
    public $reason;

    /**
     * @example 1
     *
     * @var int
     */
    public $region;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var reviewAdditionalFiles
     */
    public $reviewAdditionalFiles;

    /**
     * @var string
     */
    public $reviewApplicationFile;

    /**
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $supplementEvidenceCatalogFile;

    /**
     * @var string
     */
    public $supplementEvidenceMaterialFile;

    /**
     * @var string
     */
    public $supplementReasonFile;

    /**
     * @var string
     */
    public $systemVersion;

    /**
     * @var string
     */
    public $town;

    /**
     * @example 1
     *
     * @var int
     */
    public $type;

    /**
     * @var int
     */
    public $validDate;
    protected $_name = [
        'address'                        => 'Address',
        'businessLicenceUrl'             => 'BusinessLicenceUrl',
        'cardNumber'                     => 'CardNumber',
        'city'                           => 'City',
        'contactAddress'                 => 'ContactAddress',
        'contactCity'                    => 'ContactCity',
        'contactCounty'                  => 'ContactCounty',
        'contactDistrict'                => 'ContactDistrict',
        'contactEmail'                   => 'ContactEmail',
        'contactName'                    => 'ContactName',
        'contactNumber'                  => 'ContactNumber',
        'contactProvince'                => 'ContactProvince',
        'contactZipcode'                 => 'ContactZipcode',
        'country'                        => 'Country',
        'EAddress'                       => 'EAddress',
        'EName'                          => 'EName',
        'evidenceCatalogPath'            => 'EvidenceCatalogPath',
        'evidenceOfservicePath'          => 'EvidenceOfservicePath',
        'evidencePath'                   => 'EvidencePath',
        'expirationDate'                 => 'ExpirationDate',
        'factandreasonPdfPath'           => 'FactandreasonPdfPath',
        'fgsqPath'                       => 'FgsqPath',
        'fileBgPath'                     => 'FileBgPath',
        'fileFsSqPath'                   => 'FileFsSqPath',
        'fileGtPath'                     => 'FileGtPath',
        'fileYgPath'                     => 'FileYgPath',
        'id'                             => 'Id',
        'idCardName'                     => 'IdCardName',
        'idCardNumber'                   => 'IdCardNumber',
        'idCardUrl'                      => 'IdCardUrl',
        'legalNoticeKey'                 => 'LegalNoticeKey',
        'legalNoticeUrl'                 => 'LegalNoticeUrl',
        'loaStatus'                      => 'LoaStatus',
        'loaUrl'                         => 'LoaUrl',
        'materialVersion'                => 'MaterialVersion',
        'name'                           => 'Name',
        'note'                           => 'Note',
        'passportUrl'                    => 'PassportUrl',
        'personalType'                   => 'PersonalType',
        'principalDescription'           => 'PrincipalDescription',
        'principalName'                  => 'PrincipalName',
        'province'                       => 'Province',
        'reason'                         => 'Reason',
        'region'                         => 'Region',
        'requestId'                      => 'RequestId',
        'reviewAdditionalFiles'          => 'ReviewAdditionalFiles',
        'reviewApplicationFile'          => 'ReviewApplicationFile',
        'status'                         => 'Status',
        'supplementEvidenceCatalogFile'  => 'SupplementEvidenceCatalogFile',
        'supplementEvidenceMaterialFile' => 'SupplementEvidenceMaterialFile',
        'supplementReasonFile'           => 'SupplementReasonFile',
        'systemVersion'                  => 'SystemVersion',
        'town'                           => 'Town',
        'type'                           => 'Type',
        'validDate'                      => 'ValidDate',
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
        if (null !== $this->businessLicenceUrl) {
            $res['BusinessLicenceUrl'] = $this->businessLicenceUrl;
        }
        if (null !== $this->cardNumber) {
            $res['CardNumber'] = $this->cardNumber;
        }
        if (null !== $this->city) {
            $res['City'] = $this->city;
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
        if (null !== $this->evidenceCatalogPath) {
            $res['EvidenceCatalogPath'] = $this->evidenceCatalogPath;
        }
        if (null !== $this->evidenceOfservicePath) {
            $res['EvidenceOfservicePath'] = $this->evidenceOfservicePath;
        }
        if (null !== $this->evidencePath) {
            $res['EvidencePath'] = $this->evidencePath;
        }
        if (null !== $this->expirationDate) {
            $res['ExpirationDate'] = $this->expirationDate;
        }
        if (null !== $this->factandreasonPdfPath) {
            $res['FactandreasonPdfPath'] = $this->factandreasonPdfPath;
        }
        if (null !== $this->fgsqPath) {
            $res['FgsqPath'] = $this->fgsqPath;
        }
        if (null !== $this->fileBgPath) {
            $res['FileBgPath'] = $this->fileBgPath;
        }
        if (null !== $this->fileFsSqPath) {
            $res['FileFsSqPath'] = $this->fileFsSqPath;
        }
        if (null !== $this->fileGtPath) {
            $res['FileGtPath'] = $this->fileGtPath;
        }
        if (null !== $this->fileYgPath) {
            $res['FileYgPath'] = $this->fileYgPath;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
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
        if (null !== $this->legalNoticeKey) {
            $res['LegalNoticeKey'] = $this->legalNoticeKey;
        }
        if (null !== $this->legalNoticeUrl) {
            $res['LegalNoticeUrl'] = $this->legalNoticeUrl;
        }
        if (null !== $this->loaStatus) {
            $res['LoaStatus'] = $this->loaStatus;
        }
        if (null !== $this->loaUrl) {
            $res['LoaUrl'] = $this->loaUrl;
        }
        if (null !== $this->materialVersion) {
            $res['MaterialVersion'] = $this->materialVersion;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (null !== $this->principalDescription) {
            $res['PrincipalDescription'] = $this->principalDescription;
        }
        if (null !== $this->principalName) {
            $res['PrincipalName'] = $this->principalName;
        }
        if (null !== $this->province) {
            $res['Province'] = $this->province;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->reviewAdditionalFiles) {
            $res['ReviewAdditionalFiles'] = null !== $this->reviewAdditionalFiles ? $this->reviewAdditionalFiles->toMap() : null;
        }
        if (null !== $this->reviewApplicationFile) {
            $res['ReviewApplicationFile'] = $this->reviewApplicationFile;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->supplementEvidenceCatalogFile) {
            $res['SupplementEvidenceCatalogFile'] = $this->supplementEvidenceCatalogFile;
        }
        if (null !== $this->supplementEvidenceMaterialFile) {
            $res['SupplementEvidenceMaterialFile'] = $this->supplementEvidenceMaterialFile;
        }
        if (null !== $this->supplementReasonFile) {
            $res['SupplementReasonFile'] = $this->supplementReasonFile;
        }
        if (null !== $this->systemVersion) {
            $res['SystemVersion'] = $this->systemVersion;
        }
        if (null !== $this->town) {
            $res['Town'] = $this->town;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->validDate) {
            $res['ValidDate'] = $this->validDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryMaterialResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['BusinessLicenceUrl'])) {
            $model->businessLicenceUrl = $map['BusinessLicenceUrl'];
        }
        if (isset($map['CardNumber'])) {
            $model->cardNumber = $map['CardNumber'];
        }
        if (isset($map['City'])) {
            $model->city = $map['City'];
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
        if (isset($map['EvidenceCatalogPath'])) {
            $model->evidenceCatalogPath = $map['EvidenceCatalogPath'];
        }
        if (isset($map['EvidenceOfservicePath'])) {
            $model->evidenceOfservicePath = $map['EvidenceOfservicePath'];
        }
        if (isset($map['EvidencePath'])) {
            $model->evidencePath = $map['EvidencePath'];
        }
        if (isset($map['ExpirationDate'])) {
            $model->expirationDate = $map['ExpirationDate'];
        }
        if (isset($map['FactandreasonPdfPath'])) {
            $model->factandreasonPdfPath = $map['FactandreasonPdfPath'];
        }
        if (isset($map['FgsqPath'])) {
            $model->fgsqPath = $map['FgsqPath'];
        }
        if (isset($map['FileBgPath'])) {
            $model->fileBgPath = $map['FileBgPath'];
        }
        if (isset($map['FileFsSqPath'])) {
            $model->fileFsSqPath = $map['FileFsSqPath'];
        }
        if (isset($map['FileGtPath'])) {
            $model->fileGtPath = $map['FileGtPath'];
        }
        if (isset($map['FileYgPath'])) {
            $model->fileYgPath = $map['FileYgPath'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
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
        if (isset($map['LegalNoticeKey'])) {
            $model->legalNoticeKey = $map['LegalNoticeKey'];
        }
        if (isset($map['LegalNoticeUrl'])) {
            $model->legalNoticeUrl = $map['LegalNoticeUrl'];
        }
        if (isset($map['LoaStatus'])) {
            $model->loaStatus = $map['LoaStatus'];
        }
        if (isset($map['LoaUrl'])) {
            $model->loaUrl = $map['LoaUrl'];
        }
        if (isset($map['MaterialVersion'])) {
            $model->materialVersion = $map['MaterialVersion'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
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
        if (isset($map['PrincipalDescription'])) {
            $model->principalDescription = $map['PrincipalDescription'];
        }
        if (isset($map['PrincipalName'])) {
            $model->principalName = $map['PrincipalName'];
        }
        if (isset($map['Province'])) {
            $model->province = $map['Province'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ReviewAdditionalFiles'])) {
            $model->reviewAdditionalFiles = reviewAdditionalFiles::fromMap($map['ReviewAdditionalFiles']);
        }
        if (isset($map['ReviewApplicationFile'])) {
            $model->reviewApplicationFile = $map['ReviewApplicationFile'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SupplementEvidenceCatalogFile'])) {
            $model->supplementEvidenceCatalogFile = $map['SupplementEvidenceCatalogFile'];
        }
        if (isset($map['SupplementEvidenceMaterialFile'])) {
            $model->supplementEvidenceMaterialFile = $map['SupplementEvidenceMaterialFile'];
        }
        if (isset($map['SupplementReasonFile'])) {
            $model->supplementReasonFile = $map['SupplementReasonFile'];
        }
        if (isset($map['SystemVersion'])) {
            $model->systemVersion = $map['SystemVersion'];
        }
        if (isset($map['Town'])) {
            $model->town = $map['Town'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['ValidDate'])) {
            $model->validDate = $map['ValidDate'];
        }

        return $model;
    }
}
