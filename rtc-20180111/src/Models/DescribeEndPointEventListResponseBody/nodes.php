<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeEndPointEventListResponseBody;

use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeEndPointEventListResponseBody\nodes\eventDataItems;
use AlibabaCloud\Tea\Model;

class nodes extends Model
{
    /**
     * @var eventDataItems[]
     */
    public $eventDataItems;

    /**
     * @example testuserid
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'eventDataItems' => 'EventDataItems',
        'userId'         => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventDataItems) {
            $res['EventDataItems'] = [];
            if (null !== $this->eventDataItems && \is_array($this->eventDataItems)) {
                $n = 0;
                foreach ($this->eventDataItems as $item) {
                    $res['EventDataItems'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nodes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventDataItems'])) {
            if (!empty($map['EventDataItems'])) {
                $model->eventDataItems = [];
                $n                     = 0;
                foreach ($map['EventDataItems'] as $item) {
                    $model->eventDataItems[$n++] = null !== $item ? eventDataItems::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
