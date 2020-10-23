<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20190108\Models\GetDiscoveredResourceCountsResponse;

use AlibabaCloud\SDK\Config\V20190108\Models\GetDiscoveredResourceCountsResponse\groupedResourceCounts\groupedResourceCountList;
use AlibabaCloud\Tea\Model;

class groupedResourceCounts extends Model
{
    /**
     * @var string
     */
    public $groupByKey;

    /**
     * @var groupedResourceCountList[]
     */
    public $groupedResourceCountList;
    protected $_name = [
        'groupByKey'               => 'GroupByKey',
        'groupedResourceCountList' => 'GroupedResourceCountList',
    ];

    public function validate()
    {
        Model::validateRequired('groupByKey', $this->groupByKey, true);
        Model::validateRequired('groupedResourceCountList', $this->groupedResourceCountList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupByKey) {
            $res['GroupByKey'] = $this->groupByKey;
        }
        if (null !== $this->groupedResourceCountList) {
            $res['GroupedResourceCountList'] = [];
            if (null !== $this->groupedResourceCountList && \is_array($this->groupedResourceCountList)) {
                $n = 0;
                foreach ($this->groupedResourceCountList as $item) {
                    $res['GroupedResourceCountList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['GroupByKey'])) {
            $model->groupByKey = $map['GroupByKey'];
        }
        if (isset($map['GroupedResourceCountList'])) {
            if (!empty($map['GroupedResourceCountList'])) {
                $model->groupedResourceCountList = [];
                $n                               = 0;
                foreach ($map['GroupedResourceCountList'] as $item) {
                    $model->groupedResourceCountList[$n++] = null !== $item ? groupedResourceCountList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
