<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20241111\Models;

use AlibabaCloud\Dara\Model;

class ScanFileInfo extends Model
{
    /**
     * @var int
     */
    public $angle;

    /**
     * @var int
     */
    public $height;

    /**
     * @var string
     */
    public $imageBase64;

    /**
     * @var int
     */
    public $width;
    protected $_name = [
        'angle' => 'angle',
        'height' => 'height',
        'imageBase64' => 'imageBase64',
        'width' => 'width',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->angle) {
            $res['angle'] = $this->angle;
        }

        if (null !== $this->height) {
            $res['height'] = $this->height;
        }

        if (null !== $this->imageBase64) {
            $res['imageBase64'] = $this->imageBase64;
        }

        if (null !== $this->width) {
            $res['width'] = $this->width;
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
        if (isset($map['angle'])) {
            $model->angle = $map['angle'];
        }

        if (isset($map['height'])) {
            $model->height = $map['height'];
        }

        if (isset($map['imageBase64'])) {
            $model->imageBase64 = $map['imageBase64'];
        }

        if (isset($map['width'])) {
            $model->width = $map['width'];
        }

        return $model;
    }
}
