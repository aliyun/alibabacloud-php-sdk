<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenChildInstanceRouteEntriesResponseBody\cenRouteEntries\cenRouteEntry\cenRouteMapRecords;

use AlibabaCloud\Dara\Model;

class cenRouteMapRecord extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $routeMapId;
    protected $_name = [
        'regionId' => 'RegionId',
        'routeMapId' => 'RouteMapId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
