<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetTranscodeTemplateGroupResponseBody\transcodeTemplateGroup;

use AlibabaCloud\Tea\Model;

class transcodeTemplateList extends Model
{
    /**
     * @description The transcoding configurations of the audio stream. The value is a JSON-formatted string.
     *
     * @example {\"Codec\":\"AAC\",\"Remove\":\"false\",\"Bitrate\":\"44\",\"Samplerate\":\"32000\",\"Channels\":\"2\",\"Profile\":\"aac_low\"}
     *
     * @var string
     */
    public $audio;

    /**
     * @description The clipping configurations of the video. The value is a JSON-formatted string. For example, you can set this parameter if you want to extract 5 seconds of content from a video to generate a new video.
     *
     * @example {\"TimeSpan\":{\"Seek\":\"1\",\"Duration\":\"5\"}
     *
     * @var string
     */
    public $clip;

    /**
     * @description The format of the container used to encapsulate audio and video streams. The value is a JSON-formatted string.
     *
     * @example "Format":"m3u8"
     *
     * @var string
     */
    public $container;

    /**
     * @var string
     */
    public $copyrightMark;

    /**
     * @description Valid values for the definition of a common transcoding template:
     *   **LD**: low definition.
     *   **SD**: standard definition.
     *   **HD**: high definition.
     *   **FHD**: ultra high definition.
     *   **OD**: original quality.
     *   **2K**
     *   **4K**
     *   **SQ**: standard sound quality.
     *   **HQ**: high sound quality.
     *
     * Valid values for the definition of a Narrowband HD™ 1.0 transcoding template:
     *   **LD-NBV1**: low definition.
     *   **SD-NBV1**: standard definition.
     *   **HD-NBV1**: high definition.
     *   **FHD-NBV1**: ultra high definition.
     *   **2K-NBV1**
     *   **4K-NBV1**
     * >*   You cannot modify the definition of transcoding templates.
     * >*   You cannot modify the system parameters, such as the video resolution, audio resolution, and bitrate, of Narrowband HD™ 1.0 transcoding templates.
     * >*   You can create only Narrowband HD™ 1.0 transcoding templates that support the FLV, M3U8 (HLS), and MP4 output formats.
     * @example SD
     *
     * @var string
     */
    public $definition;

    /**
     * @description The encryption configuration used for transcoding.
     *
     * @example "EncryptType":"Private"
     *
     * @var string
     */
    public $encryptSetting;

    /**
     * @description The transcoding segment configurations. This parameter must be returned if HTTP-Live-Streaming (HLS) encryption is used. The value is a JSON-formatted string.
     *
     * @example "Segment": { "Duration":"6" }
     *
     * @var string
     */
    public $muxConfig;

    /**
     * @description The packaging configurations. Only HLS packaging and DASH packaging are supported. The value is a JSON-formatted string.
     *
     * @example "PackageType":"HLSPackage","PackageConfig":{   "BandWidth":"900000"  }
     *
     * @var string
     */
    public $packageSetting;

    /**
     * @description The video rotation identifier. It is used to control the image rotation angle. For example, if you set this parameter to 180, the video image is turned upside down. Valid values: `0 to 360`.
     *
     * @example 90
     *
     * @var string
     */
    public $rotate;

    /**
     * @description The subtitle configurations. The value is a JSON-formatted string.
     *
     * @example [{"SubtitleUrl":"http://outin-test.oss-cn-shanghai.aliyuncs.com/subtitles/c737fece-14f1-4364-b107-d5f7f8edde0e.ass","CharEncode":"utf-8"}]
     *
     * @var string
     */
    public $subtitleList;

    /**
     * @description The name of the transcoding template.
     *
     * @example test
     *
     * @var string
     */
    public $templateName;

    /**
     * @var string
     */
    public $traceMark;

    /**
     * @description The conditional transcoding configurations. This parameter can be used if you want to determine the basic logic based on the bitrate and resolution of the mezzanine file before the video is transcoded. The value is a JSON-formatted string.
     *
     * @example {"IsCheckReso":"true","IsCheckResoFail":"false","IsCheckVideoBitrate":"false","IsCheckVideoBitrateFail":"false","IsCheckAudioBitrate":"false","IsCheckAudioBitrateFail":"false"}
     *
     * @var string
     */
    public $transConfig;

    /**
     * @description The custom output path of transcoded files.
     *
     * @example {MediaId}/transcoce_1
     *
     * @var string
     */
    public $transcodeFileRegular;

    /**
     * @description The ID of the transcoding template.
     *
     * @example 696d29a11erc057*****a3acc398d02f4
     *
     * @var string
     */
    public $transcodeTemplateId;

    /**
     * @description The type of the template. Valid values:
     *   **Normal**: a common transcoding template. This is the default value. The PackageSetting parameter cannot be set for this type of template.
     *   **VideoPackage**: a video stream package template. If this type of template is used, ApsaraVideo VOD transcodes a video into video streams in different bitrates and packages these video streams with a file. The PackageSetting parameter must be set for this type of template.
     *   **SubtitlePackage**: a subtitle package template. If this type of template is used, ApsaraVideo VOD adds the subtitle information to the output file generated by packaging the multi-bitrate video streams of the corresponding video. You must set the PackageSetting parameter for a subtitle package template and associate the subtitle package template with a video stream package template. A template group can contain only one subtitle package template.
     *
     * @example Normal
     *
     * @var string
     */
    public $type;

    /**
     * @description The transcoding configurations of the video stream. The value is a JSON-formatted string.
     *
     * @example {"Codec":"H.264","Bitrate":"900","Width":"960","Remove":"false","Fps":"30"}
     *
     * @var string
     */
    public $video;

    /**
     * @description The ID of the associated watermark.
     *
     * @var string[]
     */
    public $watermarkIds;
    protected $_name = [
        'audio'                => 'Audio',
        'clip'                 => 'Clip',
        'container'            => 'Container',
        'copyrightMark'        => 'CopyrightMark',
        'definition'           => 'Definition',
        'encryptSetting'       => 'EncryptSetting',
        'muxConfig'            => 'MuxConfig',
        'packageSetting'       => 'PackageSetting',
        'rotate'               => 'Rotate',
        'subtitleList'         => 'SubtitleList',
        'templateName'         => 'TemplateName',
        'traceMark'            => 'TraceMark',
        'transConfig'          => 'TransConfig',
        'transcodeFileRegular' => 'TranscodeFileRegular',
        'transcodeTemplateId'  => 'TranscodeTemplateId',
        'type'                 => 'Type',
        'video'                => 'Video',
        'watermarkIds'         => 'WatermarkIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->audio) {
            $res['Audio'] = $this->audio;
        }
        if (null !== $this->clip) {
            $res['Clip'] = $this->clip;
        }
        if (null !== $this->container) {
            $res['Container'] = $this->container;
        }
        if (null !== $this->copyrightMark) {
            $res['CopyrightMark'] = $this->copyrightMark;
        }
        if (null !== $this->definition) {
            $res['Definition'] = $this->definition;
        }
        if (null !== $this->encryptSetting) {
            $res['EncryptSetting'] = $this->encryptSetting;
        }
        if (null !== $this->muxConfig) {
            $res['MuxConfig'] = $this->muxConfig;
        }
        if (null !== $this->packageSetting) {
            $res['PackageSetting'] = $this->packageSetting;
        }
        if (null !== $this->rotate) {
            $res['Rotate'] = $this->rotate;
        }
        if (null !== $this->subtitleList) {
            $res['SubtitleList'] = $this->subtitleList;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }
        if (null !== $this->traceMark) {
            $res['TraceMark'] = $this->traceMark;
        }
        if (null !== $this->transConfig) {
            $res['TransConfig'] = $this->transConfig;
        }
        if (null !== $this->transcodeFileRegular) {
            $res['TranscodeFileRegular'] = $this->transcodeFileRegular;
        }
        if (null !== $this->transcodeTemplateId) {
            $res['TranscodeTemplateId'] = $this->transcodeTemplateId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->video) {
            $res['Video'] = $this->video;
        }
        if (null !== $this->watermarkIds) {
            $res['WatermarkIds'] = $this->watermarkIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return transcodeTemplateList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Audio'])) {
            $model->audio = $map['Audio'];
        }
        if (isset($map['Clip'])) {
            $model->clip = $map['Clip'];
        }
        if (isset($map['Container'])) {
            $model->container = $map['Container'];
        }
        if (isset($map['CopyrightMark'])) {
            $model->copyrightMark = $map['CopyrightMark'];
        }
        if (isset($map['Definition'])) {
            $model->definition = $map['Definition'];
        }
        if (isset($map['EncryptSetting'])) {
            $model->encryptSetting = $map['EncryptSetting'];
        }
        if (isset($map['MuxConfig'])) {
            $model->muxConfig = $map['MuxConfig'];
        }
        if (isset($map['PackageSetting'])) {
            $model->packageSetting = $map['PackageSetting'];
        }
        if (isset($map['Rotate'])) {
            $model->rotate = $map['Rotate'];
        }
        if (isset($map['SubtitleList'])) {
            $model->subtitleList = $map['SubtitleList'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }
        if (isset($map['TraceMark'])) {
            $model->traceMark = $map['TraceMark'];
        }
        if (isset($map['TransConfig'])) {
            $model->transConfig = $map['TransConfig'];
        }
        if (isset($map['TranscodeFileRegular'])) {
            $model->transcodeFileRegular = $map['TranscodeFileRegular'];
        }
        if (isset($map['TranscodeTemplateId'])) {
            $model->transcodeTemplateId = $map['TranscodeTemplateId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Video'])) {
            $model->video = $map['Video'];
        }
        if (isset($map['WatermarkIds'])) {
            if (!empty($map['WatermarkIds'])) {
                $model->watermarkIds = $map['WatermarkIds'];
            }
        }

        return $model;
    }
}
