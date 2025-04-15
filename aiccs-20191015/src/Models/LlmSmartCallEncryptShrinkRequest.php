<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Dara\Model;

class LlmSmartCallEncryptShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $applicationCode;

    /**
     * @var string
     */
    public $callerNumber;

    /**
     * @var string
     */
    public $encryptCalledNumber;

    /**
     * @var string
     */
    public $outId;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $promptParamShrink;

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
    public $startWordParamShrink;
    protected $_name = [
        'applicationCode' => 'ApplicationCode',
        'callerNumber' => 'CallerNumber',
        'encryptCalledNumber' => 'EncryptCalledNumber',
        'outId' => 'OutId',
        'ownerId' => 'OwnerId',
        'promptParamShrink' => 'PromptParam',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'startWordParamShrink' => 'StartWordParam',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationCode) {
            $res['ApplicationCode'] = $this->applicationCode;
        }

        if (null !== $this->callerNumber) {
            $res['CallerNumber'] = $this->callerNumber;
        }

        if (null !== $this->encryptCalledNumber) {
            $res['EncryptCalledNumber'] = $this->encryptCalledNumber;
        }

        if (null !== $this->outId) {
            $res['OutId'] = $this->outId;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->promptParamShrink) {
            $res['PromptParam'] = $this->promptParamShrink;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->startWordParamShrink) {
            $res['StartWordParam'] = $this->startWordParamShrink;
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
        if (isset($map['ApplicationCode'])) {
            $model->applicationCode = $map['ApplicationCode'];
        }

        if (isset($map['CallerNumber'])) {
            $model->callerNumber = $map['CallerNumber'];
        }

        if (isset($map['EncryptCalledNumber'])) {
            $model->encryptCalledNumber = $map['EncryptCalledNumber'];
        }

        if (isset($map['OutId'])) {
            $model->outId = $map['OutId'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['PromptParam'])) {
            $model->promptParamShrink = $map['PromptParam'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['StartWordParam'])) {
            $model->startWordParamShrink = $map['StartWordParam'];
        }

        return $model;
    }
}
