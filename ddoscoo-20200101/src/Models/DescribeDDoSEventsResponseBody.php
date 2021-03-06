<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDDoSEventsResponseBody\DDoSEvents;
use AlibabaCloud\Tea\Model;

class DescribeDDoSEventsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $total;

    /**
     * @var DDoSEvents[]
     */
    public $DDoSEvents;
    protected $_name = [
        'requestId'  => 'RequestId',
        'total'      => 'Total',
        'DDoSEvents' => 'DDoSEvents',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->DDoSEvents) {
            $res['DDoSEvents'] = [];
            if (null !== $this->DDoSEvents && \is_array($this->DDoSEvents)) {
                $n = 0;
                foreach ($this->DDoSEvents as $item) {
                    $res['DDoSEvents'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
        if (isset($map['DDoSEvents'])) {
            if (!empty($map['DDoSEvents'])) {
                $model->DDoSEvents = [];
                $n                 = 0;
                foreach ($map['DDoSEvents'] as $item) {
                    $model->DDoSEvents[$n++] = null !== $item ? DDoSEvents::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
