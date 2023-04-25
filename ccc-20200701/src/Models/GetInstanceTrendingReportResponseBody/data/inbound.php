<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\GetInstanceTrendingReportResponseBody\data;

use AlibabaCloud\Tea\Model;

class inbound extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $callsAbandonedInIVR;

    /**
     * @example 0
     *
     * @var int
     */
    public $callsAbandonedInQueue;

    /**
     * @example 0
     *
     * @var int
     */
    public $callsAbandonedInRing;

    /**
     * @example 0
     *
     * @var int
     */
    public $callsHandled;

    /**
     * @example 0
     *
     * @var int
     */
    public $callsQueued;

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
        'callsAbandonedInIVR'   => 'CallsAbandonedInIVR',
        'callsAbandonedInQueue' => 'CallsAbandonedInQueue',
        'callsAbandonedInRing'  => 'CallsAbandonedInRing',
        'callsHandled'          => 'CallsHandled',
        'callsQueued'           => 'CallsQueued',
        'statsTime'             => 'StatsTime',
        'totalCalls'            => 'TotalCalls',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callsAbandonedInIVR) {
            $res['CallsAbandonedInIVR'] = $this->callsAbandonedInIVR;
        }
        if (null !== $this->callsAbandonedInQueue) {
            $res['CallsAbandonedInQueue'] = $this->callsAbandonedInQueue;
        }
        if (null !== $this->callsAbandonedInRing) {
            $res['CallsAbandonedInRing'] = $this->callsAbandonedInRing;
        }
        if (null !== $this->callsHandled) {
            $res['CallsHandled'] = $this->callsHandled;
        }
        if (null !== $this->callsQueued) {
            $res['CallsQueued'] = $this->callsQueued;
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
     * @return inbound
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallsAbandonedInIVR'])) {
            $model->callsAbandonedInIVR = $map['CallsAbandonedInIVR'];
        }
        if (isset($map['CallsAbandonedInQueue'])) {
            $model->callsAbandonedInQueue = $map['CallsAbandonedInQueue'];
        }
        if (isset($map['CallsAbandonedInRing'])) {
            $model->callsAbandonedInRing = $map['CallsAbandonedInRing'];
        }
        if (isset($map['CallsHandled'])) {
            $model->callsHandled = $map['CallsHandled'];
        }
        if (isset($map['CallsQueued'])) {
            $model->callsQueued = $map['CallsQueued'];
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
