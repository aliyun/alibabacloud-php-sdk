<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\CreateImagePipelineRequest\importImageOptions;

use AlibabaCloud\Tea\Model;

class diskDeviceMappings extends Model
{
    /**
     * @description The size of disk N in the custom image after the source image is imported.
     *
     * You can use this parameter to specify the sizes of the system disk and data disks in the custom image. When you specify the size of the system disk, make sure that the specified size is greater than or equal to the size of the source image file. Unit: GiB. Valid values:
     *
     *   When the N value is 1, this parameter specifies the size of the system disk in the custom image. Valid values: 1 to 2048.
     *   When the N value is an integer in the range of 2 to 17, this parameter specifies the size of a data disk in the custom image. Valid values: 1 to 2048.
     *
     * After the image file is uploaded to an OSS bucket, you can view the size of the image file in the OSS bucket.
     *
     * @example 40
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
     *
     * @example RAW
     *
     * @var string
     */
    public $format;

    /**
     * @description The OSS bucket where the image file is stored.
     *
     * @example ecsimageos
     *
     * @var string
     */
    public $OSSBucket;

    /**
     * @description The name (key) of the object that the uploaded image is stored as in the OSS bucket.
     *
     * @example CentOS_5.4_32.raw
     *
     * @var string
     */
    public $OSSObject;
    protected $_name = [
        'diskImageSize' => 'DiskImageSize',
        'format' => 'Format',
        'OSSBucket' => 'OSSBucket',
        'OSSObject' => 'OSSObject',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
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
     * @return diskDeviceMappings
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
