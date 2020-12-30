<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeDomainAttackEventsResponseBody;

use AlibabaCloud\Tea\Model;

class events extends Model
{
    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var int
     */
    public $maxQps;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var bool
     */
    public $finished;

    /**
     * @var int
     */
    public $blockCount;
    protected $_name = [
        'endTime'    => 'EndTime',
        'startTime'  => 'StartTime',
        'maxQps'     => 'MaxQps',
        'duration'   => 'Duration',
        'finished'   => 'Finished',
        'blockCount' => 'BlockCount',
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
        if (null !== $this->maxQps) {
            $res['MaxQps'] = $this->maxQps;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->finished) {
            $res['Finished'] = $this->finished;
        }
        if (null !== $this->blockCount) {
            $res['BlockCount'] = $this->blockCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return events
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
        if (isset($map['MaxQps'])) {
            $model->maxQps = $map['MaxQps'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['Finished'])) {
            $model->finished = $map['Finished'];
        }
        if (isset($map['BlockCount'])) {
            $model->blockCount = $map['BlockCount'];
        }

        return $model;
    }
}
