<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetTranscodeTaskResponseBody\transcodeTask\transcodeJobInfoList;

use AlibabaCloud\Tea\Model;

class outputFile extends Model
{
    /**
     * @description The audio streams.
     *
     * @example "AudioStreamList": "[{\"Bitrate\":\"64.533\",\"ChannelLayout\":\"stereo\",\"Channels\":\"2\",\"CodecLongName\":\"AAC (Advanced Audio Coding)\",\"CodecName\":\"aac\",\"CodecTag\":\"0x6134706d\",\"CodecTagString\":\"mp4a\",\"CodecTimeBase\":\"1/44100\",\"Duration\":\"12.615533\",\"Index\":\"1\",\"Lang\":\"und\",\"SampleFmt\":\"fltp\",\"Samplerate\":\"44100\",\"StartTime\":\"-0.046440\",\"Timebase\":\"1/44100\"}]
     *
     * @var string
     */
    public $audioStreamList;

    /**
     * @description The average bitrate of the output file. Unit: Kbit/s.
     *
     * @example 964
     *
     * @var string
     */
    public $bitrate;

    /**
     * @description The length of the output file. Unit: seconds.
     *
     * @example 12
     *
     * @var string
     */
    public $duration;

    /**
     * @description The encryption method of the output file. Valid values:
     *
     *   **AliyunVoDEncryption**: Alibaba Cloud proprietary cryptography
     *   **HLSEncryption**: HTTP Live Streaming (HLS) encryption
     *
     * @example {\"EncryptType\":\"AliyunVoDEncryption\"}
     *
     * @var string
     */
    public $encryption;

    /**
     * @description The size of the output file. Unit: byte.
     *
     * @example 851076
     *
     * @var int
     */
    public $filesize;

    /**
     * @description The container format of the output file.
     *
     * @example m3u8
     *
     * @var string
     */
    public $format;

    /**
     * @description The frame rate of the output file. Unit: frames per second.
     *
     * @example 25
     *
     * @var string
     */
    public $fps;

    /**
     * @description The height of the output video. Unit: pixels.
     *
     * @example 360
     *
     * @var string
     */
    public $height;

    /**
     * @description The OSS URL of the output file.
     *
     * @example http://outin-40564*****e1403e7.oss-cn-shanghai.aliyuncs.com/883f5d*****f20aaa352f/c3be4f073*****7d5193ec8-{DestMd5}-od-S00000001-200000.mp4
     *
     * @var string
     */
    public $outputFileUrl;

    /**
     * @description The subtitle streams.
     *
     * @example []
     *
     * @var string
     */
    public $subtitleStreamList;

    /**
     * @description The video streams.
     *
     * @example [{\"AvgFPS\":\"30.0\",\"Bitrate\":\"933.814\",\"CodecLongName\":\"H.264 / AVC / MPEG-4 AVC / MPEG-4 part 10\",\"CodecName\":\"h264\",\"CodecTag\":\"0x31637661\",\"CodecTagString\":\"avc1\",\"CodecTimeBase\":\"1/60\",\"Dar\":\"9:16\",\"Duration\":\"12.033333\",\"Fps\":\"30.0\",\"HasBFrames\":\"2\",\"Height\":\"360\",\"Index\":\"0\",\"Lang\":\"und\",\"Level\":\"30\",\"PixFmt\":\"yuv420p\",\"Profile\":\"High\",\"Sar\":\"81:256\",\"StartTime\":\"0.000000\",\"Timebase\":\"1/15360\",\"Width\":\"640\"}]
     *
     * @var string
     */
    public $videoStreamList;

    /**
     * @description The IDs of the watermarks used by the output file.
     *
     * @var string[]
     */
    public $watermarkIdList;

    /**
     * @description The width of the output video. Unit: pixels.
     *
     * @example 640
     *
     * @var string
     */
    public $width;
    protected $_name = [
        'audioStreamList'    => 'AudioStreamList',
        'bitrate'            => 'Bitrate',
        'duration'           => 'Duration',
        'encryption'         => 'Encryption',
        'filesize'           => 'Filesize',
        'format'             => 'Format',
        'fps'                => 'Fps',
        'height'             => 'Height',
        'outputFileUrl'      => 'OutputFileUrl',
        'subtitleStreamList' => 'SubtitleStreamList',
        'videoStreamList'    => 'VideoStreamList',
        'watermarkIdList'    => 'WatermarkIdList',
        'width'              => 'Width',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->audioStreamList) {
            $res['AudioStreamList'] = $this->audioStreamList;
        }
        if (null !== $this->bitrate) {
            $res['Bitrate'] = $this->bitrate;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->encryption) {
            $res['Encryption'] = $this->encryption;
        }
        if (null !== $this->filesize) {
            $res['Filesize'] = $this->filesize;
        }
        if (null !== $this->format) {
            $res['Format'] = $this->format;
        }
        if (null !== $this->fps) {
            $res['Fps'] = $this->fps;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->outputFileUrl) {
            $res['OutputFileUrl'] = $this->outputFileUrl;
        }
        if (null !== $this->subtitleStreamList) {
            $res['SubtitleStreamList'] = $this->subtitleStreamList;
        }
        if (null !== $this->videoStreamList) {
            $res['VideoStreamList'] = $this->videoStreamList;
        }
        if (null !== $this->watermarkIdList) {
            $res['WatermarkIdList'] = $this->watermarkIdList;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return outputFile
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AudioStreamList'])) {
            $model->audioStreamList = $map['AudioStreamList'];
        }
        if (isset($map['Bitrate'])) {
            $model->bitrate = $map['Bitrate'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['Encryption'])) {
            $model->encryption = $map['Encryption'];
        }
        if (isset($map['Filesize'])) {
            $model->filesize = $map['Filesize'];
        }
        if (isset($map['Format'])) {
            $model->format = $map['Format'];
        }
        if (isset($map['Fps'])) {
            $model->fps = $map['Fps'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['OutputFileUrl'])) {
            $model->outputFileUrl = $map['OutputFileUrl'];
        }
        if (isset($map['SubtitleStreamList'])) {
            $model->subtitleStreamList = $map['SubtitleStreamList'];
        }
        if (isset($map['VideoStreamList'])) {
            $model->videoStreamList = $map['VideoStreamList'];
        }
        if (isset($map['WatermarkIdList'])) {
            if (!empty($map['WatermarkIdList'])) {
                $model->watermarkIdList = $map['WatermarkIdList'];
            }
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        return $model;
    }
}
