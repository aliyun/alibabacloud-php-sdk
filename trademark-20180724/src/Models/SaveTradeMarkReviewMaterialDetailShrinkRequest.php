<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models;

use AlibabaCloud\Tea\Model;

class SaveTradeMarkReviewMaterialDetailShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $additionalOssKeyListShrink;

    /**
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $applicationOssKey;

    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $businessLicenceOssKey;

    /**
     * @var string
     */
    public $cardNumber;

    /**
     * @var bool
     */
    public $changeName;

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
    public $contactNumber;

    /**
     * @var string
     */
    public $country;

    /**
     * @var string
     */
    public $engAddress;

    /**
     * @var string
     */
    public $engName;

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
     * @var string
     */
    public $province;

    /**
     * @var int
     */
    public $region;

    /**
     * @var string
     */
    public $reviewMaterialAdditionalJson;

    /**
     * @var bool
     */
    public $separate;

    /**
     * @var bool
     */
    public $submitOnline;

    /**
     * @var int
     */
    public $submitType;

    /**
     * @var bool
     */
    public $supplementFlag;

    /**
     * @var int
     */
    public $type;
    protected $_name = [
        'additionalOssKeyListShrink'   => 'AdditionalOssKeyList',
        'address'                      => 'Address',
        'applicationOssKey'            => 'ApplicationOssKey',
        'bizId'                        => 'BizId',
        'businessLicenceOssKey'        => 'BusinessLicenceOssKey',
        'cardNumber'                   => 'CardNumber',
        'changeName'                   => 'ChangeName',
        'contactAddress'               => 'ContactAddress',
        'contactEmail'                 => 'ContactEmail',
        'contactName'                  => 'ContactName',
        'contactNumber'                => 'ContactNumber',
        'country'                      => 'Country',
        'engAddress'                   => 'EngAddress',
        'engName'                      => 'EngName',
        'idCardOssKey'                 => 'IdCardOssKey',
        'legalNoticeOssKey'            => 'LegalNoticeOssKey',
        'loaOssKey'                    => 'LoaOssKey',
        'name'                         => 'Name',
        'passportOssKey'               => 'PassportOssKey',
        'province'                     => 'Province',
        'region'                       => 'Region',
        'reviewMaterialAdditionalJson' => 'ReviewMaterialAdditionalJson',
        'separate'                     => 'Separate',
        'submitOnline'                 => 'SubmitOnline',
        'submitType'                   => 'SubmitType',
        'supplementFlag'               => 'SupplementFlag',
        'type'                         => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->additionalOssKeyListShrink) {
            $res['AdditionalOssKeyList'] = $this->additionalOssKeyListShrink;
        }
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }
        if (null !== $this->applicationOssKey) {
            $res['ApplicationOssKey'] = $this->applicationOssKey;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->businessLicenceOssKey) {
            $res['BusinessLicenceOssKey'] = $this->businessLicenceOssKey;
        }
        if (null !== $this->cardNumber) {
            $res['CardNumber'] = $this->cardNumber;
        }
        if (null !== $this->changeName) {
            $res['ChangeName'] = $this->changeName;
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
        if (null !== $this->contactNumber) {
            $res['ContactNumber'] = $this->contactNumber;
        }
        if (null !== $this->country) {
            $res['Country'] = $this->country;
        }
        if (null !== $this->engAddress) {
            $res['EngAddress'] = $this->engAddress;
        }
        if (null !== $this->engName) {
            $res['EngName'] = $this->engName;
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
        if (null !== $this->province) {
            $res['Province'] = $this->province;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->reviewMaterialAdditionalJson) {
            $res['ReviewMaterialAdditionalJson'] = $this->reviewMaterialAdditionalJson;
        }
        if (null !== $this->separate) {
            $res['Separate'] = $this->separate;
        }
        if (null !== $this->submitOnline) {
            $res['SubmitOnline'] = $this->submitOnline;
        }
        if (null !== $this->submitType) {
            $res['SubmitType'] = $this->submitType;
        }
        if (null !== $this->supplementFlag) {
            $res['SupplementFlag'] = $this->supplementFlag;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SaveTradeMarkReviewMaterialDetailShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdditionalOssKeyList'])) {
            $model->additionalOssKeyListShrink = $map['AdditionalOssKeyList'];
        }
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['ApplicationOssKey'])) {
            $model->applicationOssKey = $map['ApplicationOssKey'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['BusinessLicenceOssKey'])) {
            $model->businessLicenceOssKey = $map['BusinessLicenceOssKey'];
        }
        if (isset($map['CardNumber'])) {
            $model->cardNumber = $map['CardNumber'];
        }
        if (isset($map['ChangeName'])) {
            $model->changeName = $map['ChangeName'];
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
        if (isset($map['ContactNumber'])) {
            $model->contactNumber = $map['ContactNumber'];
        }
        if (isset($map['Country'])) {
            $model->country = $map['Country'];
        }
        if (isset($map['EngAddress'])) {
            $model->engAddress = $map['EngAddress'];
        }
        if (isset($map['EngName'])) {
            $model->engName = $map['EngName'];
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
        if (isset($map['Province'])) {
            $model->province = $map['Province'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['ReviewMaterialAdditionalJson'])) {
            $model->reviewMaterialAdditionalJson = $map['ReviewMaterialAdditionalJson'];
        }
        if (isset($map['Separate'])) {
            $model->separate = $map['Separate'];
        }
        if (isset($map['SubmitOnline'])) {
            $model->submitOnline = $map['SubmitOnline'];
        }
        if (isset($map['SubmitType'])) {
            $model->submitType = $map['SubmitType'];
        }
        if (isset($map['SupplementFlag'])) {
            $model->supplementFlag = $map['SupplementFlag'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
