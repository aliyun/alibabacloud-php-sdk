<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventStreamingRequest\runOptions;

use AlibabaCloud\Tea\Model;

class businessOption extends Model
{
    /**
     * @var string
     */
    public $businessMode;

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
        'maxCapacityUnitCount' => 'MaxCapacityUnitCount',
        'minCapacityUnitCount' => 'MinCapacityUnitCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->businessMode) {
            $res['BusinessMode'] = $this->businessMode;
        }
        if (null !== $this->maxCapacityUnitCount) {
            $res['MaxCapacityUnitCount'] = $this->maxCapacityUnitCount;
        }
        if (null !== $this->minCapacityUnitCount) {
            $res['MinCapacityUnitCount'] = $this->minCapacityUnitCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return businessOption
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BusinessMode'])) {
            $model->businessMode = $map['BusinessMode'];
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
