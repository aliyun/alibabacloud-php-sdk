<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DescribeActiveOperationTasksRequest extends Model
{
    /**
     * @description The filter condition that is used to return tasks based on the settings of task cancellation. Default value: -1. Valid values:
     *
     *   **-1**: returns all tasks.
     *   **0**: returns only tasks that cannot be canceled.
     *   **1**: returns only tasks that can be canceled.
     *
     * @example -1
     *
     * @var int
     */
    public $allowCancel;

    /**
     * @description The filter condition that is used to return tasks based on the settings of the switching time. Default value: -1. Valid values:
     *
     *   **-1**: returns all tasks.
     *   **0**: returns only tasks for which the switching time cannot be changed.
     *   **1**: returns only tasks for which the switching time can be changed.
     *
     * @example -1
     *
     * @var int
     */
    public $allowChange;

    /**
     * @description The filter condition that is used to return tasks based on the task level. Default value: all. Valid values:
     *
     *   **all**: all types
     *   **S0**: returns the tasks of the exception fixing level.
     *   **S1**: returns the tasks of the system O\\&M level.
     *
     * @example all
     *
     * @var string
     */
    public $changeLevel;

    /**
     * @description The type of the database. Default value: all. Valid values: mysql, pgsql, and mssql.
     *
     * @example all
     *
     * @var string
     */
    public $dbType;

    /**
     * @description The name of the instance. You can leave this parameter empty. If you configure this parameter, you can specify the name only of one instance.
     *
     * @example rm-bp191w771kd3****
     *
     * @var string
     */
    public $insName;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The page number. Pages start from page 1. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Default value: 25. Maximum value: 100.
     *
     * @example 25
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The name of the service. Valid values: RDS, POLARDB, MongoDB, and Redis. For RDS instances, set the value to RDS.
     *
     * @example RDS
     *
     * @var string
     */
    public $productId;

    /**
     * @description The region ID of the pending event. You can call the DescribeRegions operation to query the most recent region list.
     *
     * >  The value **all** indicates all regions.
     * @example cn-beijing
     *
     * @var string
     */
    public $region;

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
    public $securityToken;

    /**
     * @description The status of the task, which is used as a filter condition to return tasks.
     *
     *   **-1**: all tasks
     *   **3**: pending
     *   **4**: being processed
     *   **5**: completed
     *   **6**: failed
     *   **7**: canceled
     *
     * @example -1
     *
     * @var int
     */
    public $status;

    /**
     * @description The type of the task. Valid values:
     *
     *   **rds_apsaradb_ha**: primary/secondary switchover
     *   **rds_apsaradb_transfer**: instance migration
     *   **rds_apsaradb_upgrade**: update of the minor engine version
     *   **rds_apsaradb_maxscale**: update of the minor version of the proxy
     *   **all**: all types
     *
     * @example rds_apsaradb_upgrade
     *
     * @var string
     */
    public $taskType;
    protected $_name = [
        'allowCancel'          => 'AllowCancel',
        'allowChange'          => 'AllowChange',
        'changeLevel'          => 'ChangeLevel',
        'dbType'               => 'DbType',
        'insName'              => 'InsName',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'pageNumber'           => 'PageNumber',
        'pageSize'             => 'PageSize',
        'productId'            => 'ProductId',
        'region'               => 'Region',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'securityToken'        => 'SecurityToken',
        'status'               => 'Status',
        'taskType'             => 'TaskType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allowCancel) {
            $res['AllowCancel'] = $this->allowCancel;
        }
        if (null !== $this->allowChange) {
            $res['AllowChange'] = $this->allowChange;
        }
        if (null !== $this->changeLevel) {
            $res['ChangeLevel'] = $this->changeLevel;
        }
        if (null !== $this->dbType) {
            $res['DbType'] = $this->dbType;
        }
        if (null !== $this->insName) {
            $res['InsName'] = $this->insName;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->productId) {
            $res['ProductId'] = $this->productId;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeActiveOperationTasksRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllowCancel'])) {
            $model->allowCancel = $map['AllowCancel'];
        }
        if (isset($map['AllowChange'])) {
            $model->allowChange = $map['AllowChange'];
        }
        if (isset($map['ChangeLevel'])) {
            $model->changeLevel = $map['ChangeLevel'];
        }
        if (isset($map['DbType'])) {
            $model->dbType = $map['DbType'];
        }
        if (isset($map['InsName'])) {
            $model->insName = $map['InsName'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        return $model;
    }
}
