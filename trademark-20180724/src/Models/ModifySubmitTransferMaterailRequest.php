<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models;

use AlibabaCloud\Tea\Model;

class ModifySubmitTransferMaterailRequest extends Model
{
    /**
     * @var string
     */
    public $addr;

    /**
     * @var string
     */
    public $assigneeProxy;

    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $buyerBusinessLicense;

    /**
     * @var string
     */
    public $buyerBusinessLicenseTranslation;

    /**
     * @var string
     */
    public $buyerIdCard;

    /**
     * @var string
     */
    public $cardNo;

    /**
     * @var string
     */
    public $cardType;

    /**
     * @var bool
     */
    public $complete;

    /**
     * @var string
     */
    public $contactEmail;

    /**
     * @var string
     */
    public $contactMobile;

    /**
     * @var string
     */
    public $contactName;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $notarization;

    /**
     * @var string
     */
    public $note;

    /**
     * @var mixed[]
     */
    public $other;

    /**
     * @var string
     */
    public $registrationCert;

    /**
     * @var string
     */
    public $sellerApply;

    /**
     * @var string
     */
    public $sellerBusinessLicense;

    /**
     * @var string
     */
    public $sellerBusinessLicenseTranslation;

    /**
     * @var string
     */
    public $sellerIdCard;

    /**
     * @var string
     */
    public $sellerProxy;

    /**
     * @var bool
     */
    public $tradeMaterialFullUpdate;
    protected $_name = [
        'addr'                             => 'Addr',
        'assigneeProxy'                    => 'AssigneeProxy',
        'bizId'                            => 'BizId',
        'buyerBusinessLicense'             => 'BuyerBusinessLicense',
        'buyerBusinessLicenseTranslation'  => 'BuyerBusinessLicenseTranslation',
        'buyerIdCard'                      => 'BuyerIdCard',
        'cardNo'                           => 'CardNo',
        'cardType'                         => 'CardType',
        'complete'                         => 'Complete',
        'contactEmail'                     => 'ContactEmail',
        'contactMobile'                    => 'ContactMobile',
        'contactName'                      => 'ContactName',
        'name'                             => 'Name',
        'notarization'                     => 'Notarization',
        'note'                             => 'Note',
        'other'                            => 'Other',
        'registrationCert'                 => 'RegistrationCert',
        'sellerApply'                      => 'SellerApply',
        'sellerBusinessLicense'            => 'SellerBusinessLicense',
        'sellerBusinessLicenseTranslation' => 'SellerBusinessLicenseTranslation',
        'sellerIdCard'                     => 'SellerIdCard',
        'sellerProxy'                      => 'SellerProxy',
        'tradeMaterialFullUpdate'          => 'TradeMaterialFullUpdate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addr) {
            $res['Addr'] = $this->addr;
        }
        if (null !== $this->assigneeProxy) {
            $res['AssigneeProxy'] = $this->assigneeProxy;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->buyerBusinessLicense) {
            $res['BuyerBusinessLicense'] = $this->buyerBusinessLicense;
        }
        if (null !== $this->buyerBusinessLicenseTranslation) {
            $res['BuyerBusinessLicenseTranslation'] = $this->buyerBusinessLicenseTranslation;
        }
        if (null !== $this->buyerIdCard) {
            $res['BuyerIdCard'] = $this->buyerIdCard;
        }
        if (null !== $this->cardNo) {
            $res['CardNo'] = $this->cardNo;
        }
        if (null !== $this->cardType) {
            $res['CardType'] = $this->cardType;
        }
        if (null !== $this->complete) {
            $res['Complete'] = $this->complete;
        }
        if (null !== $this->contactEmail) {
            $res['ContactEmail'] = $this->contactEmail;
        }
        if (null !== $this->contactMobile) {
            $res['ContactMobile'] = $this->contactMobile;
        }
        if (null !== $this->contactName) {
            $res['ContactName'] = $this->contactName;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->notarization) {
            $res['Notarization'] = $this->notarization;
        }
        if (null !== $this->note) {
            $res['Note'] = $this->note;
        }
        if (null !== $this->other) {
            $res['Other'] = $this->other;
        }
        if (null !== $this->registrationCert) {
            $res['RegistrationCert'] = $this->registrationCert;
        }
        if (null !== $this->sellerApply) {
            $res['SellerApply'] = $this->sellerApply;
        }
        if (null !== $this->sellerBusinessLicense) {
            $res['SellerBusinessLicense'] = $this->sellerBusinessLicense;
        }
        if (null !== $this->sellerBusinessLicenseTranslation) {
            $res['SellerBusinessLicenseTranslation'] = $this->sellerBusinessLicenseTranslation;
        }
        if (null !== $this->sellerIdCard) {
            $res['SellerIdCard'] = $this->sellerIdCard;
        }
        if (null !== $this->sellerProxy) {
            $res['SellerProxy'] = $this->sellerProxy;
        }
        if (null !== $this->tradeMaterialFullUpdate) {
            $res['TradeMaterialFullUpdate'] = $this->tradeMaterialFullUpdate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifySubmitTransferMaterailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Addr'])) {
            $model->addr = $map['Addr'];
        }
        if (isset($map['AssigneeProxy'])) {
            $model->assigneeProxy = $map['AssigneeProxy'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['BuyerBusinessLicense'])) {
            $model->buyerBusinessLicense = $map['BuyerBusinessLicense'];
        }
        if (isset($map['BuyerBusinessLicenseTranslation'])) {
            $model->buyerBusinessLicenseTranslation = $map['BuyerBusinessLicenseTranslation'];
        }
        if (isset($map['BuyerIdCard'])) {
            $model->buyerIdCard = $map['BuyerIdCard'];
        }
        if (isset($map['CardNo'])) {
            $model->cardNo = $map['CardNo'];
        }
        if (isset($map['CardType'])) {
            $model->cardType = $map['CardType'];
        }
        if (isset($map['Complete'])) {
            $model->complete = $map['Complete'];
        }
        if (isset($map['ContactEmail'])) {
            $model->contactEmail = $map['ContactEmail'];
        }
        if (isset($map['ContactMobile'])) {
            $model->contactMobile = $map['ContactMobile'];
        }
        if (isset($map['ContactName'])) {
            $model->contactName = $map['ContactName'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Notarization'])) {
            $model->notarization = $map['Notarization'];
        }
        if (isset($map['Note'])) {
            $model->note = $map['Note'];
        }
        if (isset($map['Other'])) {
            $model->other = $map['Other'];
        }
        if (isset($map['RegistrationCert'])) {
            $model->registrationCert = $map['RegistrationCert'];
        }
        if (isset($map['SellerApply'])) {
            $model->sellerApply = $map['SellerApply'];
        }
        if (isset($map['SellerBusinessLicense'])) {
            $model->sellerBusinessLicense = $map['SellerBusinessLicense'];
        }
        if (isset($map['SellerBusinessLicenseTranslation'])) {
            $model->sellerBusinessLicenseTranslation = $map['SellerBusinessLicenseTranslation'];
        }
        if (isset($map['SellerIdCard'])) {
            $model->sellerIdCard = $map['SellerIdCard'];
        }
        if (isset($map['SellerProxy'])) {
            $model->sellerProxy = $map['SellerProxy'];
        }
        if (isset($map['TradeMaterialFullUpdate'])) {
            $model->tradeMaterialFullUpdate = $map['TradeMaterialFullUpdate'];
        }

        return $model;
    }
}
