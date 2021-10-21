<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models;

use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryMaterialResponseBody\reviewAdditionalFiles;
use AlibabaCloud\Tea\Model;

class QueryMaterialResponseBody extends Model
{
    /**
     * @var int
     */
    public $type;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $reviewApplicationFile;

    /**
     * @var string
     */
    public $contactDistrict;

    /**
     * @var string
     */
    public $businessLicenceUrl;

    /**
     * @var string
     */
    public $passportUrl;

    /**
     * @var string
     */
    public $contactProvince;

    /**
     * @var string
     */
    public $legalNoticeUrl;

    /**
     * @var string
     */
    public $city;

    /**
     * @var string
     */
    public $EAddress;

    /**
     * @var string
     */
    public $contactCounty;

    /**
     * @var string
     */
    public $contactEmail;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $contactCity;

    /**
     * @var int
     */
    public $region;

    /**
     * @var string
     */
    public $loaUrl;

    /**
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $note;

    /**
     * @var int
     */
    public $principalName;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $principalDescription;

    /**
     * @var string
     */
    public $contactNumber;

    /**
     * @var string
     */
    public $contactAddress;

    /**
     * @var string
     */
    public $contactZipcode;

    /**
     * @var string
     */
    public $contactName;

    /**
     * @var string
     */
    public $EName;

    /**
     * @var int
     */
    public $validDate;

    /**
     * @var string
     */
    public $idCardUrl;

    /**
     * @var int
     */
    public $expirationDate;

    /**
     * @var string
     */
    public $cardNumber;

    /**
     * @var string
     */
    public $country;

    /**
     * @var string
     */
    public $town;

    /**
     * @var int
     */
    public $loaStatus;

    /**
     * @var string
     */
    public $reason;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $province;

    /**
     * @var string
     */
    public $legalNoticeKey;

    /**
     * @var reviewAdditionalFiles
     */
    public $reviewAdditionalFiles;
    protected $_name = [
        'type'                  => 'Type',
        'status'                => 'Status',
        'reviewApplicationFile' => 'ReviewApplicationFile',
        'contactDistrict'       => 'ContactDistrict',
        'businessLicenceUrl'    => 'BusinessLicenceUrl',
        'passportUrl'           => 'PassportUrl',
        'contactProvince'       => 'ContactProvince',
        'legalNoticeUrl'        => 'LegalNoticeUrl',
        'city'                  => 'City',
        'EAddress'              => 'EAddress',
        'contactCounty'         => 'ContactCounty',
        'contactEmail'          => 'ContactEmail',
        'requestId'             => 'RequestId',
        'contactCity'           => 'ContactCity',
        'region'                => 'Region',
        'loaUrl'                => 'LoaUrl',
        'address'               => 'Address',
        'note'                  => 'Note',
        'principalName'         => 'PrincipalName',
        'name'                  => 'Name',
        'principalDescription'  => 'PrincipalDescription',
        'contactNumber'         => 'ContactNumber',
        'contactAddress'        => 'ContactAddress',
        'contactZipcode'        => 'ContactZipcode',
        'contactName'           => 'ContactName',
        'EName'                 => 'EName',
        'validDate'             => 'ValidDate',
        'idCardUrl'             => 'IdCardUrl',
        'expirationDate'        => 'ExpirationDate',
        'cardNumber'            => 'CardNumber',
        'country'               => 'Country',
        'town'                  => 'Town',
        'loaStatus'             => 'LoaStatus',
        'reason'                => 'Reason',
        'id'                    => 'Id',
        'province'              => 'Province',
        'legalNoticeKey'        => 'LegalNoticeKey',
        'reviewAdditionalFiles' => 'ReviewAdditionalFiles',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->reviewApplicationFile) {
            $res['ReviewApplicationFile'] = $this->reviewApplicationFile;
        }
        if (null !== $this->contactDistrict) {
            $res['ContactDistrict'] = $this->contactDistrict;
        }
        if (null !== $this->businessLicenceUrl) {
            $res['BusinessLicenceUrl'] = $this->businessLicenceUrl;
        }
        if (null !== $this->passportUrl) {
            $res['PassportUrl'] = $this->passportUrl;
        }
        if (null !== $this->contactProvince) {
            $res['ContactProvince'] = $this->contactProvince;
        }
        if (null !== $this->legalNoticeUrl) {
            $res['LegalNoticeUrl'] = $this->legalNoticeUrl;
        }
        if (null !== $this->city) {
            $res['City'] = $this->city;
        }
        if (null !== $this->EAddress) {
            $res['EAddress'] = $this->EAddress;
        }
        if (null !== $this->contactCounty) {
            $res['ContactCounty'] = $this->contactCounty;
        }
        if (null !== $this->contactEmail) {
            $res['ContactEmail'] = $this->contactEmail;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->contactCity) {
            $res['ContactCity'] = $this->contactCity;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->loaUrl) {
            $res['LoaUrl'] = $this->loaUrl;
        }
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }
        if (null !== $this->note) {
            $res['Note'] = $this->note;
        }
        if (null !== $this->principalName) {
            $res['PrincipalName'] = $this->principalName;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->principalDescription) {
            $res['PrincipalDescription'] = $this->principalDescription;
        }
        if (null !== $this->contactNumber) {
            $res['ContactNumber'] = $this->contactNumber;
        }
        if (null !== $this->contactAddress) {
            $res['ContactAddress'] = $this->contactAddress;
        }
        if (null !== $this->contactZipcode) {
            $res['ContactZipcode'] = $this->contactZipcode;
        }
        if (null !== $this->contactName) {
            $res['ContactName'] = $this->contactName;
        }
        if (null !== $this->EName) {
            $res['EName'] = $this->EName;
        }
        if (null !== $this->validDate) {
            $res['ValidDate'] = $this->validDate;
        }
        if (null !== $this->idCardUrl) {
            $res['IdCardUrl'] = $this->idCardUrl;
        }
        if (null !== $this->expirationDate) {
            $res['ExpirationDate'] = $this->expirationDate;
        }
        if (null !== $this->cardNumber) {
            $res['CardNumber'] = $this->cardNumber;
        }
        if (null !== $this->country) {
            $res['Country'] = $this->country;
        }
        if (null !== $this->town) {
            $res['Town'] = $this->town;
        }
        if (null !== $this->loaStatus) {
            $res['LoaStatus'] = $this->loaStatus;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->province) {
            $res['Province'] = $this->province;
        }
        if (null !== $this->legalNoticeKey) {
            $res['LegalNoticeKey'] = $this->legalNoticeKey;
        }
        if (null !== $this->reviewAdditionalFiles) {
            $res['ReviewAdditionalFiles'] = null !== $this->reviewAdditionalFiles ? $this->reviewAdditionalFiles->toMap() : null;
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['ReviewApplicationFile'])) {
            $model->reviewApplicationFile = $map['ReviewApplicationFile'];
        }
        if (isset($map['ContactDistrict'])) {
            $model->contactDistrict = $map['ContactDistrict'];
        }
        if (isset($map['BusinessLicenceUrl'])) {
            $model->businessLicenceUrl = $map['BusinessLicenceUrl'];
        }
        if (isset($map['PassportUrl'])) {
            $model->passportUrl = $map['PassportUrl'];
        }
        if (isset($map['ContactProvince'])) {
            $model->contactProvince = $map['ContactProvince'];
        }
        if (isset($map['LegalNoticeUrl'])) {
            $model->legalNoticeUrl = $map['LegalNoticeUrl'];
        }
        if (isset($map['City'])) {
            $model->city = $map['City'];
        }
        if (isset($map['EAddress'])) {
            $model->EAddress = $map['EAddress'];
        }
        if (isset($map['ContactCounty'])) {
            $model->contactCounty = $map['ContactCounty'];
        }
        if (isset($map['ContactEmail'])) {
            $model->contactEmail = $map['ContactEmail'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ContactCity'])) {
            $model->contactCity = $map['ContactCity'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['LoaUrl'])) {
            $model->loaUrl = $map['LoaUrl'];
        }
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['Note'])) {
            $model->note = $map['Note'];
        }
        if (isset($map['PrincipalName'])) {
            $model->principalName = $map['PrincipalName'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PrincipalDescription'])) {
            $model->principalDescription = $map['PrincipalDescription'];
        }
        if (isset($map['ContactNumber'])) {
            $model->contactNumber = $map['ContactNumber'];
        }
        if (isset($map['ContactAddress'])) {
            $model->contactAddress = $map['ContactAddress'];
        }
        if (isset($map['ContactZipcode'])) {
            $model->contactZipcode = $map['ContactZipcode'];
        }
        if (isset($map['ContactName'])) {
            $model->contactName = $map['ContactName'];
        }
        if (isset($map['EName'])) {
            $model->EName = $map['EName'];
        }
        if (isset($map['ValidDate'])) {
            $model->validDate = $map['ValidDate'];
        }
        if (isset($map['IdCardUrl'])) {
            $model->idCardUrl = $map['IdCardUrl'];
        }
        if (isset($map['ExpirationDate'])) {
            $model->expirationDate = $map['ExpirationDate'];
        }
        if (isset($map['CardNumber'])) {
            $model->cardNumber = $map['CardNumber'];
        }
        if (isset($map['Country'])) {
            $model->country = $map['Country'];
        }
        if (isset($map['Town'])) {
            $model->town = $map['Town'];
        }
        if (isset($map['LoaStatus'])) {
            $model->loaStatus = $map['LoaStatus'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Province'])) {
            $model->province = $map['Province'];
        }
        if (isset($map['LegalNoticeKey'])) {
            $model->legalNoticeKey = $map['LegalNoticeKey'];
        }
        if (isset($map['ReviewAdditionalFiles'])) {
            $model->reviewAdditionalFiles = reviewAdditionalFiles::fromMap($map['ReviewAdditionalFiles']);
        }

        return $model;
    }
}
