<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hsm\V20231113\Models\ListBackupsResponseBody;

use AlibabaCloud\Tea\Model;

class backups extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $autoImageCount;

    /**
     * @example 13
     *
     * @var string
     */
    public $backupHourInDay;

    /**
     * @example backup-1648438****
     *
     * @var string
     */
    public $backupId;

    /**
     * @example 3
     *
     * @var int
     */
    public $backupPeriod;

    /**
     * @example 1637229596000
     *
     * @var int
     */
    public $createTime;

    /**
     * @example 1682417553781
     *
     * @var int
     */
    public $expireTime;

    /**
     * @example hsm-cn-vj30bil8****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 3
     *
     * @var string
     */
    public $maxImageCount;

    /**
     * @example backup-te****
     *
     * @var string
     */
    public $name;

    /**
     * @example 1682417553781
     *
     * @var int
     */
    public $nextImageCreateTime;

    /**
     * @example hsm-cn-vj30bil8****
     *
     * @var string
     */
    public $ownerInstanceId;

    /**
     * @example ap-southeast-1
     *
     * @var string
     */
    public $regionId;

    /**
     * @example 1641275680000
     *
     * @var int
     */
    public $releaseTime;

    /**
     * @example normal backup
     *
     * @var string
     */
    public $remark;

    /**
     * @example backup-fdb897sdfg534-****
     *
     * @var string
     */
    public $spInstanceId;

    /**
     * @example ENABLED
     *
     * @var string
     */
    public $status;

    /**
     * @example NORMAL
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'autoImageCount'      => 'AutoImageCount',
        'backupHourInDay'     => 'BackupHourInDay',
        'backupId'            => 'BackupId',
        'backupPeriod'        => 'BackupPeriod',
        'createTime'          => 'CreateTime',
        'expireTime'          => 'ExpireTime',
        'instanceId'          => 'InstanceId',
        'maxImageCount'       => 'MaxImageCount',
        'name'                => 'Name',
        'nextImageCreateTime' => 'NextImageCreateTime',
        'ownerInstanceId'     => 'OwnerInstanceId',
        'regionId'            => 'RegionId',
        'releaseTime'         => 'ReleaseTime',
        'remark'              => 'Remark',
        'spInstanceId'        => 'SpInstanceId',
        'status'              => 'Status',
        'type'                => 'Type',
    ];

    public function validate()
    {
    }

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
