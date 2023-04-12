<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\GetDiscoveredResourceCountsGroupByResourceTypeResponseBody;

use AlibabaCloud\Tea\Model;

class discoveredResourceCountsSummary extends Model
{
    /**
     * @description The resource type by which the statistics are collected.
     *
     * >  We recommend that you use the `ResourceType` parameter.
     * @example ACS::ECS::Instance
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The total number of resources.
     *
     * @example 10
     *
     * @var int
     */
    public $resourceCount;

    /**
     * @description The resource type by which the statistics are collected.
     *
     * @example ACS::ECS::Instance
     *
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'groupName'     => 'GroupName',
        'resourceCount' => 'ResourceCount',
        'resourceType'  => 'ResourceType',
    ];

    public function validate()
    {
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
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return discoveredResourceCountsSummary
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
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}
