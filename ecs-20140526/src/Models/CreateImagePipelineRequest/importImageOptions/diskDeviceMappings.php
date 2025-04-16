<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\CreateImagePipelineRequest\importImageOptions;

use AlibabaCloud\Dara\Model;

class diskDeviceMappings extends Model
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
        'format' => 'Format',
        'OSSBucket' => 'OSSBucket',
        'OSSObject' => 'OSSObject',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
