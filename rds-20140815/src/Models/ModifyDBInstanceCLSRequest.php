<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;

class ModifyDBInstanceCLSRequest extends Model
{
    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string
     */
    public $encryptionAlgorithm;

    /**
     * @var string
     */
    public $encryptionKey;

    /**
     * @var string
     */
    public $encryptionKeyMode;

    /**
     * @var string
     */
    public $encryptionStatus;

    /**
     * @var bool
     */
    public $isRotate;

    /**
     * @var string
     */
    public $ownerAccount;

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
    public $roleArn;

    /**
     * @var bool
     */
    public $whiteListMode;
    protected $_name = [
        'DBInstanceId' => 'DBInstanceId',
        'encryptionAlgorithm' => 'EncryptionAlgorithm',
        'encryptionKey' => 'EncryptionKey',
        'encryptionKeyMode' => 'EncryptionKeyMode',
        'encryptionStatus' => 'EncryptionStatus',
        'isRotate' => 'IsRotate',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'roleArn' => 'RoleArn',
        'whiteListMode' => 'WhiteListMode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }

        if (null !== $this->encryptionAlgorithm) {
            $res['EncryptionAlgorithm'] = $this->encryptionAlgorithm;
        }

        if (null !== $this->encryptionKey) {
            $res['EncryptionKey'] = $this->encryptionKey;
        }

        if (null !== $this->encryptionKeyMode) {
            $res['EncryptionKeyMode'] = $this->encryptionKeyMode;
        }

        if (null !== $this->encryptionStatus) {
            $res['EncryptionStatus'] = $this->encryptionStatus;
        }

        if (null !== $this->isRotate) {
            $res['IsRotate'] = $this->isRotate;
        }

        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
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

        if (null !== $this->roleArn) {
            $res['RoleArn'] = $this->roleArn;
        }

        if (null !== $this->whiteListMode) {
            $res['WhiteListMode'] = $this->whiteListMode;
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
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }

        if (isset($map['EncryptionAlgorithm'])) {
            $model->encryptionAlgorithm = $map['EncryptionAlgorithm'];
        }

        if (isset($map['EncryptionKey'])) {
            $model->encryptionKey = $map['EncryptionKey'];
        }

        if (isset($map['EncryptionKeyMode'])) {
            $model->encryptionKeyMode = $map['EncryptionKeyMode'];
        }

        if (isset($map['EncryptionStatus'])) {
            $model->encryptionStatus = $map['EncryptionStatus'];
        }

        if (isset($map['IsRotate'])) {
            $model->isRotate = $map['IsRotate'];
        }

        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
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

        if (isset($map['RoleArn'])) {
            $model->roleArn = $map['RoleArn'];
        }

        if (isset($map['WhiteListMode'])) {
            $model->whiteListMode = $map['WhiteListMode'];
        }

        return $model;
    }
}
