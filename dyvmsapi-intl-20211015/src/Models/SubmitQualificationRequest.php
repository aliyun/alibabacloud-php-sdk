<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapiintl\V20211015\Models;

use AlibabaCloud\Tea\Model;

class SubmitQualificationRequest extends Model
{
    /**
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $businessLicenseFileKey;

    /**
     * @var string
     */
    public $companyName;

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
    public $contactPhone;

    /**
     * @var string
     */
    public $countryId;

    /**
     * @var string
     */
    public $legalId;

    /**
     * @var string
     */
    public $legalLicenseFileKey;

    /**
     * @var string
     */
    public $legalName;

    /**
     * @var string
     */
    public $networkAccessFileKey;

    /**
     * @var int
     */
    public $ownerId;

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
    public $unifiedCode;
    protected $_name = [
        'address'                => 'Address',
        'businessLicenseFileKey' => 'BusinessLicenseFileKey',
        'companyName'            => 'CompanyName',
        'contactEmail'           => 'ContactEmail',
        'contactName'            => 'ContactName',
        'contactPhone'           => 'ContactPhone',
        'countryId'              => 'CountryId',
        'legalId'                => 'LegalId',
        'legalLicenseFileKey'    => 'LegalLicenseFileKey',
        'legalName'              => 'LegalName',
        'networkAccessFileKey'   => 'NetworkAccessFileKey',
        'ownerId'                => 'OwnerId',
        'resourceOwnerAccount'   => 'ResourceOwnerAccount',
        'resourceOwnerId'        => 'ResourceOwnerId',
        'unifiedCode'            => 'UnifiedCode',
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
        if (null !== $this->businessLicenseFileKey) {
            $res['BusinessLicenseFileKey'] = $this->businessLicenseFileKey;
        }
        if (null !== $this->companyName) {
            $res['CompanyName'] = $this->companyName;
        }
        if (null !== $this->contactEmail) {
            $res['ContactEmail'] = $this->contactEmail;
        }
        if (null !== $this->contactName) {
            $res['ContactName'] = $this->contactName;
        }
        if (null !== $this->contactPhone) {
            $res['ContactPhone'] = $this->contactPhone;
        }
        if (null !== $this->countryId) {
            $res['CountryId'] = $this->countryId;
        }
        if (null !== $this->legalId) {
            $res['LegalId'] = $this->legalId;
        }
        if (null !== $this->legalLicenseFileKey) {
            $res['LegalLicenseFileKey'] = $this->legalLicenseFileKey;
        }
        if (null !== $this->legalName) {
            $res['LegalName'] = $this->legalName;
        }
        if (null !== $this->networkAccessFileKey) {
            $res['NetworkAccessFileKey'] = $this->networkAccessFileKey;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->unifiedCode) {
            $res['UnifiedCode'] = $this->unifiedCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitQualificationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['BusinessLicenseFileKey'])) {
            $model->businessLicenseFileKey = $map['BusinessLicenseFileKey'];
        }
        if (isset($map['CompanyName'])) {
            $model->companyName = $map['CompanyName'];
        }
        if (isset($map['ContactEmail'])) {
            $model->contactEmail = $map['ContactEmail'];
        }
        if (isset($map['ContactName'])) {
            $model->contactName = $map['ContactName'];
        }
        if (isset($map['ContactPhone'])) {
            $model->contactPhone = $map['ContactPhone'];
        }
        if (isset($map['CountryId'])) {
            $model->countryId = $map['CountryId'];
        }
        if (isset($map['LegalId'])) {
            $model->legalId = $map['LegalId'];
        }
        if (isset($map['LegalLicenseFileKey'])) {
            $model->legalLicenseFileKey = $map['LegalLicenseFileKey'];
        }
        if (isset($map['LegalName'])) {
            $model->legalName = $map['LegalName'];
        }
        if (isset($map['NetworkAccessFileKey'])) {
            $model->networkAccessFileKey = $map['NetworkAccessFileKey'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['UnifiedCode'])) {
            $model->unifiedCode = $map['UnifiedCode'];
        }

        return $model;
    }
}
