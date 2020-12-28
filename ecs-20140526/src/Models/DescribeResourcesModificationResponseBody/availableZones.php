<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeResourcesModificationResponseBody;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeResourcesModificationResponseBody\availableZones\availableResources;
use AlibabaCloud\Tea\Model;

class availableZones extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var string
     */
    public $statusCategory;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var availableResources[]
     */
    public $availableResources;
    protected $_name = [
        'status'             => 'Status',
        'zoneId'             => 'ZoneId',
        'statusCategory'     => 'StatusCategory',
        'regionId'           => 'RegionId',
        'availableResources' => 'AvailableResources',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->statusCategory) {
            $res['StatusCategory'] = $this->statusCategory;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->availableResources) {
            $res['AvailableResources'] = [];
            if (null !== $this->availableResources && \is_array($this->availableResources)) {
                $n = 0;
                foreach ($this->availableResources as $item) {
                    $res['AvailableResources'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return availableZones
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['StatusCategory'])) {
            $model->statusCategory = $map['StatusCategory'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['AvailableResources'])) {
            if (!empty($map['AvailableResources'])) {
                $model->availableResources = [];
                $n                         = 0;
                foreach ($map['AvailableResources'] as $item) {
                    $model->availableResources[$n++] = null !== $item ? availableResources::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
