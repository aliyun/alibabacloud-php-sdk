<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\GetInstanceTrendingReportResponseBody\data;

use AlibabaCloud\Tea\Model;

class inbound extends Model
{
    /**
     * @var int
     */
    public $statsTime;

    /**
     * @var int
     */
    public $callsQueued;

    /**
     * @var int
     */
    public $callsAbandonedInRing;

    /**
     * @var int
     */
    public $callsHandled;

    /**
     * @var int
     */
    public $totalCalls;

    /**
     * @var int
     */
    public $callsAbandonedInIVR;

    /**
     * @var int
     */
    public $callsAbandonedInQueue;
    protected $_name = [
        'statsTime'             => 'StatsTime',
        'callsQueued'           => 'CallsQueued',
        'callsAbandonedInRing'  => 'CallsAbandonedInRing',
        'callsHandled'          => 'CallsHandled',
        'totalCalls'            => 'TotalCalls',
        'callsAbandonedInIVR'   => 'CallsAbandonedInIVR',
        'callsAbandonedInQueue' => 'CallsAbandonedInQueue',
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
        if (null !== $this->callsQueued) {
            $res['CallsQueued'] = $this->callsQueued;
        }
        if (null !== $this->callsAbandonedInRing) {
            $res['CallsAbandonedInRing'] = $this->callsAbandonedInRing;
        }
        if (null !== $this->callsHandled) {
            $res['CallsHandled'] = $this->callsHandled;
        }
        if (null !== $this->totalCalls) {
            $res['TotalCalls'] = $this->totalCalls;
        }
        if (null !== $this->callsAbandonedInIVR) {
            $res['CallsAbandonedInIVR'] = $this->callsAbandonedInIVR;
        }
        if (null !== $this->callsAbandonedInQueue) {
            $res['CallsAbandonedInQueue'] = $this->callsAbandonedInQueue;
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
        if (isset($map['StatsTime'])) {
            $model->statsTime = $map['StatsTime'];
        }
        if (isset($map['CallsQueued'])) {
            $model->callsQueued = $map['CallsQueued'];
        }
        if (isset($map['CallsAbandonedInRing'])) {
            $model->callsAbandonedInRing = $map['CallsAbandonedInRing'];
        }
        if (isset($map['CallsHandled'])) {
            $model->callsHandled = $map['CallsHandled'];
        }
        if (isset($map['TotalCalls'])) {
            $model->totalCalls = $map['TotalCalls'];
        }
        if (isset($map['CallsAbandonedInIVR'])) {
            $model->callsAbandonedInIVR = $map['CallsAbandonedInIVR'];
        }
        if (isset($map['CallsAbandonedInQueue'])) {
            $model->callsAbandonedInQueue = $map['CallsAbandonedInQueue'];
        }

        return $model;
    }
}
