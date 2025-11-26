<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeImageInfosResponseBody\images\image\diskDeviceMappings;

use AlibabaCloud\Dara\Model;

class diskDeviceMapping extends Model
{
    /**
     * @var string
     */
    public $format;

    /**
     * @var string
     */
    public $size;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $imageId;
    protected $_name = [
        'format' => 'Format',
        'size' => 'Size',
        'type' => 'Type',
        'imageId' => 'imageId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
