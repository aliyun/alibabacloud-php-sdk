<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightSearchListResponseBody\module\flightList\cabinInfoList\flightRuleList\signRule;

use AlibabaCloud\Tea\Model;

class info extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @example 100
     *
     * @var int
     */
    public $cost;

    /**
     * @example 10
     *
     * @var int
     */
    public $costPercent;

    /**
     * @example 1675036500000
     *
     * @var int
     */
    public $timeStamp;

    /**
     * @example demo
     *
     * @var string
     */
    public $timeType;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'content'     => 'content',
        'cost'        => 'cost',
        'costPercent' => 'cost_percent',
        'timeStamp'   => 'time_stamp',
        'timeType'    => 'time_type',
        'title'       => 'title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }
        if (null !== $this->cost) {
            $res['cost'] = $this->cost;
        }
        if (null !== $this->costPercent) {
            $res['cost_percent'] = $this->costPercent;
        }
        if (null !== $this->timeStamp) {
            $res['time_stamp'] = $this->timeStamp;
        }
        if (null !== $this->timeType) {
            $res['time_type'] = $this->timeType;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return info
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['content'])) {
            $model->content = $map['content'];
        }
        if (isset($map['cost'])) {
            $model->cost = $map['cost'];
        }
        if (isset($map['cost_percent'])) {
            $model->costPercent = $map['cost_percent'];
        }
        if (isset($map['time_stamp'])) {
            $model->timeStamp = $map['time_stamp'];
        }
        if (isset($map['time_type'])) {
            $model->timeType = $map['time_type'];
        }
        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        return $model;
    }
}
