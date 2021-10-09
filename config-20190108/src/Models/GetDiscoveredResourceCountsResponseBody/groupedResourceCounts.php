<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20190108\Models\GetDiscoveredResourceCountsResponseBody;

use AlibabaCloud\SDK\Config\V20190108\Models\GetDiscoveredResourceCountsResponseBody\groupedResourceCounts\groupedResourceCountList;
use AlibabaCloud\Tea\Model;

class groupedResourceCounts extends Model
{
    /**
     * @var groupedResourceCountList[]
     */
    public $groupedResourceCountList;

    /**
     * @var string
     */
    public $groupByKey;
    protected $_name = [
        'groupedResourceCountList' => 'GroupedResourceCountList',
        'groupByKey'               => 'GroupByKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupedResourceCountList) {
            $res['GroupedResourceCountList'] = [];
            if (null !== $this->groupedResourceCountList && \is_array($this->groupedResourceCountList)) {
                $n = 0;
                foreach ($this->groupedResourceCountList as $item) {
                    $res['GroupedResourceCountList'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return groupedResourceCounts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupedResourceCountList'])) {
            if (!empty($map['GroupedResourceCountList'])) {
                $model->groupedResourceCountList = [];
                $n                               = 0;
                foreach ($map['GroupedResourceCountList'] as $item) {
                    $model->groupedResourceCountList[$n++] = null !== $item ? groupedResourceCountList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['GroupByKey'])) {
            $model->groupByKey = $map['GroupByKey'];
        }

        return $model;
    }
}
