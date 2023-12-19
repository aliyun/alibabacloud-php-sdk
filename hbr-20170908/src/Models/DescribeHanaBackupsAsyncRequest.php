<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Tea\Model;

class DescribeHanaBackupsAsyncRequest extends Model
{
    /**
     * @description The ID of the SAP HANA instance.
     *
     * @example cl-00098******yuqvu
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The name of the database.
     *
     * @example BPD
     *
     * @var string
     */
    public $databaseName;

    /**
     * @description Specifies whether to include differential backups in the query results. Valid values:
     *
     *   true: includes differential backups.
     *   false: excludes differential backups.
     *
     * @example false
     *
     * @var bool
     */
    public $includeDifferential;

    /**
     * @description Specifies whether to include incremental backups in the query results. Valid values:
     *
     *   true: includes incremental backups.
     *   false: excludes incremental backups.
     *
     * @example true
     *
     * @var bool
     */
    public $includeIncremental;

    /**
     * @description Specifies whether to include log backups in the query results. Valid values:
     *
     *   true: includes log backups.
     *   false: excludes log backups.
     *
     * @example true
     *
     * @var bool
     */
    public $includeLog;

    /**
     * @description The log position to which you want to restore the database. This parameter is valid only if you set the Mode parameter to **RECOVERY_TO_LOG_POSITION**.
     *
     * @example 0
     *
     * @var int
     */
    public $logPosition;

    /**
     * @description The recovery mode. Valid values:
     *
     *   **RECOVERY_TO_MOST_RECENT**: restores the database to the recently available state to which the database has been backed up.
     *   **RECOVERY_TO_POINT_IN_TIME**: restores the database to a specified point in time.
     *   **RECOVERY_TO_SPECIFIC_BACKUP**: restores the database to a specified backup.
     *   **RECOVERY_TO_LOG_POSITION**: restores the database to a specified log position.
     *
     * @example RECOVERY_TO_SPECIFIC_BACKUP
     *
     * @var string
     */
    public $mode;

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
     * @description The point in time to which you want to restore the database. This parameter is valid only if you set the Mode parameter to **RECOVERY_TO_POINT_IN_TIME**. HBR restores the database to a state closest to the specified point in time.
     *
     * @example 1649851200
     *
     * @var int
     */
    public $recoveryPointInTime;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-acfmz7mced2ldhy
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The name of the source system. This parameter specifies the name of the source database that you want to restore. You must set the parameter in the `<Source database name>@SID` format.
     *
     * @example P01@HP1
     *
     * @var string
     */
    public $source;

    /**
     * @description The ID of the source SAP HANA instance.
     *
     * @example cl-0000g3m******5cj
     *
     * @var string
     */
    public $sourceClusterId;

    /**
     * @description Specifies whether to restore the database to a different instance. Valid values:
     *
     *   true: restores the database to a different instance.
     *   false: restores the database within the same instance.
     *
     * @example true
     *
     * @var bool
     */
    public $systemCopy;

    /**
     * @description Specifies whether Backint is used. Valid values:
     *
     *   true: Backint is used.
     *   false: Backint is not used.
     *
     * @example false
     *
     * @var bool
     */
    public $useBackint;

    /**
     * @description The ID of the backup vault.
     *
     * @example v-000270c******pi81
     *
     * @var string
     */
    public $vaultId;

    /**
     * @description The ID of the volume that you want to restore. This parameter is valid only if you set the Mode parameter to **RECOVERY_TO_LOG_POSITION**.
     *
     * @example 0
     *
     * @var int
     */
    public $volumeId;
    protected $_name = [
        'clusterId'           => 'ClusterId',
        'databaseName'        => 'DatabaseName',
        'includeDifferential' => 'IncludeDifferential',
        'includeIncremental'  => 'IncludeIncremental',
        'includeLog'          => 'IncludeLog',
        'logPosition'         => 'LogPosition',
        'mode'                => 'Mode',
        'pageNumber'          => 'PageNumber',
        'pageSize'            => 'PageSize',
        'recoveryPointInTime' => 'RecoveryPointInTime',
        'resourceGroupId'     => 'ResourceGroupId',
        'source'              => 'Source',
        'sourceClusterId'     => 'SourceClusterId',
        'systemCopy'          => 'SystemCopy',
        'useBackint'          => 'UseBackint',
        'vaultId'             => 'VaultId',
        'volumeId'            => 'VolumeId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->databaseName) {
            $res['DatabaseName'] = $this->databaseName;
        }
        if (null !== $this->includeDifferential) {
            $res['IncludeDifferential'] = $this->includeDifferential;
        }
        if (null !== $this->includeIncremental) {
            $res['IncludeIncremental'] = $this->includeIncremental;
        }
        if (null !== $this->includeLog) {
            $res['IncludeLog'] = $this->includeLog;
        }
        if (null !== $this->logPosition) {
            $res['LogPosition'] = $this->logPosition;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->recoveryPointInTime) {
            $res['RecoveryPointInTime'] = $this->recoveryPointInTime;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->sourceClusterId) {
            $res['SourceClusterId'] = $this->sourceClusterId;
        }
        if (null !== $this->systemCopy) {
            $res['SystemCopy'] = $this->systemCopy;
        }
        if (null !== $this->useBackint) {
            $res['UseBackint'] = $this->useBackint;
        }
        if (null !== $this->vaultId) {
            $res['VaultId'] = $this->vaultId;
        }
        if (null !== $this->volumeId) {
            $res['VolumeId'] = $this->volumeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeHanaBackupsAsyncRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['DatabaseName'])) {
            $model->databaseName = $map['DatabaseName'];
        }
        if (isset($map['IncludeDifferential'])) {
            $model->includeDifferential = $map['IncludeDifferential'];
        }
        if (isset($map['IncludeIncremental'])) {
            $model->includeIncremental = $map['IncludeIncremental'];
        }
        if (isset($map['IncludeLog'])) {
            $model->includeLog = $map['IncludeLog'];
        }
        if (isset($map['LogPosition'])) {
            $model->logPosition = $map['LogPosition'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RecoveryPointInTime'])) {
            $model->recoveryPointInTime = $map['RecoveryPointInTime'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['SourceClusterId'])) {
            $model->sourceClusterId = $map['SourceClusterId'];
        }
        if (isset($map['SystemCopy'])) {
            $model->systemCopy = $map['SystemCopy'];
        }
        if (isset($map['UseBackint'])) {
            $model->useBackint = $map['UseBackint'];
        }
        if (isset($map['VaultId'])) {
            $model->vaultId = $map['VaultId'];
        }
        if (isset($map['VolumeId'])) {
            $model->volumeId = $map['VolumeId'];
        }

        return $model;
    }
}
