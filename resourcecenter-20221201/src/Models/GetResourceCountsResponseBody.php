<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceCenter\V20221201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\GetResourceCountsResponseBody\filters;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\GetResourceCountsResponseBody\resourceCounts;

class GetResourceCountsResponseBody extends Model
{
    /**
     * @var filters[]
     */
    public $filters;

    /**
     * @var string
     */
    public $groupByKey;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var resourceCounts[]
     */
    public $resourceCounts;
    protected $_name = [
        'filters' => 'Filters',
        'groupByKey' => 'GroupByKey',
        'requestId' => 'RequestId',
        'resourceCounts' => 'ResourceCounts',
    ];

    public function validate()
    {
        if (\is_array($this->filters)) {
            Model::validateArray($this->filters);
        }
        if (\is_array($this->resourceCounts)) {
            Model::validateArray($this->resourceCounts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->filters) {
            if (\is_array($this->filters)) {
                $res['Filters'] = [];
                $n1 = 0;
                foreach ($this->filters as $item1) {
                    $res['Filters'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
            if (\is_array($this->resourceCounts)) {
                $res['ResourceCounts'] = [];
                $n1 = 0;
                foreach ($this->resourceCounts as $item1) {
                    $res['ResourceCounts'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Filters'])) {
            if (!empty($map['Filters'])) {
                $model->filters = [];
                $n1 = 0;
                foreach ($map['Filters'] as $item1) {
                    $model->filters[$n1] = filters::fromMap($item1);
                    ++$n1;
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
                $n1 = 0;
                foreach ($map['ResourceCounts'] as $item1) {
                    $model->resourceCounts[$n1] = resourceCounts::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
