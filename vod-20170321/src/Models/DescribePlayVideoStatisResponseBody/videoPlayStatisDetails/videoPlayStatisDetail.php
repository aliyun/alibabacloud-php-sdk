<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribePlayVideoStatisResponseBody\videoPlayStatisDetails;

use AlibabaCloud\Tea\Model;

class videoPlayStatisDetail extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 20170120
     *
     * @var string
     */
    public $date;

    /**
     * @description The title of the video.
     *
     * @example 967277
     *
     * @var string
     */
    public $playDuration;

    /**
     * @example <=1m:79.2%;>1<=5m:16.7%;>5<=10m:4.2%
     *
     * @var string
     */
    public $playRange;

    /**
     * @description Queries daily playback statistics on a specified video in a specified time range.
     *
     * @var string
     */
    public $title;

    /**
     * @example 1
     *
     * @var string
     */
    public $UV;

    /**
     * @description The operation that you want to perform. Set the value to **DescribePlayVideoStatis**.
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
