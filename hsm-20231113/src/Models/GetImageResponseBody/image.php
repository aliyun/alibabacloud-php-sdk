<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hsm\V20231113\Models\GetImageResponseBody;

use AlibabaCloud\Tea\Model;

class image extends Model
{
    /**
     * @description The ID of the backup.
     *
     * @example backup-1618017313
     *
     * @var string
     */
    public $backupId;

    /**
     * @description The time when the image was copied. The value is accurate to the millisecond. The value is a UNIX timestamp.
     *
     * @example 1641275680000
     *
     * @var int
     */
    public $copyTime;

    /**
     * @description The time when the image was generated. The value is accurate to the millisecond. The value is a UNIX timestamp.
     *
     * @example 1786776567788
     *
     * @var int
     */
    public $exportTime;

    /**
     * @description The ID of the image.
     *
     * @example image-wz9c5ths5dfuwx47****
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The ID of the hardware security module (HSM).
     *
     * @example hsm-cn-9lb32vll****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The image generation mode. Valid values:
     *
     *   PERIODIC
     *   MANUAL
     *
     * @example MANUAL
     *
     * @var string
     */
    public $mode;

    /**
     * @description The ID of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The description of the backup.
     *
     * @example hsm-test
     *
     * @var string
     */
    public $remark;

    /**
     * @description The ID of the source backup.
     *
     * @example backup-gfuiasdfa****
     *
     * @var string
     */
    public $sourceBackupUid;

    /**
     * @description The ID of the source image.
     *
     * @example image-kklhhhh****
     *
     * @var string
     */
    public $sourceImageUid;

    /**
     * @description The ID of the source HSM.
     *
     * @example hsm-wz9fnmvx190shfbk****
     *
     * @var string
     */
    public $sourceInstanceId;

    /**
     * @description The region ID of the source image.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $sourceRegionId;

    /**
     * @description The status of the image. Valid values:
     *
     *   NEW
     *   DELETED
     *   CREATING
     *   NORMAL
     *
     * @example NEW
     *
     * @var string
     */
    public $status;

    /**
     * @description The digest of the HSM.
     *
     * @example 3kGeHnmQzXwSsfF0Jk9eJYhe2gP6An0/HlYIiZh1****
     *
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

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return image
     */
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
