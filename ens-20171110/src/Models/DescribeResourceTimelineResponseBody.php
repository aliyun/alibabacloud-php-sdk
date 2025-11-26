<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeResourceTimelineResponseBody\availableEvents;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeResourceTimelineResponseBody\bizEvents;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeResourceTimelineResponseBody\inventoryEvents;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeResourceTimelineResponseBody\reserveEvents;

class DescribeResourceTimelineResponseBody extends Model
{
    /**
     * @var availableEvents[]
     */
    public $availableEvents;

    /**
     * @var bizEvents[]
     */
    public $bizEvents;

    /**
     * @var string
     */
    public $desc;

    /**
     * @var inventoryEvents[]
     */
    public $inventoryEvents;

    /**
     * @var string
     */
    public $msg;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var reserveEvents[]
     */
    public $reserveEvents;
    protected $_name = [
        'availableEvents' => 'AvailableEvents',
        'bizEvents' => 'BizEvents',
        'desc' => 'Desc',
        'inventoryEvents' => 'InventoryEvents',
        'msg' => 'Msg',
        'requestId' => 'RequestId',
        'reserveEvents' => 'ReserveEvents',
    ];

    public function validate()
    {
        if (\is_array($this->availableEvents)) {
            Model::validateArray($this->availableEvents);
        }
        if (\is_array($this->bizEvents)) {
            Model::validateArray($this->bizEvents);
        }
        if (\is_array($this->inventoryEvents)) {
            Model::validateArray($this->inventoryEvents);
        }
        if (\is_array($this->reserveEvents)) {
            Model::validateArray($this->reserveEvents);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->availableEvents) {
            if (\is_array($this->availableEvents)) {
                $res['AvailableEvents'] = [];
                $n1 = 0;
                foreach ($this->availableEvents as $item1) {
                    $res['AvailableEvents'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->bizEvents) {
            if (\is_array($this->bizEvents)) {
                $res['BizEvents'] = [];
                $n1 = 0;
                foreach ($this->bizEvents as $item1) {
                    $res['BizEvents'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
        }

        if (null !== $this->inventoryEvents) {
            if (\is_array($this->inventoryEvents)) {
                $res['InventoryEvents'] = [];
                $n1 = 0;
                foreach ($this->inventoryEvents as $item1) {
                    $res['InventoryEvents'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->msg) {
            $res['Msg'] = $this->msg;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->reserveEvents) {
            if (\is_array($this->reserveEvents)) {
                $res['ReserveEvents'] = [];
                $n1 = 0;
                foreach ($this->reserveEvents as $item1) {
                    $res['ReserveEvents'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['AvailableEvents'])) {
            if (!empty($map['AvailableEvents'])) {
                $model->availableEvents = [];
                $n1 = 0;
                foreach ($map['AvailableEvents'] as $item1) {
                    $model->availableEvents[$n1] = availableEvents::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['BizEvents'])) {
            if (!empty($map['BizEvents'])) {
                $model->bizEvents = [];
                $n1 = 0;
                foreach ($map['BizEvents'] as $item1) {
                    $model->bizEvents[$n1] = bizEvents::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }

        if (isset($map['InventoryEvents'])) {
            if (!empty($map['InventoryEvents'])) {
                $model->inventoryEvents = [];
                $n1 = 0;
                foreach ($map['InventoryEvents'] as $item1) {
                    $model->inventoryEvents[$n1] = inventoryEvents::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Msg'])) {
            $model->msg = $map['Msg'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ReserveEvents'])) {
            if (!empty($map['ReserveEvents'])) {
                $model->reserveEvents = [];
                $n1 = 0;
                foreach ($map['ReserveEvents'] as $item1) {
                    $model->reserveEvents[$n1] = reserveEvents::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
