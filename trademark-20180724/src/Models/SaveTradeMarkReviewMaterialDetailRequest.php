<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models;

use AlibabaCloud\Tea\Model;

class SaveTradeMarkReviewMaterialDetailRequest extends Model
{
    /**
     * @var string
     */
    public $bizId;

    /**
     * @var int
     */
    public $type;

    /**
     * @var int
     */
    public $region;

    /**
     * @var string
     */
    public $country;

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
     * @var string
     */
    public $contactAddress;

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
    public $cardNumber;

    /**
     * @var string
     */
    public $province;

    /**
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $engName;

    /**
     * @var string
     */
    public $engAddress;

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
    public $legalNoticeOssKey;

    /**
     * @var string
     */
    public $applicationOssKey;

    /**
     * @var mixed[]
     */
    public $additionalOssKeyList;

    /**
     * @var int
     */
    public $submitType;
    protected $_name = [
        'bizId'                 => 'BizId',
        'type'                  => 'Type',
        'region'                => 'Region',
        'country'               => 'Country',
        'contactName'           => 'ContactName',
        'contactNumber'         => 'ContactNumber',
        'contactEmail'          => 'ContactEmail',
        'contactAddress'        => 'ContactAddress',
        'loaOssKey'             => 'LoaOssKey',
        'name'                  => 'Name',
        'cardNumber'            => 'CardNumber',
        'province'              => 'Province',
        'address'               => 'Address',
        'engName'               => 'EngName',
        'engAddress'            => 'EngAddress',
        'idCardOssKey'          => 'IdCardOssKey',
        'businessLicenceOssKey' => 'BusinessLicenceOssKey',
        'passportOssKey'        => 'PassportOssKey',
        'legalNoticeOssKey'     => 'LegalNoticeOssKey',
        'applicationOssKey'     => 'ApplicationOssKey',
        'additionalOssKeyList'  => 'AdditionalOssKeyList',
        'submitType'            => 'SubmitType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->country) {
            $res['Country'] = $this->country;
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
        if (null !== $this->contactAddress) {
            $res['ContactAddress'] = $this->contactAddress;
        }
        if (null !== $this->loaOssKey) {
            $res['LoaOssKey'] = $this->loaOssKey;
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
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }
        if (null !== $this->engName) {
            $res['EngName'] = $this->engName;
        }
        if (null !== $this->engAddress) {
            $res['EngAddress'] = $this->engAddress;
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
        if (null !== $this->legalNoticeOssKey) {
            $res['LegalNoticeOssKey'] = $this->legalNoticeOssKey;
        }
        if (null !== $this->applicationOssKey) {
            $res['ApplicationOssKey'] = $this->applicationOssKey;
        }
        if (null !== $this->additionalOssKeyList) {
            $res['AdditionalOssKeyList'] = $this->additionalOssKeyList;
        }
        if (null !== $this->submitType) {
            $res['SubmitType'] = $this->submitType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SaveTradeMarkReviewMaterialDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Country'])) {
            $model->country = $map['Country'];
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
        if (isset($map['ContactAddress'])) {
            $model->contactAddress = $map['ContactAddress'];
        }
        if (isset($map['LoaOssKey'])) {
            $model->loaOssKey = $map['LoaOssKey'];
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
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['EngName'])) {
            $model->engName = $map['EngName'];
        }
        if (isset($map['EngAddress'])) {
            $model->engAddress = $map['EngAddress'];
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
        if (isset($map['LegalNoticeOssKey'])) {
            $model->legalNoticeOssKey = $map['LegalNoticeOssKey'];
        }
        if (isset($map['ApplicationOssKey'])) {
            $model->applicationOssKey = $map['ApplicationOssKey'];
        }
        if (isset($map['AdditionalOssKeyList'])) {
            $model->additionalOssKeyList = $map['AdditionalOssKeyList'];
        }
        if (isset($map['SubmitType'])) {
            $model->submitType = $map['SubmitType'];
        }

        return $model;
    }
}
