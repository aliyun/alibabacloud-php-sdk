<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImageFromFamilyResponseBody\image\diskDeviceMappings;

use AlibabaCloud\Tea\Model;

class diskDeviceMapping extends Model
{
    /**
     * @description The device name of the disk. Example: /dev/xvdb.
     *
     * >  This parameter will be removed in the future. We recommend that you use other parameters to ensure future compatibility.
     * @example /dev/xvdb
     *
     * @var string
     */
    public $device;

    /**
     * @description The format of the image.
     *
     * @example qcow2
     *
     * @var string
     */
    public $format;

    /**
     * @description The OSS bucket that contains the imported image file.
     *
     * @example testEcsImport
     *
     * @var string
     */
    public $importOSSBucket;

    /**
     * @description The OSS object corresponding to the imported image file.
     *
     * @example imageImport
     *
     * @var string
     */
    public $importOSSObject;

    /**
     * @description The size of the disk. Unit: GiB.
     *
     * @example 80
     *
     * @var string
     */
    public $size;

    /**
     * @description The ID of the snapshot.
     *
     * @example s-bp17ot2q7x72ggtw****
     *
     * @var string
     */
    public $snapshotId;

    /**
     * @description The type of the image.
     *
     * @example custom
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'device'          => 'Device',
        'format'          => 'Format',
        'importOSSBucket' => 'ImportOSSBucket',
        'importOSSObject' => 'ImportOSSObject',
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
