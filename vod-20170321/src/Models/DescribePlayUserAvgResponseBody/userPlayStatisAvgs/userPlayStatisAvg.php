<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribePlayUserAvgResponseBody\userPlayStatisAvgs;

use AlibabaCloud\Dara\Model;

class userPlayStatisAvg extends Model
{
    /**
     * @var string
     */
    public $avgPlayCount;

    /**
     * @var string
     */
    public $avgPlayDuration;

    /**
     * @var string
     */
    public $date;
    protected $_name = [
        'avgPlayCount' => 'AvgPlayCount',
        'avgPlayDuration' => 'AvgPlayDuration',
        'date' => 'Date',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
