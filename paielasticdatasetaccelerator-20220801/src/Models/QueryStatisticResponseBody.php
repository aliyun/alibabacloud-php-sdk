<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIElasticDatasetAccelerator\V20220801\Models;

use AlibabaCloud\Dara\Model;

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
     * @var string
     */
    public $requestId;

    /**
     * @var mixed[]
     */
    public $slotNumEachType;
    protected $_name = [
        'instanceCapacityEachType' => 'InstanceCapacityEachType',
        'instanceNumEachType' => 'InstanceNumEachType',
        'requestId' => 'RequestId',
        'slotNumEachType' => 'SlotNumEachType',
    ];

    public function validate()
    {
        if (\is_array($this->instanceCapacityEachType)) {
            Model::validateArray($this->instanceCapacityEachType);
        }
        if (\is_array($this->instanceNumEachType)) {
            Model::validateArray($this->instanceNumEachType);
        }
        if (\is_array($this->slotNumEachType)) {
            Model::validateArray($this->slotNumEachType);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceCapacityEachType) {
            if (\is_array($this->instanceCapacityEachType)) {
                $res['InstanceCapacityEachType'] = [];
                foreach ($this->instanceCapacityEachType as $key1 => $value1) {
                    $res['InstanceCapacityEachType'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->instanceNumEachType) {
            if (\is_array($this->instanceNumEachType)) {
                $res['InstanceNumEachType'] = [];
                foreach ($this->instanceNumEachType as $key1 => $value1) {
                    $res['InstanceNumEachType'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->slotNumEachType) {
            if (\is_array($this->slotNumEachType)) {
                $res['SlotNumEachType'] = [];
                foreach ($this->slotNumEachType as $key1 => $value1) {
                    $res['SlotNumEachType'][$key1] = $value1;
                }
            }
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
        if (isset($map['InstanceCapacityEachType'])) {
            if (!empty($map['InstanceCapacityEachType'])) {
                $model->instanceCapacityEachType = [];
                foreach ($map['InstanceCapacityEachType'] as $key1 => $value1) {
                    $model->instanceCapacityEachType[$key1] = $value1;
                }
            }
        }

        if (isset($map['InstanceNumEachType'])) {
            if (!empty($map['InstanceNumEachType'])) {
                $model->instanceNumEachType = [];
                foreach ($map['InstanceNumEachType'] as $key1 => $value1) {
                    $model->instanceNumEachType[$key1] = $value1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SlotNumEachType'])) {
            if (!empty($map['SlotNumEachType'])) {
                $model->slotNumEachType = [];
                foreach ($map['SlotNumEachType'] as $key1 => $value1) {
                    $model->slotNumEachType[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
