<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceCenter\V20221201\Models;

use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\GetResourceCountsRequest\filter;
use AlibabaCloud\Tea\Model;

class GetResourceCountsRequest extends Model
{
    /**
     * @description The filter conditions.
     *
     * @var filter[]
     */
    public $filter;

    /**
     * @description The dimension by which resources are queried. Valid values:
     *
     *   ResourceType
     *   Region
     *   ResourceGroupId
     *   TagKey
     *   TagValue
     *
     * @example ResourceType
     *
     * @var string
     */
    public $groupByKey;
    protected $_name = [
        'filter'     => 'Filter',
        'groupByKey' => 'GroupByKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->filter) {
            $res['Filter'] = [];
            if (null !== $this->filter && \is_array($this->filter)) {
                $n = 0;
                foreach ($this->filter as $item) {
                    $res['Filter'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->groupByKey) {
            $res['GroupByKey'] = $this->groupByKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetResourceCountsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Filter'])) {
            if (!empty($map['Filter'])) {
                $model->filter = [];
                $n             = 0;
                foreach ($map['Filter'] as $item) {
                    $model->filter[$n++] = null !== $item ? filter::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['GroupByKey'])) {
            $model->groupByKey = $map['GroupByKey'];
        }

        return $model;
    }
}
