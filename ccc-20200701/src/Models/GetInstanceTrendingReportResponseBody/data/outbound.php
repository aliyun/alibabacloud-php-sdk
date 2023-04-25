<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\GetInstanceTrendingReportResponseBody\data;

use AlibabaCloud\Tea\Model;

class outbound extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $callsAnswered;

    /**
     * @example 1604639129000
     *
     * @var int
     */
    public $statsTime;

    /**
     * @example 0
     *
     * @var int
     */
    public $totalCalls;
    protected $_name = [
        'callsAnswered' => 'CallsAnswered',
        'statsTime'     => 'StatsTime',
        'totalCalls'    => 'TotalCalls',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callsAnswered) {
            $res['CallsAnswered'] = $this->callsAnswered;
        }
        if (null !== $this->statsTime) {
            $res['StatsTime'] = $this->statsTime;
        }
        if (null !== $this->totalCalls) {
            $res['TotalCalls'] = $this->totalCalls;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return outbound
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallsAnswered'])) {
            $model->callsAnswered = $map['CallsAnswered'];
        }
        if (isset($map['StatsTime'])) {
            $model->statsTime = $map['StatsTime'];
        }
        if (isset($map['TotalCalls'])) {
            $model->totalCalls = $map['TotalCalls'];
        }

        return $model;
    }
}
