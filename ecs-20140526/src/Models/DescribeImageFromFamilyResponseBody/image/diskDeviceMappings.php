<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImageFromFamilyResponseBody\image;

use AlibabaCloud\Tea\Model;

class diskDeviceMappings extends Model
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
    public $snapshotId;

    /**
     * @var string
     */
    public $importOSSObject;

    /**
     * @var string
     */
    public $size;

    /**
     * @var string
     */
    public $device;

    /**
     * @var string
     */
    public $format;
    protected $_name = [
        'type'            => 'Type',
        'importOSSBucket' => 'ImportOSSBucket',
        'snapshotId'      => 'SnapshotId',
        'importOSSObject' => 'ImportOSSObject',
        'size'            => 'Size',
        'device'          => 'Device',
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
        if (null !== $this->snapshotId) {
            $res['SnapshotId'] = $this->snapshotId;
        }
        if (null !== $this->importOSSObject) {
            $res['ImportOSSObject'] = $this->importOSSObject;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->device) {
            $res['Device'] = $this->device;
        }
        if (null !== $this->format) {
            $res['Format'] = $this->format;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return diskDeviceMappings
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
        if (isset($map['SnapshotId'])) {
            $model->snapshotId = $map['SnapshotId'];
        }
        if (isset($map['ImportOSSObject'])) {
            $model->importOSSObject = $map['ImportOSSObject'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['Device'])) {
            $model->device = $map['Device'];
        }
        if (isset($map['Format'])) {
            $model->format = $map['Format'];
        }

        return $model;
    }
}
