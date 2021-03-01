<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class QueryMonitorInfoRequest extends Model
{
    /**
     * @var int
     */
    public $start;

    /**
     * @var int
     */
    public $end;

    /**
     * @var string
     */
    public $metric;

    /**
     * @var string
     */
    public $tags;

    /**
     * @var string
     */
    public $aggregator;

    /**
     * @var string
     */
    public $interval;
    protected $_name = [
        'start'      => 'Start',
        'end'        => 'End',
        'metric'     => 'Metric',
        'tags'       => 'Tags',
        'aggregator' => 'Aggregator',
        'interval'   => 'Interval',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->start) {
            $res['Start'] = $this->start;
        }
        if (null !== $this->end) {
            $res['End'] = $this->end;
        }
        if (null !== $this->metric) {
            $res['Metric'] = $this->metric;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->aggregator) {
            $res['Aggregator'] = $this->aggregator;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryMonitorInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Start'])) {
            $model->start = $map['Start'];
        }
        if (isset($map['End'])) {
            $model->end = $map['End'];
        }
        if (isset($map['Metric'])) {
            $model->metric = $map['Metric'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['Aggregator'])) {
            $model->aggregator = $map['Aggregator'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }

        return $model;
    }
}
