<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaLiveChannelResponseBody\channel;

use AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaLiveChannelResponseBody\channel\videoSettings\videoCodecSetting;
use AlibabaCloud\Tea\Model;

class videoSettings extends Model
{
    /**
     * @description The height of the video in pixels.
     *
     * @example 720
     *
     * @var int
     */
    public $height;

    /**
     * @description The name of the video settings.
     *
     * @example video1
     *
     * @var string
     */
    public $name;

    /**
     * @description The video codec.
     *
     * @example H264
     *
     * @var string
     */
    public $videoCodec;

    /**
     * @description The video encoding settings.
     *
     * @var videoCodecSetting
     */
    public $videoCodecSetting;

    /**
     * @description The width of the video in pixels.
     *
     * @example 1280
     *
     * @var int
     */
    public $width;
    protected $_name = [
        'height' => 'Height',
        'name' => 'Name',
        'videoCodec' => 'VideoCodec',
        'videoCodecSetting' => 'VideoCodecSetting',
        'width' => 'Width',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->videoCodec) {
            $res['VideoCodec'] = $this->videoCodec;
        }
        if (null !== $this->videoCodecSetting) {
            $res['VideoCodecSetting'] = null !== $this->videoCodecSetting ? $this->videoCodecSetting->toMap() : null;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return videoSettings
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['VideoCodec'])) {
            $model->videoCodec = $map['VideoCodec'];
        }
        if (isset($map['VideoCodecSetting'])) {
            $model->videoCodecSetting = videoCodecSetting::fromMap($map['VideoCodecSetting']);
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        return $model;
    }
}
