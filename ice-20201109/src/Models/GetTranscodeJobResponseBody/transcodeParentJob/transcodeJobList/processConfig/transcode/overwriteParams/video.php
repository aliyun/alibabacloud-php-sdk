<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetTranscodeJobResponseBody\transcodeParentJob\transcodeJobList\processConfig\transcode\overwriteParams;

use AlibabaCloud\Tea\Model;

class video extends Model
{
    /**
     * @description The maximum adaptive bitrate (ABR). This parameter takes effect only for Narrowband HD 1.0.
     *
     *   Valid values: [10,50000].
     *   Unit: Kbit/s.
     *
     * @example 6000
     *
     * @var string
     */
    public $abrMax;

    /**
     * @description The average bitrate of the video.
     *
     *   Valid values: [10,50000].
     *   Unit: Kbit/s.
     *
     * @example 3000
     *
     * @var string
     */
    public $bitrate;

    /**
     * @description The buffer size.
     *
     *   Valid values: [1000,128000].
     *   Default value: 6000.
     *   Unit: Kbit/s.
     *
     * @example 6000
     *
     * @var string
     */
    public $bufsize;

    /**
     * @description The encoding format.
     *
     * @example H.264
     *
     * @var string
     */
    public $codec;

    /**
     * @description The constant rate factor.
     *
     *   Valid values: [0,51].
     *   Default value: 23 if the encoding format is H.264, or 26 if the encoding format is H.265.
     *
     * If this parameter is specified, the value of Bitrate becomes invalid.
     * @example 23
     *
     * @var string
     */
    public $crf;

    /**
     * @description The method of video cropping. Valid values:
     *
     *   border: automatically detects and removes black bars.
     *   A value in the width:height:left:top format: crops the videos based on the custom settings.
     *
     * @example 1280:800:0:140
     *
     * @var string
     */
    public $crop;

    /**
     * @description The frame rate.
     *
     *   Valid values: (0,60]. The value is 60 if the frame rate of the input video exceeds 60.
     *   Default value: the frame rate of the input video.
     *
     * @example 25
     *
     * @var string
     */
    public $fps;

    /**
     * @description The maximum number of frames between two keyframes.
     *
     *   Valid values: [1,1080000].
     *   Default value: 250.
     *
     * @example 250
     *
     * @var string
     */
    public $gop;

    /**
     * @description The height of the output video.
     *
     *   Valid values: [128,4096].
     *   Unit: pixels.
     *
     * Default value: the height of the input video.
     * @example 1080
     *
     * @var string
     */
    public $height;

    /**
     * @description Indicates whether the auto-rotate screen feature is enabled.
     *
     * @example false
     *
     * @var string
     */
    public $longShortMode;

    /**
     * @description The maximum bitrate of the output video.
     *
     *   Valid values: [10,50000].
     *   Unit: Kbit/s.
     *
     * @example 9000
     *
     * @var string
     */
    public $maxrate;

    /**
     * @description The black bars added to the video. Format: width:height:left:top.
     *
     * @example 1280:800:0:140
     *
     * @var string
     */
    public $pad;

    /**
     * @description The pixel format of the video. Valid values: standard pixel formats such as yuv420p and yuvj420p.
     *
     * @example yuv420p
     *
     * @var string
     */
    public $pixFmt;

    /**
     * @description The preset video algorithm. This parameter takes effect only if the encoding format is H.264. Valid values: veryfast, fast, medium, slow, and slower. Default value: medium.
     *
     * @example medium
     *
     * @var string
     */
    public $preset;

    /**
     * @description The encoding profile. Valid values: baseline, main, and high.
     *
     *   baseline: applicable to mobile devices.
     *   main: applicable to standard-definition devices.
     *   high: applicable to high-definition devices.
     *
     * Default value: high.
     * @example Main
     *
     * @var string
     */
    public $profile;

    /**
     * @description Indicates whether the video was removed.
     *
     * @example false
     *
     * @var string
     */
    public $remove;

    /**
     * @description The scan mode. Valid values: interlaced and progressive.
     *
     * @example progressive
     *
     * @var string
     */
    public $scanMode;

    /**
     * @description The width of the output video.
     *
     *   Valid values: [128,4096].
     *   Unit: pixels.
     *
     * Default value: the width of the input video.
     * @example 1920
     *
     * @var string
     */
    public $width;
    protected $_name = [
        'abrMax'        => 'AbrMax',
        'bitrate'       => 'Bitrate',
        'bufsize'       => 'Bufsize',
        'codec'         => 'Codec',
        'crf'           => 'Crf',
        'crop'          => 'Crop',
        'fps'           => 'Fps',
        'gop'           => 'Gop',
        'height'        => 'Height',
        'longShortMode' => 'LongShortMode',
        'maxrate'       => 'Maxrate',
        'pad'           => 'Pad',
        'pixFmt'        => 'PixFmt',
        'preset'        => 'Preset',
        'profile'       => 'Profile',
        'remove'        => 'Remove',
        'scanMode'      => 'ScanMode',
        'width'         => 'Width',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->abrMax) {
            $res['AbrMax'] = $this->abrMax;
        }
        if (null !== $this->bitrate) {
            $res['Bitrate'] = $this->bitrate;
        }
        if (null !== $this->bufsize) {
            $res['Bufsize'] = $this->bufsize;
        }
        if (null !== $this->codec) {
            $res['Codec'] = $this->codec;
        }
        if (null !== $this->crf) {
            $res['Crf'] = $this->crf;
        }
        if (null !== $this->crop) {
            $res['Crop'] = $this->crop;
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
        if (null !== $this->longShortMode) {
            $res['LongShortMode'] = $this->longShortMode;
        }
        if (null !== $this->maxrate) {
            $res['Maxrate'] = $this->maxrate;
        }
        if (null !== $this->pad) {
            $res['Pad'] = $this->pad;
        }
        if (null !== $this->pixFmt) {
            $res['PixFmt'] = $this->pixFmt;
        }
        if (null !== $this->preset) {
            $res['Preset'] = $this->preset;
        }
        if (null !== $this->profile) {
            $res['Profile'] = $this->profile;
        }
        if (null !== $this->remove) {
            $res['Remove'] = $this->remove;
        }
        if (null !== $this->scanMode) {
            $res['ScanMode'] = $this->scanMode;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
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
        if (isset($map['AbrMax'])) {
            $model->abrMax = $map['AbrMax'];
        }
        if (isset($map['Bitrate'])) {
            $model->bitrate = $map['Bitrate'];
        }
        if (isset($map['Bufsize'])) {
            $model->bufsize = $map['Bufsize'];
        }
        if (isset($map['Codec'])) {
            $model->codec = $map['Codec'];
        }
        if (isset($map['Crf'])) {
            $model->crf = $map['Crf'];
        }
        if (isset($map['Crop'])) {
            $model->crop = $map['Crop'];
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
        if (isset($map['LongShortMode'])) {
            $model->longShortMode = $map['LongShortMode'];
        }
        if (isset($map['Maxrate'])) {
            $model->maxrate = $map['Maxrate'];
        }
        if (isset($map['Pad'])) {
            $model->pad = $map['Pad'];
        }
        if (isset($map['PixFmt'])) {
            $model->pixFmt = $map['PixFmt'];
        }
        if (isset($map['Preset'])) {
            $model->preset = $map['Preset'];
        }
        if (isset($map['Profile'])) {
            $model->profile = $map['Profile'];
        }
        if (isset($map['Remove'])) {
            $model->remove = $map['Remove'];
        }
        if (isset($map['ScanMode'])) {
            $model->scanMode = $map['ScanMode'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        return $model;
    }
}
