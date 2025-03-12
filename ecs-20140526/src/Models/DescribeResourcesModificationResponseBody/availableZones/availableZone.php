<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeResourcesModificationResponseBody\availableZones;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeResourcesModificationResponseBody\availableZones\availableZone\availableResources;
use AlibabaCloud\Tea\Model;

class availableZone extends Model
{
    /**
     * @description The resources that are available in the zone.
     *
     * @var availableResources
     */
    public $availableResources;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The state of the resource. Valid values:
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
     * @description The category of the resource based on stock status. Valid values:
     *
     *   WithStock: resources that are in sufficient stock
     *   ClosedWithStock: resources that are in insufficient stock
     *   WithoutStock: resources that are out of stock
     *
     * @example WithStock
     *
     * @var string
     */
    public $statusCategory;

    /**
     * @description The zone ID.
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
