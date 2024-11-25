<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\CreateLiveTranscodeTemplateRequest\templateConfig;

use AlibabaCloud\Tea\Model;

class videoParams extends Model
{
    /**
     * @description The bitrate of the output video. Unit: Kbit/s. Valid values: 1 to 6000.
     *
     * @example 2500
     *
     * @var string
     */
    public $bitrate;

    /**
     * @description The encoding type. Valid values:
     *
     *   H.264
     *   H.265
     *
     * @example H.264
     *
     * @var string
     */
    public $codec;

    /**
     * @description The frame rate of the output video. Unit: frames per second (FPS). Valid values: 1 to 60.
     *
     * @example 25
     *
     * @var string
     */
    public $fps;

    /**
     * @description The group of pictures (GOP) of the output video. Unit: frame. Valid values: 1 to 3000.
     *
     * @example 1000
     *
     * @var string
     */
    public $gop;

    /**
     * @description The height of the output video. Valid values: Height ≥ 128 max (Height,Width) ≤ 2560 min (Height,Width) ≤ 1440
     *
     * Note: The resolution of the output video that is transcoded by using the H.265 Narrowband HD transcoding template cannot exceed 1280 × 720 pixels.
     * @example 720
     *
     * @var string
     */
    public $height;

    /**
     * @description The encoding profile. The profile determines how a video is encoded. In most cases, a greater value indicates better image quality and higher resource consumption. Valid values: 1: baseline. This value is suitable for mobile devices. 2: main. This value is suitable for standard-definition devices. 3: high. This value is suitable for high-definition devices.
     *
     * @example 2
     *
     * @var string
     */
    public $profile;

    /**
     * @description The width of the output video. Valid values: Width ≥ 128 max (Height,Width) ≤ 2560 min (Height,Width) ≤ 1440
     *
     * Note: The resolution of the output video that is transcoded by using the H.265 Narrowband HD transcoding template cannot exceed 1280 × 720 pixels.
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
