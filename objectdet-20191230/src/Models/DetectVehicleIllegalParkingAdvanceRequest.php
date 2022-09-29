<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Objectdet\V20191230\Models;

use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectVehicleIllegalParkingAdvanceRequest\roadRegions;
use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class DetectVehicleIllegalParkingAdvanceRequest extends Model
{
    /**
     * @var Stream
     */
    public $imageURLObject;

    /**
     * @var roadRegions[]
     */
    public $roadRegions;
    protected $_name = [
        'imageURLObject' => 'ImageURL',
        'roadRegions'    => 'RoadRegions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageURLObject) {
            $res['ImageURL'] = $this->imageURLObject;
        }
        if (null !== $this->roadRegions) {
            $res['RoadRegions'] = [];
            if (null !== $this->roadRegions && \is_array($this->roadRegions)) {
                $n = 0;
                foreach ($this->roadRegions as $item) {
                    $res['RoadRegions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DetectVehicleIllegalParkingAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageURL'])) {
            $model->imageURLObject = $map['ImageURL'];
        }
        if (isset($map['RoadRegions'])) {
            if (!empty($map['RoadRegions'])) {
                $model->roadRegions = [];
                $n                  = 0;
                foreach ($map['RoadRegions'] as $item) {
                    $model->roadRegions[$n++] = null !== $item ? roadRegions::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
