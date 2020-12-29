<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImagesResponseBody\images\image\diskDeviceMappings;

use AlibabaCloud\Tea\Model;

class diskDeviceMapping extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $importOSSBucket;

    /**
     * @var string
     */
    public $progress;

    /**
     * @var string
     */
    public $snapshotId;

    /**
     * @var string
     */
    public $importOSSObject;

    /**
     * @var string
     */
    public $device;

    /**
     * @var string
     */
    public $size;

    /**
     * @var int
     */
    public $remainTime;

    /**
     * @var string
     */
    public $format;
    protected $_name = [
        'type'            => 'Type',
        'importOSSBucket' => 'ImportOSSBucket',
        'progress'        => 'Progress',
        'snapshotId'      => 'SnapshotId',
        'importOSSObject' => 'ImportOSSObject',
        'device'          => 'Device',
        'size'            => 'Size',
        'remainTime'      => 'RemainTime',
        'format'          => 'Format',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->importOSSBucket) {
            $res['ImportOSSBucket'] = $this->importOSSBucket;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->snapshotId) {
            $res['SnapshotId'] = $this->snapshotId;
        }
        if (null !== $this->importOSSObject) {
            $res['ImportOSSObject'] = $this->importOSSObject;
        }
        if (null !== $this->device) {
            $res['Device'] = $this->device;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->remainTime) {
            $res['RemainTime'] = $this->remainTime;
        }
        if (null !== $this->format) {
            $res['Format'] = $this->format;
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['ImportOSSBucket'])) {
            $model->importOSSBucket = $map['ImportOSSBucket'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['SnapshotId'])) {
            $model->snapshotId = $map['SnapshotId'];
        }
        if (isset($map['ImportOSSObject'])) {
            $model->importOSSObject = $map['ImportOSSObject'];
        }
        if (isset($map['Device'])) {
            $model->device = $map['Device'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['RemainTime'])) {
            $model->remainTime = $map['RemainTime'];
        }
        if (isset($map['Format'])) {
            $model->format = $map['Format'];
        }

        return $model;
    }
}
