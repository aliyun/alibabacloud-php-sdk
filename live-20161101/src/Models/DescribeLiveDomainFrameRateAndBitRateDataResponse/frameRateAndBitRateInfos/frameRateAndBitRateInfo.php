<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainFrameRateAndBitRateDataResponse\frameRateAndBitRateInfos;

use AlibabaCloud\Tea\Model;

class frameRateAndBitRateInfo extends Model
{
    /**
     * @var float
     */
    public $audioFrameRate;

    /**
     * @var float
     */
    public $bitRate;

    /**
     * @var float
     */
    public $videoFrameRate;

    /**
     * @var string
     */
    public $streamUrl;
    protected $_name = [
        'audioFrameRate' => 'AudioFrameRate',
        'bitRate'        => 'BitRate',
        'videoFrameRate' => 'VideoFrameRate',
        'streamUrl'      => 'StreamUrl',
    ];

    public function validate()
    {
        Model::validateRequired('audioFrameRate', $this->audioFrameRate, true);
        Model::validateRequired('bitRate', $this->bitRate, true);
        Model::validateRequired('videoFrameRate', $this->videoFrameRate, true);
        Model::validateRequired('streamUrl', $this->streamUrl, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->audioFrameRate) {
            $res['AudioFrameRate'] = $this->audioFrameRate;
        }
        if (null !== $this->bitRate) {
            $res['BitRate'] = $this->bitRate;
        }
        if (null !== $this->videoFrameRate) {
            $res['VideoFrameRate'] = $this->videoFrameRate;
        }
        if (null !== $this->streamUrl) {
            $res['StreamUrl'] = $this->streamUrl;
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
        if (isset($map['AudioFrameRate'])) {
            $model->audioFrameRate = $map['AudioFrameRate'];
        }
        if (isset($map['BitRate'])) {
            $model->bitRate = $map['BitRate'];
        }
        if (isset($map['VideoFrameRate'])) {
            $model->videoFrameRate = $map['VideoFrameRate'];
        }
        if (isset($map['StreamUrl'])) {
            $model->streamUrl = $map['StreamUrl'];
        }

        return $model;
    }
}
