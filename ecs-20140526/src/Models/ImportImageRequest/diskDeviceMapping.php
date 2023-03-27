<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\ImportImageRequest;

use AlibabaCloud\Tea\Model;

class diskDeviceMapping extends Model
{
    /**
     * @description The device name of disk N in the custom image.
     *
     * > This parameter will be deprecated in the future. To ensure future compatibility, we recommend that you do not use this parameter.
     * @example null
     *
     * @var string
     */
    public $device;

    /**
     * @description The size of the custom image.
     *
     * > This parameter will be deprecated in the future. We recommend that you use the `DiskDeviceMapping.N.DiskImageSize` parameter to ensure future compatibility.
     * @example 80
     *
     * @var int
     */
    public $diskImSize;

    /**
     * @description The size of disk N in the custom image.
     *
     * You can use this parameter to specify the sizes of the system disk and data disks in the custom image. Make sure that the specified size is greater than or equal to the size of the custom image file. Unit: GiB. Valid values:
     *
     *   When the value of N is 1, this parameter specifies the size of the system disk in the custom image. Valid values: 5 to 500.
     *   When the value of N ranges from 2 to 17, this parameter specifies the size of the data disk in the custom image. Valid values: 5 to 2000.
     *
     * After the source image is uploaded to an OSS bucket, you can view the size of the image in the OSS bucket.
     * @example 80
     *
     * @var int
     */
    public $diskImageSize;

    /**
     * @description The format of the image. Valid values:
     *
     *   RAW
     *   VHD
     *   QCOW2
     *
     * This parameter is empty by default, which indicates that the system checks the format of the image and uses the check result as the value of this parameter.
     * @example QCOW2
     *
     * @var string
     */
    public $format;

    /**
     * @description The OSS bucket in which the source image is stored.
     *
     * > If this is the first time that you import images to ECS, you must use RAM to authorize ECS to access your OSS buckets. Otherwise, the `NoSetRoletoECSServiceAcount` error code is returned. For more information, see the **Description** section of this topic.
     * @example ecsimageos
     *
     * @var string
     */
    public $OSSBucket;

    /**
     * @description The name (key) of the uploaded source image stored in the OSS bucket.
     *
     * @example CentOS_5.4_32.raw
     *
     * @var string
     */
    public $OSSObject;
    protected $_name = [
        'device'        => 'Device',
        'diskImSize'    => 'DiskImSize',
        'diskImageSize' => 'DiskImageSize',
        'format'        => 'Format',
        'OSSBucket'     => 'OSSBucket',
        'OSSObject'     => 'OSSObject',
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
        if (null !== $this->diskImSize) {
            $res['DiskImSize'] = $this->diskImSize;
        }
        if (null !== $this->diskImageSize) {
            $res['DiskImageSize'] = $this->diskImageSize;
        }
        if (null !== $this->format) {
            $res['Format'] = $this->format;
        }
        if (null !== $this->OSSBucket) {
            $res['OSSBucket'] = $this->OSSBucket;
        }
        if (null !== $this->OSSObject) {
            $res['OSSObject'] = $this->OSSObject;
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
        if (isset($map['DiskImSize'])) {
            $model->diskImSize = $map['DiskImSize'];
        }
        if (isset($map['DiskImageSize'])) {
            $model->diskImageSize = $map['DiskImageSize'];
        }
        if (isset($map['Format'])) {
            $model->format = $map['Format'];
        }
        if (isset($map['OSSBucket'])) {
            $model->OSSBucket = $map['OSSBucket'];
        }
        if (isset($map['OSSObject'])) {
            $model->OSSObject = $map['OSSObject'];
        }

        return $model;
    }
}
