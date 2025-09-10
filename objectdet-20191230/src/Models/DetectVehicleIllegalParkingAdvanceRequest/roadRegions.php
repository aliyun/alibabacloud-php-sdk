<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectVehicleIllegalParkingAdvanceRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectVehicleIllegalParkingAdvanceRequest\roadRegions\roadRegion;

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
        if (\is_array($this->roadRegion)) {
            Model::validateArray($this->roadRegion);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->roadRegion) {
            if (\is_array($this->roadRegion)) {
                $res['RoadRegion'] = [];
                $n1 = 0;
                foreach ($this->roadRegion as $item1) {
                    $res['RoadRegion'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RoadRegion'])) {
            if (!empty($map['RoadRegion'])) {
                $model->roadRegion = [];
                $n1 = 0;
                foreach ($map['RoadRegion'] as $item1) {
                    $model->roadRegion[$n1] = roadRegion::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
