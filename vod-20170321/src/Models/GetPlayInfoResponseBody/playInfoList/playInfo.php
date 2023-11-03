<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetPlayInfoResponseBody\playInfoList;

use AlibabaCloud\Tea\Model;

class playInfo extends Model
{
    /**
     * @description The color depth. This value must be an integer.
     *
     * @example 8
     *
     * @var int
     */
    public $bitDepth;

    /**
     * @description The bitrate of the media stream. Unit: Kbit/s.
     *
     * @example 450.878
     *
     * @var string
     */
    public $bitrate;

    /**
     * @description The time when the audio or video stream was created. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2022-04-18T07:37:15Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The quality of the media stream. Valid values:
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
     * @example LD
     *
     * @var string
     */
    public $definition;

    /**
     * @description The duration of the media stream. Unit: seconds.
     *
     * @example 9.0464
     *
     * @var string
     */
    public $duration;

    /**
     * @description Indicates whether the media stream is encrypted. Valid values:
     *
     *   **0**: The media stream is not encrypted.
     *   **1**: The media stream is encrypted.
     *
     * @example 1
     *
     * @var int
     */
    public $encrypt;

    /**
     * @description The encryption type of the media stream. Valid values:
     *
     *   **AliyunVoDEncryption**: Alibaba Cloud proprietary cryptography
     *   **HLSEncryption**: HTTP Live Streaming (HLS) encryption
     *
     * >  If the encryption type is AliyunVoDEncryption, only ApsaraVideo Player SDK can be used to play videos.
     * @example AliyunVoDEncryption
     *
     * @var string
     */
    public $encryptType;

    /**
     * @description The format of the media stream.
     *
     *   If the media file is a video file, the valid values are **mp4** and **m3u8**.
     *   If the media file is an audio-only file, the value is **mp3**.
     *
     * @example m3u8
     *
     * @var string
     */
    public $format;

    /**
     * @description The frame rate of the media stream. Unit: frames per second.
     *
     * @example 25
     *
     * @var string
     */
    public $fps;

    /**
     * @description The HDR type of the media stream. Valid values:
     *
     *   HDR
     *   HDR10
     *   HLG
     *   DolbyVision
     *   HDRVivid
     *   SDR+
     *
     * @example HLG
     *
     * @var string
     */
    public $HDRType;

    /**
     * @description The height of the media stream. Unit: pixels.
     *
     * @example 640
     *
     * @var int
     */
    public $height;

    /**
     * @description The custom watermark information of the copyright watermark. This parameter is returned if you set `JobType` to `2`.
     *
     * @example CopyrightMarkTest
     *
     * @var string
     */
    public $jobExt;

    /**
     * @description The job ID for transcoding the media stream. This ID uniquely identifies a media stream.
     *
     * @example 80e9c6580e754a798c3c19c59b16****
     *
     * @var string
     */
    public $jobId;

    /**
     * @description The type of the digital watermark. Valid values:
     *
     *   **1**: tracing watermark
     *   **2**: copyright watermark
     *
     * @example 2
     *
     * @var int
     */
    public $jobType;

    /**
     * @description The update time. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2022-04-20T06:32:19Z
     *
     * @var string
     */
    public $modificationTime;

    /**
     * @description The type of Narrowband HD transcoding. Valid values:
     *
     *   **0**: normal transcoding
     *   **1.0**: Narrowband HD 1.0
     *   **2.0**: Narrowband HD 2.0
     *
     * This parameter is returned only when a quality that is available in the built-in Narrowband HD 1.0 transcoding template is specified. For more information, see the [Definition parameter in the TranscodeTemplate](~~52839~~) table.
     * @example 0
     *
     * @var string
     */
    public $narrowBandType;

    /**
     * @description The playback URL of the media stream.
     *
     * @example https://example.aliyundoc.com/d52ee123f331466aabf6ab32a93d****\/a777f9e24e6e47a2a942467d5c38ea37-8ee8e04293c6657fdda282bc422704****.m3u8
     *
     * @var string
     */
    public $playURL;

    /**
     * @description The size of the media stream. Unit: bytes.
     *
     * @example 418112
     *
     * @var int
     */
    public $size;

    /**
     * @description The specifications of transcoded audio and video streams. For more information about the valid values, see [Output specifications](~~124671~~).
     *
     * @example H264.LD
     *
     * @var string
     */
    public $specification;

    /**
     * @description The status of the audio or video stream. Valid values:
     *
     *   **Normal**: The latest transcoded stream in each quality and format is in the Normal status.
     *   **Invisible**: If multiple streams are transcoded in the same quality and format, the latest transcoded stream is in the Normal status and other streams are in the Invisible status.
     *
     * @example Normal
     *
     * @var string
     */
    public $status;

    /**
     * @description The type of the media stream. If the media stream is a video stream, the value is **video**. If the media stream is an audio-only stream, the value is **audio**.
     *
     * @example video
     *
     * @var string
     */
    public $streamType;

    /**
     * @description The ID of the watermark that is associated with the media stream.
     *
     * @example dgfn26457856****
     *
     * @var string
     */
    public $watermarkId;

    /**
     * @description The width of the media stream. Unit: pixels.
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
        'jobExt'           => 'JobExt',
        'jobId'            => 'JobId',
        'jobType'          => 'JobType',
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
        if (null !== $this->jobExt) {
            $res['JobExt'] = $this->jobExt;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->jobType) {
            $res['JobType'] = $this->jobType;
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
        if (isset($map['JobExt'])) {
            $model->jobExt = $map['JobExt'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['JobType'])) {
            $model->jobType = $map['JobType'];
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
