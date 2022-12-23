<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class GetPlayInfoRequest extends Model
{
    /**
     * @description The URL of the masked live comment data. Set the value to **danmu**.
     *
     * > This parameter takes effect only when the outputType parameter is set to **cdn**.
     * @example danmu
     *
     * @var string
     */
    public $additionType;

    /**
     * @description The validity period of the playback URL. Unit: seconds.
     *
     *   If the OutputType parameter is set to **cdn**:
     *
     *   This parameter takes effect only if URL authentication is enabled. Otherwise, the playback URL does not expire.
     *   Minimum value: **1**.
     *   Maximum value: unlimited.
     *   Default value: The default validity period that is specified in URL authentication is used.
     *
     *   If the OutputType parameter is set to **oss**:
     *
     *   This parameter takes effect only when the ACL of the Object Storage Service (OSS) bucket is private. Otherwise, the playback URL does not expire.
     *   Minimum value: **1**.
     *   Maximum value: **2592000** (30 days). This limit is imposed to reduce security risks of the origin server.
     *   Default value: **3600**.
     *
     * @example 1800
     *
     * @var int
     */
    public $authTimeout;

    /**
     * @description The quality of the video stream. Separate multiple qualities with commas (,). Valid values:
     *
     *   **FD**: low definition
     *   **LD**: standard definition
     *   **SD**: high definition
     *   **HD**: ultra-high definition
     *   **OD**: original definition
     *   **2K**: 2K
     *   **4K**: 4K
     *   **SQ**: standard sound quality
     *   **HQ**: high sound quality
     *   **AUTO**: adaptive bitrate
     *
     * > By default, ApsaraVideo VOD returns video streams in all preceding qualities. However, video streams for adaptive bitrate streaming are returned only if the PackageSetting parameter is specified in the transcoding template. For more information, see the [PackageSetting parameter in the TranscodeTemplate](~~52839~~) table.
     * @example LD
     *
     * @var string
     */
    public $definition;

    /**
     * @description The format of the media stream. Separate multiple formats with commas (,). Valid values:
     *
     *   **mp4**
     *   **m3u8**
     *   **mp3**
     *   **mpd**
     *
     * > By default, ApsaraVideo VOD returns video streams in all the preceding formats. However, video streams in the MPD format are returned only if the MPD container format is specified in the transcoding template. For more information, see the [Container parameter in the TranscodeTemplate](~~52839~~) table.
     * @example mp4,m3u8
     *
     * @var string
     */
    public $formats;

    /**
     * @description The type of the output URL. Default value: oss. Valid values:
     *
     *   **oss**
     *   **cdn**
     *
     * @example cdn
     *
     * @var string
     */
    public $outputType;

    /**
     * @description The custom playback configuration. The value is a JSON string. For more information, see [PlayConfig](~~86952~~).
     *
     * >-   If you do not specify PlayConfig or `PlayDomain` in PlayConfig, the default domain name configured in ApsaraVideo VOD is used in this operation. If no default domain name is configured, the domain names are queried in reverse chronological order based on the time when the domain names were modified. The domain name that was last modified is used as the streaming domain name. To prevent domain name issues, we recommend that you specify the default streaming domain name. You can log on to the [ApsaraVideo VOD console](https://vod.console.aliyun.com) and choose **Configuration Management** > **Media Management** > **Storage** > **Manage** > **Origin Domain Name** to set the default streaming domain name.
     *
     * >-   If the `EncryptType` parameter in PlayConfig is set to `AliyunVoDEncryption`, the playback URL of the stream encrypted by using proprietary cryptography is not returned to ensure video security. If you want to return such URL, you must set the `ResultType` parameter to `Multiple`.
     * @example {"PlayDomain":"vod.test_domain","XForwardedFor":"yqCD7Fp1uqChoVj/sl/p5Q==","PreviewTime":"20","MtsHlsUriToken":"yqCD7Fp1uqChoVjslp5Q"}
     *
     * @var string
     */
    public $playConfig;

    /**
     * @description The CDN reauthentication configuration. The value is a JSON string. If CDN reauthentication is enabled, you can use this parameter to specify the UID and rand fields for URL authentication. For more information, see [URL authentication](~~57007~~).
     *
     * @example {"uid":"12345","rand":"abckljd"}
     *
     * @var string
     */
    public $reAuthInfo;

    /**
     * @description The type of the data to return. Default value: Single. Valid values:
     *
     *   **Single**: Only one latest transcoded stream is returned for each quality and format.
     *   **Multiple**: All transcoded streams are returned for each quality and format.
     *
     * @example Single
     *
     * @var string
     */
    public $resultType;

    /**
     * @description The type of the media stream. Separate multiple types with commas (,). Valid values:
     *
     *   **video**
     *   **audio**
     *
     * By default, video and audio streams are returned.
     * @example video
     *
     * @var string
     */
    public $streamType;

    /**
     * @description The ID of the audio or video file. You can use one of the following methods to obtain the ID of the file:
     *
     *   Log on to the [ApsaraVideo VOD](https://vod.console.aliyun.com) console. In the left-side navigation pane, choose **Media Files** > **Audio/Video**. On the Video and Audio page, you can view the ID of the audio or video file. This method is applicable to files that are uploaded by using the ApsaraVideo VOD console.
     *   Obtain the value of the VideoId parameter when you call the [CreateUploadVideo](~~55407~~) operation to upload files.
     *   Obtain the value of the VideoId parameter by calling the [SearchMedia](~~86044~~) operation. This method is applicable to files that have been uploaded.
     *
     * @example 93ab850b4f654b6e91d24d81d44****
     *
     * @var string
     */
    public $videoId;
    protected $_name = [
        'additionType' => 'AdditionType',
        'authTimeout'  => 'AuthTimeout',
        'definition'   => 'Definition',
        'formats'      => 'Formats',
        'outputType'   => 'OutputType',
        'playConfig'   => 'PlayConfig',
        'reAuthInfo'   => 'ReAuthInfo',
        'resultType'   => 'ResultType',
        'streamType'   => 'StreamType',
        'videoId'      => 'VideoId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->additionType) {
            $res['AdditionType'] = $this->additionType;
        }
        if (null !== $this->authTimeout) {
            $res['AuthTimeout'] = $this->authTimeout;
        }
        if (null !== $this->definition) {
            $res['Definition'] = $this->definition;
        }
        if (null !== $this->formats) {
            $res['Formats'] = $this->formats;
        }
        if (null !== $this->outputType) {
            $res['OutputType'] = $this->outputType;
        }
        if (null !== $this->playConfig) {
            $res['PlayConfig'] = $this->playConfig;
        }
        if (null !== $this->reAuthInfo) {
            $res['ReAuthInfo'] = $this->reAuthInfo;
        }
        if (null !== $this->resultType) {
            $res['ResultType'] = $this->resultType;
        }
        if (null !== $this->streamType) {
            $res['StreamType'] = $this->streamType;
        }
        if (null !== $this->videoId) {
            $res['VideoId'] = $this->videoId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPlayInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdditionType'])) {
            $model->additionType = $map['AdditionType'];
        }
        if (isset($map['AuthTimeout'])) {
            $model->authTimeout = $map['AuthTimeout'];
        }
        if (isset($map['Definition'])) {
            $model->definition = $map['Definition'];
        }
        if (isset($map['Formats'])) {
            $model->formats = $map['Formats'];
        }
        if (isset($map['OutputType'])) {
            $model->outputType = $map['OutputType'];
        }
        if (isset($map['PlayConfig'])) {
            $model->playConfig = $map['PlayConfig'];
        }
        if (isset($map['ReAuthInfo'])) {
            $model->reAuthInfo = $map['ReAuthInfo'];
        }
        if (isset($map['ResultType'])) {
            $model->resultType = $map['ResultType'];
        }
        if (isset($map['StreamType'])) {
            $model->streamType = $map['StreamType'];
        }
        if (isset($map['VideoId'])) {
            $model->videoId = $map['VideoId'];
        }

        return $model;
    }
}
