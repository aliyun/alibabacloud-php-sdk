<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamBitRateDataResponse\frameRateAndBitRateInfos;

use AlibabaCloud\Tea\Model;

class frameRateAndBitRateInfo extends Model
{
    /**
     * @var string
     */
    public $streamUrl;

    /**
     * @var float
     */
    public $videoFrameRate;

    /**
     * @var float
     */
    public $audioFrameRate;

    /**
     * @var float
     */
    public $bitRate;

    /**
     * @var string
     */
    public $time;
    protected $_name = [
        'streamUrl'      => 'StreamUrl',
        'videoFrameRate' => 'VideoFrameRate',
        'audioFrameRate' => 'AudioFrameRate',
        'bitRate'        => 'BitRate',
        'time'           => 'Time',
    ];

    public function validate()
    {
        Model::validateRequired('streamUrl', $this->streamUrl, true);
        Model::validateRequired('videoFrameRate', $this->videoFrameRate, true);
        Model::validateRequired('audioFrameRate', $this->audioFrameRate, true);
        Model::validateRequired('bitRate', $this->bitRate, true);
        Model::validateRequired('time', $this->time, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->streamUrl) {
            $res['StreamUrl'] = $this->streamUrl;
        }
        if (null !== $this->videoFrameRate) {
            $res['VideoFrameRate'] = $this->videoFrameRate;
        }
        if (null !== $this->audioFrameRate) {
            $res['AudioFrameRate'] = $this->audioFrameRate;
        }
        if (null !== $this->bitRate) {
            $res['BitRate'] = $this->bitRate;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return frameRateAndBitRateInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StreamUrl'])) {
            $model->streamUrl = $map['StreamUrl'];
        }
        if (isset($map['VideoFrameRate'])) {
            $model->videoFrameRate = $map['VideoFrameRate'];
        }
        if (isset($map['AudioFrameRate'])) {
            $model->audioFrameRate = $map['AudioFrameRate'];
        }
        if (isset($map['BitRate'])) {
            $model->bitRate = $map['BitRate'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        return $model;
    }
}
