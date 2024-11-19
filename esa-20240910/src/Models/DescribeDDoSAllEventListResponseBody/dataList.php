<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\DescribeDDoSAllEventListResponseBody;

use AlibabaCloud\Tea\Model;

class dataList extends Model
{
    /**
     * @example 800
     *
     * @var int
     */
    public $bps;

    /**
     * @var string
     */
    public $coverage;

    /**
     * @example 50
     *
     * @var int
     */
    public $cps;

    /**
     * @example 2023-02-12T15:59:59Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @example web-cc_1
     *
     * @var string
     */
    public $eventId;

    /**
     * @var string
     */
    public $eventResult;

    /**
     * @example web-cc
     *
     * @var string
     */
    public $eventType;

    /**
     * @example 12000
     *
     * @var int
     */
    public $pps;

    /**
     * @example 7692
     *
     * @var int
     */
    public $qps;

    /**
     * @example 2023-02-12T15:00:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @example example.com
     *
     * @var string
     */
    public $target;

    /**
     * @example 000000000155****
     *
     * @var string
     */
    public $targetId;
    protected $_name = [
        'bps'         => 'Bps',
        'coverage'    => 'Coverage',
        'cps'         => 'Cps',
        'endTime'     => 'EndTime',
        'eventId'     => 'EventId',
        'eventResult' => 'EventResult',
        'eventType'   => 'EventType',
        'pps'         => 'Pps',
        'qps'         => 'Qps',
        'startTime'   => 'StartTime',
        'target'      => 'Target',
        'targetId'    => 'TargetId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bps) {
            $res['Bps'] = $this->bps;
        }
        if (null !== $this->coverage) {
            $res['Coverage'] = $this->coverage;
        }
        if (null !== $this->cps) {
            $res['Cps'] = $this->cps;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }
        if (null !== $this->eventResult) {
            $res['EventResult'] = $this->eventResult;
        }
        if (null !== $this->eventType) {
            $res['EventType'] = $this->eventType;
        }
        if (null !== $this->pps) {
            $res['Pps'] = $this->pps;
        }
        if (null !== $this->qps) {
            $res['Qps'] = $this->qps;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->target) {
            $res['Target'] = $this->target;
        }
        if (null !== $this->targetId) {
            $res['TargetId'] = $this->targetId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bps'])) {
            $model->bps = $map['Bps'];
        }
        if (isset($map['Coverage'])) {
            $model->coverage = $map['Coverage'];
        }
        if (isset($map['Cps'])) {
            $model->cps = $map['Cps'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }
        if (isset($map['EventResult'])) {
            $model->eventResult = $map['EventResult'];
        }
        if (isset($map['EventType'])) {
            $model->eventType = $map['EventType'];
        }
        if (isset($map['Pps'])) {
            $model->pps = $map['Pps'];
        }
        if (isset($map['Qps'])) {
            $model->qps = $map['Qps'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Target'])) {
            $model->target = $map['Target'];
        }
        if (isset($map['TargetId'])) {
            $model->targetId = $map['TargetId'];
        }

        return $model;
    }
}
