<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dytnsapi\V20200217\Models;

use AlibabaCloud\Dara\Model;

class CompanyThreeElementsVerificationRequest extends Model
{
    /**
     * @var string
     */
    public $authCode;

    /**
     * @var string
     */
    public $epCertName;

    /**
     * @var string
     */
    public $epCertNo;

    /**
     * @var string
     */
    public $legalPersonCertName;

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
        'authCode' => 'AuthCode',
        'epCertName' => 'EpCertName',
        'epCertNo' => 'EpCertNo',
        'legalPersonCertName' => 'LegalPersonCertName',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
