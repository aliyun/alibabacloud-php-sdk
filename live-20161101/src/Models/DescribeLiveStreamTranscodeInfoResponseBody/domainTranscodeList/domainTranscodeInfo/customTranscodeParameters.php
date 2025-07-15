<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamTranscodeInfoResponseBody\domainTranscodeList\domainTranscodeInfo;

use AlibabaCloud\Tea\Model;

class customTranscodeParameters extends Model
{
    /**
     * @description The bitrate of the output audio. Unit: Kbit/s. Valid values: **1 to 1000**.
     *
     * @example 64
     *
     * @var int
     */
    public $audioBitrate;

    /**
     * @description The number of sound channels. Valid values:
     *
     *   **1**: mono
     *   **2**: binaural
     *
     * @example 2
     *
     * @var int
     */
    public $audioChannelNum;

    /**
     * @description The audio encoding format.
     *
     * @example ACC
     *
     * @var string
     */
    public $audioCodec;

    /**
     * @description The audio encoding profile. Valid values:
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
     * @description The audio sampling rate. Valid values: **22050 to 96000**.
     *
     * >  If the value of AudioProfile is **aac_ld**, the audio sampling rate cannot exceed 44100.
     *
     * @example 44100
     *
     * @var int
     */
    public $audioRate;

    /**
     * @description Indicates whether B-frame removal is enabled. Fixed value: **0**.
     *
     * @example 0
     *
     * @var string
     */
    public $bframes;

    /**
     * @description The source-based bitrate settings.
     *
     * @example {\\"UpLimit\\":2500,\\"LowerLimit\\":800,\\"Factor\\":1}
     *
     * @var mixed[]
     */
    public $bitrateWithSource;

    /**
     * @description Other source-based settings.
     *
     * @example {\\"KeyFrameOpen\\":\\"yes\\",\\"Copyts\\":\\"yes\\",\\"SeiMode\\":1}
     *
     * @var mixed[]
     */
    public $extWithSource;

    /**
     * @description The frame rate of the output video. Unit: frames per second (FPS).
     *
     * @example 15
     *
     * @var int
     */
    public $FPS;

    /**
     * @description The source-based frame rate settings.
     *
     * @example {\\"UpLimit\\":60,\\"LowerLimit\\":1}
     *
     * @var mixed[]
     */
    public $fpsWithSource;

    /**
     * @description The group of pictures (GOP) size of the output video. Unit: frames. Valid values: **1 to 3000**.
     *
     * @example 10
     *
     * @var string
     */
    public $gop;

    /**
     * @description The height of the output video.
     *
     * @example 1200
     *
     * @var int
     */
    public $height;

    /**
     * @description The source-based resolution settings.
     *
     * @example {\\"Type\\":\\"short\\",\\"Value\\":\\"1080\\"}
     *
     * @var mixed[]
     */
    public $resWithSource;

    /**
     * @description The Real-Time Transcoding (RTS) flag. Fixed value: **true**.
     *
     * >  This parameter is returned only if RTS is used for transcoding.
     *
     * @example true
     *
     * @var string
     */
    public $rtsFlag;

    /**
     * @description The type of the custom transcoding template. Valid values:
     *
     *   **h264**: custom H.264 standard transcoding
     *   **h264-nbhd**: custom H.264 Narrowband HD™ transcoding
     *   **h265**: custom H.265 standard transcoding
     *   **h265-nbhd**: custom H.265 Narrowband HD™ transcoding
     *   **audio**: audio-only transcoding
     *
     * @example h264
     *
     * @var string
     */
    public $templateType;

    /**
     * @description The bitrate of the output video. Unit: Kbit/s.
     *
     * @example 3000
     *
     * @var int
     */
    public $videoBitrate;

    /**
     * @description The video encoding profile. Valid values:
     *
     *   **baseline**: suitable for mobile devices.
     *   **main**: suitable for standard-definition devices.
     *   **high**: suitable for high-definition devices.
     *
     * @example high
     *
     * @var string
     */
    public $videoProfile;

    /**
     * @description The width of the output video.
     *
     * @example 1000
     *
     * @var int
     */
    public $width;
    protected $_name = [
        'audioBitrate' => 'AudioBitrate',
        'audioChannelNum' => 'AudioChannelNum',
        'audioCodec' => 'AudioCodec',
        'audioProfile' => 'AudioProfile',
        'audioRate' => 'AudioRate',
        'bframes' => 'Bframes',
        'bitrateWithSource' => 'BitrateWithSource',
        'extWithSource' => 'ExtWithSource',
        'FPS' => 'FPS',
        'fpsWithSource' => 'FpsWithSource',
        'gop' => 'Gop',
        'height' => 'Height',
        'resWithSource' => 'ResWithSource',
        'rtsFlag' => 'RtsFlag',
        'templateType' => 'TemplateType',
        'videoBitrate' => 'VideoBitrate',
        'videoProfile' => 'VideoProfile',
        'width' => 'Width',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->bframes) {
            $res['Bframes'] = $this->bframes;
        }
        if (null !== $this->bitrateWithSource) {
            $res['BitrateWithSource'] = $this->bitrateWithSource;
        }
        if (null !== $this->extWithSource) {
            $res['ExtWithSource'] = $this->extWithSource;
        }
        if (null !== $this->FPS) {
            $res['FPS'] = $this->FPS;
        }
        if (null !== $this->fpsWithSource) {
            $res['FpsWithSource'] = $this->fpsWithSource;
        }
        if (null !== $this->gop) {
            $res['Gop'] = $this->gop;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->resWithSource) {
            $res['ResWithSource'] = $this->resWithSource;
        }
        if (null !== $this->rtsFlag) {
            $res['RtsFlag'] = $this->rtsFlag;
        }
        if (null !== $this->templateType) {
            $res['TemplateType'] = $this->templateType;
        }
        if (null !== $this->videoBitrate) {
            $res['VideoBitrate'] = $this->videoBitrate;
        }
        if (null !== $this->videoProfile) {
            $res['VideoProfile'] = $this->videoProfile;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return customTranscodeParameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['Bframes'])) {
            $model->bframes = $map['Bframes'];
        }
        if (isset($map['BitrateWithSource'])) {
            $model->bitrateWithSource = $map['BitrateWithSource'];
        }
        if (isset($map['ExtWithSource'])) {
            $model->extWithSource = $map['ExtWithSource'];
        }
        if (isset($map['FPS'])) {
            $model->FPS = $map['FPS'];
        }
        if (isset($map['FpsWithSource'])) {
            $model->fpsWithSource = $map['FpsWithSource'];
        }
        if (isset($map['Gop'])) {
            $model->gop = $map['Gop'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['ResWithSource'])) {
            $model->resWithSource = $map['ResWithSource'];
        }
        if (isset($map['RtsFlag'])) {
            $model->rtsFlag = $map['RtsFlag'];
        }
        if (isset($map['TemplateType'])) {
            $model->templateType = $map['TemplateType'];
        }
        if (isset($map['VideoBitrate'])) {
            $model->videoBitrate = $map['VideoBitrate'];
        }
        if (isset($map['VideoProfile'])) {
            $model->videoProfile = $map['VideoProfile'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        return $model;
    }
}
