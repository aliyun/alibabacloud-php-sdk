<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectVehicleIllegalParkingResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectVehicleIllegalParkingResponseBody\data\elements;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectVehicleIllegalParkingResponseBody\data\regionIntersects;

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
        'elements' => 'Elements',
        'regionIntersects' => 'RegionIntersects',
    ];

    public function validate()
    {
        if (\is_array($this->elements)) {
            Model::validateArray($this->elements);
        }
        if (\is_array($this->regionIntersects)) {
            Model::validateArray($this->regionIntersects);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->elements) {
            if (\is_array($this->elements)) {
                $res['Elements'] = [];
                $n1 = 0;
                foreach ($this->elements as $item1) {
                    $res['Elements'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->regionIntersects) {
            if (\is_array($this->regionIntersects)) {
                $res['RegionIntersects'] = [];
                $n1 = 0;
                foreach ($this->regionIntersects as $item1) {
                    $res['RegionIntersects'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Elements'])) {
            if (!empty($map['Elements'])) {
                $model->elements = [];
                $n1 = 0;
                foreach ($map['Elements'] as $item1) {
                    $model->elements[$n1] = elements::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RegionIntersects'])) {
            if (!empty($map['RegionIntersects'])) {
                $model->regionIntersects = [];
                $n1 = 0;
                foreach ($map['RegionIntersects'] as $item1) {
                    $model->regionIntersects[$n1] = regionIntersects::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
