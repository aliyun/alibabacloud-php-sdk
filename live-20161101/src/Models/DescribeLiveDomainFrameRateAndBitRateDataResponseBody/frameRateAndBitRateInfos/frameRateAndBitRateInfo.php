<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainFrameRateAndBitRateDataResponseBody\frameRateAndBitRateInfos;

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
    public $videoFrameRate;

    /**
     * @var string
     */
    public $streamUrl;

    /**
     * @var float
     */
    public $bitRate;
    protected $_name = [
        'audioFrameRate' => 'AudioFrameRate',
        'videoFrameRate' => 'VideoFrameRate',
        'streamUrl'      => 'StreamUrl',
        'bitRate'        => 'BitRate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->audioFrameRate) {
            $res['AudioFrameRate'] = $this->audioFrameRate;
        }
        if (null !== $this->videoFrameRate) {
            $res['VideoFrameRate'] = $this->videoFrameRate;
        }
        if (null !== $this->streamUrl) {
            $res['StreamUrl'] = $this->streamUrl;
        }
        if (null !== $this->bitRate) {
            $res['BitRate'] = $this->bitRate;
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
        if (isset($map['VideoFrameRate'])) {
            $model->videoFrameRate = $map['VideoFrameRate'];
        }
        if (isset($map['StreamUrl'])) {
            $model->streamUrl = $map['StreamUrl'];
        }
        if (isset($map['BitRate'])) {
            $model->bitRate = $map['BitRate'];
        }

        return $model;
    }
}
