<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryFpCompareJobListResponseBody\fpCompareJobList\fpCompareJob\fpCompareResult;

use AlibabaCloud\Tea\Model;

class masterMediaInfo extends Model
{
    /**
     * @var string
     */
    public $audioBitRate;

    /**
     * @var string
     */
    public $audioChannels;

    /**
     * @var string
     */
    public $audioSampleRate;

    /**
     * @var string
     */
    public $duration;

    /**
     * @var string
     */
    public $fpNum;

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
    public $totalVideoFrame;

    /**
     * @var string
     */
    public $width;
    protected $_name = [
        'audioBitRate'    => 'AudioBitRate',
        'audioChannels'   => 'AudioChannels',
        'audioSampleRate' => 'AudioSampleRate',
        'duration'        => 'Duration',
        'fpNum'           => 'FpNum',
        'fps'             => 'Fps',
        'height'          => 'Height',
        'totalVideoFrame' => 'TotalVideoFrame',
        'width'           => 'Width',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->audioBitRate) {
            $res['AudioBitRate'] = $this->audioBitRate;
        }
        if (null !== $this->audioChannels) {
            $res['AudioChannels'] = $this->audioChannels;
        }
        if (null !== $this->audioSampleRate) {
            $res['AudioSampleRate'] = $this->audioSampleRate;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->fpNum) {
            $res['FpNum'] = $this->fpNum;
        }
        if (null !== $this->fps) {
            $res['Fps'] = $this->fps;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->totalVideoFrame) {
            $res['TotalVideoFrame'] = $this->totalVideoFrame;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return masterMediaInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AudioBitRate'])) {
            $model->audioBitRate = $map['AudioBitRate'];
        }
        if (isset($map['AudioChannels'])) {
            $model->audioChannels = $map['AudioChannels'];
        }
        if (isset($map['AudioSampleRate'])) {
            $model->audioSampleRate = $map['AudioSampleRate'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['FpNum'])) {
            $model->fpNum = $map['FpNum'];
        }
        if (isset($map['Fps'])) {
            $model->fps = $map['Fps'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['TotalVideoFrame'])) {
            $model->totalVideoFrame = $map['TotalVideoFrame'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        return $model;
    }
}
