<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectVehicleIllegalParkingResponseBody;

use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectVehicleIllegalParkingResponseBody\data\elements;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectVehicleIllegalParkingResponseBody\data\regionIntersects;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var elements[]
     */
    public $elements;

    /**
     * @var regionIntersects[]
     */
    public $regionIntersects;
    protected $_name = [
        'elements'         => 'Elements',
        'regionIntersects' => 'RegionIntersects',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->elements) {
            $res['Elements'] = [];
            if (null !== $this->elements && \is_array($this->elements)) {
                $n = 0;
                foreach ($this->elements as $item) {
                    $res['Elements'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->regionIntersects) {
            $res['RegionIntersects'] = [];
            if (null !== $this->regionIntersects && \is_array($this->regionIntersects)) {
                $n = 0;
                foreach ($this->regionIntersects as $item) {
                    $res['RegionIntersects'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Elements'])) {
            if (!empty($map['Elements'])) {
                $model->elements = [];
                $n               = 0;
                foreach ($map['Elements'] as $item) {
                    $model->elements[$n++] = null !== $item ? elements::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RegionIntersects'])) {
            if (!empty($map['RegionIntersects'])) {
                $model->regionIntersects = [];
                $n                       = 0;
                foreach ($map['RegionIntersects'] as $item) {
                    $model->regionIntersects[$n++] = null !== $item ? regionIntersects::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
