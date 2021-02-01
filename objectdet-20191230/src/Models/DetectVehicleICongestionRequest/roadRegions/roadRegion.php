<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectVehicleICongestionRequest\roadRegions;

use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectVehicleICongestionRequest\roadRegions\roadRegion\point;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->point) {
            $res['Point'] = null !== $this->point ? $this->point->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return roadRegion
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Point'])) {
            $model->point = point::fromMap($map['Point']);
        }

        return $model;
    }
}
