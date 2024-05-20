<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CGCS\V20211111\Models;

use AlibabaCloud\Tea\Model;

class CreateCapacityReservationResponseBody extends Model
{
    /**
     * @example 10000
     *
     * @var int
     */
    public $currMaxAllocatableSessionCapacity;

    /**
     * @example 46329898-489C-4E63-9BA1-C1DA5C5D0986
     *
     * @var string
     */
    public $requestId;

    /**
     * @example b354****
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'currMaxAllocatableSessionCapacity' => 'CurrMaxAllocatableSessionCapacity',
        'requestId'                         => 'RequestId',
        'taskId'                            => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currMaxAllocatableSessionCapacity) {
            $res['CurrMaxAllocatableSessionCapacity'] = $this->currMaxAllocatableSessionCapacity;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCapacityReservationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrMaxAllocatableSessionCapacity'])) {
            $model->currMaxAllocatableSessionCapacity = $map['CurrMaxAllocatableSessionCapacity'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
