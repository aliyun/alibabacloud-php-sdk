<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectVehicleIllegalParkingRequest\roadRegions;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectVehicleIllegalParkingRequest\roadRegions\roadRegion\point;

class roadRegion extends Model
{
    /**
     * @var point
     */
    public $point;
    protected $_name = [
        'point' => 'Point',
    ];

    public function validate()
    {
        if (null !== $this->point) {
            $this->point->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->point) {
            $res['Point'] = null !== $this->point ? $this->point->toArray($noStream) : $this->point;
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
        if (isset($map['Point'])) {
            $model->point = point::fromMap($map['Point']);
        }

        return $model;
    }
}
