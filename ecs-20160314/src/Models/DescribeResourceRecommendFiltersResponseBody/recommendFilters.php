<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeResourceRecommendFiltersResponseBody;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeResourceRecommendFiltersResponseBody\recommendFilters\recommendFilter;
use AlibabaCloud\Tea\Model;

class recommendFilters extends Model
{
    /**
     * @var recommendFilter[]
     */
    public $recommendFilter;
    protected $_name = [
        'recommendFilter' => 'RecommendFilter',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->recommendFilter) {
            $res['RecommendFilter'] = [];
            if (null !== $this->recommendFilter && \is_array($this->recommendFilter)) {
                $n = 0;
                foreach ($this->recommendFilter as $item) {
                    $res['RecommendFilter'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return recommendFilters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RecommendFilter'])) {
            if (!empty($map['RecommendFilter'])) {
                $model->recommendFilter = [];
                $n                      = 0;
                foreach ($map['RecommendFilter'] as $item) {
                    $model->recommendFilter[$n++] = null !== $item ? recommendFilter::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
