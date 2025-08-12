<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveCenterStreamRateDataResponseBody;

use AlibabaCloud\Dara\Model;

class rateDatas extends Model
{
    /**
     * @var string
     */
    public $audioFps;

    /**
     * @var string
     */
    public $audioRate;

    /**
     * @var string
     */
    public $time;

    /**
     * @var string
     */
    public $videoFps;

    /**
     * @var string
     */
    public $videoRate;
    protected $_name = [
        'audioFps' => 'AudioFps',
        'audioRate' => 'AudioRate',
        'time' => 'Time',
        'videoFps' => 'VideoFps',
        'videoRate' => 'VideoRate',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->audioFps) {
            $res['AudioFps'] = $this->audioFps;
        }

        if (null !== $this->audioRate) {
            $res['AudioRate'] = $this->audioRate;
        }

        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }

        if (null !== $this->videoFps) {
            $res['VideoFps'] = $this->videoFps;
        }

        if (null !== $this->videoRate) {
            $res['VideoRate'] = $this->videoRate;
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
        if (isset($map['AudioFps'])) {
            $model->audioFps = $map['AudioFps'];
        }

        if (isset($map['AudioRate'])) {
            $model->audioRate = $map['AudioRate'];
        }

        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        if (isset($map['VideoFps'])) {
            $model->videoFps = $map['VideoFps'];
        }

        if (isset($map['VideoRate'])) {
            $model->videoRate = $map['VideoRate'];
        }

        return $model;
    }
}
