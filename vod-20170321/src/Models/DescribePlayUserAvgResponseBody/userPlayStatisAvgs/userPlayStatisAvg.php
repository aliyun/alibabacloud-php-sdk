<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribePlayUserAvgResponseBody\userPlayStatisAvgs;

use AlibabaCloud\Tea\Model;

class userPlayStatisAvg extends Model
{
    /**
     * @description The average number of video views.
     *
     * @example 170
     *
     * @var string
     */
    public $avgPlayCount;

    /**
     * @description The average playback duration. Unit: milliseconds.
     *
     * @example 1035902.8
     *
     * @var string
     */
    public $avgPlayDuration;

    /**
     * @description The date when the statistics were generated. The date follows the *yyyy-MM-dd* format.
     *
     * @example 20170120
     *
     * @var string
     */
    public $date;
    protected $_name = [
        'avgPlayCount'    => 'AvgPlayCount',
        'avgPlayDuration' => 'AvgPlayDuration',
        'date'            => 'Date',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->avgPlayCount) {
            $res['AvgPlayCount'] = $this->avgPlayCount;
        }
        if (null !== $this->avgPlayDuration) {
            $res['AvgPlayDuration'] = $this->avgPlayDuration;
        }
        if (null !== $this->date) {
            $res['Date'] = $this->date;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userPlayStatisAvg
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvgPlayCount'])) {
            $model->avgPlayCount = $map['AvgPlayCount'];
        }
        if (isset($map['AvgPlayDuration'])) {
            $model->avgPlayDuration = $map['AvgPlayDuration'];
        }
        if (isset($map['Date'])) {
            $model->date = $map['Date'];
        }

        return $model;
    }
}
