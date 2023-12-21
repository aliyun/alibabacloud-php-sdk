<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListABMetricsResponseBody\ABMetrics;
use AlibabaCloud\Tea\Model;

class ListABMetricsResponseBody extends Model
{
    /**
     * @var ABMetrics[]
     */
    public $ABMetrics;

    /**
     * @example F7AC05FF-EDE7-5C2B-B9AE-33D6DF4178BA
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 10
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'ABMetrics'  => 'ABMetrics',
        'requestId'  => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ABMetrics) {
            $res['ABMetrics'] = [];
            if (null !== $this->ABMetrics && \is_array($this->ABMetrics)) {
                $n = 0;
                foreach ($this->ABMetrics as $item) {
                    $res['ABMetrics'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListABMetricsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ABMetrics'])) {
            if (!empty($map['ABMetrics'])) {
                $model->ABMetrics = [];
                $n                = 0;
                foreach ($map['ABMetrics'] as $item) {
                    $model->ABMetrics[$n++] = null !== $item ? ABMetrics::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
