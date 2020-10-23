<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20190108\Models\GetDiscoveredResourceCountsResponse\groupedResourceCounts;

use AlibabaCloud\Tea\Model;

class groupedResourceCountList extends Model
{
    /**
     * @var string
     */
    public $groupName;

    /**
     * @var int
     */
    public $resourceCount;
    protected $_name = [
        'groupName'     => 'GroupName',
        'resourceCount' => 'ResourceCount',
    ];

    public function validate()
    {
        Model::validateRequired('groupName', $this->groupName, true);
        Model::validateRequired('resourceCount', $this->resourceCount, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->resourceCount) {
            $res['ResourceCount'] = $this->resourceCount;
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
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['ResourceCount'])) {
            $model->resourceCount = $map['ResourceCount'];
        }

        return $model;
    }
}
