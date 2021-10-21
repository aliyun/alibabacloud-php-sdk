<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models;

use AlibabaCloud\Tea\Model;

class UpdateMaterialRequest extends Model
{
    /**
     * @var int
     */
    public $loaId;

    /**
     * @var string
     */
    public $contactAddress;

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
    public $contactEmail;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $contactZipcode;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $cardNumber;

    /**
     * @var string
     */
    public $province;

    /**
     * @var string
     */
    public $city;

    /**
     * @var string
     */
    public $town;

    /**
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $EName;

    /**
     * @var string
     */
    public $EAddress;

    /**
     * @var string
     */
    public $idCardOssKey;

    /**
     * @var string
     */
    public $businessLicenceOssKey;

    /**
     * @var string
     */
    public $passportOssKey;

    /**
     * @var string
     */
    public $loaOssKey;

    /**
     * @var string
     */
    public $legalNoticeOssKey;

    /**
     * @var string
     */
    public $contactProvince;

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
    public $contactCounty;
    protected $_name = [
        'loaId'                 => 'LoaId',
        'contactAddress'        => 'ContactAddress',
        'contactName'           => 'ContactName',
        'contactNumber'         => 'ContactNumber',
        'contactEmail'          => 'ContactEmail',
        'id'                    => 'Id',
        'contactZipcode'        => 'ContactZipcode',
        'name'                  => 'Name',
        'cardNumber'            => 'CardNumber',
        'province'              => 'Province',
        'city'                  => 'City',
        'town'                  => 'Town',
        'address'               => 'Address',
        'EName'                 => 'EName',
        'EAddress'              => 'EAddress',
        'idCardOssKey'          => 'IdCardOssKey',
        'businessLicenceOssKey' => 'BusinessLicenceOssKey',
        'passportOssKey'        => 'PassportOssKey',
        'loaOssKey'             => 'LoaOssKey',
        'legalNoticeOssKey'     => 'LegalNoticeOssKey',
        'contactProvince'       => 'ContactProvince',
        'contactCity'           => 'ContactCity',
        'contactDistrict'       => 'ContactDistrict',
        'contactCounty'         => 'ContactCounty',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->loaId) {
            $res['LoaId'] = $this->loaId;
        }
        if (null !== $this->contactAddress) {
            $res['ContactAddress'] = $this->contactAddress;
        }
        if (null !== $this->contactName) {
            $res['ContactName'] = $this->contactName;
        }
        if (null !== $this->contactNumber) {
            $res['ContactNumber'] = $this->contactNumber;
        }
        if (null !== $this->contactEmail) {
            $res['ContactEmail'] = $this->contactEmail;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->contactZipcode) {
            $res['ContactZipcode'] = $this->contactZipcode;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->cardNumber) {
            $res['CardNumber'] = $this->cardNumber;
        }
        if (null !== $this->province) {
            $res['Province'] = $this->province;
        }
        if (null !== $this->city) {
            $res['City'] = $this->city;
        }
        if (null !== $this->town) {
            $res['Town'] = $this->town;
        }
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }
        if (null !== $this->EName) {
            $res['EName'] = $this->EName;
        }
        if (null !== $this->EAddress) {
            $res['EAddress'] = $this->EAddress;
        }
        if (null !== $this->idCardOssKey) {
            $res['IdCardOssKey'] = $this->idCardOssKey;
        }
        if (null !== $this->businessLicenceOssKey) {
            $res['BusinessLicenceOssKey'] = $this->businessLicenceOssKey;
        }
        if (null !== $this->passportOssKey) {
            $res['PassportOssKey'] = $this->passportOssKey;
        }
        if (null !== $this->loaOssKey) {
            $res['LoaOssKey'] = $this->loaOssKey;
        }
        if (null !== $this->legalNoticeOssKey) {
            $res['LegalNoticeOssKey'] = $this->legalNoticeOssKey;
        }
        if (null !== $this->contactProvince) {
            $res['ContactProvince'] = $this->contactProvince;
        }
        if (null !== $this->contactCity) {
            $res['ContactCity'] = $this->contactCity;
        }
        if (null !== $this->contactDistrict) {
            $res['ContactDistrict'] = $this->contactDistrict;
        }
        if (null !== $this->contactCounty) {
            $res['ContactCounty'] = $this->contactCounty;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateMaterialRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LoaId'])) {
            $model->loaId = $map['LoaId'];
        }
        if (isset($map['ContactAddress'])) {
            $model->contactAddress = $map['ContactAddress'];
        }
        if (isset($map['ContactName'])) {
            $model->contactName = $map['ContactName'];
        }
        if (isset($map['ContactNumber'])) {
            $model->contactNumber = $map['ContactNumber'];
        }
        if (isset($map['ContactEmail'])) {
            $model->contactEmail = $map['ContactEmail'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ContactZipcode'])) {
            $model->contactZipcode = $map['ContactZipcode'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['CardNumber'])) {
            $model->cardNumber = $map['CardNumber'];
        }
        if (isset($map['Province'])) {
            $model->province = $map['Province'];
        }
        if (isset($map['City'])) {
            $model->city = $map['City'];
        }
        if (isset($map['Town'])) {
            $model->town = $map['Town'];
        }
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['EName'])) {
            $model->EName = $map['EName'];
        }
        if (isset($map['EAddress'])) {
            $model->EAddress = $map['EAddress'];
        }
        if (isset($map['IdCardOssKey'])) {
            $model->idCardOssKey = $map['IdCardOssKey'];
        }
        if (isset($map['BusinessLicenceOssKey'])) {
            $model->businessLicenceOssKey = $map['BusinessLicenceOssKey'];
        }
        if (isset($map['PassportOssKey'])) {
            $model->passportOssKey = $map['PassportOssKey'];
        }
        if (isset($map['LoaOssKey'])) {
            $model->loaOssKey = $map['LoaOssKey'];
        }
        if (isset($map['LegalNoticeOssKey'])) {
            $model->legalNoticeOssKey = $map['LegalNoticeOssKey'];
        }
        if (isset($map['ContactProvince'])) {
            $model->contactProvince = $map['ContactProvince'];
        }
        if (isset($map['ContactCity'])) {
            $model->contactCity = $map['ContactCity'];
        }
        if (isset($map['ContactDistrict'])) {
            $model->contactDistrict = $map['ContactDistrict'];
        }
        if (isset($map['ContactCounty'])) {
            $model->contactCounty = $map['ContactCounty'];
        }

        return $model;
    }
}
