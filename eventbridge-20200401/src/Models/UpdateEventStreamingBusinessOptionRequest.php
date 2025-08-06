<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\Dara\Model;

class UpdateEventStreamingBusinessOptionRequest extends Model
{
    /**
     * @var string
     */
    public $businessMode;

    /**
     * @var string
     */
    public $eventStreamingName;

    /**
     * @var int
     */
    public $maxCapacityUnitCount;

    /**
     * @var int
     */
    public $minCapacityUnitCount;
    protected $_name = [
        'businessMode' => 'BusinessMode',
        'eventStreamingName' => 'EventStreamingName',
        'maxCapacityUnitCount' => 'MaxCapacityUnitCount',
        'minCapacityUnitCount' => 'MinCapacityUnitCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->businessMode) {
            $res['BusinessMode'] = $this->businessMode;
        }

        if (null !== $this->eventStreamingName) {
            $res['EventStreamingName'] = $this->eventStreamingName;
        }

        if (null !== $this->maxCapacityUnitCount) {
            $res['MaxCapacityUnitCount'] = $this->maxCapacityUnitCount;
        }

        if (null !== $this->minCapacityUnitCount) {
            $res['MinCapacityUnitCount'] = $this->minCapacityUnitCount;
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
        if (isset($map['BusinessMode'])) {
            $model->businessMode = $map['BusinessMode'];
        }

        if (isset($map['EventStreamingName'])) {
            $model->eventStreamingName = $map['EventStreamingName'];
        }

        if (isset($map['MaxCapacityUnitCount'])) {
            $model->maxCapacityUnitCount = $map['MaxCapacityUnitCount'];
        }

        if (isset($map['MinCapacityUnitCount'])) {
            $model->minCapacityUnitCount = $map['MinCapacityUnitCount'];
        }

        return $model;
    }
}
