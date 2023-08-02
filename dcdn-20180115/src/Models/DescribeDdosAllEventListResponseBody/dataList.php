<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDdosAllEventListResponseBody;

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
     * @example 50
     *
     * @var int
     */
    public $cps;

    /**
     * @example 2022-11-26T15:59:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @example 28069
     *
     * @var string
     */
    public $eventId;

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
     * @example 2022-10-09T10:03:31Z
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
    protected $_name = [
        'bps'       => 'Bps',
        'cps'       => 'Cps',
        'endTime'   => 'EndTime',
        'eventId'   => 'EventId',
        'eventType' => 'EventType',
        'pps'       => 'Pps',
        'qps'       => 'Qps',
        'startTime' => 'StartTime',
        'target'    => 'Target',
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
        if (null !== $this->cps) {
            $res['Cps'] = $this->cps;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
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
        if (isset($map['Cps'])) {
            $model->cps = $map['Cps'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
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

        return $model;
    }
}
