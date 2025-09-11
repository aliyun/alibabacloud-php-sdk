<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hsm\V20231113\Models\GetImageResponseBody;

use AlibabaCloud\Dara\Model;

class image extends Model
{
    /**
     * @var string
     */
    public $backupId;

    /**
     * @var int
     */
    public $copyTime;

    /**
     * @var int
     */
    public $exportTime;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $sourceBackupUid;

    /**
     * @var string
     */
    public $sourceImageUid;

    /**
     * @var string
     */
    public $sourceInstanceId;

    /**
     * @var string
     */
    public $sourceRegionId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $vsmDigest;
    protected $_name = [
        'backupId' => 'BackupId',
        'copyTime' => 'CopyTime',
        'exportTime' => 'ExportTime',
        'imageId' => 'ImageId',
        'instanceId' => 'InstanceId',
        'mode' => 'Mode',
        'regionId' => 'RegionId',
        'remark' => 'Remark',
        'sourceBackupUid' => 'SourceBackupUid',
        'sourceImageUid' => 'SourceImageUid',
        'sourceInstanceId' => 'SourceInstanceId',
        'sourceRegionId' => 'SourceRegionId',
        'status' => 'Status',
        'vsmDigest' => 'VsmDigest',
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

        if (null !== $this->copyTime) {
            $res['CopyTime'] = $this->copyTime;
        }

        if (null !== $this->exportTime) {
            $res['ExportTime'] = $this->exportTime;
        }

        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->sourceBackupUid) {
            $res['SourceBackupUid'] = $this->sourceBackupUid;
        }

        if (null !== $this->sourceImageUid) {
            $res['SourceImageUid'] = $this->sourceImageUid;
        }

        if (null !== $this->sourceInstanceId) {
            $res['SourceInstanceId'] = $this->sourceInstanceId;
        }

        if (null !== $this->sourceRegionId) {
            $res['SourceRegionId'] = $this->sourceRegionId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->vsmDigest) {
            $res['VsmDigest'] = $this->vsmDigest;
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

        if (isset($map['CopyTime'])) {
            $model->copyTime = $map['CopyTime'];
        }

        if (isset($map['ExportTime'])) {
            $model->exportTime = $map['ExportTime'];
        }

        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        if (isset($map['SourceBackupUid'])) {
            $model->sourceBackupUid = $map['SourceBackupUid'];
        }

        if (isset($map['SourceImageUid'])) {
            $model->sourceImageUid = $map['SourceImageUid'];
        }

        if (isset($map['SourceInstanceId'])) {
            $model->sourceInstanceId = $map['SourceInstanceId'];
        }

        if (isset($map['SourceRegionId'])) {
            $model->sourceRegionId = $map['SourceRegionId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['VsmDigest'])) {
            $model->vsmDigest = $map['VsmDigest'];
        }

        return $model;
    }
}
