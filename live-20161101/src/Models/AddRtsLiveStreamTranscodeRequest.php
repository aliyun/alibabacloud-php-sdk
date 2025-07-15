<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class AddRtsLiveStreamTranscodeRequest extends Model
{
    /**
     * @description The name of the application to which the live stream belongs. Value requirements:
     *
     *   The name can contain letters, digits, underscores (_), and hyphens (-).
     *   We recommend that you specify a name that is more than three characters in length. The name must start with a letter or digit.
     *
     * This parameter is required.
     *
     * @example aliyun-test
     *
     * @var string
     */
    public $app;

    /**
     * @description The bitrate of the output audio. Unit: Kbit/s. Valid values: **1** to **1000**.
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
     *   **aac**
     *   **mp3**
     *
     * > If you want to use the Opus encoding format, set the Opus parameter to true.
     *
     * @example aac
     *
     * @var string
     */
    public $audioCodec;

    /**
     * @description The audio codec profile. Valid values:
     *
     *   **aac_low**
     *   **aac_he**
     *   **aac_he_v2**
     *   **aac_ld**
     *
     * @example aac_low
     *
     * @var string
     */
    public $audioProfile;

    /**
     * @description The audio sampling rate. Valid values: **22050 to 96000**. The value 44100 is commonly used. Unit: Hz.
     *
     * > If you set the AudioProfile parameter to aac_ld, the audio sampling rate cannot exceed 44,100 Hz.
     *
     * @example 44100
     *
     * @var int
     */
    public $audioRate;

    /**
     * @description Specifies whether to remove B-frames during transcoding. Valid values:
     *
     * >  This parameter is required if you set the TemplateType parameter to h264, h264-nbhd, or h264-origin.
     *
     *   **true**: removes B-frames.
     *   **false**: retains B-frames. This is the default value.
     *
     * > If you do not specify this parameter, the default value **false** is used.
     *
     * @example false
     *
     * @var bool
     */
    public $deleteBframes;

    /**
     * @description The main streaming domain.
     *
     * This parameter is required.
     *
     * @example example.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description The frame rate of the output video. Unit: FPS. Valid values: **1** to **60**.
     *
     * >  This parameter is required if you set the TemplateType parameter to h264, h264-nbhd, or h264-origin.
     *
     * @example 30
     *
     * @var int
     */
    public $FPS;

    /**
     * @description The group of pictures (GOP) size of the output video. This parameter is used to specify the keyframe interval. Unit: seconds. Valid values: **1** to **3**.
     *
     * @example 2
     *
     * @var string
     */
    public $gop;

    /**
     * @description The height of the output video. Unit: pixels.
     *
     * >  This parameter is required if you set the TemplateType parameter to h264, h264-nbhd, or h264-origin.
     *
     * The value must comply with the following rules:****
     *
     *   **Height ≥ 100**: The height of the video is no less than 100 pixels.
     *   **max(Height,Width) ≤ 2560**: The width or height of the video, whichever is greater, cannot exceed 2,560 pixels.
     *   **min(Height,Width) ≤ 1440**: The width or height of the video, whichever is smaller, cannot exceed 1,440 pixels.
     *
     * For example, a resolution of 1560 × 1560 pixels is invalid.
     *
     * > An original quality template needs to retain the source information. Therefore, the video resolution cannot exceed 4K.
     *
     * @example 1280
     *
     * @var int
     */
    public $height;

    /**
     * @description Specifies whether to trigger transcoding only when a stream is pulled. Valid values:
     *
     *   **yes**: triggers transcoding only when a stream is pulled.
     *   **no**: triggers transcoding whenever a stream is ingested, no matter whether the stream is pulled.
     *
     * @example no
     *
     * @var string
     */
    public $lazy;

    /**
     * @description Specifies whether to transcode audio to the Opus format to be compatible with native WebRTC. Valid values:
     *
     *   **true**: transcodes audio to the Opus format.
     *   **false**: does not transcode audio to the Opus format.
     *
     * > If you do not specify this parameter, the default value **false** is used.
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
     * @description The codec profile. The video codec profile determines how ApsaraVideo Live performs codec on the video. In normal cases, a greater value indicates a higher image quality and requires more codec resources. Valid values:
     *
     *   **1**: baseline, which is suitable for mobile devices.
     *   **2**: main, which is suitable for standard-definition devices.
     *   **3**: high, which is suitable for high-definition devices.
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
     * @description The name of the transcoding template. Value requirements:
     *
     *   The name can contain letters, digits, underscores (_), and hyphens (-).
     *   We recommend that you specify a name that is more than three characters in length. The name must start with a letter or digit.
     *
     * > The name cannot be the same as that of a default transcoding template.
     *
     * This parameter is required.
     *
     * @example ld
     *
     * @var string
     */
    public $template;

    /**
     * @description The type of the transcoding template.
     *
     * If you set this parameter to h264, h264-nbhd, or h264-origin, you must also specify the Height, Width, FPS, VideoBitrate, and DeleteBframes parameters. Valid values:
     *
     *   **h264**: H.264 standard transcoding template.
     *   **h264-nbhd**: H.264 Narrowband HD™ transcoding template.
     *   **h264-origin**: H.264 original quality template. If you use this type of template, the same transcoding parameters of the video source are retained by default.
     *   **audio**: audio-only transcoding template. If you use this type of template, images are removed from the video source and an audio-only stream is generated. In addition, you must also specify the AudioBitrate parameter.
     *
     * This parameter is required.
     *
     * @example h264
     *
     * @var string
     */
    public $templateType;

    /**
     * @description The bitrate of the output video. Unit: Kbit/s. Valid values: **1** to **6000**.
     *
     * >  This parameter is required if you set the TemplateType parameter to h264, h264-nbhd, or h264-origin.
     *
     * > The bitrate of the output video is as close to the value that you specify as possible, but not exactly the same as the value, especially when the value is excessively large or small.
     *
     * @example 2000
     *
     * @var int
     */
    public $videoBitrate;

    /**
     * @description The width of the output video. Unit: pixels.
     *
     * >  This parameter is required if you set the TemplateType parameter to h264, h264-nbhd, or h264-origin.
     *
     * The value must comply with the following rules:
     *
     *   **Width ≥ 100**: The width of the video is no less than 100 pixels.
     *   **max(Height,Width) ≤ 2560**: The width or height of the video, whichever is greater, cannot exceed 2,560 pixels.
     *   **min(Height,Width) ≤ 1440**: The width or height of the video, whichever is smaller, cannot exceed 1,440 pixels.
     *
     * For example, a resolution of 1560 × 1560 pixels is invalid.
     *
     * > An original quality template needs to retain the source information. Therefore, the video resolution cannot exceed 4K.
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
     * @return AddRtsLiveStreamTranscodeRequest
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
