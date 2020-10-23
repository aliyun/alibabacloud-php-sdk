<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20190108\Models;

use AlibabaCloud\SDK\Config\V20190108\Models\GetDiscoveredResourceCountsResponse\groupedResourceCounts;
use AlibabaCloud\Tea\Model;

class GetDiscoveredResourceCountsResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var groupedResourceCounts
     */
    public $groupedResourceCounts;
    protected $_name = [
        'requestId'             => 'RequestId',
        'groupedResourceCounts' => 'GroupedResourceCounts',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('groupedResourceCounts', $this->groupedResourceCounts, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->groupedResourceCounts) {
            $res['GroupedResourceCounts'] = null !== $this->groupedResourceCounts ? $this->groupedResourceCounts->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDiscoveredResourceCountsResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['GroupedResourceCounts'])) {
            $model->groupedResourceCounts = groupedResourceCounts::fromMap($map['GroupedResourceCounts']);
        }

        return $model;
    }
}
