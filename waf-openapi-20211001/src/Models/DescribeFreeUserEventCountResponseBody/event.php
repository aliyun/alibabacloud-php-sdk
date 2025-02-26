<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeFreeUserEventCountResponseBody;

use AlibabaCloud\Dara\Model;

class event extends Model
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
    public $eventTotal;
    protected $_name = [
        'eventHigh'   => 'EventHigh',
        'eventLow'    => 'EventLow',
        'eventMedium' => 'EventMedium',
        'eventTotal'  => 'EventTotal',
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

        if (null !== $this->eventTotal) {
            $res['EventTotal'] = $this->eventTotal;
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

        if (isset($map['EventTotal'])) {
            $model->eventTotal = $map['EventTotal'];
        }

        return $model;
    }
}
