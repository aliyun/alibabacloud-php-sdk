<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTradeMarkApplicationDetailResponseBody;

use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTradeMarkApplicationDetailResponseBody\materialDetail\reviewAdditionalFiles;
use AlibabaCloud\Tea\Model;

class materialDetail extends Model
{
    /**
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $businessLicenceUrl;

    /**
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
    public $contactZipcode;

    /**
     * @var string
     */
    public $country;

    /**
     * @var string
     */
    public $detailedContactAddress;

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
    public $expirationDate;

    /**
     * @var string
     */
    public $factAndReasonPdfPath;

    /**
     * @var string
     */
    public $idCardName;

    /**
     * @var string
     */
    public $idCardNumber;

    /**
     * @var string
     */
    public $idCardUrl;

    /**
     * @var string
     */
    public $legalNoticeUrl;

    /**
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
     * @var int
     */
    public $region;

    /**
     * @var reviewAdditionalFiles
     */
    public $reviewAdditionalFiles;

    /**
     * @var string
     */
    public $reviewApplicationFile;

    /**
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
    public $town;

    /**
     * @var int
     */
    public $type;
    protected $_name = [
        'address'                        => 'Address',
        'businessLicenceUrl'             => 'BusinessLicenceUrl',
        'cardNumber'                     => 'CardNumber',
        'city'                           => 'City',
        'contactAddress'                 => 'ContactAddress',
        'contactCity'                    => 'ContactCity',
        'contactDistrict'                => 'ContactDistrict',
        'contactEmail'                   => 'ContactEmail',
        'contactName'                    => 'ContactName',
        'contactNumber'                  => 'ContactNumber',
        'contactProvince'                => 'ContactProvince',
        'contactZipcode'                 => 'ContactZipcode',
        'country'                        => 'Country',
        'detailedContactAddress'         => 'DetailedContactAddress',
        'EAddress'                       => 'EAddress',
        'EName'                          => 'EName',
        'expirationDate'                 => 'ExpirationDate',
        'factAndReasonPdfPath'           => 'FactAndReasonPdfPath',
        'idCardName'                     => 'IdCardName',
        'idCardNumber'                   => 'IdCardNumber',
        'idCardUrl'                      => 'IdCardUrl',
        'legalNoticeUrl'                 => 'LegalNoticeUrl',
        'loaUrl'                         => 'LoaUrl',
        'materialVersion'                => 'MaterialVersion',
        'name'                           => 'Name',
        'passportUrl'                    => 'PassportUrl',
        'personalType'                   => 'PersonalType',
        'principalName'                  => 'PrincipalName',
        'province'                       => 'Province',
        'region'                         => 'Region',
        'reviewAdditionalFiles'          => 'ReviewAdditionalFiles',
        'reviewApplicationFile'          => 'ReviewApplicationFile',
        'status'                         => 'Status',
        'supplementEvidenceCatalogFile'  => 'SupplementEvidenceCatalogFile',
        'supplementEvidenceMaterialFile' => 'SupplementEvidenceMaterialFile',
        'supplementReasonFile'           => 'SupplementReasonFile',
        'town'                           => 'Town',
        'type'                           => 'Type',
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
        if (null !== $this->detailedContactAddress) {
            $res['DetailedContactAddress'] = $this->detailedContactAddress;
        }
        if (null !== $this->EAddress) {
            $res['EAddress'] = $this->EAddress;
        }
        if (null !== $this->EName) {
            $res['EName'] = $this->EName;
        }
        if (null !== $this->expirationDate) {
            $res['ExpirationDate'] = $this->expirationDate;
        }
        if (null !== $this->factAndReasonPdfPath) {
            $res['FactAndReasonPdfPath'] = $this->factAndReasonPdfPath;
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
        if (null !== $this->loaUrl) {
            $res['LoaUrl'] = $this->loaUrl;
        }
        if (null !== $this->materialVersion) {
            $res['MaterialVersion'] = $this->materialVersion;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (null !== $this->region) {
            $res['Region'] = $this->region;
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
     * @return materialDetail
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
        if (isset($map['DetailedContactAddress'])) {
            $model->detailedContactAddress = $map['DetailedContactAddress'];
        }
        if (isset($map['EAddress'])) {
            $model->EAddress = $map['EAddress'];
        }
        if (isset($map['EName'])) {
            $model->EName = $map['EName'];
        }
        if (isset($map['ExpirationDate'])) {
            $model->expirationDate = $map['ExpirationDate'];
        }
        if (isset($map['FactAndReasonPdfPath'])) {
            $model->factAndReasonPdfPath = $map['FactAndReasonPdfPath'];
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
        if (isset($map['LoaUrl'])) {
            $model->loaUrl = $map['LoaUrl'];
        }
        if (isset($map['MaterialVersion'])) {
            $model->materialVersion = $map['MaterialVersion'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
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
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
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
        if (isset($map['Town'])) {
            $model->town = $map['Town'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
