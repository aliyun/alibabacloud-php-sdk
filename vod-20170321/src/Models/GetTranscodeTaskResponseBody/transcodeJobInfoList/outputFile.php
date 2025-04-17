<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetTranscodeTaskResponseBody\transcodeJobInfoList;

use AlibabaCloud\Dara\Model;

class outputFile extends Model
{
    /**
     * @var string
     */
    public $audioStreamList;

    /**
     * @var string
     */
    public $bitrate;

    /**
     * @var string
     */
    public $duration;

    /**
     * @var string
     */
    public $encryption;

    /**
     * @var int
     */
    public $filesize;

    /**
     * @var string
     */
    public $format;

    /**
     * @var string
     */
    public $fps;

    /**
     * @var string
     */
    public $height;

    /**
     * @var string
     */
    public $outputFileUrl;

    /**
     * @var string
     */
    public $subtitleStreamList;

    /**
     * @var string
     */
    public $videoStreamList;

    /**
     * @var string[]
     */
    public $watermarkIdList;

    /**
     * @var string
     */
    public $width;
    protected $_name = [
        'audioStreamList' => 'AudioStreamList',
        'bitrate' => 'Bitrate',
        'duration' => 'Duration',
        'encryption' => 'Encryption',
        'filesize' => 'Filesize',
        'format' => 'Format',
        'fps' => 'Fps',
        'height' => 'Height',
        'outputFileUrl' => 'OutputFileUrl',
        'subtitleStreamList' => 'SubtitleStreamList',
        'videoStreamList' => 'VideoStreamList',
        'watermarkIdList' => 'WatermarkIdList',
        'width' => 'Width',
    ];

    public function validate()
    {
        if (\is_array($this->watermarkIdList)) {
            Model::validateArray($this->watermarkIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->watermarkIdList)) {
                $res['WatermarkIdList'] = [];
                $n1 = 0;
                foreach ($this->watermarkIdList as $item1) {
                    $res['WatermarkIdList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $model->watermarkIdList = [];
                $n1 = 0;
                foreach ($map['WatermarkIdList'] as $item1) {
                    $model->watermarkIdList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        return $model;
    }
}
