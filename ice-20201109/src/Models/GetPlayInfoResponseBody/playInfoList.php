<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetPlayInfoResponseBody;

use AlibabaCloud\Tea\Model;

class playInfoList extends Model
{
    /**
     * @description The color depth.
     *
     * @example 8
     *
     * @var int
     */
    public $bitDepth;

    /**
     * @description The bitrate of the media stream. Unit: Kbit/s.
     *
     * @example 20
     *
     * @var string
     */
    public $bitrate;

    /**
     * @description The time when the media stream was created. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2022-05-10T02:28:49Z
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
     *   **2K**
     *   **4K**
     *   **SQ**: standard sound quality
     *   **HQ**: high sound quality
     *   **AUTO**: adaptive bitrate
     *
     * @example HD
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
     * @example 0
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
     * @description The OSS URL of the file.
     *
     * @example http://outin-***.oss-cn-shanghai.aliyuncs.com/sv/43a68ee9-181809b6aba/43a68ee9-181809b6aba.mpeg
     *
     * @var string
     */
    public $fileURL;

    /**
     * @description The format of the media stream.
     *
     *   If the media asset is a video file, the valid values are **mp4** and **m3u8**.
     *   If the media asset is an audio-only file, the value is **mp3**.
     *
     * @example mp4
     *
     * @var string
     */
    public $format;

    /**
     * @description The frame rate of the media stream. Unit: frames per second (FPS).
     *
     * @example 25
     *
     * @var string
     */
    public $fps;

    /**
     * @description The high dynamic range (HDR) type of the media stream. Valid values:
     *
     *   HDR
     *   HDR10
     *   HLG
     *   DolbyVision
     *   HDRVivid
     *   SDR+
     *
     * @example HDR
     *
     * @var string
     */
    public $HDRType;

    /**
     * @description The height of the media stream. Unit: pixels.
     *
     * @example 1080
     *
     * @var int
     */
    public $height;

    /**
     * @description The task ID.
     *
     * @example 36c9d38e70bf43ed9f7f8f48d6356***
     *
     * @var string
     */
    public $jobId;

    /**
     * @description The time when the media stream was updated. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2022-05-13T11:39:41.714+08:00
     *
     * @var string
     */
    public $modificationTime;

    /**
     * @description The type of Narrowband HD™ transcoding. Valid values:
     *
     *   **0**: standard transcoding
     *   **1.0**: Narrowband HD™ 1.0 transcoding
     *   **2.0**: Narrowband HD™ 2.0 transcoding
     *
     * This parameter is returned only when a definition that is available in the built-in Narrowband HD™ 1.0 transcoding template is specified. For more information, see the [Definition parameter in TranscodeTemplate](https://help.aliyun.com/document_detail/52839.html) table.
     * @example 0
     *
     * @var string
     */
    public $narrowBandType;

    /**
     * @description The playback URL of the media stream.
     *
     * @example https://***.aliyuncdn.com/sv/756bee1-17f980f0945/756bee1-17f980f0945.mp4
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
     * @description The status of the media stream. Valid values:
     *
     *   **Normal**
     *   **Invisible**
     *
     * @example Normal
     *
     * @var string
     */
    public $status;

    /**
     * @description The tags of the media stream, which are used to identify the transcoding type.
     *
     * @example "{\\"ims.audioServiceType\\": \\"AudioEnhancement\\"}"
     *
     * @var string
     */
    public $streamTags;

    /**
     * @description The type of the media stream. If the media stream is a video stream, the value is **video**. If the media stream is an audio-only stream, the value is **audio**.
     *
     * @example video
     *
     * @var string
     */
    public $streamType;

    /**
     * @description The type of the transcoding template. Valid values:
     *
     *   Normal: standard transcoding
     *   AudioTranscode: audio transcoding
     *   Remux: container format conversion
     *   NarrowBandV1: Narrowband HD™ 1.0
     *   NarrowBandV2: Narrowband HD™ 2.0
     *   UHD: audio and video enhancement (ultra-high definition)
     *
     * @example Normal
     *
     * @var string
     */
    public $transTemplateType;

    /**
     * @description The ID of the watermark that is associated with the media stream.
     *
     * @example 5bed88672b1e2520ead228935ed51***
     *
     * @var string
     */
    public $watermarkId;

    /**
     * @description The width of the media stream. Unit: pixels.
     *
     * @example 1024
     *
     * @var int
     */
    public $width;
    protected $_name = [
        'bitDepth'          => 'BitDepth',
        'bitrate'           => 'Bitrate',
        'creationTime'      => 'CreationTime',
        'definition'        => 'Definition',
        'duration'          => 'Duration',
        'encrypt'           => 'Encrypt',
        'encryptType'       => 'EncryptType',
        'fileURL'           => 'FileURL',
        'format'            => 'Format',
        'fps'               => 'Fps',
        'HDRType'           => 'HDRType',
        'height'            => 'Height',
        'jobId'             => 'JobId',
        'modificationTime'  => 'ModificationTime',
        'narrowBandType'    => 'NarrowBandType',
        'playURL'           => 'PlayURL',
        'size'              => 'Size',
        'status'            => 'Status',
        'streamTags'        => 'StreamTags',
        'streamType'        => 'StreamType',
        'transTemplateType' => 'TransTemplateType',
        'watermarkId'       => 'WatermarkId',
        'width'             => 'Width',
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
        if (null !== $this->fileURL) {
            $res['FileURL'] = $this->fileURL;
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->streamTags) {
            $res['StreamTags'] = $this->streamTags;
        }
        if (null !== $this->streamType) {
            $res['StreamType'] = $this->streamType;
        }
        if (null !== $this->transTemplateType) {
            $res['TransTemplateType'] = $this->transTemplateType;
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
     * @return playInfoList
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
        if (isset($map['FileURL'])) {
            $model->fileURL = $map['FileURL'];
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StreamTags'])) {
            $model->streamTags = $map['StreamTags'];
        }
        if (isset($map['StreamType'])) {
            $model->streamType = $map['StreamType'];
        }
        if (isset($map['TransTemplateType'])) {
            $model->transTemplateType = $map['TransTemplateType'];
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
