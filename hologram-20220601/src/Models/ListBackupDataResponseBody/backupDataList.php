<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hologram\V20220601\Models\ListBackupDataResponseBody;

use AlibabaCloud\Tea\Model;

class backupDataList extends Model
{
    /**
     * @example redundant
     *
     * @var string
     */
    public $backupType;

    /**
     * @example 32413521
     *
     * @var int
     */
    public $coldDataSize;

    /**
     * @example demo
     *
     * @var string
     */
    public $dataDesc;

    /**
     * @example instance
     *
     * @var string
     */
    public $dataGran;

    /**
     * @example 76085723136
     *
     * @var int
     */
    public $dataSize;

    /**
     * @example 2024-10-28T12:23:37.000+00:00
     *
     * @var string
     */
    public $dataTime;

    /**
     * @example 2024-10-28T12:27:34.000+00:00
     *
     * @var string
     */
    public $endTime;

    /**
     * @example 1780805690994479105
     *
     * @var int
     */
    public $id;

    /**
     * @example hgpostcn-cn-pe33jdxxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example my-hologres-dw
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
     * @example Warehouse
     *
     * @var string
     */
    public $instanceType;

    /**
     * @example cn-hangzhou-j
     *
     * @var string
     */
    public $instanceZoneId;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $snapshotRegion;

    /**
     * @example cn-hangzhou-j
     *
     * @var string
     */
    public $snapshotZoneId;

    /**
     * @example 2024-10-28T11:19:56.000+00:00
     *
     * @var string
     */
    public $startTime;

    /**
     * @example completed
     *
     * @var string
     */
    public $status;

    /**
     * @example scheduled
     *
     * @var string
     */
    public $triggerType;
    protected $_name = [
        'backupType'     => 'BackupType',
        'coldDataSize'   => 'ColdDataSize',
        'dataDesc'       => 'DataDesc',
        'dataGran'       => 'DataGran',
        'dataSize'       => 'DataSize',
        'dataTime'       => 'DataTime',
        'endTime'        => 'EndTime',
        'id'             => 'Id',
        'instanceId'     => 'InstanceId',
        'instanceName'   => 'InstanceName',
        'instanceRegion' => 'InstanceRegion',
        'instanceType'   => 'InstanceType',
        'instanceZoneId' => 'InstanceZoneId',
        'snapshotRegion' => 'SnapshotRegion',
        'snapshotZoneId' => 'SnapshotZoneId',
        'startTime'      => 'StartTime',
        'status'         => 'Status',
        'triggerType'    => 'TriggerType',
    ];

    public function validate()
    {
    }

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
