<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImagePipelinesResponseBody\imagePipeline\imagePipelineSet\importImageOptions\diskDeviceMappings;

use AlibabaCloud\Tea\Model;

class diskDeviceMapping extends Model
{
    /**
     * @var int
     */
    public $diskImageSize;

    /**
     * @var string
     */
    public $format;

    /**
     * @var string
     */
    public $OSSBucket;

    /**
     * @var string
     */
    public $OSSObject;
    protected $_name = [
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
