<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetLiveTranscodeTemplateResponseBody\templateContent\templateConfig;

use AlibabaCloud\Tea\Model;

class videoParams extends Model
{
    /**
     * @description The bitrate of the output video.
     *
     * @example 2500
     *
     * @var string
     */
    public $bitrate;

    /**
     * @description The encoding type.
     *
     * @example H.264
     *
     * @var string
     */
    public $codec;

    /**
     * @description The frame rate of the output video.
     *
     * @example 30
     *
     * @var string
     */
    public $fps;

    /**
     * @description The group of pictures (GOP) of the output video.
     *
     * @example 1000
     *
     * @var string
     */
    public $gop;

    /**
     * @description The height of the output video.
     *
     * @example 720
     *
     * @var string
     */
    public $height;

    /**
     * @description The encoding profile.
     *
     * @example 2
     *
     * @var string
     */
    public $profile;

    /**
     * @description The width of the output video.
     *
     * @example 1280
     *
     * @var string
     */
    public $width;
    protected $_name = [
        'bitrate' => 'Bitrate',
        'codec'   => 'Codec',
        'fps'     => 'Fps',
        'gop'     => 'Gop',
        'height'  => 'Height',
        'profile' => 'Profile',
        'width'   => 'Width',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bitrate) {
            $res['Bitrate'] = $this->bitrate;
        }
        if (null !== $this->codec) {
            $res['Codec'] = $this->codec;
        }
        if (null !== $this->fps) {
            $res['Fps'] = $this->fps;
        }
        if (null !== $this->gop) {
            $res['Gop'] = $this->gop;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->profile) {
            $res['Profile'] = $this->profile;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return videoParams
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bitrate'])) {
            $model->bitrate = $map['Bitrate'];
        }
        if (isset($map['Codec'])) {
            $model->codec = $map['Codec'];
        }
        if (isset($map['Fps'])) {
            $model->fps = $map['Fps'];
        }
        if (isset($map['Gop'])) {
            $model->gop = $map['Gop'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['Profile'])) {
            $model->profile = $map['Profile'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        return $model;
    }
}
