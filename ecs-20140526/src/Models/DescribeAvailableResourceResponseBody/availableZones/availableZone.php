<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAvailableResourceResponseBody\availableZones;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone\availableResources;
use AlibabaCloud\Tea\Model;

class availableZone extends Model
{
    /**
     * @description Details about the resources that can be created in the zone.
     *
     * @var availableResources
     */
    public $availableResources;

    /**
     * @description The ID of the region where the instance resides.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The state of resources in the zone. Valid values:
     *
     *   Available
     *   SoldOut
     *
     * @example Available
     *
     * @var string
     */
    public $status;

    /**
     * @description The resource category based on the stock. Valid values:
     *
     *   WithStock: Resources are in sufficient stock.
     *   ClosedWithStock: Resources are insufficient. We recommend that you use other resources that are in sufficient stock.
     *   WithoutStock: Resources are sold out and will be replenished. We recommend that you use other resources that are in sufficient stock.
     *   ClosedWithoutStock: Resources are sold out and will not be replenished. We recommend that you use other resources that are in sufficient stock.
     *
     * @example WithStock
     *
     * @var string
     */
    public $statusCategory;

    /**
     * @description The ID of the zone in which the instance resides.
     *
     * @example cn-hangzhou-e
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'availableResources' => 'AvailableResources',
        'regionId'           => 'RegionId',
        'status'             => 'Status',
        'statusCategory'     => 'StatusCategory',
        'zoneId'             => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->availableResources) {
            $res['AvailableResources'] = null !== $this->availableResources ? $this->availableResources->toMap() : null;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->statusCategory) {
            $res['StatusCategory'] = $this->statusCategory;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return availableZone
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvailableResources'])) {
            $model->availableResources = availableResources::fromMap($map['AvailableResources']);
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StatusCategory'])) {
            $model->statusCategory = $map['StatusCategory'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
