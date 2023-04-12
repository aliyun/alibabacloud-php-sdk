<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\GetDiscoveredResourceCountsGroupByRegionResponseBody;

use AlibabaCloud\Tea\Model;

class discoveredResourceCountsSummary extends Model
{
    /**
     * @description The dimension by which statistics are collected.
     *
     * >  In most cases, the `Region` parameter is returned instead of the GroupName parameter.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The ID of the region by which statistics are collected.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @description The total number of resources in the region.
     *
     * @example 10
     *
     * @var int
     */
    public $resourceCount;
    protected $_name = [
        'groupName'     => 'GroupName',
        'region'        => 'Region',
        'resourceCount' => 'ResourceCount',
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
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->resourceCount) {
            $res['ResourceCount'] = $this->resourceCount;
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
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['ResourceCount'])) {
            $model->resourceCount = $map['ResourceCount'];
        }

        return $model;
    }
}
