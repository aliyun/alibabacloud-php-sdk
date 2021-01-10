<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryFpCompareJobListResponseBody\fpCompareJobList\fpCompareJob\fpCompareResult;

use AlibabaCloud\Tea\Model;

class queryMediaInfo extends Model
{
    /**
     * @var string
     */
    public $audioSampleRate;

    /**
     * @var string
     */
    public $audioBitRate;

    /**
     * @var string
     */
    public $fpNum;

    /**
     * @var string
     */
    public $width;

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
    public $fps;

    /**
     * @var string
     */
    public $duration;

    /**
     * @var string
     */
    public $audioChannels;
    protected $_name = [
        'audioSampleRate' => 'AudioSampleRate',
        'audioBitRate'    => 'AudioBitRate',
        'fpNum'           => 'FpNum',
        'width'           => 'Width',
        'height'          => 'Height',
        'totalVideoFrame' => 'TotalVideoFrame',
        'fps'             => 'Fps',
        'duration'        => 'Duration',
        'audioChannels'   => 'AudioChannels',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->audioSampleRate) {
            $res['AudioSampleRate'] = $this->audioSampleRate;
        }
        if (null !== $this->audioBitRate) {
            $res['AudioBitRate'] = $this->audioBitRate;
        }
        if (null !== $this->fpNum) {
            $res['FpNum'] = $this->fpNum;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->totalVideoFrame) {
            $res['TotalVideoFrame'] = $this->totalVideoFrame;
        }
        if (null !== $this->fps) {
            $res['Fps'] = $this->fps;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->audioChannels) {
            $res['AudioChannels'] = $this->audioChannels;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return queryMediaInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AudioSampleRate'])) {
            $model->audioSampleRate = $map['AudioSampleRate'];
        }
        if (isset($map['AudioBitRate'])) {
            $model->audioBitRate = $map['AudioBitRate'];
        }
        if (isset($map['FpNum'])) {
            $model->fpNum = $map['FpNum'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['TotalVideoFrame'])) {
            $model->totalVideoFrame = $map['TotalVideoFrame'];
        }
        if (isset($map['Fps'])) {
            $model->fps = $map['Fps'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['AudioChannels'])) {
            $model->audioChannels = $map['AudioChannels'];
        }

        return $model;
    }
}
