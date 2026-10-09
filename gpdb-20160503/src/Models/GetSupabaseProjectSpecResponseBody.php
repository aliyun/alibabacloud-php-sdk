<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\GetSupabaseProjectSpecResponseBody\items;

class GetSupabaseProjectSpecResponseBody extends Model
{
    /**
     * @var items[]
     */
    public $items;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string[]
     */
    public $zoneIds;
    protected $_name = [
        'items' => 'Items',
        'requestId' => 'RequestId',
        'zoneIds' => 'ZoneIds',
    ];

    public function validate()
    {
        if (\is_array($this->items)) {
            Model::validateArray($this->items);
        }
        if (\is_array($this->zoneIds)) {
            Model::validateArray($this->zoneIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->items) {
            if (\is_array($this->items)) {
                $res['Items'] = [];
                $n1 = 0;
                foreach ($this->items as $item1) {
                    $res['Items'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->zoneIds) {
            if (\is_array($this->zoneIds)) {
                $res['ZoneIds'] = [];
                $n1 = 0;
                foreach ($this->zoneIds as $item1) {
                    $res['ZoneIds'][$n1] = $item1;
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
        if (isset($map['Items'])) {
            if (!empty($map['Items'])) {
                $model->items = [];
                $n1 = 0;
                foreach ($map['Items'] as $item1) {
                    $model->items[$n1] = items::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ZoneIds'])) {
            if (!empty($map['ZoneIds'])) {
                $model->zoneIds = [];
                $n1 = 0;
                foreach ($map['ZoneIds'] as $item1) {
                    $model->zoneIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
