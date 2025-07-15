<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterConfigResponseBody\transcodeConfig\customParams;

use AlibabaCloud\Tea\Model;

class video extends Model
{
    /**
     * @description The video bitrate.
     *
     * @example 300
     *
     * @var int
     */
    public $bitrate;

    /**
     * @description The video frame rate.
     *
     * @example 300
     *
     * @var int
     */
    public $fps;

    /**
     * @description The video height. Unit: pixels.
     *
     * @example 720
     *
     * @var int
     */
    public $height;

    /**
     * @description The video width. Unit: pixels.
     *
     * @example 1080
     *
     * @var int
     */
    public $width;
    protected $_name = [
        'bitrate' => 'bitrate',
        'fps' => 'fps',
        'height' => 'height',
        'width' => 'width',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->bitrate) {
            $res['bitrate'] = $this->bitrate;
        }
        if (null !== $this->fps) {
            $res['fps'] = $this->fps;
        }
        if (null !== $this->height) {
            $res['height'] = $this->height;
        }
        if (null !== $this->width) {
            $res['width'] = $this->width;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return video
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['bitrate'])) {
            $model->bitrate = $map['bitrate'];
        }
        if (isset($map['fps'])) {
            $model->fps = $map['fps'];
        }
        if (isset($map['height'])) {
            $model->height = $map['height'];
        }
        if (isset($map['width'])) {
            $model->width = $map['width'];
        }

        return $model;
    }
}
