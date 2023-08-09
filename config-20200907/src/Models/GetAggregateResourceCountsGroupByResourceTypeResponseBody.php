<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateResourceCountsGroupByResourceTypeResponseBody\discoveredResourceCountsSummary;
use AlibabaCloud\Tea\Model;

class GetAggregateResourceCountsGroupByResourceTypeResponseBody extends Model
{
    /**
     * @description The resource type by which the statistics are collected.
     *
     * @var discoveredResourceCountsSummary[]
     */
    public $discoveredResourceCountsSummary;

    /**
     * @description The request ID.
     *
     * @example 99114B22-1EFF-47DF-B906-1CCE82FF9D60
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'discoveredResourceCountsSummary' => 'DiscoveredResourceCountsSummary',
        'requestId'                       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->discoveredResourceCountsSummary) {
            $res['DiscoveredResourceCountsSummary'] = [];
            if (null !== $this->discoveredResourceCountsSummary && \is_array($this->discoveredResourceCountsSummary)) {
                $n = 0;
                foreach ($this->discoveredResourceCountsSummary as $item) {
                    $res['DiscoveredResourceCountsSummary'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAggregateResourceCountsGroupByResourceTypeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DiscoveredResourceCountsSummary'])) {
            if (!empty($map['DiscoveredResourceCountsSummary'])) {
                $model->discoveredResourceCountsSummary = [];
                $n                                      = 0;
                foreach ($map['DiscoveredResourceCountsSummary'] as $item) {
                    $model->discoveredResourceCountsSummary[$n++] = null !== $item ? discoveredResourceCountsSummary::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
