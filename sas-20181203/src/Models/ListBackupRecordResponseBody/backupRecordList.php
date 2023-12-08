<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListBackupRecordResponseBody;

use AlibabaCloud\Tea\Model;

class backupRecordList extends Model
{
    /**
     * @description The timestamp when the backup task ended. Unit: milliseconds.
     *
     * @example 1699600611000
     *
     * @var int
     */
    public $backupEndTime;

    /**
     * @description The backup task ID.
     *
     * @example a006f24d069843c88688672d74ee****
     *
     * @var string
     */
    public $backupJobId;

    /**
     * @description The backup plan ID.
     *
     * @example plan-000c4tt43nolmx96****
     *
     * @var string
     */
    public $backupPlanId;

    /**
     * @description The timestamp when the backup task started. Unit: milliseconds.
     *
     * @example 1699514211000
     *
     * @var int
     */
    public $backupStartTime;

    /**
     * @description The backup task status. Valid value:
     *
     *   **BACKUP_COMPLETE**: The backup task is successful.
     *   **BACKUP_FAILED**: The backup task failed.
     *   **PARTIAL_COMPLETE**: The backup task is partially successful.
     *
     * @example BACKUP_COMPLETE
     *
     * @var string
     */
    public $backupStatus;

    /**
     * @description The ID of the anti-ransomware agent.
     *
     * @example c-0002bgagelj3d2sc****
     *
     * @var string
     */
    public $clientId;

    /**
     * @description The error code of the backup task.
     *
     * @example FILE_CACHE_NO_SPACE
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The error message of the backup task.
     *
     * @example FILE_CACHE_NO_SPACE
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The instance ID of the server.
     *
     * @example i-wz9ikn44p46krnic****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The instance name of the asset.
     *
     * @example openapi
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The public IP address of the server.
     *
     * @example 1.1.1.1
     *
     * @var string
     */
    public $internetIp;

    /**
     * @description The private IP address of the server.
     *
     * @example 192.168.1.1
     *
     * @var string
     */
    public $intranetIp;

    /**
     * @description The IP address of the server.
     *
     * @example 1.1.1.1
     *
     * @var string
     */
    public $ip;

    /**
     * @description The ID of the region in which the backup is stored.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The UUID of the server whose data is backed up based on the anti-ransomware policy.
     *
     * @example b93cccb9-f19f-4886-97fe-47df26ba****
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'backupEndTime'   => 'BackupEndTime',
        'backupJobId'     => 'BackupJobId',
        'backupPlanId'    => 'BackupPlanId',
        'backupStartTime' => 'BackupStartTime',
        'backupStatus'    => 'BackupStatus',
        'clientId'        => 'ClientId',
        'errorCode'       => 'ErrorCode',
        'errorMessage'    => 'ErrorMessage',
        'instanceId'      => 'InstanceId',
        'instanceName'    => 'InstanceName',
        'internetIp'      => 'InternetIp',
        'intranetIp'      => 'IntranetIp',
        'ip'              => 'Ip',
        'regionId'        => 'RegionId',
        'uuid'            => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupEndTime) {
            $res['BackupEndTime'] = $this->backupEndTime;
        }
        if (null !== $this->backupJobId) {
            $res['BackupJobId'] = $this->backupJobId;
        }
        if (null !== $this->backupPlanId) {
            $res['BackupPlanId'] = $this->backupPlanId;
        }
        if (null !== $this->backupStartTime) {
            $res['BackupStartTime'] = $this->backupStartTime;
        }
        if (null !== $this->backupStatus) {
            $res['BackupStatus'] = $this->backupStatus;
        }
        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->internetIp) {
            $res['InternetIp'] = $this->internetIp;
        }
        if (null !== $this->intranetIp) {
            $res['IntranetIp'] = $this->intranetIp;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return backupRecordList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupEndTime'])) {
            $model->backupEndTime = $map['BackupEndTime'];
        }
        if (isset($map['BackupJobId'])) {
            $model->backupJobId = $map['BackupJobId'];
        }
        if (isset($map['BackupPlanId'])) {
            $model->backupPlanId = $map['BackupPlanId'];
        }
        if (isset($map['BackupStartTime'])) {
            $model->backupStartTime = $map['BackupStartTime'];
        }
        if (isset($map['BackupStatus'])) {
            $model->backupStatus = $map['BackupStatus'];
        }
        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InternetIp'])) {
            $model->internetIp = $map['InternetIp'];
        }
        if (isset($map['IntranetIp'])) {
            $model->intranetIp = $map['IntranetIp'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
