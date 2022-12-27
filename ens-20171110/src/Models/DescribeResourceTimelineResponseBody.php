<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeResourceTimelineResponseBody\availableEvents;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeResourceTimelineResponseBody\bizEvents;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeResourceTimelineResponseBody\inventoryEvents;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeResourceTimelineResponseBody\reserveEvents;
use AlibabaCloud\Tea\Model;

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
        'bizEvents'       => 'BizEvents',
        'desc'            => 'Desc',
        'inventoryEvents' => 'InventoryEvents',
        'msg'             => 'Msg',
        'requestId'       => 'RequestId',
        'reserveEvents'   => 'ReserveEvents',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->availableEvents) {
            $res['AvailableEvents'] = [];
            if (null !== $this->availableEvents && \is_array($this->availableEvents)) {
                $n = 0;
                foreach ($this->availableEvents as $item) {
                    $res['AvailableEvents'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->bizEvents) {
            $res['BizEvents'] = [];
            if (null !== $this->bizEvents && \is_array($this->bizEvents)) {
                $n = 0;
                foreach ($this->bizEvents as $item) {
                    $res['BizEvents'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
        }
        if (null !== $this->inventoryEvents) {
            $res['InventoryEvents'] = [];
            if (null !== $this->inventoryEvents && \is_array($this->inventoryEvents)) {
                $n = 0;
                foreach ($this->inventoryEvents as $item) {
                    $res['InventoryEvents'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['ReserveEvents'] = [];
            if (null !== $this->reserveEvents && \is_array($this->reserveEvents)) {
                $n = 0;
                foreach ($this->reserveEvents as $item) {
                    $res['ReserveEvents'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeResourceTimelineResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvailableEvents'])) {
            if (!empty($map['AvailableEvents'])) {
                $model->availableEvents = [];
                $n                      = 0;
                foreach ($map['AvailableEvents'] as $item) {
                    $model->availableEvents[$n++] = null !== $item ? availableEvents::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['BizEvents'])) {
            if (!empty($map['BizEvents'])) {
                $model->bizEvents = [];
                $n                = 0;
                foreach ($map['BizEvents'] as $item) {
                    $model->bizEvents[$n++] = null !== $item ? bizEvents::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }
        if (isset($map['InventoryEvents'])) {
            if (!empty($map['InventoryEvents'])) {
                $model->inventoryEvents = [];
                $n                      = 0;
                foreach ($map['InventoryEvents'] as $item) {
                    $model->inventoryEvents[$n++] = null !== $item ? inventoryEvents::fromMap($item) : $item;
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
                $n                    = 0;
                foreach ($map['ReserveEvents'] as $item) {
                    $model->reserveEvents[$n++] = null !== $item ? reserveEvents::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
