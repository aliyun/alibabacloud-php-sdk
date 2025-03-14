<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\CreateMediaLiveChannelRequest;

use AlibabaCloud\SDK\ICE\V20201109\Models\CreateMediaLiveChannelRequest\videoSettings\videoCodecSetting;
use AlibabaCloud\Tea\Model;

class videoSettings extends Model
{
    /**
     * @description The height of the output. Valid values: 0 to 2000. If you set it to 0 or leave it empty, the height automatically adapts to the specified width to maintain the original aspect ratio.
     *
     * @example 720
     *
     * @var int
     */
    public $height;

    /**
     * @description The name of the video settings. Letters, digits, hyphens (-), and underscores (_) are supported. It can be up to 64 characters in length.
     *
     * This parameter is required.
     *
     * @example video1
     *
     * @var string
     */
    public $name;

    /**
     * @description The video codec. Valid values: H264 and H265.
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
     * @description The width of the output. Valid values: 0 to 2000. If you set it to 0 or leave it empty, the width automatically adapts to the specified height to maintain the original aspect ratio.
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
