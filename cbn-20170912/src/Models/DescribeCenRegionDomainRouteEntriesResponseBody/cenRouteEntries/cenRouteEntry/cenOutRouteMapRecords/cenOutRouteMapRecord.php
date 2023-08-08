<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenRegionDomainRouteEntriesResponseBody\cenRouteEntries\cenRouteEntry\cenOutRouteMapRecords;

use AlibabaCloud\Tea\Model;

class cenOutRouteMapRecord extends Model
{
    /**
     * @description 312501
     *
     * @example ccn-cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @description DescribeCenRegionDomainRouteEntries
     *
     * @example cenrmap-dbarzidzp7ek4k****
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
     * @return cenOutRouteMapRecord
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
