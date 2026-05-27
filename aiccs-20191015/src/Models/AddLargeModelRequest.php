<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Dara\Model;

class AddLargeModelRequest extends Model
{
    /**
     * @var string
     */
    public $authCode;

    /**
     * @var string[]
     */
    public $baseModel;

    /**
     * @var string
     */
    public $modelName;

    /**
     * @var string
     */
    public $modelUrl;

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
     * @var float
     */
    public $temperature;

    /**
     * @var int
     */
    public $topK;

    /**
     * @var float
     */
    public $topP;
    protected $_name = [
        'authCode' => 'AuthCode',
        'baseModel' => 'BaseModel',
        'modelName' => 'ModelName',
        'modelUrl' => 'ModelUrl',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'temperature' => 'Temperature',
        'topK' => 'TopK',
        'topP' => 'TopP',
    ];

    public function validate()
    {
        if (\is_array($this->baseModel)) {
            Model::validateArray($this->baseModel);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authCode) {
            $res['AuthCode'] = $this->authCode;
        }

        if (null !== $this->baseModel) {
            if (\is_array($this->baseModel)) {
                $res['BaseModel'] = [];
                $n1 = 0;
                foreach ($this->baseModel as $item1) {
                    $res['BaseModel'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->modelName) {
            $res['ModelName'] = $this->modelName;
        }

        if (null !== $this->modelUrl) {
            $res['ModelUrl'] = $this->modelUrl;
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

        if (null !== $this->temperature) {
            $res['Temperature'] = $this->temperature;
        }

        if (null !== $this->topK) {
            $res['TopK'] = $this->topK;
        }

        if (null !== $this->topP) {
            $res['TopP'] = $this->topP;
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

        if (isset($map['BaseModel'])) {
            if (!empty($map['BaseModel'])) {
                $model->baseModel = [];
                $n1 = 0;
                foreach ($map['BaseModel'] as $item1) {
                    $model->baseModel[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ModelName'])) {
            $model->modelName = $map['ModelName'];
        }

        if (isset($map['ModelUrl'])) {
            $model->modelUrl = $map['ModelUrl'];
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

        if (isset($map['Temperature'])) {
            $model->temperature = $map['Temperature'];
        }

        if (isset($map['TopK'])) {
            $model->topK = $map['TopK'];
        }

        if (isset($map['TopP'])) {
            $model->topP = $map['TopP'];
        }

        return $model;
    }
}
