<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class UpdateRtsLiveStreamTranscodeRequest extends Model
{
    /**
     * @description The name of the application to which the live stream belongs, which cannot be modified.
     *
     * This parameter is required.
     *
     * @example aliyun-test
     *
     * @var string
     */
    public $app;

    /**
     * @description The bitrate of the output audio. Unit: Kbit/s. Valid values: 1 to 1000.
     *
     * >  This parameter is required if you set the TemplateType parameter to audio.
     *
     * @example 128
     *
     * @var int
     */
    public $audioBitrate;

    /**
     * @description The number of sound channels. Valid values:
     *
     *   **1**: mono
     *   **2**: stereo
     *
     * @example 2
     *
     * @var int
     */
    public $audioChannelNum;

    /**
     * @description The audio encoder. Valid values:
     *
     *   aac
     *   mp3
     *
     * >  To use the Opus encoder, you need only to set the Opus parameter to true.
     *
     * @example aac
     *
     * @var string
     */
    public $audioCodec;

    /**
     * @description The audio codec profile. Valid values:
     *
     *   aac_low
     *   aac_he
     *   aac_he_v2
     *   aac_ld
     *
     * @example aac_low
     *
     * @var string
     */
    public $audioProfile;

    /**
     * @description The audio sampling rate. Valid values: 22050, 32000, 44100, 48000, and 96000. 44100 is commonly used. Unit: Hz.
     *
     * >  If the value of the AudioProfile parameter is aac_ld, the audio sampling rate cannot exceed 44,100.
     *
     * @example 44100
     *
     * @var int
     */
    public $audioRate;

    /**
     * @description Specifies whether to remove B frames during transcoding. Valid values:
     *
     *   true: Remove B frames.
     *   false (default): Retain B frames.
     *
     * >
     *
     *   This parameter is required when the TemplateType parameter is set to h264, h264-nbhd, or h264-origin.
     *
     *   If this parameter is not specified, the default value false is used.
     *
     * @example false
     *
     * @var bool
     */
    public $deleteBframes;

    /**
     * @description The main streaming domain, which cannot be modified.
     *
     * This parameter is required.
     *
     * @example example.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description The frame rate of the output video. Unit: frames per second (FPS). Valid values: 1 to 60.
     *
     * >  This parameter is required when the TemplateType parameter is set to h264, h264-nbhd, or h264-origin.
     *
     * @example 30
     *
     * @var int
     */
    public $FPS;

    /**
     * @description The group of pictures (GOP) of the output video. This parameter is used to specify the keyframe interval. Unit: seconds. Valid values: 1 to 3.
     *
     * @example 2
     *
     * @var string
     */
    public $gop;

    /**
     * @description The height of the output video. Unit: pixel.
     *
     * The value must comply with the following rules:
     *
     *   Height ≥ 100: The height of the video is at least 100 pixels.
     *   max(Height,Width) ≤ 2560: The larger of the width and height of the video cannot exceed 2,560 pixels.
     *   min(Height,Width) ≤ 1440: The smaller of the width and height of the video cannot exceed 1,440 pixels. For example, a resolution of 1560 × 1560 pixels is invalid.
     *
     * >
     *
     *   This parameter is required when the TemplateType parameter is set to h264, h264-nbhd, or h264-origin.
     *
     *   If the TemplateType parameter is set to h264-origin, the highest resolution supported is 4K.
     *
     * @example 1280
     *
     * @var int
     */
    public $height;

    /**
     * @description Specifies whether to enable triggered transcoding. Valid values:
     *
     *   **yes**: enables triggered transcoding.
     *   **no**: disables triggered transcoding.
     *
     * @example no
     *
     * @var string
     */
    public $lazy;

    /**
     * @description Specifies whether to transcode streams to the Opus format to be compatible with native WebRTC. Valid values:
     *
     *   true: Transcode streams to the Opus format.
     *   false: Do not transcode streams to the Opus format.
     *
     * >  If this parameter is not specified, the default value false is used.
     *
     * @example true
     *
     * @var bool
     */
    public $opus;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The video encoding profile. The profile defines a set of parameters that are used to encode a video. In most cases, a greater value indicates better image quality and higher resource consumption. Valid values:
     *
     *   **1**: baseline. This value is suitable for mobile devices.
     *   **2**: main. This value is suitable for standard-definition devices.
     *   **3**: high. This value is suitable for high-definition devices.
     *
     * @example 2
     *
     * @var int
     */
    public $profile;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the custom transcoding template, which cannot be modified.
     *
     * This parameter is required.
     *
     * @example ld
     *
     * @var string
     */
    public $template;

    /**
     * @description The type of the custom transcoding template, which cannot be modified.
     *
     * This parameter is required.
     *
     * @example h264
     *
     * @var string
     */
    public $templateType;

    /**
     * @description The bitrate of the output video. Unit: Kbit/s. Valid values: 1 to 6000.
     *
     * >
     *
     *   This parameter is required when the TemplateType parameter is set to h264, h264-nbhd, or h264-origin.
     *
     *   The bitrate of the output video is as close to the value that you specify as possible, but not the same as the value, especially when the value is excessively large or small.
     *
     * @example 2000
     *
     * @var int
     */
    public $videoBitrate;

    /**
     * @description The width of the output video. Unit: pixel.
     *
     * The value must comply with the following rules:
     *
     *   Width ≥ 100: The width of the video is at least 100 pixels.
     *   max(Height,Width) ≤ 2560: The larger of the width and height of the video cannot exceed 2,560 pixels.
     *   min(Height,Width) ≤ 1440: The smaller of the width and height of the video cannot exceed 1,440 pixels. For example, a resolution of 1560 × 1560 pixels is invalid.
     *
     * >
     *
     *   This parameter is required when the TemplateType parameter is set to h264, h264-nbhd, or h264-origin.
     *
     *   If the TemplateType parameter is set to h264-origin, the highest resolution supported is 4K.
     *
     * @example 720
     *
     * @var int
     */
    public $width;
    protected $_name = [
        'app' => 'App',
        'audioBitrate' => 'AudioBitrate',
        'audioChannelNum' => 'AudioChannelNum',
        'audioCodec' => 'AudioCodec',
        'audioProfile' => 'AudioProfile',
        'audioRate' => 'AudioRate',
        'deleteBframes' => 'DeleteBframes',
        'domain' => 'Domain',
        'FPS' => 'FPS',
        'gop' => 'Gop',
        'height' => 'Height',
        'lazy' => 'Lazy',
        'opus' => 'Opus',
        'ownerId' => 'OwnerId',
        'profile' => 'Profile',
        'regionId' => 'RegionId',
        'template' => 'Template',
        'templateType' => 'TemplateType',
        'videoBitrate' => 'VideoBitrate',
        'width' => 'Width',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->app) {
            $res['App'] = $this->app;
        }
        if (null !== $this->audioBitrate) {
            $res['AudioBitrate'] = $this->audioBitrate;
        }
        if (null !== $this->audioChannelNum) {
            $res['AudioChannelNum'] = $this->audioChannelNum;
        }
        if (null !== $this->audioCodec) {
            $res['AudioCodec'] = $this->audioCodec;
        }
        if (null !== $this->audioProfile) {
            $res['AudioProfile'] = $this->audioProfile;
        }
        if (null !== $this->audioRate) {
            $res['AudioRate'] = $this->audioRate;
        }
        if (null !== $this->deleteBframes) {
            $res['DeleteBframes'] = $this->deleteBframes;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->FPS) {
            $res['FPS'] = $this->FPS;
        }
        if (null !== $this->gop) {
            $res['Gop'] = $this->gop;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->lazy) {
            $res['Lazy'] = $this->lazy;
        }
        if (null !== $this->opus) {
            $res['Opus'] = $this->opus;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->profile) {
            $res['Profile'] = $this->profile;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->template) {
            $res['Template'] = $this->template;
        }
        if (null !== $this->templateType) {
            $res['TemplateType'] = $this->templateType;
        }
        if (null !== $this->videoBitrate) {
            $res['VideoBitrate'] = $this->videoBitrate;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateRtsLiveStreamTranscodeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['App'])) {
            $model->app = $map['App'];
        }
        if (isset($map['AudioBitrate'])) {
            $model->audioBitrate = $map['AudioBitrate'];
        }
        if (isset($map['AudioChannelNum'])) {
            $model->audioChannelNum = $map['AudioChannelNum'];
        }
        if (isset($map['AudioCodec'])) {
            $model->audioCodec = $map['AudioCodec'];
        }
        if (isset($map['AudioProfile'])) {
            $model->audioProfile = $map['AudioProfile'];
        }
        if (isset($map['AudioRate'])) {
            $model->audioRate = $map['AudioRate'];
        }
        if (isset($map['DeleteBframes'])) {
            $model->deleteBframes = $map['DeleteBframes'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['FPS'])) {
            $model->FPS = $map['FPS'];
        }
        if (isset($map['Gop'])) {
            $model->gop = $map['Gop'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['Lazy'])) {
            $model->lazy = $map['Lazy'];
        }
        if (isset($map['Opus'])) {
            $model->opus = $map['Opus'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Profile'])) {
            $model->profile = $map['Profile'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Template'])) {
            $model->template = $map['Template'];
        }
        if (isset($map['TemplateType'])) {
            $model->templateType = $map['TemplateType'];
        }
        if (isset($map['VideoBitrate'])) {
            $model->videoBitrate = $map['VideoBitrate'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        return $model;
    }
}
