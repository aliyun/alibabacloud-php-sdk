<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class LiveChannelVideo extends Model
{
    /**
     * @description description
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @description description
     *
     * @var string
     */
    public $codec;

    /**
     * @description description
     *
     * @var int
     */
    public $frameRate;

    /**
     * @description description
     *
     * @var int
     */
    public $height;

    /**
     * @description description
     *
     * @var int
     */
    public $width;
    protected $_name = [
        'bandwidth' => 'Bandwidth',
        'codec'     => 'Codec',
        'frameRate' => 'FrameRate',
        'height'    => 'Height',
        'width'     => 'Width',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->codec) {
            $res['Codec'] = $this->codec;
        }
        if (null !== $this->frameRate) {
            $res['FrameRate'] = $this->frameRate;
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
     * @return LiveChannelVideo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['Codec'])) {
            $model->codec = $map['Codec'];
        }
        if (isset($map['FrameRate'])) {
            $model->frameRate = $map['FrameRate'];
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
