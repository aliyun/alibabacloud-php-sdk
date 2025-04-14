<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models;

use AlibabaCloud\Dara\Model;

class CreatePhoneNoAReportRequest extends Model
{
    /**
     * @var int
     */
    public $ANoWhiteGroupId;

    /**
     * @var string
     */
    public $custName;

    /**
     * @var string
     */
    public $documentNumber;

    /**
     * @var int
     */
    public $documentType;

    /**
     * @var string
     */
    public $idCardAlivePhoto;

    /**
     * @var string
     */
    public $idCardBackPhoto;

    /**
     * @var string
     */
    public $idCardFrontPhoto;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $phoneNoA;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'ANoWhiteGroupId' => 'ANoWhiteGroupId',
        'custName' => 'CustName',
        'documentNumber' => 'DocumentNumber',
        'documentType' => 'DocumentType',
        'idCardAlivePhoto' => 'IdCardAlivePhoto',
        'idCardBackPhoto' => 'IdCardBackPhoto',
        'idCardFrontPhoto' => 'IdCardFrontPhoto',
        'ownerId' => 'OwnerId',
        'phoneNoA' => 'PhoneNoA',
        'remark' => 'Remark',
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
        if (null !== $this->ANoWhiteGroupId) {
            $res['ANoWhiteGroupId'] = $this->ANoWhiteGroupId;
        }

        if (null !== $this->custName) {
            $res['CustName'] = $this->custName;
        }

        if (null !== $this->documentNumber) {
            $res['DocumentNumber'] = $this->documentNumber;
        }

        if (null !== $this->documentType) {
            $res['DocumentType'] = $this->documentType;
        }

        if (null !== $this->idCardAlivePhoto) {
            $res['IdCardAlivePhoto'] = $this->idCardAlivePhoto;
        }

        if (null !== $this->idCardBackPhoto) {
            $res['IdCardBackPhoto'] = $this->idCardBackPhoto;
        }

        if (null !== $this->idCardFrontPhoto) {
            $res['IdCardFrontPhoto'] = $this->idCardFrontPhoto;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->phoneNoA) {
            $res['PhoneNoA'] = $this->phoneNoA;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
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
        if (isset($map['ANoWhiteGroupId'])) {
            $model->ANoWhiteGroupId = $map['ANoWhiteGroupId'];
        }

        if (isset($map['CustName'])) {
            $model->custName = $map['CustName'];
        }

        if (isset($map['DocumentNumber'])) {
            $model->documentNumber = $map['DocumentNumber'];
        }

        if (isset($map['DocumentType'])) {
            $model->documentType = $map['DocumentType'];
        }

        if (isset($map['IdCardAlivePhoto'])) {
            $model->idCardAlivePhoto = $map['IdCardAlivePhoto'];
        }

        if (isset($map['IdCardBackPhoto'])) {
            $model->idCardBackPhoto = $map['IdCardBackPhoto'];
        }

        if (isset($map['IdCardFrontPhoto'])) {
            $model->idCardFrontPhoto = $map['IdCardFrontPhoto'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['PhoneNoA'])) {
            $model->phoneNoA = $map['PhoneNoA'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
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
