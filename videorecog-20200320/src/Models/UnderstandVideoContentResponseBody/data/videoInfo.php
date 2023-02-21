<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videorecog\V20200320\Models\UnderstandVideoContentResponseBody\data;

use AlibabaCloud\Tea\Model;

class videoInfo extends Model
{
    /**
     * @example 43380
     *
     * @var int
     */
    public $duration;

    /**
     * @example 25.0
     *
     * @var float
     */
    public $fps;

    /**
     * @example 1280
     *
     * @var int
     */
    public $height;

    /**
     * @example 720
     *
     * @var int
     */
    public $width;
    protected $_name = [
        'duration' => 'Duration',
        'fps'      => 'Fps',
        'height'   => 'Height',
        'width'    => 'Width',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->fps) {
            $res['Fps'] = $this->fps;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return videoInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['Fps'])) {
            $model->fps = $map['Fps'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        return $model;
    }
}
