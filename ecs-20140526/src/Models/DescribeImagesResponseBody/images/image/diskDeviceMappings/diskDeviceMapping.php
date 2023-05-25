<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImagesResponseBody\images\image\diskDeviceMappings;

use AlibabaCloud\Tea\Model;

class diskDeviceMapping extends Model
{
    /**
     * @description The device name of the disk. Example: /dev/xvdb.
     *
     * > This parameter will be removed in the future. To ensure compatibility, we recommend that you use other parameters.
     * @example /dev/xvda
     *
     * @var string
     */
    public $device;

    /**
     * @description The image format.
     *
     * @example qcow2
     *
     * @var string
     */
    public $format;

    /**
     * @description The Object Storage Service (OSS) bucket that contains the imported image file.
     *
     * @example testEcsImport
     *
     * @var string
     */
    public $importOSSBucket;

    /**
     * @description The OSS object that corresponds to the imported image file.
     *
     * @example imageImport
     *
     * @var string
     */
    public $importOSSObject;

    /**
     * @description The progress of an image copy task.
     *
     * @example 32%
     *
     * @var string
     */
    public $progress;

    /**
     * @description The remaining amount of time required for an image copy task. Unit: seconds.
     *
     * @example 233
     *
     * @var int
     */
    public $remainTime;

    /**
     * @description The disk size.
     *
     * @example 60
     *
     * @var string
     */
    public $size;

    /**
     * @description The snapshot ID.
     *
     * @example s-bp17ot2q7x72ggtw****
     *
     * @var string
     */
    public $snapshotId;

    /**
     * @description The image type.
     *
     * @example system
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'device'          => 'Device',
        'format'          => 'Format',
        'importOSSBucket' => 'ImportOSSBucket',
        'importOSSObject' => 'ImportOSSObject',
        'progress'        => 'Progress',
        'remainTime'      => 'RemainTime',
        'size'            => 'Size',
        'snapshotId'      => 'SnapshotId',
        'type'            => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->device) {
            $res['Device'] = $this->device;
        }
        if (null !== $this->format) {
            $res['Format'] = $this->format;
        }
        if (null !== $this->importOSSBucket) {
            $res['ImportOSSBucket'] = $this->importOSSBucket;
        }
        if (null !== $this->importOSSObject) {
            $res['ImportOSSObject'] = $this->importOSSObject;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->remainTime) {
            $res['RemainTime'] = $this->remainTime;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->snapshotId) {
            $res['SnapshotId'] = $this->snapshotId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return diskDeviceMapping
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Device'])) {
            $model->device = $map['Device'];
        }
        if (isset($map['Format'])) {
            $model->format = $map['Format'];
        }
        if (isset($map['ImportOSSBucket'])) {
            $model->importOSSBucket = $map['ImportOSSBucket'];
        }
        if (isset($map['ImportOSSObject'])) {
            $model->importOSSObject = $map['ImportOSSObject'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['RemainTime'])) {
            $model->remainTime = $map['RemainTime'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['SnapshotId'])) {
            $model->snapshotId = $map['SnapshotId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
