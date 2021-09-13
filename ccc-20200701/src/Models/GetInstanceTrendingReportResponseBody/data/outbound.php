<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\GetInstanceTrendingReportResponseBody\data;

use AlibabaCloud\Tea\Model;

class outbound extends Model
{
    /**
     * @var int
     */
    public $statsTime;

    /**
     * @var int
     */
    public $callsAnswered;

    /**
     * @var int
     */
    public $totalCalls;
    protected $_name = [
        'statsTime'     => 'StatsTime',
        'callsAnswered' => 'CallsAnswered',
        'totalCalls'    => 'TotalCalls',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->statsTime) {
            $res['StatsTime'] = $this->statsTime;
        }
        if (null !== $this->callsAnswered) {
            $res['CallsAnswered'] = $this->callsAnswered;
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
        if (isset($map['StatsTime'])) {
            $model->statsTime = $map['StatsTime'];
        }
        if (isset($map['CallsAnswered'])) {
            $model->callsAnswered = $map['CallsAnswered'];
        }
        if (isset($map['TotalCalls'])) {
            $model->totalCalls = $map['TotalCalls'];
        }

        return $model;
    }
}
