<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Objectdet\V20191230\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectVehicleIllegalParkingRequest\roadRegions;

class DetectVehicleIllegalParkingRequest extends Model
{
    /**
     * @var string
     */
    public $imageURL;

    /**
     * @var roadRegions[]
     */
    public $roadRegions;
    protected $_name = [
        'imageURL' => 'ImageURL',
        'roadRegions' => 'RoadRegions',
    ];

    public function validate()
    {
        if (\is_array($this->roadRegions)) {
            Model::validateArray($this->roadRegions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->imageURL) {
            $res['ImageURL'] = $this->imageURL;
        }

        if (null !== $this->roadRegions) {
            if (\is_array($this->roadRegions)) {
                $res['RoadRegions'] = [];
                $n1 = 0;
                foreach ($this->roadRegions as $item1) {
                    $res['RoadRegions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ImageURL'])) {
            $model->imageURL = $map['ImageURL'];
        }

        if (isset($map['RoadRegions'])) {
            if (!empty($map['RoadRegions'])) {
                $model->roadRegions = [];
                $n1 = 0;
                foreach ($map['RoadRegions'] as $item1) {
                    $model->roadRegions[$n1] = roadRegions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
