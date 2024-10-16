<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class CopyDatabaseRequest extends Model
{
    /**
     * @description The instance name.
     *
     * @example rm-uf6wjk5******
     *
     * @var string
     */
    public $DBInstanceName;

    /**
     * @description The destination database name.
     *
     * @example db2***
     *
     * @var string
     */
    public $dstDBName;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The reserved account.
     *
     * @example 1
     *
     * @var int
     */
    public $reserveAccount;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-acfmy*****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The source database name.
     *
     * @example db1***
     *
     * @var string
     */
    public $srcDBName;
    protected $_name = [
        'DBInstanceName'       => 'DBInstanceName',
        'dstDBName'            => 'DstDBName',
        'ownerId'              => 'OwnerId',
        'reserveAccount'       => 'ReserveAccount',
        'resourceGroupId'      => 'ResourceGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'srcDBName'            => 'SrcDBName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
        }
        if (null !== $this->dstDBName) {
            $res['DstDBName'] = $this->dstDBName;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->reserveAccount) {
            $res['ReserveAccount'] = $this->reserveAccount;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->srcDBName) {
            $res['SrcDBName'] = $this->srcDBName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CopyDatabaseRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
        }
        if (isset($map['DstDBName'])) {
            $model->dstDBName = $map['DstDBName'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ReserveAccount'])) {
            $model->reserveAccount = $map['ReserveAccount'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SrcDBName'])) {
            $model->srcDBName = $map['SrcDBName'];
        }

        return $model;
    }
}
