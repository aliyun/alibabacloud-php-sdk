<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribePlayUserAvgResponseBody\userPlayStatisAvgs;

use AlibabaCloud\Tea\Model;

class userPlayStatisAvg extends Model
{
    /**
     * @var string
     */
    public $avgPlayDuration;

    /**
     * @var string
     */
    public $avgPlayCount;

    /**
     * @var string
     */
    public $date;
    protected $_name = [
        'avgPlayDuration' => 'AvgPlayDuration',
        'avgPlayCount'    => 'AvgPlayCount',
        'date'            => 'Date',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->avgPlayDuration) {
            $res['AvgPlayDuration'] = $this->avgPlayDuration;
        }
        if (null !== $this->avgPlayCount) {
            $res['AvgPlayCount'] = $this->avgPlayCount;
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
        if (isset($map['AvgPlayDuration'])) {
            $model->avgPlayDuration = $map['AvgPlayDuration'];
        }
        if (isset($map['AvgPlayCount'])) {
            $model->avgPlayCount = $map['AvgPlayCount'];
        }
        if (isset($map['Date'])) {
            $model->date = $map['Date'];
        }

        return $model;
    }
}
