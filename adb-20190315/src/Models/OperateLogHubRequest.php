<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\SDK\Adb\V20190315\Models\OperateLogHubRequest\logHubStores;
use AlibabaCloud\Tea\Model;

class OperateLogHubRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example true
     *
     * @var bool
     */
    public $create;

    /**
     * @description This parameter is required.
     *
     * @example am-uf6rtqaj25491628z
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description This parameter is required.
     *
     * @example xhxsblz_limited_gift_pay
     *
     * @var string
     */
    public $deliverName;

    /**
     * @description This parameter is required.
     *
     * @example 2024-10-24\\"T\\"13:10\\"Z\\"
     *
     * @var string
     */
    public $deliverTime;

    /**
     * @description This parameter is required.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @example false
     *
     * @var bool
     */
    public $filterDirtyData;

    /**
     * @description This parameter is required.
     *
     * @var logHubStores[]
     */
    public $logHubStores;

    /**
     * @description This parameter is required.
     *
     * @example beta-game-mjxb-ham-pool-export
     *
     * @var string
     */
    public $logStoreName;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description This parameter is required.
     *
     * @example ads_123
     *
     * @var string
     */
    public $password;

    /**
     * @description This parameter is required.
     *
     * @example test-adb
     *
     * @var string
     */
    public $projectName;

    /**
     * @example SLS
     *
     * @var string
     */
    public $provider;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description This parameter is required.
     *
     * @example wddata
     *
     * @var string
     */
    public $schemaName;

    /**
     * @description This parameter is required.
     *
     * @example rest_action_latest
     *
     * @var string
     */
    public $tableName;

    /**
     * @description This parameter is required.
     *
     * @example admin
     *
     * @var string
     */
    public $userName;
    protected $_name = [
        'create'               => 'Create',
        'DBClusterId'          => 'DBClusterId',
        'deliverName'          => 'DeliverName',
        'deliverTime'          => 'DeliverTime',
        'description'          => 'Description',
        'filterDirtyData'      => 'FilterDirtyData',
        'logHubStores'         => 'LogHubStores',
        'logStoreName'         => 'LogStoreName',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'password'             => 'Password',
        'projectName'          => 'ProjectName',
        'provider'             => 'Provider',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'schemaName'           => 'SchemaName',
        'tableName'            => 'TableName',
        'userName'             => 'UserName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->create) {
            $res['Create'] = $this->create;
        }
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->deliverName) {
            $res['DeliverName'] = $this->deliverName;
        }
        if (null !== $this->deliverTime) {
            $res['DeliverTime'] = $this->deliverTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->filterDirtyData) {
            $res['FilterDirtyData'] = $this->filterDirtyData;
        }
        if (null !== $this->logHubStores) {
            $res['LogHubStores'] = [];
            if (null !== $this->logHubStores && \is_array($this->logHubStores)) {
                $n = 0;
                foreach ($this->logHubStores as $item) {
                    $res['LogHubStores'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->logStoreName) {
            $res['LogStoreName'] = $this->logStoreName;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->provider) {
            $res['Provider'] = $this->provider;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->schemaName) {
            $res['SchemaName'] = $this->schemaName;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OperateLogHubRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Create'])) {
            $model->create = $map['Create'];
        }
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['DeliverName'])) {
            $model->deliverName = $map['DeliverName'];
        }
        if (isset($map['DeliverTime'])) {
            $model->deliverTime = $map['DeliverTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['FilterDirtyData'])) {
            $model->filterDirtyData = $map['FilterDirtyData'];
        }
        if (isset($map['LogHubStores'])) {
            if (!empty($map['LogHubStores'])) {
                $model->logHubStores = [];
                $n                   = 0;
                foreach ($map['LogHubStores'] as $item) {
                    $model->logHubStores[$n++] = null !== $item ? logHubStores::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['LogStoreName'])) {
            $model->logStoreName = $map['LogStoreName'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['Provider'])) {
            $model->provider = $map['Provider'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SchemaName'])) {
            $model->schemaName = $map['SchemaName'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
