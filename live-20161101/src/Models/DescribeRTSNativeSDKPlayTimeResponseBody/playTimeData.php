<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeRTSNativeSDKPlayTimeResponseBody;

use AlibabaCloud\Tea\Model;

class playTimeData extends Model
{
    /**
     * @description The average playback duration within the period of time.
     *
     * @example 1000
     *
     * @var string
     */
    public $playTime;

    /**
     * @description The average stuttering duration within the period of time.
     *
     * @example 100
     *
     * @var string
     */
    public $stallTime;

    /**
     * @description The timestamp of the returned data.
     *
     * @example 2021-12-10T20:00:00Z
     *
     * @var string
     */
    public $timeStamp;
    protected $_name = [
        'playTime' => 'PlayTime',
        'stallTime' => 'StallTime',
        'timeStamp' => 'TimeStamp',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->playTime) {
            $res['PlayTime'] = $this->playTime;
        }
        if (null !== $this->stallTime) {
            $res['StallTime'] = $this->stallTime;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return playTimeData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PlayTime'])) {
            $model->playTime = $map['PlayTime'];
        }
        if (isset($map['StallTime'])) {
            $model->stallTime = $map['StallTime'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }

        return $model;
    }
}
