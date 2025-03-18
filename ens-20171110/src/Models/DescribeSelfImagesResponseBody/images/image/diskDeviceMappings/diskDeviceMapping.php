<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeSelfImagesResponseBody\images\image\diskDeviceMappings;

use AlibabaCloud\Tea\Model;

class diskDeviceMapping extends Model
{
    /**
     * @description The format of the image.
     *
     * @example The format of the image.
     * raw
     * qcow2
     *
     * @var string
     */
    public $format;

    /**
     * @description The size of the disk. Unit: GiB.
     *
     * @example 100
     *
     * @var string
     */
    public $size;

    /**
     * @description The type of the disk. Valid values:
     *
     *   system: system disk.
     *   data: data disk.
     *
     * @example Data
     *
     * @var string
     */
    public $type;

    /**
     * @description The ID of image.
     *
     * @example i-test
     *
     * @var string
     */
    public $imageId;
    protected $_name = [
        'format' => 'Format',
        'size' => 'Size',
        'type' => 'Type',
        'imageId' => 'imageId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->format) {
            $res['Format'] = $this->format;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->imageId) {
            $res['imageId'] = $this->imageId;
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
        if (isset($map['Format'])) {
            $model->format = $map['Format'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['imageId'])) {
            $model->imageId = $map['imageId'];
        }

        return $model;
    }
}
