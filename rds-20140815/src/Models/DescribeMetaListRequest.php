<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DescribeMetaListRequest extends Model
{
    /**
     * @description The ID of the backup set from which you want to restore data. You can call the DescribeBackups operation to query the IDs of data backup files.
     *
     * >  This parameter is required when you set the **RestoreType** parameter to **BackupSetID**.
     * @example 14358
     *
     * @var int
     */
    public $backupSetID;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the generated token is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length.
     *
     * @example ETnLKlblzczshOTUbOCzxxxxxxxxxx
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The instance ID. You can call the DescribeDBInstances operation to query the instance ID.
     *
     * This parameter is required.
     * @example rm-uf6wjk5xxxxxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The name of the database to query. The system implements exact match based on the value of this parameter and returns the name of the matched database and the names of all tables contained in the database.
     *
     * > If you leave this parameter empty, the system returns all databases that are created on the instance.
     * @example testdb1
     *
     * @var string
     */
    public $getDbName;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The number of the page to return. Valid values: any non-zero positive integer.**** Default value: **1**.
     *
     * > This parameter only takes effect when you specify the **PageSize** parameter.
     * @example 1
     *
     * @var int
     */
    public $pageIndex;

    /**
     * @description The number of entries to return on each page. Default value: **1**.
     *
     * > This parameter only takes effect when you specify the **PageIndex** parameter.
     * @example 1
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The name of the database to query. The system implements fuzzy match based on the value of this parameter and returns only the name of the matched database.
     *
     * > For example, if you set the value to `test`, the system returns `testdb1` and `testdb2`. Then, you can specify the **GetDbName** parameter to query tables in the required database.
     * @example test
     *
     * @var string
     */
    public $pattern;

    /**
     * @description The resource group ID.
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
     * @description The point in time to which you want to restore data. The specified point in time must be earlier than the current time. Specify the time in the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time must be in UTC. You can call the DescribeBackups operation to query the restorable time range.
     *
     * >  This parameter must be specified when the **RestoreType** parameter is set to **RestoreTime**.
     * @example 2019-05-30T03:29:10Z
     *
     * @var string
     */
    public $restoreTime;

    /**
     * @description The restoration method that you want to use. Valid values:
     *
     *   **BackupSetID**: Data is restored from the backup set. If you use this value, you must also specify the **BackupSetID** parameter.
     *   **RestoreTime**: Data is restored to a specific point in time. If you use this value, you must also specify the **RestoreTime** parameter.
     *
     * Default value: **BackupSetID**.
     * @example BackupSetID
     *
     * @var string
     */
    public $restoreType;
    protected $_name = [
        'backupSetID'          => 'BackupSetID',
        'clientToken'          => 'ClientToken',
        'DBInstanceId'         => 'DBInstanceId',
        'getDbName'            => 'GetDbName',
        'ownerId'              => 'OwnerId',
        'pageIndex'            => 'PageIndex',
        'pageSize'             => 'PageSize',
        'pattern'              => 'Pattern',
        'resourceGroupId'      => 'ResourceGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'restoreTime'          => 'RestoreTime',
        'restoreType'          => 'RestoreType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupSetID) {
            $res['BackupSetID'] = $this->backupSetID;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->getDbName) {
            $res['GetDbName'] = $this->getDbName;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->pageIndex) {
            $res['PageIndex'] = $this->pageIndex;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pattern) {
            $res['Pattern'] = $this->pattern;
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
        if (null !== $this->restoreTime) {
            $res['RestoreTime'] = $this->restoreTime;
        }
        if (null !== $this->restoreType) {
            $res['RestoreType'] = $this->restoreType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeMetaListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupSetID'])) {
            $model->backupSetID = $map['BackupSetID'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['GetDbName'])) {
            $model->getDbName = $map['GetDbName'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PageIndex'])) {
            $model->pageIndex = $map['PageIndex'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Pattern'])) {
            $model->pattern = $map['Pattern'];
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
        if (isset($map['RestoreTime'])) {
            $model->restoreTime = $map['RestoreTime'];
        }
        if (isset($map['RestoreType'])) {
            $model->restoreType = $map['RestoreType'];
        }

        return $model;
    }
}
