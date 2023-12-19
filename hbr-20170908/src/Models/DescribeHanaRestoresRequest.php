<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Tea\Model;

class DescribeHanaRestoresRequest extends Model
{
    /**
     * @description The ID of the backup.
     *
     * @example 1632754800158
     *
     * @var int
     */
    public $backupId;

    /**
     * @description The ID of the SAP HANA instance.
     *
     * @example cl-000b******soejg
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The name of the database.
     *
     * @example SYSTEMDB
     *
     * @var string
     */
    public $databaseName;

    /**
     * @description The number of the page to return. Pages start from page 1. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page. Valid values: 1 to 99. Default value: 10.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-acfm4ebtpkzx7zy
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The ID of the restore job.
     *
     * @example r-0007o3vqfukfe92hvf13
     *
     * @var string
     */
    public $restoreId;

    /**
     * @description The status of the restore job. Valid values:
     *
     *   **RUNNING**: The restore job is running.
     *   **COMPLETE**: The restore job is completed.
     *   **PARTIAL_COMPLETE**: The restore job is partially completed.
     *   **FAILED**: The restore job has failed.
     *   **CANCELED**: The restore job is canceled.
     *   **EXPIRED**: The restore job has timed out.
     *
     * @example COMPLETE
     *
     * @var string
     */
    public $restoreStatus;

    /**
     * @description The ID of the backup vault.
     *
     * @example v-000au6bq******mpu
     *
     * @var string
     */
    public $vaultId;
    protected $_name = [
        'backupId'        => 'BackupId',
        'clusterId'       => 'ClusterId',
        'databaseName'    => 'DatabaseName',
        'pageNumber'      => 'PageNumber',
        'pageSize'        => 'PageSize',
        'resourceGroupId' => 'ResourceGroupId',
        'restoreId'       => 'RestoreId',
        'restoreStatus'   => 'RestoreStatus',
        'vaultId'         => 'VaultId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupId) {
            $res['BackupId'] = $this->backupId;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->databaseName) {
            $res['DatabaseName'] = $this->databaseName;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->restoreId) {
            $res['RestoreId'] = $this->restoreId;
        }
        if (null !== $this->restoreStatus) {
            $res['RestoreStatus'] = $this->restoreStatus;
        }
        if (null !== $this->vaultId) {
            $res['VaultId'] = $this->vaultId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeHanaRestoresRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupId'])) {
            $model->backupId = $map['BackupId'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['DatabaseName'])) {
            $model->databaseName = $map['DatabaseName'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['RestoreId'])) {
            $model->restoreId = $map['RestoreId'];
        }
        if (isset($map['RestoreStatus'])) {
            $model->restoreStatus = $map['RestoreStatus'];
        }
        if (isset($map['VaultId'])) {
            $model->vaultId = $map['VaultId'];
        }

        return $model;
    }
}
