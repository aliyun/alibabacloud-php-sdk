<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Dara\Model;

class LlmSmartCallEncryptRequest extends Model
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
     * @var mixed[]
     */
    public $promptParam;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var mixed[]
     */
    public $startWordParam;
    protected $_name = [
        'applicationCode' => 'ApplicationCode',
        'callerNumber' => 'CallerNumber',
        'encryptCalledNumber' => 'EncryptCalledNumber',
        'outId' => 'OutId',
        'ownerId' => 'OwnerId',
        'promptParam' => 'PromptParam',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'startWordParam' => 'StartWordParam',
    ];

    public function validate()
    {
        if (\is_array($this->promptParam)) {
            Model::validateArray($this->promptParam);
        }
        if (\is_array($this->startWordParam)) {
            Model::validateArray($this->startWordParam);
        }
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

        if (null !== $this->promptParam) {
            if (\is_array($this->promptParam)) {
                $res['PromptParam'] = [];
                foreach ($this->promptParam as $key1 => $value1) {
                    $res['PromptParam'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->startWordParam) {
            if (\is_array($this->startWordParam)) {
                $res['StartWordParam'] = [];
                foreach ($this->startWordParam as $key1 => $value1) {
                    $res['StartWordParam'][$key1] = $value1;
                }
            }
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
            if (!empty($map['PromptParam'])) {
                $model->promptParam = [];
                foreach ($map['PromptParam'] as $key1 => $value1) {
                    $model->promptParam[$key1] = $value1;
                }
            }
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['StartWordParam'])) {
            if (!empty($map['StartWordParam'])) {
                $model->startWordParam = [];
                foreach ($map['StartWordParam'] as $key1 => $value1) {
                    $model->startWordParam[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
