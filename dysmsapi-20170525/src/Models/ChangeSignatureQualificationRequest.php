<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20170525\Models;

use AlibabaCloud\Dara\Model;

class ChangeSignatureQualificationRequest extends Model
{
    /**
     * @var int
     */
    public $authorizationLetterId;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var int
     */
    public $qualificationId;

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
    public $signatureName;
    protected $_name = [
        'authorizationLetterId' => 'AuthorizationLetterId',
        'ownerId' => 'OwnerId',
        'qualificationId' => 'QualificationId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'signatureName' => 'SignatureName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authorizationLetterId) {
            $res['AuthorizationLetterId'] = $this->authorizationLetterId;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->qualificationId) {
            $res['QualificationId'] = $this->qualificationId;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->signatureName) {
            $res['SignatureName'] = $this->signatureName;
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
        if (isset($map['AuthorizationLetterId'])) {
            $model->authorizationLetterId = $map['AuthorizationLetterId'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['QualificationId'])) {
            $model->qualificationId = $map['QualificationId'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['SignatureName'])) {
            $model->signatureName = $map['SignatureName'];
        }

        return $model;
    }
}
