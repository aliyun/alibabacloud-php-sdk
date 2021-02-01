<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models;

use AlibabaCloud\SDK\Clickhouse\V20191111\Models\OperateLogHubRequest\logHubStores;
use AlibabaCloud\Tea\Model;

class OperateLogHubRequest extends Model
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
     * @var bool
     */
    public $create;

    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $logStoreName;

    /**
     * @var string
     */
    public $deliverName;

    /**
     * @var string
     */
    public $deliverTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $domainUrl;

    /**
     * @var string
     */
    public $schemaName;

    /**
     * @var string
     */
    public $tableName;

    /**
     * @var string
     */
    public $userName;

    /**
     * @var string
     */
    public $password;

    /**
     * @var bool
     */
    public $filterDirtyData;

    /**
     * @var string
     */
    public $accessKey;

    /**
     * @var string
     */
    public $accessSecret;

    /**
     * @var bool
     */
    public $useLorne;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var logHubStores[]
     */
    public $logHubStores;
    protected $_name = [
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'ownerAccount'         => 'OwnerAccount',
        'create'               => 'Create',
        'DBClusterId'          => 'DBClusterId',
        'projectName'          => 'ProjectName',
        'logStoreName'         => 'LogStoreName',
        'deliverName'          => 'DeliverName',
        'deliverTime'          => 'DeliverTime',
        'description'          => 'Description',
        'domainUrl'            => 'DomainUrl',
        'schemaName'           => 'SchemaName',
        'tableName'            => 'TableName',
        'userName'             => 'UserName',
        'password'             => 'Password',
        'filterDirtyData'      => 'FilterDirtyData',
        'accessKey'            => 'AccessKey',
        'accessSecret'         => 'AccessSecret',
        'useLorne'             => 'UseLorne',
        'taskId'               => 'TaskId',
        'logHubStores'         => 'LogHubStores',
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
        if (null !== $this->create) {
            $res['Create'] = $this->create;
        }
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->logStoreName) {
            $res['LogStoreName'] = $this->logStoreName;
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
        if (null !== $this->domainUrl) {
            $res['DomainUrl'] = $this->domainUrl;
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
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->filterDirtyData) {
            $res['FilterDirtyData'] = $this->filterDirtyData;
        }
        if (null !== $this->accessKey) {
            $res['AccessKey'] = $this->accessKey;
        }
        if (null !== $this->accessSecret) {
            $res['AccessSecret'] = $this->accessSecret;
        }
        if (null !== $this->useLorne) {
            $res['UseLorne'] = $this->useLorne;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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
        if (isset($map['Create'])) {
            $model->create = $map['Create'];
        }
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['LogStoreName'])) {
            $model->logStoreName = $map['LogStoreName'];
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
        if (isset($map['DomainUrl'])) {
            $model->domainUrl = $map['DomainUrl'];
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
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['FilterDirtyData'])) {
            $model->filterDirtyData = $map['FilterDirtyData'];
        }
        if (isset($map['AccessKey'])) {
            $model->accessKey = $map['AccessKey'];
        }
        if (isset($map['AccessSecret'])) {
            $model->accessSecret = $map['AccessSecret'];
        }
        if (isset($map['UseLorne'])) {
            $model->useLorne = $map['UseLorne'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
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

        return $model;
    }
}
