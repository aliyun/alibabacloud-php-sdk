<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeUserEventTrendResponseBody;

use AlibabaCloud\Tea\Model;

class trend extends Model
{
    /**
     * @description The number of high-risk events.
     *
     * @example 9
     *
     * @var int
     */
    public $eventHigh;

    /**
     * @description The number of low-risk events.
     *
     * @example 23
     *
     * @var int
     */
    public $eventLow;

    /**
     * @description The number of medium-risk events.
     *
     * @example 17
     *
     * @var int
     */
    public $eventMedium;

    /**
     * @description The time at which the API was called. The value is a UNIX timestamp displayed in UTC. Unit: seconds.
     * >Notice: The parameter has been deprecated, it is recommended to use the Timestamp parameter.
     *
     * @example 1723435200
     *
     * @var int
     */
    public $timeStamp;

    /**
     * @description The time at which the API was called. The value is a UNIX timestamp displayed in UTC. Unit: seconds.
     *
     * @example 1723435200
     *
     * @var int
     */
    public $timestamp;
    protected $_name = [
        'eventHigh' => 'EventHigh',
        'eventLow' => 'EventLow',
        'eventMedium' => 'EventMedium',
        'timeStamp' => 'TimeStamp',
        'timestamp' => 'Timestamp',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventHigh) {
            $res['EventHigh'] = $this->eventHigh;
        }
        if (null !== $this->eventLow) {
            $res['EventLow'] = $this->eventLow;
        }
        if (null !== $this->eventMedium) {
            $res['EventMedium'] = $this->eventMedium;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return trend
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventHigh'])) {
            $model->eventHigh = $map['EventHigh'];
        }
        if (isset($map['EventLow'])) {
            $model->eventLow = $map['EventLow'];
        }
        if (isset($map['EventMedium'])) {
            $model->eventMedium = $map['EventMedium'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        return $model;
    }
}
