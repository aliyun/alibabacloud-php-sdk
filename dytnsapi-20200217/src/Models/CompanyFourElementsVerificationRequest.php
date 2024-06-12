<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dytnsapi\V20200217\Models;

use AlibabaCloud\Tea\Model;

class CompanyFourElementsVerificationRequest extends Model
{
    /**
     * @description The authorization code.
     *
     * This parameter is required.
     * @example Dd1r***4id
     *
     * @var string
     */
    public $authCode;

    /**
     * @description The enterprise name.
     *
     * @example 示例值示例值
     *
     * @var string
     */
    public $epCertName;

    /**
     * @description The business license number.
     *
     * This parameter is required.
     * @example 9242032*******J627
     *
     * @var string
     */
    public $epCertNo;

    /**
     * @description The name of the legal representative.
     *
     * This parameter is required.
     * @example 示例值
     *
     * @var string
     */
    public $legalPersonCertName;

    /**
     * @description The ID card number of the legal representative.
     *
     * This parameter is required.
     * @example 331021********0011
     *
     * @var string
     */
    public $legalPersonCertNo;

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
    protected $_name = [
        'authCode'             => 'AuthCode',
        'epCertName'           => 'EpCertName',
        'epCertNo'             => 'EpCertNo',
        'legalPersonCertName'  => 'LegalPersonCertName',
        'legalPersonCertNo'    => 'LegalPersonCertNo',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authCode) {
            $res['AuthCode'] = $this->authCode;
        }
        if (null !== $this->epCertName) {
            $res['EpCertName'] = $this->epCertName;
        }
        if (null !== $this->epCertNo) {
            $res['EpCertNo'] = $this->epCertNo;
        }
        if (null !== $this->legalPersonCertName) {
            $res['LegalPersonCertName'] = $this->legalPersonCertName;
        }
        if (null !== $this->legalPersonCertNo) {
            $res['LegalPersonCertNo'] = $this->legalPersonCertNo;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CompanyFourElementsVerificationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthCode'])) {
            $model->authCode = $map['AuthCode'];
        }
        if (isset($map['EpCertName'])) {
            $model->epCertName = $map['EpCertName'];
        }
        if (isset($map['EpCertNo'])) {
            $model->epCertNo = $map['EpCertNo'];
        }
        if (isset($map['LegalPersonCertName'])) {
            $model->legalPersonCertName = $map['LegalPersonCertName'];
        }
        if (isset($map['LegalPersonCertNo'])) {
            $model->legalPersonCertNo = $map['LegalPersonCertNo'];
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

        return $model;
    }
}
