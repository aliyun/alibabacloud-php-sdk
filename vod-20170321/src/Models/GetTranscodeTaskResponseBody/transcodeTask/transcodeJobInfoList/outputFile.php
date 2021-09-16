<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetTranscodeTaskResponseBody\transcodeTask\transcodeJobInfoList;

use AlibabaCloud\Tea\Model;

class outputFile extends Model
{
    /**
     * @var string
     */
    public $videoStreamList;

    /**
     * @var string
     */
    public $outputFileUrl;

    /**
     * @var string
     */
    public $encryption;

    /**
     * @var string
     */
    public $height;

    /**
     * @var string
     */
    public $subtitleStreamList;

    /**
     * @var string
     */
    public $bitrate;

    /**
     * @var string
     */
    public $audioStreamList;

    /**
     * @var string
     */
    public $width;

    /**
     * @var string
     */
    public $fps;

    /**
     * @var string
     */
    public $duration;

    /**
     * @var string
     */
    public $format;

    /**
     * @var int
     */
    public $filesize;

    /**
     * @var string[]
     */
    public $watermarkIdList;
    protected $_name = [
        'videoStreamList'    => 'VideoStreamList',
        'outputFileUrl'      => 'OutputFileUrl',
        'encryption'         => 'Encryption',
        'height'             => 'Height',
        'subtitleStreamList' => 'SubtitleStreamList',
        'bitrate'            => 'Bitrate',
        'audioStreamList'    => 'AudioStreamList',
        'width'              => 'Width',
        'fps'                => 'Fps',
        'duration'           => 'Duration',
        'format'             => 'Format',
        'filesize'           => 'Filesize',
        'watermarkIdList'    => 'WatermarkIdList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->videoStreamList) {
            $res['VideoStreamList'] = $this->videoStreamList;
        }
        if (null !== $this->outputFileUrl) {
            $res['OutputFileUrl'] = $this->outputFileUrl;
        }
        if (null !== $this->encryption) {
            $res['Encryption'] = $this->encryption;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->subtitleStreamList) {
            $res['SubtitleStreamList'] = $this->subtitleStreamList;
        }
        if (null !== $this->bitrate) {
            $res['Bitrate'] = $this->bitrate;
        }
        if (null !== $this->audioStreamList) {
            $res['AudioStreamList'] = $this->audioStreamList;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }
        if (null !== $this->fps) {
            $res['Fps'] = $this->fps;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->format) {
            $res['Format'] = $this->format;
        }
        if (null !== $this->filesize) {
            $res['Filesize'] = $this->filesize;
        }
        if (null !== $this->watermarkIdList) {
            $res['WatermarkIdList'] = $this->watermarkIdList;
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
        if (isset($map['VideoStreamList'])) {
            $model->videoStreamList = $map['VideoStreamList'];
        }
        if (isset($map['OutputFileUrl'])) {
            $model->outputFileUrl = $map['OutputFileUrl'];
        }
        if (isset($map['Encryption'])) {
            $model->encryption = $map['Encryption'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['SubtitleStreamList'])) {
            $model->subtitleStreamList = $map['SubtitleStreamList'];
        }
        if (isset($map['Bitrate'])) {
            $model->bitrate = $map['Bitrate'];
        }
        if (isset($map['AudioStreamList'])) {
            $model->audioStreamList = $map['AudioStreamList'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }
        if (isset($map['Fps'])) {
            $model->fps = $map['Fps'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['Format'])) {
            $model->format = $map['Format'];
        }
        if (isset($map['Filesize'])) {
            $model->filesize = $map['Filesize'];
        }
        if (isset($map['WatermarkIdList'])) {
            if (!empty($map['WatermarkIdList'])) {
                $model->watermarkIdList = $map['WatermarkIdList'];
            }
        }

        return $model;
    }
}
