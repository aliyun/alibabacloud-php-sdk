<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectVehicleICongestionRequest;

use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectVehicleICongestionRequest\roadRegions\roadRegion;
use AlibabaCloud\Tea\Model;

class roadRegions extends Model
{
    /**
     * @var roadRegion[]
     */
    public $roadRegion;
    protected $_name = [
        'roadRegion' => 'RoadRegion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->roadRegion) {
            $res['RoadRegion'] = [];
            if (null !== $this->roadRegion && \is_array($this->roadRegion)) {
                $n = 0;
                foreach ($this->roadRegion as $item) {
                    $res['RoadRegion'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return roadRegions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RoadRegion'])) {
            if (!empty($map['RoadRegion'])) {
                $model->roadRegion = [];
                $n                 = 0;
                foreach ($map['RoadRegion'] as $item) {
                    $model->roadRegion[$n++] = null !== $item ? roadRegion::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
