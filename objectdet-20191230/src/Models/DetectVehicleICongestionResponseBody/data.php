<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectVehicleICongestionResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectVehicleICongestionResponseBody\data\elements;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectVehicleICongestionResponseBody\data\regionIntersectFeatures;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectVehicleICongestionResponseBody\data\regionIntersectMatched;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectVehicleICongestionResponseBody\data\regionIntersects;

class data extends Model
{
    /**
     * @var elements[]
     */
    public $elements;

    /**
     * @var regionIntersectFeatures[]
     */
    public $regionIntersectFeatures;

    /**
     * @var regionIntersectMatched[]
     */
    public $regionIntersectMatched;

    /**
     * @var regionIntersects[]
     */
    public $regionIntersects;
    protected $_name = [
        'elements' => 'Elements',
        'regionIntersectFeatures' => 'RegionIntersectFeatures',
        'regionIntersectMatched' => 'RegionIntersectMatched',
        'regionIntersects' => 'RegionIntersects',
    ];

    public function validate()
    {
        if (\is_array($this->elements)) {
            Model::validateArray($this->elements);
        }
        if (\is_array($this->regionIntersectFeatures)) {
            Model::validateArray($this->regionIntersectFeatures);
        }
        if (\is_array($this->regionIntersectMatched)) {
            Model::validateArray($this->regionIntersectMatched);
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

        if (null !== $this->regionIntersectFeatures) {
            if (\is_array($this->regionIntersectFeatures)) {
                $res['RegionIntersectFeatures'] = [];
                $n1 = 0;
                foreach ($this->regionIntersectFeatures as $item1) {
                    $res['RegionIntersectFeatures'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->regionIntersectMatched) {
            if (\is_array($this->regionIntersectMatched)) {
                $res['RegionIntersectMatched'] = [];
                $n1 = 0;
                foreach ($this->regionIntersectMatched as $item1) {
                    $res['RegionIntersectMatched'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['RegionIntersectFeatures'])) {
            if (!empty($map['RegionIntersectFeatures'])) {
                $model->regionIntersectFeatures = [];
                $n1 = 0;
                foreach ($map['RegionIntersectFeatures'] as $item1) {
                    $model->regionIntersectFeatures[$n1] = regionIntersectFeatures::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RegionIntersectMatched'])) {
            if (!empty($map['RegionIntersectMatched'])) {
                $model->regionIntersectMatched = [];
                $n1 = 0;
                foreach ($map['RegionIntersectMatched'] as $item1) {
                    $model->regionIntersectMatched[$n1] = regionIntersectMatched::fromMap($item1);
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
