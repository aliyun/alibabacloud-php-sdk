<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class DeleteDNAFilesRequest extends Model
{
    /**
     * @description The ID of the media fingerprint library from which you want to delete files.
     *
     * This parameter is required.
     * @example fb712a6890464059b1b2ea7c8647****
     *
     * @var string
     */
    public $DBId;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The primary key values of the files that you want to delete. Separate multiple values with commas (,). You can delete up to 50 files at a time.
     *
     * This parameter is required.
     * @example 41e6536e4f2250e2e9bf26cdea19****
     *
     * @var string
     */
    public $primaryKeys;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'DBId'                 => 'DBId',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'primaryKeys'          => 'PrimaryKeys',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBId) {
            $res['DBId'] = $this->DBId;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->primaryKeys) {
            $res['PrimaryKeys'] = $this->primaryKeys;
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
     * @return DeleteDNAFilesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBId'])) {
            $model->DBId = $map['DBId'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PrimaryKeys'])) {
            $model->primaryKeys = $map['PrimaryKeys'];
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
