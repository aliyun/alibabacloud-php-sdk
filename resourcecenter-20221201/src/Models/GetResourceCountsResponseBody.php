<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceCenter\V20221201\Models;

use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\GetResourceCountsResponseBody\filters;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\GetResourceCountsResponseBody\resourceCounts;
use AlibabaCloud\Tea\Model;

class GetResourceCountsResponseBody extends Model
{
    /**
     * @description The filter conditions.
     *
     * @var filters[]
     */
    public $filters;

    /**
     * @description The dimension by which resources are queried.
     *
     * @example ResourceType
     *
     * @var string
     */
    public $groupByKey;

    /**
     * @description The request ID.
     *
     * @example 6D98D9B0-318D-56A4-910C-93B5F945AF2B
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The numbers of resources.
     *
     * @var resourceCounts[]
     */
    public $resourceCounts;
    protected $_name = [
        'filters'        => 'Filters',
        'groupByKey'     => 'GroupByKey',
        'requestId'      => 'RequestId',
        'resourceCounts' => 'ResourceCounts',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->filters) {
            $res['Filters'] = [];
            if (null !== $this->filters && \is_array($this->filters)) {
                $n = 0;
                foreach ($this->filters as $item) {
                    $res['Filters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->groupByKey) {
            $res['GroupByKey'] = $this->groupByKey;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceCounts) {
            $res['ResourceCounts'] = [];
            if (null !== $this->resourceCounts && \is_array($this->resourceCounts)) {
                $n = 0;
                foreach ($this->resourceCounts as $item) {
                    $res['ResourceCounts'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetResourceCountsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Filters'])) {
            if (!empty($map['Filters'])) {
                $model->filters = [];
                $n              = 0;
                foreach ($map['Filters'] as $item) {
                    $model->filters[$n++] = null !== $item ? filters::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['GroupByKey'])) {
            $model->groupByKey = $map['GroupByKey'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceCounts'])) {
            if (!empty($map['ResourceCounts'])) {
                $model->resourceCounts = [];
                $n                     = 0;
                foreach ($map['ResourceCounts'] as $item) {
                    $model->resourceCounts[$n++] = null !== $item ? resourceCounts::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
