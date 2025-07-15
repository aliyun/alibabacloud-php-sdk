<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveCenterStreamRateDataResponseBody;

use AlibabaCloud\Tea\Model;

class rateDatas extends Model
{
    /**
     * @description The audio frame rate.
     *
     * @example 47
     *
     * @var string
     */
    public $audioFps;

    /**
     * @description The audio bitrate.
     *
     * @example 600
     *
     * @var string
     */
    public $audioRate;

    /**
     * @description The time when the data was collected. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2024-03-05T18:00:53Z
     *
     * @var string
     */
    public $time;

    /**
     * @description The video frame rate.
     *
     * @example 30
     *
     * @var string
     */
    public $videoFps;

    /**
     * @description The video bitrate.
     *
     * @example 1953584
     *
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

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return rateDatas
     */
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
