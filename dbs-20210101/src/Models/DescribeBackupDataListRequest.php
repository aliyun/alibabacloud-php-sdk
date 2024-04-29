<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20210101\Models;

use AlibabaCloud\Tea\Model;

class DescribeBackupDataListRequest extends Model
{
    /**
     * @example 213064****
     *
     * @var string
     */
    public $backupId;

    /**
     * @example Snapshot
     *
     * @var string
     */
    public $backupMethod;

    /**
     * @example Automated
     *
     * @var string
     */
    public $backupMode;

    /**
     * @example DBInstance
     *
     * @var string
     */
    public $backupScale;

    /**
     * @example OK
     *
     * @var string
     */
    public $backupStatus;

    /**
     * @example FullBackup
     *
     * @var string
     */
    public $backupType;

    /**
     * @example test****
     *
     * @var string
     */
    public $dataSourceId;

    /**
     * @example 2024-04-17T17:00:32Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @example false
     *
     * @var bool
     */
    public $instanceIsDeleted;

    /**
     * @example pc-2ze3nrr64c5******
     *
     * @var string
     */
    public $instanceName;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $instanceRegion;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionCode;

    /**
     * @example LEVEL_1
     *
     * @var string
     */
    public $sceneType;

    /**
     * @example 2024-04-17T17:00:16Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'backupId'          => 'BackupId',
        'backupMethod'      => 'BackupMethod',
        'backupMode'        => 'BackupMode',
        'backupScale'       => 'BackupScale',
        'backupStatus'      => 'BackupStatus',
        'backupType'        => 'BackupType',
        'dataSourceId'      => 'DataSourceId',
        'endTime'           => 'EndTime',
        'instanceIsDeleted' => 'InstanceIsDeleted',
        'instanceName'      => 'InstanceName',
        'instanceRegion'    => 'InstanceRegion',
        'pageNumber'        => 'PageNumber',
        'pageSize'          => 'PageSize',
        'regionCode'        => 'RegionCode',
        'sceneType'         => 'SceneType',
        'startTime'         => 'StartTime',
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
        if (null !== $this->backupMethod) {
            $res['BackupMethod'] = $this->backupMethod;
        }
        if (null !== $this->backupMode) {
            $res['BackupMode'] = $this->backupMode;
        }
        if (null !== $this->backupScale) {
            $res['BackupScale'] = $this->backupScale;
        }
        if (null !== $this->backupStatus) {
            $res['BackupStatus'] = $this->backupStatus;
        }
        if (null !== $this->backupType) {
            $res['BackupType'] = $this->backupType;
        }
        if (null !== $this->dataSourceId) {
            $res['DataSourceId'] = $this->dataSourceId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->instanceIsDeleted) {
            $res['InstanceIsDeleted'] = $this->instanceIsDeleted;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->instanceRegion) {
            $res['InstanceRegion'] = $this->instanceRegion;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->regionCode) {
            $res['RegionCode'] = $this->regionCode;
        }
        if (null !== $this->sceneType) {
            $res['SceneType'] = $this->sceneType;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeBackupDataListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupId'])) {
            $model->backupId = $map['BackupId'];
        }
        if (isset($map['BackupMethod'])) {
            $model->backupMethod = $map['BackupMethod'];
        }
        if (isset($map['BackupMode'])) {
            $model->backupMode = $map['BackupMode'];
        }
        if (isset($map['BackupScale'])) {
            $model->backupScale = $map['BackupScale'];
        }
        if (isset($map['BackupStatus'])) {
            $model->backupStatus = $map['BackupStatus'];
        }
        if (isset($map['BackupType'])) {
            $model->backupType = $map['BackupType'];
        }
        if (isset($map['DataSourceId'])) {
            $model->dataSourceId = $map['DataSourceId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['InstanceIsDeleted'])) {
            $model->instanceIsDeleted = $map['InstanceIsDeleted'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InstanceRegion'])) {
            $model->instanceRegion = $map['InstanceRegion'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RegionCode'])) {
            $model->regionCode = $map['RegionCode'];
        }
        if (isset($map['SceneType'])) {
            $model->sceneType = $map['SceneType'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
