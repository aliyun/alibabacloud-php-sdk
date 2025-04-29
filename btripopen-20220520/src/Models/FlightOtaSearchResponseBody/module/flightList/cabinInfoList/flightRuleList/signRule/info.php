<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOtaSearchResponseBody\module\flightList\cabinInfoList\flightRuleList\signRule;

use AlibabaCloud\Dara\Model;

class info extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var int
     */
    public $cost;

    /**
     * @var int
     */
    public $costPercent;

    /**
     * @var int
     */
    public $timeStamp;

    /**
     * @var string
     */
    public $timeType;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'content' => 'content',
        'cost' => 'cost',
        'costPercent' => 'cost_percent',
        'timeStamp' => 'time_stamp',
        'timeType' => 'time_type',
        'title' => 'title',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
