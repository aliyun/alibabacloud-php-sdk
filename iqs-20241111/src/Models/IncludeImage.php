<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20241111\Models;

use AlibabaCloud\Tea\Model;

class IncludeImage extends Model
{
    /**
     * @example 324
     *
     * @var int
     */
    public $height;

    /**
     * @example http://k.sinaimg.cn/n/sinakd20121/594/w2048h946/20240328/74cf-32c0d62e843df76567d760b4459d57c1.jpg/w700d1q75cms.jpg
     *
     * @var string
     */
    public $imageLink;

    /**
     * @example 700
     *
     * @var int
     */
    public $width;
    protected $_name = [
        'height'    => 'height',
        'imageLink' => 'imageLink',
        'width'     => 'width',
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
        if (null !== $this->imageLink) {
            $res['imageLink'] = $this->imageLink;
        }
        if (null !== $this->width) {
            $res['width'] = $this->width;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return IncludeImage
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['height'])) {
            $model->height = $map['height'];
        }
        if (isset($map['imageLink'])) {
            $model->imageLink = $map['imageLink'];
        }
        if (isset($map['width'])) {
            $model->width = $map['width'];
        }

        return $model;
    }
}
