<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetPlayInfoResponseBody\playInfoList;

use AlibabaCloud\Tea\Model;

class playInfo extends Model
{
    /**
     * @example 8
     *
     * @var int
     */
    public $bitDepth;

    /**
     * @description The format of the media stream. Separate multiple formats with commas (,). Valid values:
     *
     *   **mp4**
     *   **m3u8**
     *   **mp3**
     *   **mpd**
     *
     * > By default, ApsaraVideo VOD returns video streams in all the preceding formats. However, video streams in the MPD format are returned only if the MPD container format is specified in the transcoding template. For more information, see the [Container parameter in the TranscodeTemplate](~~52839~~) table.
     * @example 450.878
     *
     * @var string
     */
    public $bitrate;

    /**
     * @description The status of the media stream. Valid values:
     *
     *   **Normal**
     *   **Invisible**
     *
     * @example 2022-04-18T07:37:15Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The color depth. This value must be an integer.
     *
     * @example LD
     *
     * @var string
     */
    public $definition;

    /**
     * @description The encryption type of the media stream. Valid values:
     *
     *   **AliyunVoDEncryption**: Alibaba Cloud proprietary cryptography
     *   **HLSEncryption**: HTTP Live Streaming (HLS) encryption
     *
     * > If the encryption type is**AliyunVoDEncryption**, only ApsaraVideo Player SDK can be used to play videos.
     * @example 9.0464
     *
     * @var string
     */
    public $duration;

    /**
     * @description The status of the audio or video file. For more information about the value range and description, see the [Status](~~52839~~) table.
     *
     * @example 1
     *
     * @var int
     */
    public $encrypt;

    /**
     * @description The title of the audio or video file.
     *
     * @example AliyunVoDEncryption
     *
     * @var string
     */
    public $encryptType;

    /**
     * @description Queries the playback URL of a video or audio file by its ID.
     *
     * @example m3u8
     *
     * @var string
     */
    public $format;

    /**
     * @description The type of the output URL. Default value: oss. Valid values:
     *
     *   **oss**
     *   **cdn**
     *
     * @example 25
     *
     * @var string
     */
    public $fps;

    /**
     * @example HLG
     *
     * @var string
     */
    public $HDRType;

    /**
     * @description The returned result.
     *
     * @example 640
     *
     * @var int
     */
    public $height;

    /**
     * @description The type of the media file. Valid values:
     *
     *   **video**
     *   **audio**
     *
     * @example 80e9c6580e754a798c3c19c59b16****
     *
     * @var string
     */
    public $jobId;

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
     * @example 2022-04-20T06:32:19Z
     *
     * @var string
     */
    public $modificationTime;

    /**
     * @description The type of the data to return. Default value: Single. Valid values:
     *
     *   **Single**: Only one latest transcoded stream is returned for each quality and format.
     *   **Multiple**: All transcoded streams are returned for each quality and format.
     *
     * @example 0
     *
     * @var string
     */
    public $narrowBandType;

    /**
     * @description The ID of the request.
     *
     * @example https://example.aliyundoc.com/d52ee123f331466aabf6ab32a93d****\/a777f9e24e6e47a2a942467d5c38ea37-8ee8e04293c6657fdda282bc422704****.m3u8
     *
     * @var string
     */
    public $playURL;

    /**
     * @description The custom playback configuration. The value is a JSON string. For more information, see [PlayConfig](~~86952~~).
     *
     * >
     *
     *   If you do not specify PlayConfig or `PlayDomain` in PlayConfig, the default domain name configured in ApsaraVideo VOD is used in this operation. If no default domain name is configured, the domain names are queried in reverse chronological order based on the time when the domain names were modified. The domain name that was last modified is used as the streaming domain name. To prevent domain name issues, we recommend that you specify the default streaming domain name. You can log on to the [ApsaraVideo VOD console](https://vod.console.aliyun.com) and choose **Configuration Management** > **Media Management** > **Storage** > **Manage** > **Origin Domain Name** to set the default streaming domain name.
     *
     *   If the `EncryptType` parameter in PlayConfig is set to `AliyunVoDEncryption`, the playback URL of the stream encrypted by using proprietary cryptography is not returned to ensure video security. If you want to return such URL, you must set the `ResultType` parameter to `Multiple`.
     *
     * @example 418112
     *
     * @var int
     */
    public $size;

    /**
     * @description The size of the media stream. Unit: bytes.
     *
     * @example H264.LD
     *
     * @var string
     */
    public $specification;

    /**
     * @description The specifications of transcoded audio and video streams. For more information about the valid values, see [Output specifications](~~124671~~).
     *
     * @example Normal
     *
     * @var string
     */
    public $status;

    /**
     * @description The bitrate of the media stream. Unit: Kbit/s.
     *
     * @example video
     *
     * @var string
     */
    public $streamType;

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
     * @example dgfn26457856****
     *
     * @var string
     */
    public $watermarkId;

    /**
     * @description Indicates whether the video stream was encrypted. Valid values:
     *
     *   **0**: no
     *   **1**: yes
     *
     * @example 360
     *
     * @var int
     */
    public $width;
    protected $_name = [
        'bitDepth'         => 'BitDepth',
        'bitrate'          => 'Bitrate',
        'creationTime'     => 'CreationTime',
        'definition'       => 'Definition',
        'duration'         => 'Duration',
        'encrypt'          => 'Encrypt',
        'encryptType'      => 'EncryptType',
        'format'           => 'Format',
        'fps'              => 'Fps',
        'HDRType'          => 'HDRType',
        'height'           => 'Height',
        'jobId'            => 'JobId',
        'modificationTime' => 'ModificationTime',
        'narrowBandType'   => 'NarrowBandType',
        'playURL'          => 'PlayURL',
        'size'             => 'Size',
        'specification'    => 'Specification',
        'status'           => 'Status',
        'streamType'       => 'StreamType',
        'watermarkId'      => 'WatermarkId',
        'width'            => 'Width',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bitDepth) {
            $res['BitDepth'] = $this->bitDepth;
        }
        if (null !== $this->bitrate) {
            $res['Bitrate'] = $this->bitrate;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->definition) {
            $res['Definition'] = $this->definition;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->encrypt) {
            $res['Encrypt'] = $this->encrypt;
        }
        if (null !== $this->encryptType) {
            $res['EncryptType'] = $this->encryptType;
        }
        if (null !== $this->format) {
            $res['Format'] = $this->format;
        }
        if (null !== $this->fps) {
            $res['Fps'] = $this->fps;
        }
        if (null !== $this->HDRType) {
            $res['HDRType'] = $this->HDRType;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->modificationTime) {
            $res['ModificationTime'] = $this->modificationTime;
        }
        if (null !== $this->narrowBandType) {
            $res['NarrowBandType'] = $this->narrowBandType;
        }
        if (null !== $this->playURL) {
            $res['PlayURL'] = $this->playURL;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->specification) {
            $res['Specification'] = $this->specification;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->streamType) {
            $res['StreamType'] = $this->streamType;
        }
        if (null !== $this->watermarkId) {
            $res['WatermarkId'] = $this->watermarkId;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return playInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BitDepth'])) {
            $model->bitDepth = $map['BitDepth'];
        }
        if (isset($map['Bitrate'])) {
            $model->bitrate = $map['Bitrate'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Definition'])) {
            $model->definition = $map['Definition'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['Encrypt'])) {
            $model->encrypt = $map['Encrypt'];
        }
        if (isset($map['EncryptType'])) {
            $model->encryptType = $map['EncryptType'];
        }
        if (isset($map['Format'])) {
            $model->format = $map['Format'];
        }
        if (isset($map['Fps'])) {
            $model->fps = $map['Fps'];
        }
        if (isset($map['HDRType'])) {
            $model->HDRType = $map['HDRType'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['ModificationTime'])) {
            $model->modificationTime = $map['ModificationTime'];
        }
        if (isset($map['NarrowBandType'])) {
            $model->narrowBandType = $map['NarrowBandType'];
        }
        if (isset($map['PlayURL'])) {
            $model->playURL = $map['PlayURL'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['Specification'])) {
            $model->specification = $map['Specification'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StreamType'])) {
            $model->streamType = $map['StreamType'];
        }
        if (isset($map['WatermarkId'])) {
            $model->watermarkId = $map['WatermarkId'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        return $model;
    }
}
