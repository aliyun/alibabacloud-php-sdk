<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenRegionDomainRouteEntriesResponseBody\cenRouteEntries\cenRouteEntry\cenRouteMapRecords;

use AlibabaCloud\Tea\Model;

class cenRouteMapRecord extends Model
{
    /**
     * @description The ID of the region where the routing policy is applied.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the routing policy.
     *
     * @example cenrmap-cz5axczdxb7yfu****
     *
     * @var string
     */
    public $routeMapId;
    protected $_name = [
        'regionId'   => 'RegionId',
        'routeMapId' => 'RouteMapId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->routeMapId) {
            $res['RouteMapId'] = $this->routeMapId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cenRouteMapRecord
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RouteMapId'])) {
            $model->routeMapId = $map['RouteMapId'];
        }

        return $model;
    }
}
