<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Dara\Model;

class DescribeHanaRestoresRequest extends Model
{
    /**
     * @var int
     */
    public $backupId;
    /**
     * @var string
     */
    public $clusterId;
    /**
     * @var string
     */
    public $databaseName;
    /**
     * @var int
     */
    public $pageNumber;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var string
     */
    public $resourceGroupId;
    /**
     * @var string
     */
    public $restoreId;
    /**
     * @var string
     */
    public $restoreStatus;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
