<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeFreeUserEventCountResponseBody;

use AlibabaCloud\Tea\Model;

class event extends Model
{
    /**
     * @description The number of high-risk events.
     *
     * @example 1
     *
     * @var int
     */
    public $eventHigh;

    /**
     * @description The number of low-risk events.
     *
     * @example 12
     *
     * @var int
     */
    public $eventLow;

    /**
     * @description The number of medium-risk events.
     *
     * @example 3
     *
     * @var int
     */
    public $eventMedium;

    /**
     * @description The total number of security events.
     *
     * @example 16
     *
     * @var int
     */
    public $eventTotal;
    protected $_name = [
        'eventHigh'   => 'EventHigh',
        'eventLow'    => 'EventLow',
        'eventMedium' => 'EventMedium',
        'eventTotal'  => 'EventTotal',
    ];

    public function validate()
    {
    }

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
        if (null !== $this->eventTotal) {
            $res['EventTotal'] = $this->eventTotal;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return event
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
        if (isset($map['EventTotal'])) {
            $model->eventTotal = $map['EventTotal'];
        }

        return $model;
    }
}
