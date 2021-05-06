<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenRegionDomainRouteEntriesResponseBody\cenRouteEntries\cenRouteEntry\cenRouteMapRecords;

use AlibabaCloud\Tea\Model;

class cenRouteMapRecord extends Model
{
    /**
     * @var string
     */
    public $routeMapId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'routeMapId' => 'RouteMapId',
        'regionId'   => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->routeMapId) {
            $res['RouteMapId'] = $this->routeMapId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['RouteMapId'])) {
            $model->routeMapId = $map['RouteMapId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
