<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIElasticDatasetAccelerator\V20220801\Models;

use AlibabaCloud\Tea\Model;

class QueryStatisticResponseBody extends Model
{
    /**
     * @var mixed[]
     */
    public $instanceCapacityEachType;

    /**
     * @var mixed[]
     */
    public $instanceNumEachType;

    /**
     * @example A731A84D-55C9-44F7-99BB-E1CF0CF19197
     *
     * @var string
     */
    public $requestId;

    /**
     * @var mixed[]
     */
    public $slotNumEachType;
    protected $_name = [
        'instanceCapacityEachType' => 'InstanceCapacityEachType',
        'instanceNumEachType'      => 'InstanceNumEachType',
        'requestId'                => 'RequestId',
        'slotNumEachType'          => 'SlotNumEachType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceCapacityEachType) {
            $res['InstanceCapacityEachType'] = $this->instanceCapacityEachType;
        }
        if (null !== $this->instanceNumEachType) {
            $res['InstanceNumEachType'] = $this->instanceNumEachType;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->slotNumEachType) {
            $res['SlotNumEachType'] = $this->slotNumEachType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryStatisticResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceCapacityEachType'])) {
            $model->instanceCapacityEachType = $map['InstanceCapacityEachType'];
        }
        if (isset($map['InstanceNumEachType'])) {
            $model->instanceNumEachType = $map['InstanceNumEachType'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SlotNumEachType'])) {
            $model->slotNumEachType = $map['SlotNumEachType'];
        }

        return $model;
    }
}
