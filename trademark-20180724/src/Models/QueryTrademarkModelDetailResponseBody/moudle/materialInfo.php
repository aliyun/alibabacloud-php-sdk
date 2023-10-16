<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models\QueryTrademarkModelDetailResponseBody\moudle;

use AlibabaCloud\Tea\Model;

class materialInfo extends Model
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
    public $cnInfoUrl;

    /**
     * @var string
     */
    public $contactAddress;

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
    public $contactPhoneNumber;

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
    public $idCardNumber;

    /**
     * @var string
     */
    public $idCardUrl;

    /**
     * @var string
     */
    public $loaKey;

    /**
     * @var string
     */
    public $loaUrl;

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
     * @var string
     */
    public $postCode;

    /**
     * @var string
     */
    public $province;

    /**
     * @var string
     */
    public $reasonFileOssKey;

    /**
     * @var int
     */
    public $region;

    /**
     * @var mixed[]
     */
    public $reviewFileMap;

    /**
     * @var int
     */
    public $type;
    protected $_name = [
        'address'            => 'Address',
        'businessLicenceUrl' => 'BusinessLicenceUrl',
        'cardNumber'         => 'CardNumber',
        'cnInfoUrl'          => 'CnInfoUrl',
        'contactAddress'     => 'ContactAddress',
        'contactEmail'       => 'ContactEmail',
        'contactName'        => 'ContactName',
        'contactPhoneNumber' => 'ContactPhoneNumber',
        'contactZipCode'     => 'ContactZipCode',
        'country'            => 'Country',
        'EAddress'           => 'EAddress',
        'EName'              => 'EName',
        'idCardNumber'       => 'IdCardNumber',
        'idCardUrl'          => 'IdCardUrl',
        'loaKey'             => 'LoaKey',
        'loaUrl'             => 'LoaUrl',
        'name'               => 'Name',
        'passportUrl'        => 'PassportUrl',
        'personalType'       => 'PersonalType',
        'postCode'           => 'PostCode',
        'province'           => 'Province',
        'reasonFileOssKey'   => 'ReasonFileOssKey',
        'region'             => 'Region',
        'reviewFileMap'      => 'ReviewFileMap',
        'type'               => 'Type',
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
        if (null !== $this->cnInfoUrl) {
            $res['CnInfoUrl'] = $this->cnInfoUrl;
        }
        if (null !== $this->contactAddress) {
            $res['ContactAddress'] = $this->contactAddress;
        }
        if (null !== $this->contactEmail) {
            $res['ContactEmail'] = $this->contactEmail;
        }
        if (null !== $this->contactName) {
            $res['ContactName'] = $this->contactName;
        }
        if (null !== $this->contactPhoneNumber) {
            $res['ContactPhoneNumber'] = $this->contactPhoneNumber;
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
        if (null !== $this->idCardNumber) {
            $res['IdCardNumber'] = $this->idCardNumber;
        }
        if (null !== $this->idCardUrl) {
            $res['IdCardUrl'] = $this->idCardUrl;
        }
        if (null !== $this->loaKey) {
            $res['LoaKey'] = $this->loaKey;
        }
        if (null !== $this->loaUrl) {
            $res['LoaUrl'] = $this->loaUrl;
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
        if (null !== $this->postCode) {
            $res['PostCode'] = $this->postCode;
        }
        if (null !== $this->province) {
            $res['Province'] = $this->province;
        }
        if (null !== $this->reasonFileOssKey) {
            $res['ReasonFileOssKey'] = $this->reasonFileOssKey;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->reviewFileMap) {
            $res['ReviewFileMap'] = $this->reviewFileMap;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return materialInfo
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
        if (isset($map['CnInfoUrl'])) {
            $model->cnInfoUrl = $map['CnInfoUrl'];
        }
        if (isset($map['ContactAddress'])) {
            $model->contactAddress = $map['ContactAddress'];
        }
        if (isset($map['ContactEmail'])) {
            $model->contactEmail = $map['ContactEmail'];
        }
        if (isset($map['ContactName'])) {
            $model->contactName = $map['ContactName'];
        }
        if (isset($map['ContactPhoneNumber'])) {
            $model->contactPhoneNumber = $map['ContactPhoneNumber'];
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
        if (isset($map['IdCardNumber'])) {
            $model->idCardNumber = $map['IdCardNumber'];
        }
        if (isset($map['IdCardUrl'])) {
            $model->idCardUrl = $map['IdCardUrl'];
        }
        if (isset($map['LoaKey'])) {
            $model->loaKey = $map['LoaKey'];
        }
        if (isset($map['LoaUrl'])) {
            $model->loaUrl = $map['LoaUrl'];
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
        if (isset($map['PostCode'])) {
            $model->postCode = $map['PostCode'];
        }
        if (isset($map['Province'])) {
            $model->province = $map['Province'];
        }
        if (isset($map['ReasonFileOssKey'])) {
            $model->reasonFileOssKey = $map['ReasonFileOssKey'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['ReviewFileMap'])) {
            $model->reviewFileMap = $map['ReviewFileMap'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
