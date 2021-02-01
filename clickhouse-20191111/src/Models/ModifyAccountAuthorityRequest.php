<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models;

use AlibabaCloud\Tea\Model;

class ModifyAccountAuthorityRequest extends Model
{
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
    public $ownerAccount;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $accountName;

    /**
     * @var string
     */
    public $dmlAuthority;

    /**
     * @var bool
     */
    public $ddlAuthority;

    /**
     * @var string
     */
    public $allowDatabases;

    /**
     * @var string
     */
    public $totalDatabases;

    /**
     * @var string
     */
    public $allowDictionaries;

    /**
     * @var string
     */
    public $totalDictionaries;
    protected $_name = [
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'ownerAccount'         => 'OwnerAccount',
        'regionId'             => 'RegionId',
        'DBClusterId'          => 'DBClusterId',
        'accountName'          => 'AccountName',
        'dmlAuthority'         => 'DmlAuthority',
        'ddlAuthority'         => 'DdlAuthority',
        'allowDatabases'       => 'AllowDatabases',
        'totalDatabases'       => 'TotalDatabases',
        'allowDictionaries'    => 'AllowDictionaries',
        'totalDictionaries'    => 'TotalDictionaries',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }
        if (null !== $this->dmlAuthority) {
            $res['DmlAuthority'] = $this->dmlAuthority;
        }
        if (null !== $this->ddlAuthority) {
            $res['DdlAuthority'] = $this->ddlAuthority;
        }
        if (null !== $this->allowDatabases) {
            $res['AllowDatabases'] = $this->allowDatabases;
        }
        if (null !== $this->totalDatabases) {
            $res['TotalDatabases'] = $this->totalDatabases;
        }
        if (null !== $this->allowDictionaries) {
            $res['AllowDictionaries'] = $this->allowDictionaries;
        }
        if (null !== $this->totalDictionaries) {
            $res['TotalDictionaries'] = $this->totalDictionaries;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyAccountAuthorityRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }
        if (isset($map['DmlAuthority'])) {
            $model->dmlAuthority = $map['DmlAuthority'];
        }
        if (isset($map['DdlAuthority'])) {
            $model->ddlAuthority = $map['DdlAuthority'];
        }
        if (isset($map['AllowDatabases'])) {
            $model->allowDatabases = $map['AllowDatabases'];
        }
        if (isset($map['TotalDatabases'])) {
            $model->totalDatabases = $map['TotalDatabases'];
        }
        if (isset($map['AllowDictionaries'])) {
            $model->allowDictionaries = $map['AllowDictionaries'];
        }
        if (isset($map['TotalDictionaries'])) {
            $model->totalDictionaries = $map['TotalDictionaries'];
        }

        return $model;
    }
}
