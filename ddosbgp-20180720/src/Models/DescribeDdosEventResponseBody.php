<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models;

use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeDdosEventResponseBody\events;
use AlibabaCloud\Tea\Model;

class DescribeDdosEventResponseBody extends Model
{
    /**
     * @description The number of packets at the start of the DDoS attack. Unit: packets per second (PPS).
     *
     * @var events[]
     */
    public $events;

    /**
     * @description The ID of the request.
     *
     * @example F3B6C3F9-6B21-519D-B976-A1E14166F909
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The time when the DDoS attack started. This value is a UNIX timestamp. Unit: seconds.
     *
     * @example 1
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'events'    => 'Events',
        'requestId' => 'RequestId',
        'total'     => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->events) {
            $res['Events'] = [];
            if (null !== $this->events && \is_array($this->events)) {
                $n = 0;
                foreach ($this->events as $item) {
                    $res['Events'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDdosEventResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Events'])) {
            if (!empty($map['Events'])) {
                $model->events = [];
                $n             = 0;
                foreach ($map['Events'] as $item) {
                    $model->events[$n++] = null !== $item ? events::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
