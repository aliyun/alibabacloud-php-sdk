<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DDoSPro\V20170725\Models\DescribeCcEventsResponseBody;

use AlibabaCloud\Tea\Model;

class eventList extends Model
{
    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var bool
     */
    public $attackFinished;

    /**
     * @var int
     */
    public $maxQps;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var int
     */
    public $blockedCount;
    protected $_name = [
        'endTime'        => 'EndTime',
        'startTime'      => 'StartTime',
        'domain'         => 'Domain',
        'attackFinished' => 'AttackFinished',
        'maxQps'         => 'MaxQps',
        'duration'       => 'Duration',
        'blockedCount'   => 'BlockedCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->attackFinished) {
            $res['AttackFinished'] = $this->attackFinished;
        }
        if (null !== $this->maxQps) {
            $res['MaxQps'] = $this->maxQps;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->blockedCount) {
            $res['BlockedCount'] = $this->blockedCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return eventList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['AttackFinished'])) {
            $model->attackFinished = $map['AttackFinished'];
        }
        if (isset($map['MaxQps'])) {
            $model->maxQps = $map['MaxQps'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['BlockedCount'])) {
            $model->blockedCount = $map['BlockedCount'];
        }

        return $model;
    }
}
