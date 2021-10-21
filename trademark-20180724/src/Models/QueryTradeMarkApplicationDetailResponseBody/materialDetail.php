<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTradeMarkApplicationDetailResponseBody;

use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTradeMarkApplicationDetailResponseBody\materialDetail\reviewAdditionalFiles;
use AlibabaCloud\Tea\Model;

class materialDetail extends Model
{
    /**
     * @var int
     */
    public $type;

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
    public $businessLicenceUrl;

    /**
     * @var string
     */
    public $passportUrl;

    /**
     * @var string
     */
    public $city;

    /**
     * @var string
     */
    public $legalNoticeUrl;

    /**
     * @var string
     */
    public $EAddress;

    /**
     * @var string
     */
    public $contactEmail;

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
     * @var string
     */
    public $cardNumber;

    /**
     * @var string
     */
    public $expirationDate;

    /**
     * @var string
     */
    public $idCardUrl;

    /**
     * @var string
     */
    public $country;

    /**
     * @var string
     */
    public $town;

    /**
     * @var string
     */
    public $province;

    /**
     * @description 详细收件地址
     *
     * @var string
     */
    public $detailedContactAddress;

    /**
     * @var reviewAdditionalFiles
     */
    public $reviewAdditionalFiles;
    protected $_name = [
        'type'                   => 'Type',
        'reviewApplicationFile'  => 'ReviewApplicationFile',
        'status'                 => 'Status',
        'businessLicenceUrl'     => 'BusinessLicenceUrl',
        'passportUrl'            => 'PassportUrl',
        'city'                   => 'City',
        'legalNoticeUrl'         => 'LegalNoticeUrl',
        'EAddress'               => 'EAddress',
        'contactEmail'           => 'ContactEmail',
        'region'                 => 'Region',
        'loaUrl'                 => 'LoaUrl',
        'address'                => 'Address',
        'principalName'          => 'PrincipalName',
        'name'                   => 'Name',
        'contactNumber'          => 'ContactNumber',
        'contactAddress'         => 'ContactAddress',
        'contactZipcode'         => 'ContactZipcode',
        'contactName'            => 'ContactName',
        'EName'                  => 'EName',
        'cardNumber'             => 'CardNumber',
        'expirationDate'         => 'ExpirationDate',
        'idCardUrl'              => 'IdCardUrl',
        'country'                => 'Country',
        'town'                   => 'Town',
        'province'               => 'Province',
        'detailedContactAddress' => 'DetailedContactAddress',
        'reviewAdditionalFiles'  => 'ReviewAdditionalFiles',
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
        if (null !== $this->reviewApplicationFile) {
            $res['ReviewApplicationFile'] = $this->reviewApplicationFile;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->businessLicenceUrl) {
            $res['BusinessLicenceUrl'] = $this->businessLicenceUrl;
        }
        if (null !== $this->passportUrl) {
            $res['PassportUrl'] = $this->passportUrl;
        }
        if (null !== $this->city) {
            $res['City'] = $this->city;
        }
        if (null !== $this->legalNoticeUrl) {
            $res['LegalNoticeUrl'] = $this->legalNoticeUrl;
        }
        if (null !== $this->EAddress) {
            $res['EAddress'] = $this->EAddress;
        }
        if (null !== $this->contactEmail) {
            $res['ContactEmail'] = $this->contactEmail;
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
        if (null !== $this->principalName) {
            $res['PrincipalName'] = $this->principalName;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (null !== $this->cardNumber) {
            $res['CardNumber'] = $this->cardNumber;
        }
        if (null !== $this->expirationDate) {
            $res['ExpirationDate'] = $this->expirationDate;
        }
        if (null !== $this->idCardUrl) {
            $res['IdCardUrl'] = $this->idCardUrl;
        }
        if (null !== $this->country) {
            $res['Country'] = $this->country;
        }
        if (null !== $this->town) {
            $res['Town'] = $this->town;
        }
        if (null !== $this->province) {
            $res['Province'] = $this->province;
        }
        if (null !== $this->detailedContactAddress) {
            $res['DetailedContactAddress'] = $this->detailedContactAddress;
        }
        if (null !== $this->reviewAdditionalFiles) {
            $res['ReviewAdditionalFiles'] = null !== $this->reviewAdditionalFiles ? $this->reviewAdditionalFiles->toMap() : null;
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['ReviewApplicationFile'])) {
            $model->reviewApplicationFile = $map['ReviewApplicationFile'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['BusinessLicenceUrl'])) {
            $model->businessLicenceUrl = $map['BusinessLicenceUrl'];
        }
        if (isset($map['PassportUrl'])) {
            $model->passportUrl = $map['PassportUrl'];
        }
        if (isset($map['City'])) {
            $model->city = $map['City'];
        }
        if (isset($map['LegalNoticeUrl'])) {
            $model->legalNoticeUrl = $map['LegalNoticeUrl'];
        }
        if (isset($map['EAddress'])) {
            $model->EAddress = $map['EAddress'];
        }
        if (isset($map['ContactEmail'])) {
            $model->contactEmail = $map['ContactEmail'];
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
        if (isset($map['PrincipalName'])) {
            $model->principalName = $map['PrincipalName'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
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
        if (isset($map['CardNumber'])) {
            $model->cardNumber = $map['CardNumber'];
        }
        if (isset($map['ExpirationDate'])) {
            $model->expirationDate = $map['ExpirationDate'];
        }
        if (isset($map['IdCardUrl'])) {
            $model->idCardUrl = $map['IdCardUrl'];
        }
        if (isset($map['Country'])) {
            $model->country = $map['Country'];
        }
        if (isset($map['Town'])) {
            $model->town = $map['Town'];
        }
        if (isset($map['Province'])) {
            $model->province = $map['Province'];
        }
        if (isset($map['DetailedContactAddress'])) {
            $model->detailedContactAddress = $map['DetailedContactAddress'];
        }
        if (isset($map['ReviewAdditionalFiles'])) {
            $model->reviewAdditionalFiles = reviewAdditionalFiles::fromMap($map['ReviewAdditionalFiles']);
        }

        return $model;
    }
}
