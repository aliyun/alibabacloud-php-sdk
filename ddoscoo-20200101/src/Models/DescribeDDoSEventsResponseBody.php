<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDDoSEventsResponseBody\DDoSEvents;
use AlibabaCloud\Tea\Model;

class DescribeDDoSEventsResponseBody extends Model
{
    /**
     * @description The DDoS attack events.
     *
     * @var DDoSEvents[]
     */
    public $DDoSEvents;

    /**
     * @description The ID of the request.
     *
     * @example 0CA72AF5-1795-4350-8C77-50A448A2F334
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of returned attack events.
     *
     * @example 1
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'DDoSEvents' => 'DDoSEvents',
        'requestId'  => 'RequestId',
        'total'      => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DDoSEvents) {
            $res['DDoSEvents'] = [];
            if (null !== $this->DDoSEvents && \is_array($this->DDoSEvents)) {
                $n = 0;
                foreach ($this->DDoSEvents as $item) {
                    $res['DDoSEvents'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeDDoSEventsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DDoSEvents'])) {
            if (!empty($map['DDoSEvents'])) {
                $model->DDoSEvents = [];
                $n                 = 0;
                foreach ($map['DDoSEvents'] as $item) {
                    $model->DDoSEvents[$n++] = null !== $item ? DDoSEvents::fromMap($item) : $item;
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
