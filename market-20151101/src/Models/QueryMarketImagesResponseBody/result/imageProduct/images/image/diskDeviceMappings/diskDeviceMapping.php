<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101\Models\QueryMarketImagesResponseBody\result\imageProduct\images\image\diskDeviceMappings;

use AlibabaCloud\Tea\Model;

class diskDeviceMapping extends Model
{
    /**
     * @var string
     */
    public $device;

    /**
     * @var string
     */
    public $diskType;

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
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $snapshotId;
    protected $_name = [
        'device'          => 'Device',
        'diskType'        => 'DiskType',
        'format'          => 'Format',
        'importOSSBucket' => 'ImportOSSBucket',
        'importOSSObject' => 'ImportOSSObject',
        'size'            => 'Size',
        'snapshotId'      => 'SnapshotId',
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
        if (null !== $this->diskType) {
            $res['DiskType'] = $this->diskType;
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
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->snapshotId) {
            $res['SnapshotId'] = $this->snapshotId;
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
        if (isset($map['DiskType'])) {
            $model->diskType = $map['DiskType'];
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
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['SnapshotId'])) {
            $model->snapshotId = $map['SnapshotId'];
        }

        return $model;
    }
}
