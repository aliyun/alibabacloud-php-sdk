<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hsm\V20231113\Models\ListBackupsResponseBody;

use AlibabaCloud\Tea\Model;

class backups extends Model
{
    /**
     * @description The number of images that are automatically backed up.
     *
     * @example 1
     *
     * @var int
     */
    public $autoImageCount;

    /**
     * @description The backup time on the hour that is in the 24-hour clock.
     *
     * @example 13
     *
     * @var string
     */
    public $backupHourInDay;

    /**
     * @description The ID of the backup.
     *
     * @example backup-1648438****
     *
     * @var string
     */
    public $backupId;

    /**
     * @description The automatic backup cycle. Unit: days.
     *
     * @example 3
     *
     * @var int
     */
    public $backupPeriod;

    /**
     * @description The time when the backup is created. The value is accurate to the millisecond. The value is a UNIX timestamp.
     *
     * @example 1637229596000
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The expiration time of the backup. The value is accurate to the millisecond. The value is a UNIX timestamp.
     *
     * @example 1682417553781
     *
     * @var int
     */
    public $expireTime;

    /**
     * @description The ID of the HSM that is associated with the backup.
     *
     * @example hsm-cn-vj30bil8****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The number of images.
     *
     * @example 3
     *
     * @var string
     */
    public $maxImageCount;

    /**
     * @description The name of the backup.
     *
     * @example backup-te****
     *
     * @var string
     */
    public $name;

    /**
     * @description The time when the image is created next time. The value is accurate to the millisecond. The value is a UNIX timestamp.
     *
     * @example 1682417553781
     *
     * @var int
     */
    public $nextImageCreateTime;

    /**
     * @description The ID of the HSM to which the backup belongs. This parameter is available only for HSM backups outside the Chinese mainland and the value of this parameter is consistent with the value of InstanceId.
     *
     * @example hsm-cn-vj30bil8****
     *
     * @var string
     */
    public $ownerInstanceId;

    /**
     * @description The ID of the region.
     *
     * @example ap-southeast-1
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The time when the backup is released. The value is accurate to the millisecond. The value is a UNIX timestamp.
     *
     * @example 1641275680000
     *
     * @var int
     */
    public $releaseTime;

    /**
     * @description The description of the backup.
     *
     * @example normal backup
     *
     * @var string
     */
    public $remark;

    /**
     * @description The ID of the backup. This parameter is available only for HSM backups in the Chinese mainland.
     *
     * @example backup-fdb897sdfg534-****
     *
     * @var string
     */
    public $spInstanceId;

    /**
     * @description The status of the backup. Valid values:
     *
     *   NEW: The backup is disabled.
     *   EXPIRED: The backup expired.
     *   ENABLED: The backup is enabled.
     *
     * @example ENABLED
     *
     * @var string
     */
    public $status;

    /**
     * @description The type of the backup. Valid values:
     *
     *   DEFAULT
     *   NORMAL
     *
     * @example NORMAL
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'autoImageCount' => 'AutoImageCount',
        'backupHourInDay' => 'BackupHourInDay',
        'backupId' => 'BackupId',
        'backupPeriod' => 'BackupPeriod',
        'createTime' => 'CreateTime',
        'expireTime' => 'ExpireTime',
        'instanceId' => 'InstanceId',
        'maxImageCount' => 'MaxImageCount',
        'name' => 'Name',
        'nextImageCreateTime' => 'NextImageCreateTime',
        'ownerInstanceId' => 'OwnerInstanceId',
        'regionId' => 'RegionId',
        'releaseTime' => 'ReleaseTime',
        'remark' => 'Remark',
        'spInstanceId' => 'SpInstanceId',
        'status' => 'Status',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoImageCount) {
            $res['AutoImageCount'] = $this->autoImageCount;
        }
        if (null !== $this->backupHourInDay) {
            $res['BackupHourInDay'] = $this->backupHourInDay;
        }
        if (null !== $this->backupId) {
            $res['BackupId'] = $this->backupId;
        }
        if (null !== $this->backupPeriod) {
            $res['BackupPeriod'] = $this->backupPeriod;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->maxImageCount) {
            $res['MaxImageCount'] = $this->maxImageCount;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->nextImageCreateTime) {
            $res['NextImageCreateTime'] = $this->nextImageCreateTime;
        }
        if (null !== $this->ownerInstanceId) {
            $res['OwnerInstanceId'] = $this->ownerInstanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->releaseTime) {
            $res['ReleaseTime'] = $this->releaseTime;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->spInstanceId) {
            $res['SpInstanceId'] = $this->spInstanceId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return backups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoImageCount'])) {
            $model->autoImageCount = $map['AutoImageCount'];
        }
        if (isset($map['BackupHourInDay'])) {
            $model->backupHourInDay = $map['BackupHourInDay'];
        }
        if (isset($map['BackupId'])) {
            $model->backupId = $map['BackupId'];
        }
        if (isset($map['BackupPeriod'])) {
            $model->backupPeriod = $map['BackupPeriod'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['MaxImageCount'])) {
            $model->maxImageCount = $map['MaxImageCount'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NextImageCreateTime'])) {
            $model->nextImageCreateTime = $map['NextImageCreateTime'];
        }
        if (isset($map['OwnerInstanceId'])) {
            $model->ownerInstanceId = $map['OwnerInstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ReleaseTime'])) {
            $model->releaseTime = $map['ReleaseTime'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['SpInstanceId'])) {
            $model->spInstanceId = $map['SpInstanceId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
