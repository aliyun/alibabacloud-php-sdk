<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListAppInstanceTypeResponseBody\appInstanceTypeModels;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListAppInstanceTypeResponseBody\appInstanceTypeModels\inventoryInfo\zoneInventoryInfo;

class inventoryInfo extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var zoneInventoryInfo[]
     */
    public $zoneInventoryInfo;
    protected $_name = [
        'regionId' => 'RegionId',
        'status' => 'Status',
        'zoneInventoryInfo' => 'ZoneInventoryInfo',
    ];

    public function validate()
    {
        if (\is_array($this->zoneInventoryInfo)) {
            Model::validateArray($this->zoneInventoryInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->zoneInventoryInfo) {
            if (\is_array($this->zoneInventoryInfo)) {
                $res['ZoneInventoryInfo'] = [];
                $n1 = 0;
                foreach ($this->zoneInventoryInfo as $item1) {
                    $res['ZoneInventoryInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['ZoneInventoryInfo'])) {
            if (!empty($map['ZoneInventoryInfo'])) {
                $model->zoneInventoryInfo = [];
                $n1 = 0;
                foreach ($map['ZoneInventoryInfo'] as $item1) {
                    $model->zoneInventoryInfo[$n1] = zoneInventoryInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
