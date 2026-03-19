<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20190306\Models;

use AlibabaCloud\Dara\Model;

class DescribeBackupPlanListRequest extends Model
{
    /**
     * @var string
     */
    public $backupMethod;

    /**
     * @var string
     */
    public $backupPlanId;

    /**
     * @var string
     */
    public $backupPlanName;

    /**
     * @var string
     */
    public $backupPlanStatus;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $ownerId;

    /**
     * @var int
     */
    public $pageNum;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var bool
     */
    public $showBackupStrategyInfo;

    /**
     * @var bool
     */
    public $showRecoverTimeRange;

    /**
     * @var bool
     */
    public $showStorageStrategyInfo;
    protected $_name = [
        'backupMethod' => 'BackupMethod',
        'backupPlanId' => 'BackupPlanId',
        'backupPlanName' => 'BackupPlanName',
        'backupPlanStatus' => 'BackupPlanStatus',
        'clientToken' => 'ClientToken',
        'ownerId' => 'OwnerId',
        'pageNum' => 'PageNum',
        'pageSize' => 'PageSize',
        'region' => 'Region',
        'resourceGroupId' => 'ResourceGroupId',
        'showBackupStrategyInfo' => 'ShowBackupStrategyInfo',
        'showRecoverTimeRange' => 'ShowRecoverTimeRange',
        'showStorageStrategyInfo' => 'ShowStorageStrategyInfo',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backupMethod) {
            $res['BackupMethod'] = $this->backupMethod;
        }

        if (null !== $this->backupPlanId) {
            $res['BackupPlanId'] = $this->backupPlanId;
        }

        if (null !== $this->backupPlanName) {
            $res['BackupPlanName'] = $this->backupPlanName;
        }

        if (null !== $this->backupPlanStatus) {
            $res['BackupPlanStatus'] = $this->backupPlanStatus;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->showBackupStrategyInfo) {
            $res['ShowBackupStrategyInfo'] = $this->showBackupStrategyInfo;
        }

        if (null !== $this->showRecoverTimeRange) {
            $res['ShowRecoverTimeRange'] = $this->showRecoverTimeRange;
        }

        if (null !== $this->showStorageStrategyInfo) {
            $res['ShowStorageStrategyInfo'] = $this->showStorageStrategyInfo;
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
        if (isset($map['BackupMethod'])) {
            $model->backupMethod = $map['BackupMethod'];
        }

        if (isset($map['BackupPlanId'])) {
            $model->backupPlanId = $map['BackupPlanId'];
        }

        if (isset($map['BackupPlanName'])) {
            $model->backupPlanName = $map['BackupPlanName'];
        }

        if (isset($map['BackupPlanStatus'])) {
            $model->backupPlanStatus = $map['BackupPlanStatus'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['ShowBackupStrategyInfo'])) {
            $model->showBackupStrategyInfo = $map['ShowBackupStrategyInfo'];
        }

        if (isset($map['ShowRecoverTimeRange'])) {
            $model->showRecoverTimeRange = $map['ShowRecoverTimeRange'];
        }

        if (isset($map['ShowStorageStrategyInfo'])) {
            $model->showStorageStrategyInfo = $map['ShowStorageStrategyInfo'];
        }

        return $model;
    }
}
