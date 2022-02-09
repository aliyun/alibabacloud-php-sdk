<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

class CreateDatabaseRequest extends Model
{
    /**
     * @var string
     */
    public $accountName;

    /**
     * @var string
     */
    public $accountPrivilege;

    /**
     * @var string
     */
    public $characterSetName;

    /**
     * @var string
     */
    public $collate;

    /**
     * @var string
     */
    public $ctype;

    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $DBDescription;

    /**
     * @var string
     */
    public $DBName;

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
    protected $_name = [
        'accountName'          => 'AccountName',
        'accountPrivilege'     => 'AccountPrivilege',
        'characterSetName'     => 'CharacterSetName',
        'collate'              => 'Collate',
        'ctype'                => 'Ctype',
        'DBClusterId'          => 'DBClusterId',
        'DBDescription'        => 'DBDescription',
        'DBName'               => 'DBName',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }
        if (null !== $this->accountPrivilege) {
            $res['AccountPrivilege'] = $this->accountPrivilege;
        }
        if (null !== $this->characterSetName) {
            $res['CharacterSetName'] = $this->characterSetName;
        }
        if (null !== $this->collate) {
            $res['Collate'] = $this->collate;
        }
        if (null !== $this->ctype) {
            $res['Ctype'] = $this->ctype;
        }
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->DBDescription) {
            $res['DBDescription'] = $this->DBDescription;
        }
        if (null !== $this->DBName) {
            $res['DBName'] = $this->DBName;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDatabaseRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }
        if (isset($map['AccountPrivilege'])) {
            $model->accountPrivilege = $map['AccountPrivilege'];
        }
        if (isset($map['CharacterSetName'])) {
            $model->characterSetName = $map['CharacterSetName'];
        }
        if (isset($map['Collate'])) {
            $model->collate = $map['Collate'];
        }
        if (isset($map['Ctype'])) {
            $model->ctype = $map['Ctype'];
        }
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['DBDescription'])) {
            $model->DBDescription = $map['DBDescription'];
        }
        if (isset($map['DBName'])) {
            $model->DBName = $map['DBName'];
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

        return $model;
    }
}
