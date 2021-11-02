<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribePlayVideoStatisResponseBody\videoPlayStatisDetails;

use AlibabaCloud\Tea\Model;

class videoPlayStatisDetail extends Model
{
    /**
     * @var string
     */
    public $date;

    /**
     * @var string
     */
    public $playDuration;

    /**
     * @var string
     */
    public $playRange;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $UV;

    /**
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
