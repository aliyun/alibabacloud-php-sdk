<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class ImageMediaMetadata extends Model
{
    /**
     * @var int
     */
    public $height;

    /**
     * @var string
     */
    public $takenAt;

    /**
     * @var int
     */
    public $width;
    protected $_name = [
        'height'  => 'height',
        'takenAt' => 'taken_at',
        'width'   => 'width',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->height) {
            $res['height'] = $this->height;
        }
        if (null !== $this->takenAt) {
            $res['taken_at'] = $this->takenAt;
        }
        if (null !== $this->width) {
            $res['width'] = $this->width;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ImageMediaMetadata
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['height'])) {
            $model->height = $map['height'];
        }
        if (isset($map['taken_at'])) {
            $model->takenAt = $map['taken_at'];
        }
        if (isset($map['width'])) {
            $model->width = $map['width'];
        }

        return $model;
    }
}
