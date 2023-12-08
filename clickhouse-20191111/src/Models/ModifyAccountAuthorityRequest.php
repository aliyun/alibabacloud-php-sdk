<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models;

use AlibabaCloud\Tea\Model;

class ModifyAccountAuthorityRequest extends Model
{
    /**
     * @example test
     *
     * @var string
     */
    public $accountName;

    /**
     * @example db1
     *
     * @var string
     */
    public $allowDatabases;

    /**
     * @example dt1
     *
     * @var string
     */
    public $allowDictionaries;

    /**
     * @example cc-bp108z124a8o7****
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @example true
     *
     * @var bool
     */
    public $ddlAuthority;

    /**
     * @example all
     *
     * @var string
     */
    public $dmlAuthority;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @example db1,db2
     *
     * @var string
     */
    public $totalDatabases;

    /**
     * @example dt1,dt2
     *
     * @var string
     */
    public $totalDictionaries;
    protected $_name = [
        'accountName'          => 'AccountName',
        'allowDatabases'       => 'AllowDatabases',
        'allowDictionaries'    => 'AllowDictionaries',
        'DBClusterId'          => 'DBClusterId',
        'ddlAuthority'         => 'DdlAuthority',
        'dmlAuthority'         => 'DmlAuthority',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'totalDatabases'       => 'TotalDatabases',
        'totalDictionaries'    => 'TotalDictionaries',
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
        if (null !== $this->allowDatabases) {
            $res['AllowDatabases'] = $this->allowDatabases;
        }
        if (null !== $this->allowDictionaries) {
            $res['AllowDictionaries'] = $this->allowDictionaries;
        }
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->ddlAuthority) {
            $res['DdlAuthority'] = $this->ddlAuthority;
        }
        if (null !== $this->dmlAuthority) {
            $res['DmlAuthority'] = $this->dmlAuthority;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->totalDatabases) {
            $res['TotalDatabases'] = $this->totalDatabases;
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
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }
        if (isset($map['AllowDatabases'])) {
            $model->allowDatabases = $map['AllowDatabases'];
        }
        if (isset($map['AllowDictionaries'])) {
            $model->allowDictionaries = $map['AllowDictionaries'];
        }
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['DdlAuthority'])) {
            $model->ddlAuthority = $map['DdlAuthority'];
        }
        if (isset($map['DmlAuthority'])) {
            $model->dmlAuthority = $map['DmlAuthority'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['TotalDatabases'])) {
            $model->totalDatabases = $map['TotalDatabases'];
        }
        if (isset($map['TotalDictionaries'])) {
            $model->totalDictionaries = $map['TotalDictionaries'];
        }

        return $model;
    }
}
