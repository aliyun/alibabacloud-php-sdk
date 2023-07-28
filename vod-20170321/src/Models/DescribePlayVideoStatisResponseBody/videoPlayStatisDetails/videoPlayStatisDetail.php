<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribePlayVideoStatisResponseBody\videoPlayStatisDetails;

use AlibabaCloud\Tea\Model;

class videoPlayStatisDetail extends Model
{
    /**
     * @description The date when the statistics were generated. The date follows the *yyyy-MM-dd* format.
     *
     * @example 20170120
     *
     * @var string
     */
    public $date;

    /**
     * @description The playback duration. Unit: milliseconds.
     *
     * @example 967277
     *
     * @var string
     */
    public $playDuration;

    /**
     * @description The distribution of the playback duration.
     *
     * @example <=1m:79.2%;>1<=5m:16.7%;>5<=10m:4.2%
     *
     * @var string
     */
    public $playRange;

    /**
     * @description The title of the video.
     *
     * @example Four streams (one stream encrypted): LD-HLS + SD-MP4 + HD-HLS-encrypted + UHD-MP4
     *
     * @var string
     */
    public $title;

    /**
     * @description The number of unique visitors.
     *
     * @example 1
     *
     * @var string
     */
    public $UV;

    /**
     * @description The number of video views.
     *
     * @example 24
     *
     * @var string
     */
    public $VV;
    protected $_name = [
        'date'         => 'Date',
        'playDuration' => 'PlayDuration',
        'playRange'    => 'PlayRange',
        'title'        => 'Title',
        'UV'           => 'UV',
        'VV'           => 'VV',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->date) {
            $res['Date'] = $this->date;
        }
        if (null !== $this->playDuration) {
            $res['PlayDuration'] = $this->playDuration;
        }
        if (null !== $this->playRange) {
            $res['PlayRange'] = $this->playRange;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->UV) {
            $res['UV'] = $this->UV;
        }
        if (null !== $this->VV) {
            $res['VV'] = $this->VV;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return videoPlayStatisDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Date'])) {
            $model->date = $map['Date'];
        }
        if (isset($map['PlayDuration'])) {
            $model->playDuration = $map['PlayDuration'];
        }
        if (isset($map['PlayRange'])) {
            $model->playRange = $map['PlayRange'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['UV'])) {
            $model->UV = $map['UV'];
        }
        if (isset($map['VV'])) {
            $model->VV = $map['VV'];
        }

        return $model;
    }
}
