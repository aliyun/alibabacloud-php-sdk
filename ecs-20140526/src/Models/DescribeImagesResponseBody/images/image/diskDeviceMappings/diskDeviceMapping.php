<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImagesResponseBody\images\image\diskDeviceMappings;

use AlibabaCloud\Dara\Model;

class diskDeviceMapping extends Model
{
    /**
     * @var string
     */
    public $device;
    /**
     * @var bool
     */
    public $encrypted;
    /**
     * @var string
     */
    public $format;
    /**
     * @var string
     */
    public $importOSSBucket;
    /**
     * @var string
     */
    public $importOSSObject;
    /**
     * @var string
     */
    public $progress;
    /**
     * @var int
     */
    public $remainTime;
    /**
     * @var string
     */
    public $size;
    /**
     * @var string
     */
    public $snapshotId;
    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'device'          => 'Device',
        'encrypted'       => 'Encrypted',
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
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->device) {
            $res['Device'] = $this->device;
        }

        if (null !== $this->encrypted) {
            $res['Encrypted'] = $this->encrypted;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Device'])) {
            $model->device = $map['Device'];
        }

        if (isset($map['Encrypted'])) {
            $model->encrypted = $map['Encrypted'];
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
