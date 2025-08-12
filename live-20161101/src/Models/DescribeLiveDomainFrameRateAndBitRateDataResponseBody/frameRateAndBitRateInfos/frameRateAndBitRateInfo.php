<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainFrameRateAndBitRateDataResponseBody\frameRateAndBitRateInfos;

use AlibabaCloud\Dara\Model;

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
     * @var string
     */
    public $streamUrl;

    /**
     * @var float
     */
    public $videoFrameRate;
    protected $_name = [
        'audioFrameRate' => 'AudioFrameRate',
        'bitRate' => 'BitRate',
        'streamUrl' => 'StreamUrl',
        'videoFrameRate' => 'VideoFrameRate',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->audioFrameRate) {
            $res['AudioFrameRate'] = $this->audioFrameRate;
        }

        if (null !== $this->bitRate) {
            $res['BitRate'] = $this->bitRate;
        }

        if (null !== $this->streamUrl) {
            $res['StreamUrl'] = $this->streamUrl;
        }

        if (null !== $this->videoFrameRate) {
            $res['VideoFrameRate'] = $this->videoFrameRate;
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
        if (isset($map['AudioFrameRate'])) {
            $model->audioFrameRate = $map['AudioFrameRate'];
        }

        if (isset($map['BitRate'])) {
            $model->bitRate = $map['BitRate'];
        }

        if (isset($map['StreamUrl'])) {
            $model->streamUrl = $map['StreamUrl'];
        }

        if (isset($map['VideoFrameRate'])) {
            $model->videoFrameRate = $map['VideoFrameRate'];
        }

        return $model;
    }
}
