<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20190315\Models\OperateLogHubRequest\logHubStores;

class OperateLogHubRequest extends Model
{
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
     * @var bool
     */
    public $filterDirtyData;

    /**
     * @var logHubStores[]
     */
    public $logHubStores;

    /**
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
     * @var string
     */
    public $password;

    /**
     * @var string
     */
    public $projectName;

    /**
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
    protected $_name = [
        'create' => 'Create',
        'DBClusterId' => 'DBClusterId',
        'deliverName' => 'DeliverName',
        'deliverTime' => 'DeliverTime',
        'description' => 'Description',
        'filterDirtyData' => 'FilterDirtyData',
        'logHubStores' => 'LogHubStores',
        'logStoreName' => 'LogStoreName',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'password' => 'Password',
        'projectName' => 'ProjectName',
        'provider' => 'Provider',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'schemaName' => 'SchemaName',
        'tableName' => 'TableName',
        'userName' => 'UserName',
    ];

    public function validate()
    {
        if (\is_array($this->logHubStores)) {
            Model::validateArray($this->logHubStores);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->logHubStores)) {
                $res['LogHubStores'] = [];
                $n1 = 0;
                foreach ($this->logHubStores as $item1) {
                    $res['LogHubStores'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['LogHubStores'] as $item1) {
                    $model->logHubStores[$n1++] = logHubStores::fromMap($item1);
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
