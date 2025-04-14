<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models;

use AlibabaCloud\Dara\Model;

class BindXBRequest extends Model
{
    /**
     * @var int
     */
    public $callerParentId;

    /**
     * @var string
     */
    public $customerPoolKey;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $reqId;

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
    public $telB;

    /**
     * @var string
     */
    public $telX;

    /**
     * @var string
     */
    public $userData;
    protected $_name = [
        'callerParentId' => 'CallerParentId',
        'customerPoolKey' => 'CustomerPoolKey',
        'ownerId' => 'OwnerId',
        'reqId' => 'ReqId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'telB' => 'TelB',
        'telX' => 'TelX',
        'userData' => 'UserData',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callerParentId) {
            $res['CallerParentId'] = $this->callerParentId;
        }

        if (null !== $this->customerPoolKey) {
            $res['CustomerPoolKey'] = $this->customerPoolKey;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->reqId) {
            $res['ReqId'] = $this->reqId;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->telB) {
            $res['TelB'] = $this->telB;
        }

        if (null !== $this->telX) {
            $res['TelX'] = $this->telX;
        }

        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
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
        if (isset($map['CallerParentId'])) {
            $model->callerParentId = $map['CallerParentId'];
        }

        if (isset($map['CustomerPoolKey'])) {
            $model->customerPoolKey = $map['CustomerPoolKey'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['ReqId'])) {
            $model->reqId = $map['ReqId'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['TelB'])) {
            $model->telB = $map['TelB'];
        }

        if (isset($map['TelX'])) {
            $model->telX = $map['TelX'];
        }

        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
