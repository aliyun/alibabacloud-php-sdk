<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hologram\V20220601\Models\ListBackupDataResponseBody;

use AlibabaCloud\Tea\Model;

class backupDataList extends Model
{
    /**
     * @description The backup type. In general, the following two types are supported: local backup and remote backup. In the local backup type, snapshots reside in the same region as your instance. The following two sub-types are available: full (single backup, single replica) and redundant (zone-redundant storage, multiple replicas). In the remote backup type, snapshots and your instance reside in different regions. Remote backups are the replicas of the backups of the full or redundant type in another region. The values local and remote do not represent specific types, but are used only for data filtering. The value local indicates all local backups, and the value remote indicates all remote backups.
     *
     * @example redundant
     *
     * @var string
     */
    public $backupType;

    /**
     * @description The size of cold data. Unit: bytes.
     *
     * @example 32413521
     *
     * @var int
     */
    public $coldDataSize;

    /**
     * @description The description of the backup data.
     *
     * @example demo
     *
     * @var string
     */
    public $dataDesc;

    /**
     * @description The backup granularity.
     *
     * Valid values:
     *
     *   instance
     *
     * @example instance
     *
     * @var string
     */
    public $dataGran;

    /**
     * @description The size of the backup data. Unit: bytes.
     *
     * @example 76085723136
     *
     * @var int
     */
    public $dataSize;

    /**
     * @description The snapshot time. The value format of this parameter follows the same standard as that of the StartTime parameter.
     *
     * @example 2024-10-28T12:23:37.000+00:00
     *
     * @var string
     */
    public $dataTime;

    /**
     * @description The end time of the backup task. The value format of this parameter follows the same standard as that of the StartTime parameter.
     *
     * @example 2024-10-28T12:27:34.000+00:00
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The unique ID of the backup.
     *
     * @example 1780805690994479105
     *
     * @var int
     */
    public $id;

    /**
     * @description The instance ID.
     *
     * @example hgpostcn-cn-pe33jdxxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the instance.
     *
     * @example my-hologres-dw
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The region in which the instance resides.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $instanceRegion;

    /**
     * @description The type of the instance.
     *
     * Valid values:
     *
     *   Warehouse: virtual warehouse instance
     *   Standard: general-purpose instance
     *
     * @example Warehouse
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The zone in which the instance resides.
     *
     * @example cn-hangzhou-j
     *
     * @var string
     */
    public $instanceZoneId;

    /**
     * @description The region in which the backup data resides.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $snapshotRegion;

    /**
     * @description The zone in which the backup data resides. In zone-redundant storage mode, backup data is stored in different zones, including the current zone.
     *
     * @example cn-hangzhou-j
     *
     * @var string
     */
    public $snapshotZoneId;

    /**
     * @description The start time of the backup task. The time follows the ISO 8601 standard in the YYYY-MM-DDTHH:mm:ss.SSSTZ format. The time is displayed in UTC (the same below).
     *
     * @example 2024-10-28T11:19:56.000+00:00
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The status of the backup task.
     *
     * Valid values:
     *
     *   processing
     *   completed
     *   failed
     *
     * @example completed
     *
     * @var string
     */
    public $status;

    /**
     * @description The mode in which the backup task is triggered.
     *
     * Valid values:
     *
     *   scheduled: periodic backup
     *   manual: manual backup
     *
     * @example scheduled
     *
     * @var string
     */
    public $triggerType;
    protected $_name = [
        'backupType' => 'BackupType',
        'coldDataSize' => 'ColdDataSize',
        'dataDesc' => 'DataDesc',
        'dataGran' => 'DataGran',
        'dataSize' => 'DataSize',
        'dataTime' => 'DataTime',
        'endTime' => 'EndTime',
        'id' => 'Id',
        'instanceId' => 'InstanceId',
        'instanceName' => 'InstanceName',
        'instanceRegion' => 'InstanceRegion',
        'instanceType' => 'InstanceType',
        'instanceZoneId' => 'InstanceZoneId',
        'snapshotRegion' => 'SnapshotRegion',
        'snapshotZoneId' => 'SnapshotZoneId',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'triggerType' => 'TriggerType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupType) {
            $res['BackupType'] = $this->backupType;
        }
        if (null !== $this->coldDataSize) {
            $res['ColdDataSize'] = $this->coldDataSize;
        }
        if (null !== $this->dataDesc) {
            $res['DataDesc'] = $this->dataDesc;
        }
        if (null !== $this->dataGran) {
            $res['DataGran'] = $this->dataGran;
        }
        if (null !== $this->dataSize) {
            $res['DataSize'] = $this->dataSize;
        }
        if (null !== $this->dataTime) {
            $res['DataTime'] = $this->dataTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->instanceRegion) {
            $res['InstanceRegion'] = $this->instanceRegion;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->instanceZoneId) {
            $res['InstanceZoneId'] = $this->instanceZoneId;
        }
        if (null !== $this->snapshotRegion) {
            $res['SnapshotRegion'] = $this->snapshotRegion;
        }
        if (null !== $this->snapshotZoneId) {
            $res['SnapshotZoneId'] = $this->snapshotZoneId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->triggerType) {
            $res['TriggerType'] = $this->triggerType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return backupDataList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupType'])) {
            $model->backupType = $map['BackupType'];
        }
        if (isset($map['ColdDataSize'])) {
            $model->coldDataSize = $map['ColdDataSize'];
        }
        if (isset($map['DataDesc'])) {
            $model->dataDesc = $map['DataDesc'];
        }
        if (isset($map['DataGran'])) {
            $model->dataGran = $map['DataGran'];
        }
        if (isset($map['DataSize'])) {
            $model->dataSize = $map['DataSize'];
        }
        if (isset($map['DataTime'])) {
            $model->dataTime = $map['DataTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InstanceRegion'])) {
            $model->instanceRegion = $map['InstanceRegion'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['InstanceZoneId'])) {
            $model->instanceZoneId = $map['InstanceZoneId'];
        }
        if (isset($map['SnapshotRegion'])) {
            $model->snapshotRegion = $map['SnapshotRegion'];
        }
        if (isset($map['SnapshotZoneId'])) {
            $model->snapshotZoneId = $map['SnapshotZoneId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TriggerType'])) {
            $model->triggerType = $map['TriggerType'];
        }

        return $model;
    }
}
