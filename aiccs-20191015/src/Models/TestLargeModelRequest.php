<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Dara\Model;

class TestLargeModelRequest extends Model
{
    /**
     * @var string[]
     */
    public $baseModel;

    /**
     * @var string
     */
    public $modelCode;

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
    public $userDialogContent;
    protected $_name = [
        'baseModel' => 'BaseModel',
        'modelCode' => 'ModelCode',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'userDialogContent' => 'UserDialogContent',
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

        if (null !== $this->modelCode) {
            $res['ModelCode'] = $this->modelCode;
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

        if (null !== $this->userDialogContent) {
            $res['UserDialogContent'] = $this->userDialogContent;
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

        if (isset($map['ModelCode'])) {
            $model->modelCode = $map['ModelCode'];
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

        if (isset($map['UserDialogContent'])) {
            $model->userDialogContent = $map['UserDialogContent'];
        }

        return $model;
    }
}
