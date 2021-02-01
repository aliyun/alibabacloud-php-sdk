<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Objectdet\V20191230\Models;

use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectVehicleIllegalParkingRequest\roadRegions;
use AlibabaCloud\Tea\Model;

class DetectVehicleIllegalParkingRequest extends Model
{
    /**
     * @description A short description of struct
     *
     * @var string
     */
    public $imageURL;

    /**
     * @var roadRegions[]
     */
    public $roadRegions;
    protected $_name = [
        'imageURL'    => 'ImageURL',
        'roadRegions' => 'RoadRegions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageURL) {
            $res['ImageURL'] = $this->imageURL;
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
     * @return DetectVehicleIllegalParkingRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageURL'])) {
            $model->imageURL = $map['ImageURL'];
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
