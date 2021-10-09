<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20190108\Models\GetDiscoveredResourceCountsResponseBody\groupedResourceCounts;

use AlibabaCloud\Tea\Model;

class groupedResourceCountList extends Model
{
    /**
     * @var int
     */
    public $resourceCount;

    /**
     * @var string
     */
    public $groupName;
    protected $_name = [
        'resourceCount' => 'ResourceCount',
        'groupName'     => 'GroupName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceCount) {
            $res['ResourceCount'] = $this->resourceCount;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return groupedResourceCountList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceCount'])) {
            $model->resourceCount = $map['ResourceCount'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        return $model;
    }
}
