<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeUserEventTrendResponseBody;

use AlibabaCloud\Dara\Model;

class trend extends Model
{
    /**
     * @var int
     */
    public $eventHigh;
    /**
     * @var int
     */
    public $eventLow;
    /**
     * @var int
     */
    public $eventMedium;
    /**
     * @var int
     */
    public $timeStamp;
    /**
     * @var int
     */
    public $timestamp;
    protected $_name = [
        'eventHigh'   => 'EventHigh',
        'eventLow'    => 'EventLow',
        'eventMedium' => 'EventMedium',
        'timeStamp'   => 'TimeStamp',
        'timestamp'   => 'Timestamp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
