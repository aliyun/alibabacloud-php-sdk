<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20190108\Models;

use AlibabaCloud\SDK\Config\V20190108\Models\GetDiscoveredResourceCountsResponseBody\groupedResourceCounts;
use AlibabaCloud\Tea\Model;

class GetDiscoveredResourceCountsResponseBody extends Model
{
    /**
     * @var groupedResourceCounts
     */
    public $groupedResourceCounts;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'groupedResourceCounts' => 'GroupedResourceCounts',
        'requestId'             => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupedResourceCounts) {
            $res['GroupedResourceCounts'] = null !== $this->groupedResourceCounts ? $this->groupedResourceCounts->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDiscoveredResourceCountsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupedResourceCounts'])) {
            $model->groupedResourceCounts = groupedResourceCounts::fromMap($map['GroupedResourceCounts']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
