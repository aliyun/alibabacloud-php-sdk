<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypns\V20170620\Models;

use AlibabaCloud\Dara\Model;

class CreateSmsSignRequest extends Model
{
    /**
     * @var string
     */
    public $appUrl;

    /**
     * @var string
     */
    public $businessLicenseCert;

    /**
     * @var string
     */
    public $certType;

    /**
     * @var string
     */
    public $extendMessage;

    /**
     * @var string
     */
    public $oldSmsSignName;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var string
     */
    public $organizationCodeCert;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $prodCode;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $smsSignName;

    /**
     * @var string
     */
    public $smsSignRemark;

    /**
     * @var string
     */
    public $smsSignSource;

    /**
     * @var string
     */
    public $taxRegistrationCert;
    protected $_name = [
        'appUrl' => 'AppUrl',
        'businessLicenseCert' => 'BusinessLicenseCert',
        'certType' => 'CertType',
        'extendMessage' => 'ExtendMessage',
        'oldSmsSignName' => 'OldSmsSignName',
        'orderId' => 'OrderId',
        'organizationCodeCert' => 'OrganizationCodeCert',
        'ownerId' => 'OwnerId',
        'prodCode' => 'ProdCode',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'smsSignName' => 'SmsSignName',
        'smsSignRemark' => 'SmsSignRemark',
        'smsSignSource' => 'SmsSignSource',
        'taxRegistrationCert' => 'TaxRegistrationCert',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appUrl) {
            $res['AppUrl'] = $this->appUrl;
        }

        if (null !== $this->businessLicenseCert) {
            $res['BusinessLicenseCert'] = $this->businessLicenseCert;
        }

        if (null !== $this->certType) {
            $res['CertType'] = $this->certType;
        }

        if (null !== $this->extendMessage) {
            $res['ExtendMessage'] = $this->extendMessage;
        }

        if (null !== $this->oldSmsSignName) {
            $res['OldSmsSignName'] = $this->oldSmsSignName;
        }

        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }

        if (null !== $this->organizationCodeCert) {
            $res['OrganizationCodeCert'] = $this->organizationCodeCert;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->prodCode) {
            $res['ProdCode'] = $this->prodCode;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->smsSignName) {
            $res['SmsSignName'] = $this->smsSignName;
        }

        if (null !== $this->smsSignRemark) {
            $res['SmsSignRemark'] = $this->smsSignRemark;
        }

        if (null !== $this->smsSignSource) {
            $res['SmsSignSource'] = $this->smsSignSource;
        }

        if (null !== $this->taxRegistrationCert) {
            $res['TaxRegistrationCert'] = $this->taxRegistrationCert;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppUrl'])) {
            $model->appUrl = $map['AppUrl'];
        }

        if (isset($map['BusinessLicenseCert'])) {
            $model->businessLicenseCert = $map['BusinessLicenseCert'];
        }

        if (isset($map['CertType'])) {
            $model->certType = $map['CertType'];
        }

        if (isset($map['ExtendMessage'])) {
            $model->extendMessage = $map['ExtendMessage'];
        }

        if (isset($map['OldSmsSignName'])) {
            $model->oldSmsSignName = $map['OldSmsSignName'];
        }

        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }

        if (isset($map['OrganizationCodeCert'])) {
            $model->organizationCodeCert = $map['OrganizationCodeCert'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['ProdCode'])) {
            $model->prodCode = $map['ProdCode'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['SmsSignName'])) {
            $model->smsSignName = $map['SmsSignName'];
        }

        if (isset($map['SmsSignRemark'])) {
            $model->smsSignRemark = $map['SmsSignRemark'];
        }

        if (isset($map['SmsSignSource'])) {
            $model->smsSignSource = $map['SmsSignSource'];
        }

        if (isset($map['TaxRegistrationCert'])) {
            $model->taxRegistrationCert = $map['TaxRegistrationCert'];
        }

        return $model;
    }
}
